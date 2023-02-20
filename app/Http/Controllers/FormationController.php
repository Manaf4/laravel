<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB ;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\CommonMark\Reference\Reference;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $referentiels = Referentiel::all();
        $types = Type::all() ;
        return view('formation.index')->with(compact('referentiels','types'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $referentiels = Referentiel::all();
        $types = Type::all() ;
        return view('formation.create')->with(compact('referentiels','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formations = new Formation();
        $formations->nom = $request->nom;
        $formations->duree = $request->duree;
        $formations->description = $request->description;
        $formations->is_started =intval($request->is_started);
        $formations->date_debut = $request->date_debut;
        $formations->referentiel_id =intval($request->ref);
        $formations->type_id =intval($request->type);

        $formations->save();

        return redirect('/formation/create')->with('flash_message','formation ajoute');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function formationsByType()
    {
        $formations_par_type = DB::select('SELECT types.libelle as type, COUNT(*) as count FROM formations JOIN types ON formations.type_id = types.id GROUP BY types.libelle');
        return view('formation/formations_by_type')->with('formations_par_type', $formations_par_type);
    }
    
}
