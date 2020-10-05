<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models\Medicament;

class MedicamentController extends Controller
{
    public function medicaments()
    {
        $medicament =new Medicament();
        $medicaments =$medicament->getMedicaments();
        return view('vueMedicaments',compact('medicaments'));
    }
}
