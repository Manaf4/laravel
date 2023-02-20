<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','age','niveau_etude','mail','sexe'];
    public static $rules = array (
        'nom' => 'required|min:5',
        'prenom' => 'required|min:5',
        'age' => 'required|min:2',
        'mail' => 'required|min:15',
    
    );
    public function formations(){
        return $this->belongsToMany(Formation::class);
    }
}
