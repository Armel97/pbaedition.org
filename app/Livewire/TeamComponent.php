<?php

namespace App\Livewire;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class TeamComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $nom, $prenom, $titre, $facebook, $youtube, $linkedin, $detail, $image, $id, $oldImage, $status, $newImage; 

    protected function rules(){
        return [
            'nom' =>'required|unique:teams,nom',
            'prenom' =>'required',
            'titre' =>'required',
            'facebook' =>'',
            'youtube' =>'',
            'linkedin' =>'',
            'status' =>'required',
            'detail' =>'required',
            'image' =>'image|max:1024',
        ];
    }
    
    public function createTeam(){
        $validateData = $this->validate();
        
        
        if($this->image){
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('team', $realImage, 'public');
        }else {
            $realImage ='';
        }
        

        Team::create([
            'nom'=>$validateData['nom'],
            'prenom'=>$validateData['prenom'],
            'titre'=>$validateData['titre'],
            'facebook'=>$validateData['facebook'],
            'youtube'=>$validateData['youtube'],
            'linkedin'=>$validateData['linkedin'],
            'detail'=>$validateData['detail'],
            'status'=>$validateData['status'],
            'image'=>$realImage,
        ]);
        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Membre de l\'équipe enregistré avec succès!'
        ]);
        $this->clearForm();

    }

    
    public function editTeam(int $id){
        $team = Team::find($id);
        if ($team->id) {
            $this->id = $team->id;
            $this->nom = $team->nom;
            $this->prenom = $team->prenom;
            $this->titre = $team->titre;
            $this->facebook = $team->facebook;
            $this->youtube = $team->youtube;
            $this->linkedin = $team->linkedin;
            $this->detail = $team->detail;
            $this->status = $team->status;
            $this->newImage = $team->image;

            $this->oldImage = $team->image;

        } 
        
    }

    public function updateTeam(){
        $validateData = $this->validate(
            [
                'nom' =>'required|unique:teams,nom,'. $this->id,
                'prenom' =>'required',
                'titre' =>'required',
                'facebook' =>'',
                'youtube' =>'',
                'linkedin' =>'',
                'detail' =>'required',
                'status' =>'required',
            ]
        );


        

        $team = Team::whereId($this->id)->first();

        
        if($this->image){

            if(Storage::exists("public/team/$team->image")) {
                Storage::delete("public/team/$team->image");
            }
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('team', $realImage, 'public');

        }else {
            $realImage =$team->image;
        }
        
        $team->update([
            'nom'=>$validateData['nom'],
            'prenom'=>$validateData['prenom'],
            'titre'=>$validateData['titre'],
            'detail'=>$validateData['detail'],
            'facebook'=>$validateData['facebook'],
            'youtube'=>$validateData['youtube'],
            'linkedin'=>$validateData['linkedin'],
            'status'=>$validateData['status'],
            'image'=>$realImage,
        ]);
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
   
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Membre de l\équipe modifié avec succès!'
        ]);
        
    }
    public function deleteConfirm(int $id){
        $this->id = $id;
    }
    public function destroyTeam(){
        $team = Team::find($this->id);
        if ($team->image) {
            if(Storage::exists("public/team/$team->image")) {
                Storage::delete("public/team/$team->image");
            }
        }


        $team = Team::find($this->id)->delete();
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Membre supprimé avec succès!'
        ]);
        $this->clearForm();
        
    }
    public function clearForm(){
        $this->nom = '';
        $this->prenom = '';
        $this->titre = '';
        $this->detail = '';
        $this->facebook = '';
        $this->youtube = '';
        $this->linkedin = '';
        $this->status = '';
        $this->image = '';
    }
    public function render()
    {
        $teams = Team::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.team-component', compact('teams'))->extends('layouts.layout');
    }
}
