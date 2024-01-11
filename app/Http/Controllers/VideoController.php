<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideoController extends BaseController
{
    public function getVideos(){
        $videos = Videos::whereStatus('Actif')->orderBy('created_at', 'DESC')->paginate(9);
        return  $this->sendResponse($videos,'Vidéos recupérées avec succès.');
    }
}
