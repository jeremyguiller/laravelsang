<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Praticien extends Model
{
    use HasFactory;
    public function getPraticiens()
    {
        $praticiens = DB::table('praticien')->select('PRA_NUM','PRA_NOM','PRA_PRENOM','PRA_ADRESSE','PRA_CP','PRA_VILLE','TYP_LIBELLE')
            ->join('typepraticien','typepraticien.typ_code','=','praticien.typ_code')
            ->get();
        return $praticiens;
    }
}
