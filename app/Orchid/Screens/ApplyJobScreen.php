<?php

namespace App\Orchid\Screens;

use App\Models\ApplyJob;
use App\Models\Competence;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Information;
use App\Models\Langue;
use App\Models\User;
use Illuminate\Support\Facades\Lang;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

class ApplyJobScreen extends Screen
{
    public $jobapply;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(ApplyJob $apply_job): iterable
    {

        $user = User::find($apply_job->users->id);

        $infos = Information::where('user_id', $user->id)->get();

        $infos_count = Information::where('user_id', $user->id)->count();

        $formation = Education::where('user_id', $user->id)->get();

        $formation_count = Education::where('user_id', $user->id)->count();

        $experience = Experience::where('user_id', $user->id)->get();

        $experience_count = Experience::where('user_id', $user->id)->count();

        $compentence = Competence::where('user_id', $user->id)->get();

        $compentence_count = Competence::where('user_id', $user->id)->count();

        $langue = Langue::where('user_id', $user->id)->get();

        $langue_count = Langue::where('user_id', $user->id)->count();

        return [
            // 'apply_job' => $apply_job,
            'user' => $user,
            'infos' => $infos,
            'infos_count' => $infos_count,
            'formation' => $formation,
            'formation_count' => $formation_count,
            'experience' => $experience,
            'experience_count' => $experience_count,
            'compentence' => $compentence,
            'compentence_count' => $compentence_count,
            'langue'=> $langue,
            'langue_count' => $langue_count,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'CV du candidat';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Liste')
                ->icon('user')
                ->route('platform.applyjob.list')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::legend('user', [
                Sight::make('Nom')->render(function($user){
                    return $user->name;
                }),
                Sight::make('Prénom')->render(function($user){
                    return $user->prenom;
                }),
                Sight::make('E-mail')->render(function($user){
                    return $user->email;
                }),
                Sight::make('Tel')->render(function($user){
                    return $user->tel;
                }),
                Sight::make('Profession')->render(function($user){
                    if($user->profession == null){
                        return 'Aucune profession';
                    }else{
                        return $user->profession;
                    }
                }),
                Sight::make('Adresse')->render(function($user){
                    if($user->Adresse == null){
                        return 'Aucune adresse';
                    }else{
                        return $user->Adresse;
                    }
                }),
                Sight::make('Date de naissance')->render(function($user){
                    return $user->date_naiss;
                }),
                Sight::make('Secteur activité')->render(function($user){
                    return $user->secteurs->intitule;
                }),
                Sight::make('Description du profil')->render(function($user){
                    if($user->description == null){
                        return 'Aucune description';
                    }else{
                        return $user->description;
                    }
                }),
                // Sight::make('Formation')->render(function($user){
                //     if($user->educations->nom_diplome == null){
                //         return 'Aucune description';
                //     }else{
                //         return $user->educations->nom_diplome;
                //     }
                // }),
            ]),

            Layout::view('cv'),
        ];
    }
}
