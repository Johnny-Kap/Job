<?php

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
    return view('welcome');
});

Auth::routes();

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
Route::post('entreprise/my-profil/edited', [App\Http\Controllers\EntrepriseController::class, 'store'])->name('entreprise.profil.edited');
Route::get('entreprise/gestion-des-candidature', [App\Http\Controllers\EntrepriseController::class, 'showMyCandidat'])->name('entreprise.candidature.manage')->middleware('is_enterprise');

//Consulte profil by enterprise
Route::get('entreprise/consulter-profil', [App\Http\Controllers\EntrepriseController::class, 'showProfil'])->name('entreprise.consulte.profil')->middleware('is_enterprise');
Route::get('/entreprise/profil-detail/{id}', [App\Http\Controllers\EntrepriseController::class, 'showProfilDetail'])->name('entreprise.profil.detail')->middleware('is_enterprise');

//Candidat
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

//All routes of my profil
Route::get('my-profil', [App\Http\Controllers\CandidatController::class, 'index'])->name('candidat.my-profil')->middleware('auth');
Route::get('my-setting', [App\Http\Controllers\CandidatController::class, 'showSetting'])->name('candidat.my-setting')->middleware('auth');
Route::post('edited', [App\Http\Controllers\CandidatController::class, 'update'])->name('candidat.edited.profile');
Route::post('my-setting/change-password', [App\Http\Controllers\CandidatController::class, 'changePassword'])->name('candidat.password.change');
Route::get('gestion-des-emplois', [App\Http\Controllers\CandidatController::class, 'showJobApplication'])->name('candidat.gestion-emplois')->middleware('auth');
Route::post('my-setting/change-password', [App\Http\Controllers\CandidatController::class, 'changePassword'])->name('candidat.password.change');

//All routes of Job
Route::get('job', [App\Http\Controllers\JobController::class, 'index'])->name('candidat.job.consulter');
Route::get('job/detail/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('candidat.job.detail');
Route::get('search/resultat', [App\Http\Controllers\JobController::class, 'search'])->name('candidat.search.job');

//Route of  apply job
Route::post('job/detail/apply/{id}', [App\Http\Controllers\ApplyJobController::class, 'create'])->name('candidat.job.apply')->middleware('auth');
Route::get('job/apply', [App\Http\Controllers\ApplyJobController::class, 'apply'])->name('candidat.after.apply');

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