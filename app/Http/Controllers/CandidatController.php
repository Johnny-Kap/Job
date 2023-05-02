<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Candidat;
use App\Models\Competence;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Information;
use App\Models\Langue;
use App\Models\Secteur;
use App\Models\SousSecteur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ids = Auth::user()->id;

        $educations = Education::where('user_id', $ids)->get();

        $informations = Information::where('user_id', $ids)->get();

        $experiences = Experience::where('user_id', $ids)->get();

        $competences = Competence::where('user_id', $ids)->get();

        $langues = Langue::where('user_id', $ids)->get();

        $infos_high_level = Information::select('high_level_education')->where('user_id', $ids)->get();

        $infos_total_year = Information::select('total_year_experience')->where('user_id', $ids)->get();

        return view('candidat.my-profile', compact('infos_high_level', 'infos_total_year', 'educations', 'informations', 'experiences', 'competences', 'langues'));
    }

    public function showSetting(){

        $my_id = Auth::user()->id;

        $secteurs = Secteur::all();

        $sous_secteurs = SousSecteur::all();

        $educations = Education::where('user_id', $my_id)->get();

        $informations = Information::where('user_id', $my_id)->get();

        $experiences = Experience::where('user_id', $my_id)->get();

        $competences = Competence::where('user_id', $my_id)->get();

        $langues = Langue::where('user_id', $my_id)->get();

        return view('candidat.my-setting', compact('secteurs', 'sous_secteurs', 'educations', 'informations', 'experiences', 'competences', 'langues'));
    }

    public function showJobApplication(){

        $my_id = Auth::user()->id;

        $apply_job = ApplyJob::where('user_id', $my_id)->paginate(10);

        return view('candidat.gestion-emplois', compact('apply_job'));
    }

    public function showMyResume(){

        $my_id = Auth::user()->id;

        $educations = Education::where('user_id', $my_id)->get();

        $informations = Information::where('user_id', $my_id)->get();

        $experiences = Experience::where('user_id', $my_id)->get();

        $competences = Competence::where('user_id', $my_id)->get();

        $langues = Langue::where('user_id', $my_id)->get();

        return view('candidat.my-resume', compact('educations', 'informations', 'experiences', 'competences', 'langues'));
    }

    public function changePassword(Request $request){

        $request->validate([
            'old_password' => 'required|min:8|max:100',
            'new_password' => 'required|min:8|max:100',
            'confirm_password' => 'required|same:new_password'
        ]);

        $current_user = Auth::user();

        if (Hash::check($request->old_password, $current_user->password)) {

            $change = User::where('id', $current_user->id)->update([
                'password' => bcrypt($request->new_password)
            ]);

            return back()->with('success', 'Mot de passe modifié avec succès!');
        } else {

            return back()->with('error', 'Ancien mot de passe incorrecte.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $my_id = Auth::user()->id;

        $affected = User::where('id', $my_id)
            ->update([
                'name' => $request->name,
                'prenom' => $request->prenom,
                'profession' => $request->profession,
                'date_naiss' => $request->date_naiss,
                'tel' => $request->tel,
                'genre_id' => $request->genre,
                'secteur_id' => $request->secteur,
                'sous_secteur_id' => $request->sous_secteur,
                'profession' => $request->profession,
                'description' => $request->description,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'site_internet' => $request->site_internet,
                'Adresse' => $request->adresse,
            ]);

        return back()->with('success', 'Modification éffectuée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
