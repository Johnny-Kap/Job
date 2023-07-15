<?php

namespace App\Orchid\Screens;

use App\Models\Job;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

class JobDetailScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Job $job): iterable
    {

        $jobDetail = Job::find($job->id);

        return [
            'jobDetail' => $jobDetail
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Detail de l\'offre d\'emploi';
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
                ->icon('list')
                ->route('platform.job.list')
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
            Layout::legend('jobDetail', [
                Sight::make('Titre')->render(function($jobDetail){
                    return $jobDetail->titre;
                }),
                Sight::make('Description')->render(function($jobDetail){
                    return $jobDetail->description;
                }),
                Sight::make('E-mail de contact')->render(function($jobDetail){
                    return $jobDetail->email_contact;
                }),
                Sight::make('Date limite')->render(function($jobDetail){
                    return $jobDetail->dateline;
                }),
                Sight::make('Salaire min')->render(function($jobDetail){
                    return $jobDetail->salaire_min;
                }),
                Sight::make('Salaire max')->render(function($jobDetail){
                    if($jobDetail->salaire_max == null){
                        return 'Aucun salaire max';
                    }else{
                        return $jobDetail->salaire_max;
                    }
                }),
                Sight::make('Experience')->render(function($jobDetail){
                    return $jobDetail->experience;
                }),
                Sight::make('Qualification')->render(function($jobDetail){
                    return $jobDetail->qualification;
                }),
                Sight::make('Type de contrat')->render(function($jobDetail){
                    return $jobDetail->contrat;
                }),
                Sight::make('Genre')->render(function($jobDetail){
                    return $jobDetail->genre_id;
                }),
                Sight::make('Adresse')->render(function($jobDetail){
                    if($jobDetail->adresse == null){
                        return 'Aucune adresse';
                    }else{
                        return $jobDetail->adresse;
                    }
                }),
                Sight::make('Téléphone')->render(function($jobDetail){
                    if($jobDetail->tel == null){
                        return 'Aucun numéro téléphone';
                    }else{
                        return $jobDetail->tel;
                    }
                }),
                Sight::make('Site internet')->render(function($jobDetail){
                    if($jobDetail->site_internet == null){
                        return 'Aucun site internet';
                    }else{
                        return $jobDetail->site_internet;
                    }
                }),
                Sight::make('Secteur activité')->render(function($jobDetail){
                    return $jobDetail->secteurs->intitule;
                }),
                Sight::make('Sous-secteur activité')->render(function($jobDetail){
                    return $jobDetail->sous_secteurs->intitule;
                }),
                Sight::make('Type emploi')->render(function($jobDetail){
                    return $jobDetail->type_jobs->titre;
                }),
                Sight::make('Disponibilité')->render(function($jobDetail){
                    if($jobDetail->etat == 1){
                        return 'Disponible';
                    }else{
                        return 'Indisponible';
                    }
                }),
                Sight::make('Créé par')->render(function($jobDetail){
                    return $jobDetail->users->name;
                }),
            ]),
        ];
    }
}
