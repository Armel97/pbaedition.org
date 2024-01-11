<?php

namespace App\Livewire;

use App\Models\Distributeur;
use Livewire\Component;
use Livewire\WithPagination;

class DistributeurComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    
    public $country, $phone, $description, $distributor_id;
    protected function rules(){
        return [
            'country' =>'required|unique:distributeurs,country,'. $this->distributor_id,
            'phone' =>''
        ];
    }

    public function editCatefory(int $distributor_id){
        $category = Distributeur::find($distributor_id);
        if ($category->id) {
            $this->distributor_id = $category->id;
            $this->country = $category->country;
            $this->phone = $category->phone;
            $this->description = $category->description;
        } 
        
    }
    public function createCatefory(){
        $validateData = $this->validate(
            [
            'country' =>'required|unique:distributeurs,country',
            'phone' =>'',
            'description' =>''
            ]
        );
        $category = Distributeur::create([
            'country'=>$validateData['country'],
            'phone'=>$validateData['phone'],
            'description'=>$validateData['description'],
        ]);
        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Distributeur créé avec succès!',
            'text' => 'Succès.'
        ]);
        $this->clearForm();
        

    }
    public function updateCatefory(){
        $validateData = $this->validate(
            [
                'country' =>'required|unique:distributeurs,country,'. $this->distributor_id,
                'phone' =>'',
                'description' =>''
            ]
        );
        $category = Distributeur::whereId($this->distributor_id)->first();
        $category->update([
            'country'=>$validateData['country'],
            'phone'=>$validateData['phone'],
            'description'=>$validateData['description'],
        ]);
        $this->successMes();
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Thématique modifiée avec succès!'
        ]);
        $this->clearForm();

    }
    public function deleteConfirm(int $distributor_id){
        $this->distributor_id = $distributor_id;
    }
    public function destroyCatefory(){
        $category = Distributeur::find($this->distributor_id)->delete();
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Suppression',
                'text' => 'Distributeur supprimé avec succès!'
            ]);
        $this->clearForm();
        
    }
    public function clearForm(){
        $this->country = '';
        $this->phone = '';
        $this->description = '';
    }
    public function successMes()
    {
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
    }


    public function render()
    {
        $distributeurs = Distributeur::orderBy('created_at', 'DESC')->paginate();

        return view('livewire.distributeur-component', compact('distributeurs'))->extends('layouts.layout');
    }
}
