<?php

namespace App\Http\Controllers;

use App\Models\JobFavori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobFavoriController extends Controller
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
    public function create($id)
    {

        $my_id = Auth::user()->id;

        $search_job_fav = JobFavori::where('job_id', $id)->where('user_id', $my_id)->get();

        if($search_job_fav->isEmpty()){

            $add = new JobFavori();

            $add->job_id = $id;

            $add->user_id = $my_id;

            $add->status = 1;

            $add->save();

            return back()->with('success', 'Job ajouté aux favoris avec succès!');
        }else{

            $delete = JobFavori::where('job_id', $id)->where('user_id', $my_id)->delete();

            return back()->with('success', 'Job supprimé aux favoris avec succès!');
        }

    }

    public function createInProfil($id)
    {

        $delete = JobFavori::where('id', $id)->delete();

        return back()->with('success', 'Job supprimé aux favoris avec succès!');

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
     * @param  \App\Models\JobFavori  $jobFavori
     * @return \Illuminate\Http\Response
     */
    public function show(JobFavori $jobFavori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobFavori  $jobFavori
     * @return \Illuminate\Http\Response
     */
    public function edit(JobFavori $jobFavori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobFavori  $jobFavori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobFavori $jobFavori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobFavori  $jobFavori
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobFavori $jobFavori)
    {
        //
    }
}
