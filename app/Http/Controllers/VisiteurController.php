<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models\Visiteur;

class VisiteurController extends Controller
{
    public function visiteurs()
    {
        $visiteur = new visiteur();
        $visiteurs = $visiteur->getvisiteurs();
        return view ('vueVisiteurs',compact('visiteurs'));
    }
}
