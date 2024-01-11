<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SubscriberComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
    
    public $id, $email, $status; 

    protected function rules(){
        return [
            'email' =>'required|unique:subscribers,email,'. $this->id,
            'status' =>'required',
        ];
    }

    public function createSubscriber(){
        $validateData = $this->validate();
      
        
        Subscriber::create([
            'email'=>$validateData['email'],
            'status'=>$validateData['status'],
        ]);
        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Abonné enregistré avec succès!'
        ]);
        $this->reset(); 
        $this->resetValidation();

    }
    
    public function editEvent(int $id){

        $this->resetValidation();

        $event = Subscriber::find($id);
        $this->id = $event->id;
        $this->email = $event->email;
        $this->status = $event->status;       
    }
     
    public function updateBook(){
        $validateData = $this->validate([
            'email' =>'required|unique:subscribers,email,'. $this->id,
            'status' =>'required',
        ]);

        $book = Subscriber::whereId($this->id)->first();

       

        
        $book->update([
            'email'=>$validateData['email'],
            'status'=>$validateData['status'],
        ]);
        session()->flash('success', 'Abonné modifié avec succès');
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
    public function deleteSubscriber(int $id){
        $this->id = $id;
    }
    

    public function destroySubscriber(){
        $book = Subscriber::find($this->id)->delete();
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Abonné supprimé avec succès!'
        ]);

        $this->resetValidation();
    }
    public function searchData()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $subscribers = Subscriber::where('email','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $subscribers = Subscriber::where('email','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.subscriber-component', compact('subscribers'))->extends('layouts.layout');
    }
}
