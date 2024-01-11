<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookCategoryController extends BaseController
{
    public function getCategories(){
        $bookCategories = Category::all();
        return  $this->sendResponse($bookCategories,'Catégories recupérée avec succès.');

    }
}
