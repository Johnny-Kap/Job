<?php

namespace App\Orchid\Layouts;

use App\Models\ApplyJob;
use Illuminate\Http\Client\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class ApplyJobListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'apply_job';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'ID de candidature'),
            TD::make('job_id', 'Titre du Job')->render(function ($apply_job) {
                return $apply_job->jobs->titre;
            }),
            TD::make('name', 'Nom du candidat')->render(function ($apply_job) {
                return $apply_job->users->name;
            }),
            TD::make('prenom', 'Prénom du candidat')->render(function ($apply_job) {
                return $apply_job->users->prenom;
            }),
            TD::make('validated', 'Candidature')->render(function ($apply_job) {
                if($apply_job->validated == 1){
                    return 'Validée';
                }else{
                    return 'Non validé';
                }
            }),
            TD::make('created_at', 'Date de candidature'),
            // TD::make('Select')
            //     ->render(function (ApplyJob $jobapply) {
            //         return Link::make('Show')->route('platform.applyjob', $jobapply);
            //     }),
            TD::make('Valider')
                ->alignCenter()
                ->render(function (ApplyJob $applyjob) {
                    return ModalToggle::make('')
                        ->icon('pencil')
                        ->modal('editApply', [
                            'applyjob' => $applyjob
                        ])
                        ->method('edit', [
                            'applyjob' => $applyjob->id
                        ]);
                }),

            // TD::make('Voir le CV')
            // ->alignCenter()
            // ->render(
            //     function (ApplyJob $apply_job) {
            //         return ModalToggle::make('')
            //             ->icon('user')
            //             ->modal('showUser')->render(function ($apply_job) {
            //                 return $apply_job->users->prenom;
            //             });
            //     }
            // ),

            TD::make('Voir CV')
                ->render(function ($apply_job) {
                    return Link::make('Consulter')
               ->route('platform.applyjob', $apply_job);
            }),

        ];
    }


}
