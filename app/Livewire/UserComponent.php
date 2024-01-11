<?php

namespace App\Livewire;

use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $fullname, $title, $contact, $email, $password, $detail, $image, $id, $oldImage, $newImage; 

    protected function rules(){
        return [
            'fullname' =>'required|unique:users,fullname,'. $this->id,
            'contact' =>'required',
            'title' =>'required',
            'email' => 'required|email|unique:users,email',
        ];
    }
    
    public function createUser(){
        $validateData = $this->validate();
    
        $this->password = bcrypt('PBA2023');

        DB::beginTransaction();

        try {
            $userData = User::create([
                'fullname'=>$validateData['fullname'],
                'contact'=>$validateData['contact'],
                'title'=>$validateData['title'],
                'email'=>$validateData['email'],
                'password'=>$this->password,
            ]);
    
            Mail::to($validateData['email'])->send(new RegisterMail($userData));
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }

      
        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Utilisateur enregistré avec succès!'
        ]);
        $this->clearForm();

    }

    
    public function editTeam(int $id){
        $this->clearForm();

        $team = User::find($id);
        if ($team->id) {
            $this->id = $team->id;
            $this->fullname = $team->fullname;
            $this->contact = $team->contact;
            $this->title = $team->title;
            $this->email = $team->email;
        } 
        
    }

    public function updateTeam(){
        $validateData = $this->validate(
            [
                'fullname' =>'required|unique:users,fullname,'. $this->id,
                'contact' =>'required',
                'title' =>'required',
                'email' =>'',
            ]
            
        );
        $team = User::whereId($this->id)->first();

        $team->update([
            'fullname'=>$validateData['fullname'],
            'contact'=>$validateData['contact'],
            'title'=>$validateData['title'],
            'email'=>$validateData['email'],
        ]);
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormSuspend',
        ]);
   
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Utilisateur modifié avec succès!'
        ]);
        
    }
    public function suspendTeam(){
      
        $team = User::whereId($this->id)->first();
        if ($team->status== 'Actif') {
            $team->update([
                'status'=>'Non actif',
            ]);
        } else {
            $team->update([
                'status'=>'Actif',
            ]);
        }
        
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
   
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Utilisateur suspendu avec succès!'
        ]);
        
    }
    public function deleteConfirm(int $id){
        $this->id = $id;
    }
    public function destroyTeam(){
        if (Auth::user()->id != $this->id) {
            $team = User::find($this->id)->delete();
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Utilisateur supprimé avec succès!'
        ]);
        } else {
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Suppression impossible ',
                'text' => 'Vous ne pouvez pas vous supprimer!'
            ]);
        }
        
        $this->clearForm();
        
    }
    public function clearForm(){
        $this->fullname = '';
        $this->contact = '';
        $this->title = '';
        $this->email = '';
        
    }


    public function render()
    {
        $teams = User::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.user-component', compact('teams'))->extends('layouts.layout');
    }
}
