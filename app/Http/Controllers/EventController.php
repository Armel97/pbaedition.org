<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EventController extends BaseController
{
    public function getPbaEvents(){
        $this_evenements = Evenement::whereStatus('Actif')->orderBy('data_evenement', 'DESC')->get();
        $evenements = Evenement::whereStatus('Actif')->orderBy('data_evenement', 'DESC')->paginate(9);
        foreach ($evenements as $evenement) {
            if ($this_evenements->first()->id == $evenement->id) {
                $evenement['last'] = true;
            }
        }
        return  $this->sendResponse($evenements,'Evènement recupérés avec succès.');

    }

    public function getEventForHome(){
        $evenements = Evenement::whereStatus('Actif')->orderBy('data_evenement', 'DESC')->take(3)->get();
        return  $this->sendResponse($evenements,'Evènements recupérés avec succès.');
    }
}
