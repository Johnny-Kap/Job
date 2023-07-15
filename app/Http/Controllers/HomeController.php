<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\ApplyJob;
use App\Models\Job;
use App\Models\JobFavori;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
=======
use App\Models\Job;
use App\Models\JobFavori;
use App\Models\User;
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


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

<<<<<<< HEAD
        $jobs = Job::where('etat', 1)->withCount(['job_favoris' => function (Builder $query) {
            if (Auth::user() == null) {
                $my_id = '';
            } else {
                $my_id = Auth::user()->id;
            }

            $query->where('user_id', $my_id);
        }])->take(2)->get();
=======
        $jobs = Job::where('etat', 1)->take(2)->get();
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad

        $jobs_other = Job::where('etat', 1)->take(2)->pluck('id');

        $fav_count = JobFavori::whereIn('job_id', $jobs_other)->where('user_id', $my_id)->count();

        $companies = User::take(2)->where('is_enterprise', 1)->get();

<<<<<<< HEAD
        return view('home', compact('jobs_count', 'companies_count', 'jobs', 'companies', 'fav_count'));
=======
        return view('home', compact('jobs_count', 'companies_count', 'jobs', 'companies','fav_count'));
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
<<<<<<< HEAD

        $jobs_count = Job::where('etat', 1)->count();

        $companies_count = User::where('is_enterprise', 1)->count();

        $members_count = User::where('is_enterprise', 0)->count();

        $apply_job_count = ApplyJob::count();

        return view('about', compact('jobs_count', 'companies_count', 'members_count', 'apply_job_count'));
=======
        return view('about');
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
    }
}
