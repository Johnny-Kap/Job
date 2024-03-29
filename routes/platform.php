<?php

declare(strict_types=1);

use App\Models\Job;
use App\Orchid\Screens\ApplyJobList;
use App\Orchid\Screens\ApplyJobScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\GenreScreen;
use App\Orchid\Screens\GenreList;
use App\Orchid\Screens\JobDetailScreen;
use App\Orchid\Screens\JobEditScreen;
use App\Orchid\Screens\JobList;
use App\Orchid\Screens\JobScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\SecteurScreen;
use App\Orchid\Screens\SecteurList;
use App\Orchid\Screens\SousSecteurList;
use App\Orchid\Screens\SousSecteurScreen;
use App\Orchid\Screens\TypeJobList;
use App\Orchid\Screens\TypeJobScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example screen'));

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Secteur & sous-secteur
Route::screen('/secteur-activite', SecteurList::class)->name('platform.secteur.list');
Route::screen('/sous-secteur-activite', SousSecteurList::class)->name('platform.sous-secteur.list');
Route::screen('/genre', GenreList::class)->name('platform.genre.list');
Route::screen('/genre/add', GenreScreen::class)->name('platform.genre');
Route::screen('/secteur-activite/add', SecteurScreen::class)->name('platform.secteur');
Route::screen('/sous-secteur-activite/add', SousSecteurScreen::class)->name('platform.sous-secteur');

//Type Job
Route::screen('/typejob', TypeJobList::class)->name('platform.typejob.list');
Route::screen('/typejob/add', TypeJobScreen::class)->name('platform.typejob');

//Apply Job
Route::screen('/applyjob', ApplyJobList::class)->name('platform.applyjob.list');
Route::screen('/applyjob/view/{apply_job}', ApplyJobScreen::class)->name('platform.applyjob');

//Job
Route::screen('/job', JobList::class)->name('platform.job.list');
Route::screen('/job/add', JobScreen::class)->name('platform.job');
Route::screen('/job/view/{job}', JobDetailScreen::class)->name('platform.job.detail');
Route::screen('/job/edit/{job}', JobEditScreen::class)->name('platform.job.edit');

//Route::screen('idea', Idea::class, 'platform.screens.idea');
