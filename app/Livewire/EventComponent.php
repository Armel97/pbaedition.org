<?php

namespace App\Livewire;

use App\Models\Evenement;
use App\Models\Subscriber;
use App\Notifications\NewEventNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EventComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
    
    public $id, $titre, $data_evenement, $image, $oldImage, $newImage, $description, $status; 

    
    protected function rules(){
        return [
            'titre' =>'required|unique:evenements,titre,'. $this->id,
            'data_evenement' =>'',
            'description' =>'',
            'status' =>'required',
            'image' =>'image|max:1024',
        ];
    }

    public function createEvent(){
        $validateData = $this->validate();
        if($this->image){
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('events', $realImage, 'public');
        }else {
            $realImage ='';
        }
        
        $event = Evenement::create([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
            'image'=>$realImage,
            'data_evenement'=>$validateData['data_evenement'],
        ]);
        $subscribers = Subscriber::orderBy('id')->get()->pluck('email');

        Notification::route('mail', $subscribers) //Sending mail to subscribers
        ->notify((new NewEventNotification($event))->delay(now()->addMinutes(1))); //With new post

        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Livre enregistré avec succès!'
        ]);
        $this->reset(); 
        $this->image = null;
        $this->resetValidation();

    }
    
    public function editEvent(int $id){

        $this->resetValidation();

        $event = Evenement::find($id);
        $this->id = $event->id;
        $this->titre = $event->titre;
        $this->description = $event->description;
        $this->status = $event->status;
        $this->data_evenement = $event->data_evenement;
        $this->newImage = $event->image;
        $this->oldImage = $event->image;
       
    }
    public function updateBook(){
        $validateData = $this->validate([
            'titre' =>'required|unique:evenements,titre,'. $this->id,
            'description' =>'',
            'data_evenement' =>'',
            'status' =>'required',
        ]);

        $book = Evenement::whereId($this->id)->first();

        if($this->image){
            if(Storage::exists("public/events/$book->image")) {
                Storage::delete("public/events/$book->image");
            }
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('events', $realImage, 'public');

        }else {
            $realImage =$book->image;
        }


        
        $book->update([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
            'data_evenement'=>$validateData['data_evenement'],
            'image'=>$realImage,
        ]);
        session()->flash('success', 'Evènement modifié avec succès');
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Evènement modifié avec succès!'
        ]);
        $this->resetValidation();

    }
    public function deleteEvent(int $id){
        $this->id = $id;
    }
    
    public function destroyEvent(){
        $book = Evenement::find($this->id);

        if ($book->image) {
            if(Storage::exists("public/events/$book->image")) {
                Storage::delete("public/events/$book->image");
            }
        }

        $book = Evenement::find($this->id)->delete();

        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Livre supprimé avec succès!'
        ]);

        $this->resetValidation();
    }
    public function searchData()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $galeries = Evenement::where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $galeries = Evenement::where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.event-component', compact('galeries'))->extends('layouts.layout');
    }
}
