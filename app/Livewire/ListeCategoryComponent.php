<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ListeCategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $libelle, $description, $status, $category_id;
    protected function rules(){
        return [
            'libelle' =>'required|unique:categories,libelle,'. $this->category_id,
            'description' =>'',
            'status' =>''
        ];
    }

    public function editCatefory(int $category_id){
        $category = Category::find($category_id);
        if ($category->id) {
            $this->category_id = $category->id;
            $this->libelle = $category->libelle;
            $this->description = $category->description;
            $this->status = $category->status;
        } 
        
    }
    public function createCatefory(){
        $validateData = $this->validate(
            [
            'libelle' =>'required|unique:categories,libelle',
            'description' =>'',
            'status' =>''
            ]
        );
        $category = Category::create([
            'libelle'=>$validateData['libelle'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
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
                'description' =>'',
                'status' =>''
            ]
        );
        $category = Category::whereId($this->category_id)->first();
        $category->update([
            'libelle'=>$validateData['libelle'],
            'description'=>$validateData['description'],
            'status'=>$validateData['status'],
        ]);
        $this->successMes();
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Thématique modifiée avec succès!'
        ]);
        $this->clearForm();


    }
    public function deleteCatefory(int $category_id){
        $this->category_id = $category_id;
    }
    public function destroyCatefory(){
        $category_count = count(Category::find($this->category_id)->load('books')->books);
        if ($category_count ==0) {
            $category = Category::find($this->category_id)->delete();
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Suppression',
                'text' => 'Thématique supprimée avec succès!'
            ]);

        } else {
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Suppression non effectuée!',
                'text' => 'Désolé, un ou plusieurs livres sont liés à cette thématique.'
            ]);
        }
        $this->clearForm();
        
    }
    public function clearForm(){
        $this->libelle = '';
        $this->description = '';
        $this->status = '';
    }
    public function successMes()
    {
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
    }

    public function deleteConfirm($id)
    {
        $this->dispatch('swal:confirm', [
                'type' => 'warning',  
                'message' => 'Suppression ?', 
                'text' => 'Etes-vous sûr de bien vouloir supprimer cette thématique?',
                'id' => $id,
            ]);
            
    }
    #[On('deleteIt')] 
    public function deleteIt($id)
    {
        $category_count = count(Category::find($id)->load('books')->books);

        if ($category_count ==0) {
            $category = Category::find($id)->delete();
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Suppression',
                'text' => 'Thématique supprimée avec succès!'
            ]);

        } else {
            $this->dispatch('deleteElement', [
                'type' => 'inlineFormDelete',
            ]);
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Suppression non effectuée!',
                'text' => 'Désolé, un ou plusieurs livres sont liés à cette thématique.'
            ]);
        }
        $this->clearForm();
    }

    public function render()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate();

        return view('livewire.liste-category-component', compact('categories'));
    }
}
