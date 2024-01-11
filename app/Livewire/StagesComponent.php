<?php

namespace App\Livewire;

use App\Models\Stages;
use App\Models\Subscriber;
use App\Models\Videos;
use App\Notifications\NewIntershipNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class StagesComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public $titre, $description, $heure, $status, $date, $id;
    protected function rules(){
        return [
            'titre' =>'required',
            'description' =>'',
            'date' =>'',
            'heure' =>'',
            'status' =>'required',
        ];
    }

    
    public function createVideo(){
        $validateData = $this->validate();
        $stage = Stages::create([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
            'date'=>$validateData['date'],
            'heure'=>$validateData['heure'],
        ]);
        $subscribers = Subscriber::orderBy('id')->get()->pluck('email');

        Notification::route('mail', $subscribers) //Sending mail to subscribers
        ->notify((new NewIntershipNotification($stage))->delay(now()->addMinutes(1))); //With new post


        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Offre de stage enregistrée avec succès!'
        ]);
        $this->reset(); 
        $this->resetValidation();

    }
    public function editVideo(int $id){

        $this->resetValidation();

        $video = Stages::find($id);
        $this->id = $video->id;
        $this->titre = $video->titre;
        $this->description = $video->description;
        $this->date = $video->date;
        $this->heure = $video->heure;
        $this->status = $video->status;
    }
    
    public function updateVideo(){
        $validateData = $this->validate([
            'titre' =>'required',
            'description' =>'',
            'date' =>'',
            'heure' =>'',
            'status' =>'required',
        ]);

        $book = Stages::whereId($this->id)->first();

        $book->update([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'date'=>$validateData['date'],
            'heure'=>$validateData['heure'],
            'status'=>$validateData['status'],
        ]);
        session()->flash('success', 'Offre de stage modifiée avec succès');
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Offre de stage modifiée avec succès!'
        ]);
        $this->resetValidation();

    }

    public function deleteVideo(int $id){
        $this->id = $id;
    }
    

    public function destroyVideo(){
        $book = Stages::find($this->id)->delete();
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Offre de stage supprimée avec succès!'
        ]);

        $this->resetValidation();
    }
    
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertSuccess()
    {
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Created Successfully!',
            'text' => 'It will list on users table soon.'
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertConfirm()
    {
        $this->dispatch('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!'
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Delete Successfully!',
            'text' => 'It will not list on users table soon.'
        ]);
    }

    public function searchData()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $videos = Stages::where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $videos = Stages::where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);
        
        return view('livewire.stages-component', compact('videos'))->extends('layouts.layout');
    }
}
