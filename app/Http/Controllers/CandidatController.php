<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidats = Candidat::all();
        return view('candidat.index',['candidats'=> $candidats]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->mail = $request->email;
        $candidat->age =intval($request->age);
        $candidat->sexe = $request->sexe;
        $candidat->niveau_etude = $request->niveau;
        $candidat->save();

        return redirect('/candidat/create')->with('flash_message','etudiant ajoute');
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
    public function candidatStats()
    {
        $totalCandidats = Candidat::count();
        $maleCandidats = Candidat::where('sexe', 'Masculin')->count();
        $femaleCandidats = Candidat::where('sexe', 'Feminin')->count();        
        return view('candidat/candidat-stats', [
            'totalCandidats' => $totalCandidats,
            'maleCandidats' => $maleCandidats,
            'femaleCandidats' => $femaleCandidats
        ]);
    }
    public function nbCandidatFormation()
    {
        $candidats = Candidat::all();
        $formations = Formation::withCount('candidats')->get();
        return view('candidat/nbCandidatFormation',compact('candidats','formations')) ;
    }
}
