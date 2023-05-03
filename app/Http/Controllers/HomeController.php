<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

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

        $jobs_count = Job::count();
        $companies_count = User::where('is_enterprise', 1)->count();
        $jobs = Job::take(2)->get();
        $companies = User::take(2)->where('is_enterprise', 1)->get();

        return view('home', compact('jobs_count', 'companies_count', 'jobs', 'companies'));
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
