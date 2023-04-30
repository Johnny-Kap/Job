<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Job;
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

        $showJob = Job::paginate(10);

        return view('candidat.job-consulter', compact('showJob'));
    }

    public function show($id)
    {

        $show_detail = Job::find($id);

        $job_similar = Job::take(4)->get();

        return view('candidat.job-detail', compact('show_detail','job_similar'));
    }

    public function showPostJob(){

        $secteurs = Secteur::all();

        $sous_secteurs = SousSecteur::all();

        $type_job = TypeJob::all();

        return view('entreprise.poster-job', compact('secteurs','sous_secteurs','type_job'));
    }

    public function showSubmit(){

        return view('entreprise.submited-job');
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

        $post_job->titre = $request->titre;

        $post_job->dateline = $request->dateline;

        $post_job->secteur_id = $request->secteur;

        $post_job->sous_secteur_id = $request->sous_secteur;

        $post_job->type_job_id = $request->type_job;

        $post_job->user_id = $my_id;

        $post_job->salaire_min = $request->salaire_min;

        $post_job->salaire_max = $request->salaire_max;

        $post_job->experience = $request->experience;

        $post_job->genre_id = $request->genre;

        $post_job->qualification = $request->qualification;

        $post_job->tel = $request->tel;

        $post_job->site_internet = $request->site_internet;

        $post_job->image = $request->image;

        $post_job->adresse = $request->adresse;

        $post_job->save();

        return redirect()->route('entreprise.post.job.submit');
    }

    public function search(Request $request){

        if($request->job_title !== null && $request->job_adresse !== null){

            $resultat = Job::where('titre', 'like', '%'. $request->job_title .'%')->where('adresse', 'like', '%'.$request->adresse.'%')->simplePaginate(15);

        }elseif($request->job_title !== null && $request->job_adresse == null){

            $resultat = Job::where('titre', 'like', '%'. $request->job_title .'%')->simplePaginate(15);

        }elseif($request->job_title == null && $request->job_adresse !== null){

            $resultat = Job::where('adresse', 'like', '%'. $request->job_title .'%')->simplePaginate(15);

        }

        return view('candidat.resultat-search', compact('resultat'));
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
