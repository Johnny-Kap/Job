<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Competence;
use App\Models\Education;
use App\Models\Entreprise;
use App\Models\Experience;
use App\Models\Information;
use App\Models\Job;
use App\Models\Langue;
use App\Models\Secteur;
use App\Models\SousSecteur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('is_enterprise');
    }


    public function index()
    {
        return view('entreprise.home');
    }

    public function about(){

        return view('entreprise.about');
    }

    public function contact(){

        return view('entreprise.contact');
    }

    public function showMyProfil(){

        $my_id = Auth::user()->id;

        $my_job = Job::take(3)->get();

        return view('entreprise.my-profile', compact('my_job'));
    }

    public function showSetting(){

        $secteurs = Secteur::all();

        $sous_secteurs = SousSecteur::all();

        return view('entreprise.my-setting', compact('secteurs','sous_secteurs'));
    }

    public function showMyJobs(){

        $my_id = Auth::user()->id;

        $job = Job::where('user_id', $my_id)->paginate(10);

        return view('entreprise.gestion-emplois', compact('job'));
    }

    public function showMyCandidat(){

        $my_id = Auth::user()->id;

        $my_job = Job::where('user_id', $my_id)->pluck('id');

        $my_candidat = ApplyJob::whereIn('job_id', $my_job)->where('validated', 1)->paginate(15);

        return view('entreprise.gestion-candidature', compact('my_candidat'));
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

    public function showProfil(){

        $profil = User::where('is_enterprise', 0)->simplePaginate(15);

        return view('entreprise.profil-consulter', compact('profil'));
    }

    public function showProfilDetail($id){

        $profil_detail = User::find($id);

        $informations = Information::where('user_id', $id)->get();

        $experiences = Experience::where('user_id', $id)->get();

        $educations = Education::where('user_id', $id)->get();

        $competences = Competence::where('user_id', $id)->get();

        $langues = Langue::where('user_id', $id)->get();

        return view('entreprise.profil-detail', compact('profil_detail','informations','experiences','educations','competences','langues'));
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
        $my_id = Auth::user()->id;

        $affected = User::where('id', $my_id)
            ->update([
                'name' => $request->name,
                'date_naiss' => $request->date_creation,
                'tel' => $request->tel,
                'secteur_id' => $request->secteur,
                'sous_secteur_id' => $request->sous_secteur,
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
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
