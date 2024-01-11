<?php

namespace App\Livewire;

use App\Models\GalleryCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryGalleryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    
    public $libelle, $description, $category_id;
    protected function rules(){
        return [
            'libelle' =>'required|unique:categories,libelle,'. $this->category_id,
            'description' =>''
        ];
    }

    public function editCatefory(int $category_id){
        $category = GalleryCategory::find($category_id);
        if ($category->id) {
            $this->category_id = $category->id;
            $this->libelle = $category->libelle;
            $this->description = $category->description;
        } 
        
    }
    public function createCatefory(){
        $validateData = $this->validate(
            [
            'libelle' =>'required|unique:gallery_categories,libelle',
            'description' =>''
            ]
        );
        $category = GalleryCategory::create([
            'libelle'=>$validateData['libelle'],
            'description'=>$validateData['description'],
        ]);
        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Thématique créée avec succès!',
            'text' => 'Succès.'
        ]);
        $this->clearForm();
        

    }
    public function updateCatefory(){
        $validateData = $this->validate(
            [
                'libelle' =>'required|unique:categories,libelle,'. $this->category_id,
                'description' =>''
            ]
        );
        $category = GalleryCategory::whereId($this->category_id)->first();
        $category->update([
            'libelle'=>$validateData['libelle'],
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
    public function deleteConfirm(int $category_id){
        $this->category_id = $category_id;
    }
    public function destroyCatefory(){
        $category_count = count(GalleryCategory::find($this->category_id)->load('galleries')->galleries);
        if ($category_count ==0) {
            $category = GalleryCategory::find($this->category_id)->delete();
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Suppression',
                'text' => 'Catégorie de galerie supprimée avec succès!'
            ]);

        } else {
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Suppression impossible!',
                'text' => 'Désolé, une ou plusieurs galeries sont liés à cette catégorie.'
            ]);
        }
        $this->clearForm();
        
    }
    public function clearForm(){
        $this->libelle = '';
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
        $categorieGaleries = GalleryCategory::orderBy('created_at', 'DESC')->paginate();
        return view('livewire.category-gallery-component', compact('categorieGaleries'))->extends('layouts.layout');
    }
}
