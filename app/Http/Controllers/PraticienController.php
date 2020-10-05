<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models\Praticien;

class PraticienController extends Controller
{
    public function praticiens()
    {
        $praticien = new praticien();
        $praticiens = $praticien->getPraticiens();
        return view ('vuePraticiens',compact('praticiens'));
    }
}
