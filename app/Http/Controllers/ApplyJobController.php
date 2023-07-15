<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyJobController extends Controller
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

        $apply_job = new ApplyJob();

        $apply_job->etat = 0;

        $apply_job->validated = 0;

        $apply_job->job_id = $id;

        $apply_job->user_id = $my_id;

        $apply_job->save();

        return redirect()->route('candidat.after.apply');
    }

    public function apply(){

        return view('candidat.job-applied');
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
     * @param  \App\Models\ApplyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function show(ApplyJob $applyJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplyJob $applyJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplyJob $applyJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete = ApplyJob::where('id', $id)->delete();

        return back()->with('success', 'Candidature supprimée avec succès!');
    }
}
