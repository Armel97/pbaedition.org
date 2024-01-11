<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends BaseController
{
    public function getPbaTeam(){
        $teams = Team::orderBy('created_at', 'ASC')->whereStatus('Actif')->paginate(9);
        return  $this->sendResponse($teams,'Equipe recupérée avec succès.');
    }
    public function getTeamForHome(){
        $teams = Team::whereStatus('Actif')->orderBy('created_at', 'ASC')->take(4)->get();
        return  $this->sendResponse($teams,'Equipe recupérée avec succès.');
    }
   
}
