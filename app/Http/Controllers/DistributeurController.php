<?php

namespace App\Http\Controllers;

use App\Models\Distributeur;
use Illuminate\Http\Request;

class DistributeurController extends BaseController
{
    public function getDistributeurs(){
        $distributeurs = Distributeur::all();
        return  $this->sendResponse($distributeurs,'Distributeur recupéré avec succès.');

    }
}
