<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Job;
use App\Models\JobFavori;
use App\Models\Secteur;
use App\Models\SousSecteur;
use App\Models\TypeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user() == null) {
            $my_id = '';
        } else {
            $my_id = Auth::user()->id;
        }

        $showJob = Job::where('etat', 1)->paginate(10);

        $showJob_count = Job::where('etat', 1)->count();

        $showJobOther = Job::where('etat', 1)->pluck('id');

        $fav_count = JobFavori::whereIn('job_id', $showJobOther)->where('user_id', $my_id)->count();

        $secteurs = Secteur::all();

        $type_job = TypeJob::all();

        return view('candidat.job-consulter', compact('showJob', 'fav_count', 'showJob_count','secteurs','type_job'));
    }

    public function show($id)
    {

        if (Auth::user() == null) {
            $my_id = '';
        } else {
            $my_id = Auth::user()->id;
        }

        $show_detail = Job::find($id);

        $show_detail_other = Job::where('id', $id)->pluck('id');

        $fav_count = JobFavori::where('job_id', $show_detail_other)->where('user_id', $my_id)->count();

        $job_similar = Job::take(4)->get();

        return view('candidat.job-detail', compact('show_detail', 'job_similar', 'fav_count'));
    }

    public function showPostJob()
    {

        $secteurs = Secteur::all();

        $sous_secteurs = SousSecteur::all();

        $type_job = TypeJob::all();

        return view('entreprise.poster-job', compact('secteurs', 'sous_secteurs', 'type_job'));
    }

    public function showSubmit()
    {

        return view('entreprise.submited-job');
    }

    public function showSubmitModified(){

        return view('entreprise.submited-job-modify');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $my_id = Auth::user()->id;

        $post_job = new Job();

        $post_job->titre = $request->titre;

        $post_job->description = $request->description;

        $post_job->email_contact = $request->email;

        $post_job->dateline = $request->dateline;

        $post_job->secteur_id = $request->secteur;

        $post_job->sous_secteur_id = $request->sous_secteur;

        $post_job->type_job_id = $request->type_job;

        $post_job->contrat = $request->contrat;

        $post_job->user_id = $my_id;

        $post_job->salaire_min = $request->salaire_min;

        $post_job->salaire_max = $request->salaire_max;

        $post_job->experience = $request->experience;

        $post_job->genre_id = $request->genre;

        $post_job->qualification = $request->qualification;

        $post_job->tel = $request->tel;

        $post_job->site_internet = $request->site_internet;

        $post_job->adresse = $request->adresse;

        $post_job->etat = 1;

        $post_job->save();

        return redirect()->route('entreprise.post.job.submit');
    }

    public function search(Request $request)
    {

        if (Auth::user() == null) {
            $my_id = '';
        } else {
            $my_id = Auth::user()->id;
        }

        if ($request->job_title !== null && $request->job_adresse !== null) {

            $resultat = Job::where('etat', 1)->where('titre', 'like', '%' . $request->job_title . '%')->where('adresse', 'like', '%' . $request->job_adresse . '%')->simplePaginate(15);

            $resultat_count = Job::where('etat', 1)->where('titre', 'like', '%' . $request->job_title . '%')->where('adresse', 'like', '%' . $request->job_adresse . '%')->count();

            $resultatOther = Job::where('etat', 1)->where('titre', 'like', '%' . $request->job_title . '%')->where('adresse', 'like', '%' . $request->job_adresse . '%')->pluck('id');

            $fav_count = JobFavori::whereIn('job_id', $resultatOther)->where('user_id', $my_id)->count();

            $secteurs = Secteur::all();

            $type_job = TypeJob::all();

            return view('candidat.resultat-search-job', compact('resultat', 'fav_count', 'resultat_count','secteurs','type_job'));
        } elseif ($request->job_title !== null && $request->job_adresse == null) {

            $resultat = Job::where('etat', 1)->where('titre', 'like', '%' . $request->job_title . '%')->simplePaginate(15);

            $resultat_count = Job::where('etat', 1)->where('titre', 'like', '%' . $request->job_title . '%')->count();

            $resultatOther = Job::where('etat', 1)->where('titre', 'like', '%' . $request->job_title . '%')->pluck('id');

            $fav_count = JobFavori::whereIn('job_id', $resultatOther)->where('user_id', $my_id)->count();

            $secteurs = Secteur::all();

            $type_job = TypeJob::all();

            return view('candidat.resultat-search-job', compact('resultat', 'fav_count', 'resultat_count','secteurs','type_job'));
        } elseif ($request->job_title == null && $request->job_adresse !== null) {

            $resultat = Job::where('etat', 1)->where('adresse', 'like', '%' . $request->job_adresse . '%')->simplePaginate(15);

            $resultat_count = Job::where('etat', 1)->where('adresse', 'like', '%' . $request->job_adresse . '%')->count();

            $resultatOther = Job::where('etat', 1)->where('adresse', 'like', '%' . $request->job_adresse . '%')->pluck('id');

            $fav_count = JobFavori::whereIn('job_id', $resultatOther)->where('user_id', $my_id)->count();

            $secteurs = Secteur::all();

            $type_job = TypeJob::all();

            return view('candidat.resultat-search-job', compact('resultat', 'fav_count', 'resultat_count','secteurs','type_job'));
        } elseif ($request->job_title == null && $request->job_adresse == null) {

            return back()->with('warning', 'Veuillez renseigner un des champs');
        }
    }

    public function secteurActivite()
    {

        $secteurs = Secteur::withCount('jobs')->get();

        return view('candidat.secteur-activite', compact('secteurs'));
    }

    public function secteurActiviteShow($id)
    {

        if (Auth::user() == null) {
            $my_id = '';
        } else {
            $my_id = Auth::user()->id;
        }

        $show_jobs = Job::where('etat', 1)->where('secteur_id', $id)->simplePaginate(10);

        $show_jobs_count = Job::where('etat', 1)->where('secteur_id', $id)->count();

        $show_jobs_other = Job::where('etat', 1)->where('secteur_id', $id)->pluck('id');

        $fav_count = JobFavori::whereIn('job_id', $show_jobs_other)->where('user_id', $my_id)->count();

        $secteurs = Secteur::all();

        $type_job = TypeJob::all();

        return view('candidat.secteur-activite-jobs', compact('show_jobs', 'fav_count', 'show_jobs_count','secteurs','type_job'));
    }

    public function modifyJob($id){

        $jobs = Job::find($id);

        $secteurs = Secteur::all();

        $sous_secteurs = SousSecteur::all();

        $type_job = TypeJob::all();

        return view('entreprise.modify-job', compact('jobs','secteurs','sous_secteurs','type_job'));
    }

    public function JobModified($id, Request $request){

        $affected = Job::where('id', $id)
            ->update([
                'titre' => $request->titre,
                'description' => $request->description,
                'email_contact' => $request->email,
                'dateline' => $request->dateline,
                'secteur_id' => $request->secteur,
                'sous_secteur_id' => $request->sous_secteur,
                'secteur_id' => $request->secteur,
                'sous_secteur_id' => $request->sous_secteur,
                'type_job_id' => $request->type_job,
                'contrat' => $request->contrat,
                'salaire_min' => $request->salaire_min,
                'salaire_max' => $request->salaire_max,
                'experience' => $request->experience,
                'genre_id' => $request->genre,
                'qualification' => $request->qualification,
                'tel' => $request->tel,
                'site_internet' => $request->site_internet,
                'adresse' => $request->adresse,
            ]);

            return redirect()->route('entreprise.modify.job.submit');
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
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
