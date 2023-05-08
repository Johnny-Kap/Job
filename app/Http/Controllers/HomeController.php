<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobFavori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user() == null) {
            $my_id = '';
        } else {
            $my_id = Auth::user()->id;
        }

        $jobs_count = Job::where('etat', 1)->count();

        $companies_count = User::where('is_enterprise', 1)->count();

        $jobs = Job::where('etat', 1)->take(2)->get();

        $jobs_other = Job::where('etat', 1)->take(2)->pluck('id');

        $fav_count = JobFavori::whereIn('job_id', $jobs_other)->where('user_id', $my_id)->count();

        $companies = User::take(2)->where('is_enterprise', 1)->get();

        return view('home', compact('jobs_count', 'companies_count', 'jobs', 'companies','fav_count'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
