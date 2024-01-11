<?php

namespace App\Livewire;

use App\Models\Subscriber;
use App\Models\Training;
use App\Notifications\NewTrainingNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormationComponent extends Component
{
    use WithFileUploads;

    public $id, $titre, $auteur, $image, $description, $status, $newImage, $oldImage, $date_debut, $date_fin ; 
    
    
    protected function rules () {
        return [
            'titre' =>'required|unique:trainings,titre',
            'auteur' =>'required',
            'image' =>'image|mimes:jpeg,png,svg,jpg,gif|max:1024',
            'status' =>'required',
            'date_debut' =>'',
            'date_fin' =>'',
            'description' =>'',

        ];

    }
    public function createFormation (){
        $validateData = $this->validate();

        if($this->image){
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('trainings', $realImage, 'public');
        }else {
            $realImage ='';
        }

        $traning = Training::create([
            'titre'=>$validateData['titre'],
            'auteur'=>$validateData['auteur'],
            'date_debut'=>$validateData['date_debut'],
            'date_fin'=>$validateData['date_fin'],
            'image'=>$realImage,
            'status'=>$validateData['status'],
            'description'=>$validateData['description'],
        ]);

        $subscribers = Subscriber::orderBy('id')->get()->pluck('email');

        Notification::route('mail', $subscribers) //Sending mail to subscribers
        ->notify((new NewTrainingNotification($traning))->delay(now()->addMinutes(1))); //With new post

        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Formation enregistrée avec succès!'
        ]);
    }
    public function editFormation(int $id){
        $this->clearForm();
        $this->resetValidation();

        $formation = Training::find($id);
        $this->id = $formation->id;
        $this->titre = $formation->titre;
        $this->description = $formation->description;
        $this->auteur = $formation->auteur;
        $this->date_debut = $formation->date_debut;
        $this->date_fin = $formation->date_fin;
        $this->status = $formation->status;
        $this->newImage = $formation->image;
        $this->oldImage = $formation->image;
       
    }
    public function updateFormation(){
        $validateData = $this->validate([
            'titre' =>'required|unique:trainings,titre,'. $this->id,
            'auteur' =>'required',
            'status' =>'required',
            'description' =>'',
            'date_debut' =>'',
            'date_fin' =>'',
        ]);

        $book = Training::whereId($this->id)->first();

        if($this->image){
            if(Storage::exists("public/trainings/$book->image")) {
                Storage::delete("public/trainings/$book->image");
            }
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('trainings', $realImage, 'public');

        }else {
            $realImage =$book->image;
        }
        
        $book->update([
            'titre'=>$validateData['titre'],
            'auteur'=>$validateData['auteur'],
            'date_debut'=>$validateData['date_debut'],
            'date_fin'=>$validateData['date_fin'],
            'image'=>$realImage,
            'status'=>$validateData['status'],
            'description'=>$validateData['description'],
        ]);
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Livre modifié avec succès!'
        ]);
        $this->resetValidation();

    }
      
    public function destroyFormation(){
        
        $book = Training::find($this->id);


        if ($book->image) {
            if(Storage::exists("public/trainings/$book->image")) {
                Storage::delete("public/trainings/$book->image");
            }
        }


        $book = Training::find($this->id)->delete();
        
        
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
    public function deleteFormation(int $id){
        $this->id = $id;
    }
    public function clearForm(){
        $this->titre = '';
        $this->description = '';
        $this->auteur = '';
        $this->date_debut = '';
        $this->date_fin = '';
        $this->status = '';
        $this->image = null;
        $this->oldImage = null;
        
    }
    public function render()
    {
        $trainings = Training::all();
        return view('livewire.formation-component', compact('trainings'))->extends('layouts.layout');
    }
}
