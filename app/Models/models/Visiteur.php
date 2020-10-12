<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Visiteur extends Model
{
    use HasFactory;
    public function getvisiteurs()
    {
        $visiteurs = DB::table('visiteur')->select('VIS_NOM','VIS_PRENOM','VIS_ADRESSE','VIS_CP','VIS_VILLE','VIS_DATEEMBAUCHE')
            ->get();
        return $visiteurs;
    }
}
