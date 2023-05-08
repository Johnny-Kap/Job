<?php

use App\Models\Job;
use App\Models\JobFavori;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

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

    return view('welcome', compact('jobs', 'companies', 'jobs_count', 'companies_count','fav_count'));

})->name('welcome');

Auth::routes(['verify' => true]);

//Entreprise
Route::get('/entreprise/home', [App\Http\Controllers\EntrepriseController::class, 'index'])->name('entreprise.home')->middleware('is_enterprise');
Route::get('/entreprise/contact', [App\Http\Controllers\EntrepriseController::class, 'contact'])->name('entreprise.contact')->middleware('is_enterprise');
Route::get('/entreprise/about', [App\Http\Controllers\EntrepriseController::class, 'about'])->name('entreprise.about')->middleware('is_enterprise');

//Poster un job par une entreprise
Route::get('entreprise/post-job', [App\Http\Controllers\JobController::class, 'showPostJob'])->name('entreprise.post.job')->middleware('is_enterprise');
Route::post('entreprise/post-job/added', [App\Http\Controllers\JobController::class, 'create'])->name('entreprise.postjob.add');
Route::get('entreprise/post-job/submited', [App\Http\Controllers\JobController::class, 'showSubmit'])->name('entreprise.post.job.submit')->middleware('is_enterprise');

//All route for profil enterprise
Route::get('entreprise/my-profil', [App\Http\Controllers\EntrepriseController::class, 'showMyProfil'])->name('entreprise.profil')->middleware('is_enterprise');
Route::get('entreprise/my-setting', [App\Http\Controllers\EntrepriseController::class, 'showSetting'])->name('entreprise.setting')->middleware('is_enterprise');
Route::post('entreprise/password/changed', [App\Http\Controllers\EntrepriseController::class, 'changePassword'])->name('entreprise.password.change');
Route::get('entreprise/gestion-des-emplois', [App\Http\Controllers\EntrepriseController::class, 'showMyJobs'])->name('entreprise.jobs.manage')->middleware('is_enterprise');
Route::post('entreprise/job/changed-on/etat/{id}', [App\Http\Controllers\EntrepriseController::class, 'changeEtatJobOn'])->name('entreprise.etat.job.change.on');
Route::post('entreprise/job/changed-off/etat/{id}', [App\Http\Controllers\EntrepriseController::class, 'changeEtatJobOff'])->name('entreprise.etat.job.change.off');
Route::post('entreprise/my-profil/edited', [App\Http\Controllers\EntrepriseController::class, 'store'])->name('entreprise.profil.edited');
Route::get('entreprise/gestion-des-candidature', [App\Http\Controllers\EntrepriseController::class, 'showMyCandidat'])->name('entreprise.candidature.manage')->middleware('is_enterprise');
Route::post('entreprise/photo-changed', [App\Http\Controllers\EntrepriseController::class, 'photoEdited'])->name('entreprise.photo.change');

//Consulte profil by enterprise
Route::get('entreprise/consulter-profil', [App\Http\Controllers\EntrepriseController::class, 'showProfil'])->name('entreprise.consulte.profil')->middleware('is_enterprise');
Route::get('/entreprise/profil-detail/{id}', [App\Http\Controllers\EntrepriseController::class, 'showProfilDetail'])->name('entreprise.profil.detail')->middleware('is_enterprise');
Route::get('entreprise/resultat-recherche', [App\Http\Controllers\EntrepriseController::class, 'searchProfil'])->name('entreprise.profil.search')->middleware('is_enterprise');

//Candidat
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

//All routes of my profil
Route::get('my-profil', [App\Http\Controllers\CandidatController::class, 'index'])->name('candidat.my-profil')->middleware('auth');
Route::get('my-setting', [App\Http\Controllers\CandidatController::class, 'showSetting'])->name('candidat.my-setting')->middleware('auth');
Route::post('edited', [App\Http\Controllers\CandidatController::class, 'update'])->name('candidat.edited.profile');
Route::post('edited/email', [App\Http\Controllers\CandidatController::class, 'resetEmail'])->name('candidat.edited.email');
Route::post('my-setting/change-password', [App\Http\Controllers\CandidatController::class, 'changePassword'])->name('candidat.password.change');
Route::get('gestion-des-candidatures', [App\Http\Controllers\CandidatController::class, 'showJobApplication'])->name('candidat.gestion-candidatures')->middleware('auth');
Route::get('gestion-des-favoris', [App\Http\Controllers\CandidatController::class, 'showFavoris'])->name('candidat.gestion-favoris')->middleware('auth');
Route::post('my-setting/change-password', [App\Http\Controllers\CandidatController::class, 'changePassword'])->name('candidat.password.change');
Route::post('my-setting/change-photo', [App\Http\Controllers\CandidatController::class, 'photoEdited'])->name('candidat.photo.change');

//All routes of Job
Route::get('job', [App\Http\Controllers\JobController::class, 'index'])->name('candidat.job.consulter');
Route::get('job/detail/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('candidat.job.detail');
Route::get('search/resultat', [App\Http\Controllers\JobController::class, 'search'])->name('candidat.search.job');
Route::get('secteur-activite', [App\Http\Controllers\JobController::class, 'secteurActivite'])->name('candidat.job.secteur');
Route::get('secteur-activite/{id}', [App\Http\Controllers\JobController::class, 'secteurActiviteShow'])->name('candidat.job.list.secteur');

//All routes of job favoris
Route::post('job-favori/create/{id}', [App\Http\Controllers\JobFavoriController::class, 'create'])->name('candidat.job.favori.create')->middleware('auth');
Route::post('job-favori/profil/create/{id}', [App\Http\Controllers\JobFavoriController::class, 'createInProfil'])->name('candidat.job.favori.profil.create')->middleware('auth');

//All routes of enterprises consultation
Route::get('entreprises-consulter', [App\Http\Controllers\CandidatController::class, 'showEnterprises'])->name('candidat.entreprise.consulter');
Route::get('entreprises/detail/{id}', [App\Http\Controllers\CandidatController::class, 'showEnterprisesDetail'])->name('candidat.entreprise.detail');

//Route of  apply job
Route::post('job/detail/apply/{id}', [App\Http\Controllers\ApplyJobController::class, 'create'])->name('candidat.job.apply')->middleware('auth');
Route::get('job/apply', [App\Http\Controllers\ApplyJobController::class, 'apply'])->name('candidat.after.apply');
Route::post('job/apply/supp/{id}', [App\Http\Controllers\ApplyJobController::class, 'destroy'])->name('candidat.job.apply.supp')->middleware('auth');

//All routes for resume
Route::get('resume', [App\Http\Controllers\CandidatController::class, 'showMyResume'])->name('candidat.resume.show');
Route::post('resume/eduaction/added', [App\Http\Controllers\EducationController::class, 'create'])->name('candidat.resume.educ.add');
Route::post('resume/eduaction/update/{id}', [App\Http\Controllers\EducationController::class, 'update'])->name('candidat.resume.educ.update');
Route::post('resume/information/added', [App\Http\Controllers\InformationController::class, 'create'])->name('candidat.resume.info.add');
Route::post('resume/information/update/{id}', [App\Http\Controllers\InformationController::class, 'update'])->name('candidat.resume.info.update');
Route::post('resume/experience/added', [App\Http\Controllers\ExperienceController::class, 'create'])->name('candidat.resume.expe.add');
Route::post('resume/experience/update/{id}', [App\Http\Controllers\ExperienceController::class, 'update'])->name('candidat.resume.expe.update');
Route::post('resume/competence/added', [App\Http\Controllers\CompetenceController::class, 'create'])->name('candidat.resume.compe.add');
Route::post('resume/competence/update/{id}', [App\Http\Controllers\CompetenceController::class, 'update'])->name('candidat.resume.compe.update');
Route::post('resume/langue/added', [App\Http\Controllers\LangueController::class, 'create'])->name('candidat.resume.lang.add');
Route::post('resume/langue/update/{id}', [App\Http\Controllers\LangueController::class, 'update'])->name('candidat.resume.lang.update');
