<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Videos;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class VideosComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public $titre, $description, $youtube, $status, $id;
    protected function rules(){
        return [
            'titre' =>'required',
            'description' =>'',
            'youtube' =>'required',
            'status' =>'required',
        ];
    }

    
    public function createVideo(){
        $validateData = $this->validate();
        Videos::create([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
            'youtube'=>$validateData['youtube'],
        ]);
        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Livre enregistré avec succès!'
        ]);
        $this->reset(); 
        $this->resetValidation();

    }
    public function editVideo(int $id){

        $this->resetValidation();

        $video = Videos::find($id);
        $this->id = $video->id;
        $this->titre = $video->titre;
        $this->description = $video->description;
        $this->youtube = $video->youtube;
        $this->status = $video->status;
    }
    
    public function updateVideo(){
        $validateData = $this->validate([
            'titre' =>'required',
            'description' =>'',
            'youtube' =>'required',
            'status' =>'required',
        ]);

        $book = Videos::whereId($this->id)->first();

        $book->update([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'youtube'=>$validateData['youtube'],
            'status'=>$validateData['status'],
        ]);
        session()->flash('success', 'Vidéo modifiée avec succès');
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Vidéo modifiée avec succès!'
        ]);
        $this->resetValidation();

    }

    public function deleteVideo(int $id){
        $this->id = $id;
    }
    

    public function destroyVideo(){
        $book = Videos::find($this->id)->delete();
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Vidéo supprimée avec succès!'
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

        $videos = Videos::where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $videos = Videos::where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);
        
        return view('livewire.videos-component', compact('videos'))->extends('layouts.layout');
    }
}
