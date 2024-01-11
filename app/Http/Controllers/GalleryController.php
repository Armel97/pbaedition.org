<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{
    public function getGalleriesForHome(){
        $galeries = Gallery::whereGalleryCategoryId(1)->whereStatus('Actif')->orderBy('created_at', 'DESC')->take(3)->get();
        return  $this->sendResponse($galeries,'Galleries recupérée avec succès.');
    }
    public function getGalleriesTwoForHome(){
        $galeries = Gallery::whereGalleryCategoryId(2)->whereStatus('Actif')->orderBy('created_at', 'DESC')->take(3)->get();
        return  $this->sendResponse($galeries,'Galleries recupérée avec succès.');
    }
    public function getGalleriesThreeForHome(){
        $galeries = Gallery::whereGalleryCategoryId(3)->whereStatus('Actif')->orderBy('created_at', 'DESC')->take(3)->get();
        return  $this->sendResponse($galeries,'Galleries recupérée avec succès.');
    }
    public function getGalleries(){
        $galeries = Gallery::whereStatus('Actif')->whereStatus('Actif')->orderBy('created_at', 'DESC')->paginate(10000);
        return  $this->sendResponse($galeries,'Galleries recupérée avec succès.');
    }
}
