<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class FormationController extends BaseController
{
    public function getPbaTrainings(){
        $trainings = Training::whereStatus('Actif')->orderBy('date_debut', 'DESC')->paginate(9);
        foreach ($trainings as $training) {
            if ( $training->date_fin < date('Y-m-d')) {
                $training['passed'] = 1;
                $trainings['not_empty_passed'] = 1;

            } elseif ($training->date_debut <= date('Y-m-d') && $training->date_fin >= date('Y-m-d')) {
                $training['current'] = 1;
                $trainings['not_empty_current'] = 1;
                
            } else {
                $training['futur'] = 1;
                $trainings['not_empty_futur'] = 1;

            }
        }
        return  $this->sendResponse($trainings,'Evènement recupérés avec succès.');

    }
}
