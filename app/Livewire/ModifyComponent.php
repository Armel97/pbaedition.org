<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ModifyComponent extends Component
{
    use WithPagination;

    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    
    public function render()
    {
        $categories = Category::paginate();

        return view('livewire.modify-component', compact('categories'));
    }
}
