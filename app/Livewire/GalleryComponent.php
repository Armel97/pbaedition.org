<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class GalleryComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public $id, $titre, $author, $real_price, $promotion_price, $image, $oldImage, $newImage, $description, $gallery_category_id, $status, $type; 
    
    
    

    protected function rules(){
        return [
            'titre' =>'required',
            'description' =>'',
            'gallery_category_id' =>'required',
            'status' =>'required',
            'image' =>'image|max:1024',
        ];
    }
    public function editBook(int $id){

        $this->resetValidation();

        $galerie = Gallery::find($id);
        $this->id = $galerie->id;
        $this->titre = $galerie->titre;
        $this->description = $galerie->description;
        $this->gallery_category_id = $galerie->gallery_category_id;
        $this->status = $galerie->status;
        $this->author = $galerie->author;
        $this->type = $galerie->type;
        $this->newImage = $galerie->image;
        $this->oldImage = $galerie->image;
        // dd($this->image);

        // if (!$book->image) {
        //     $this->image = '';
        // }
       
    }
    public function createGallery(){
        $validateData = $this->validate();
        if($this->image){
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('galerie', $realImage, 'public');
        }else {
            $realImage ='';
        }
        
        Gallery::create([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
            'image'=>$realImage,
            'gallery_category_id'=>$validateData['gallery_category_id'],
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
        $this->image = null;
        $this->resetValidation();

    }
    public function updateBook(){
        $validateData = $this->validate([
            'titre' =>'required',
            'description' =>'',
            'gallery_category_id' =>'required',
            'status' =>'required',
        ]);

        $book = Gallery::whereId($this->id)->first();

        if($this->image){
            if(Storage::exists("public/galerie/$book->image")) {
                Storage::delete("public/galerie/$book->image");
            }
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('galerie', $realImage, 'public');

        }else {
            $realImage =$book->image;
        }
        
        $book->update([
            'titre'=>$validateData['titre'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
            'image'=>$realImage,
            'gallery_category_id'=>$validateData['gallery_category_id'],
        ]);
        session()->flash('success', 'Livre modifié avec succès');
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
    public function deleteBook(int $id){
        $this->id = $id;
    }
    
    public function destroyBook(){
        $book = Gallery::find($this->id)->delete();
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

        $categories = GalleryCategory::all();
        $books = Gallery::with('gallery_category')->where('titre','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

    }
   
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $categories = GalleryCategory::all();
        $galeries = Gallery::where('titre','like', $searchTerm)->with('gallery_category')->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.gallery-component', compact('galeries', 'categories'))->extends('layouts.layout');
    }
}
