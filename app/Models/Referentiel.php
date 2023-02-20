<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','Validated','horaire'];
    public static $rules = array (

        
        'libelle' => 'required|min:2',
        'Validated' => 'required|min:1',
        'horaire' => 'required|min:1',
        
    );
    public function formations(){
        return $this->hasMany(Formation::class);
    }
    public function type(){
        return $this->hasOne(Type::class);
    }

}
