<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Medicament extends Model
{
    use HasFactory;
    public function getMedicaments()
    {
        $medicaments = DB::table('medicament')->get();
        return $medicaments;
    }
}
