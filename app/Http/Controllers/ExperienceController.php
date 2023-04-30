<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $my_id = Auth::user()->id;

        $created = new Experience();

        $created->poste = $request->poste;

        $created->nom_entreprise = $request->nom_entreprise;

        $created->adresse = $request->adresse;

        $created->date_debut = $request->date_debut;

        $created->date_fin = $request->date_fin;

        $created->description = $request->description;

        $created->user_id = $my_id;

        $created->save();

        return back()->with('success', 'Expérience ajoutée avec succès!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Experience::where('id', $id)->
        update([
            'poste' => $request->poste,
            'nom_entreprise' => $request->nom_entreprise,
            'adresse' => $request->adresse,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Modification expérience éffectuée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
