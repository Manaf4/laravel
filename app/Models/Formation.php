<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = ['nom','duree','description','isStarted','date_debut'];
    public static $rules = array (

        
        'nom' => 'required|min:2',
        'duree' => 'required|min:1',
        'description' => 'required|min:15',
        'isStarted' => 'required|min:1',
        'date_debut' => 'required|min:1',
    
    );
    public function Candidats(){
        return $this->belongsToMany(Candidat::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
