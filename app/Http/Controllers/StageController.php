<?php

namespace App\Http\Controllers;

use App\Models\Stages;
use Illuminate\Http\Request;

class StageController extends BaseController
{
    public function getStages(){
        $stages = Stages::whereStatus('Actif')->orderBy('created_at', 'DESC')->paginate(9);
        return  $this->sendResponse($stages,'Vidéos recupérées avec succès.');
    }
}
