<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
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

        $created = new Education();

        $created->nom_diplome = $request->titre;

        $created->date_debut = $request->date_debut;

        $created->date_fin = $request->date_fin;

        $created->ecole = $request->ecole;

        $created->description = $request->description;

        $created->user_id = $my_id;

        $created->save();

        return back()->with('success', 'Education ajoutée avec succès!');
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
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = Education::where('id', $id)->
        update([
            'nom_diplome' => $request->titre,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'ecole' => $request->ecole,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Modification éffectuée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
