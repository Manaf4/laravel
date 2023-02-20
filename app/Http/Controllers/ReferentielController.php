<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\CommonMark\Reference\Reference;

class ReferentielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $referentiels = Referentiel::all();
        return view('referentiel.index',['referentiels'=>$referentiels])->with(compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types =Type::all();
        return view('referentiel.create')->with(compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $referentiel = new Referentiel();
        $referentiel->libelle = $request->libelle_ref;
        $referentiel->horaire = doubleval($request->horaire);
        $referentiel->validated =intval($request->validated);
        $referentiel->type_id =intval($request->type);
        $referentiel->save();

        return redirect('/referentiel/create')->with('flash_message','referentiel ajoute');
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
    public function nbFormationReferentiel()
    {
        $referentiels_counts = Referentiel::withCount('formations')->get();
        return view('referentiel/nbFormationReferentiel',compact('referentiels_counts')); 
    }
}
