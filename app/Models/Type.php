<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];
    public static $rules = array (

        'libelle' => 'required|min:2',   
    );

    public function referentiels(){
        return $this->hasMany(Referentiel::class);
    }
    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
    
}
