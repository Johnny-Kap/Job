<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class JobListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'job';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('titre', 'Titre'),
            TD::make('adresse', 'Adresse'),
            TD::make('dateline', 'Date expiration'),
            TD::make('created_at', 'Date de création'),
            TD::make('etat', 'Etat')->render(function ($job) {
                if($job->etat == 1){
                    return 'Disponible';
                }else{
                    return 'Indisponible';
                }
            }),
            TD::make('Voir offre')
                ->render(function ($job) {
                    return Link::make('')
                    ->icon('eye')
                    ->route('platform.job.detail', $job);
            }),
            TD::make('Modifier')
                ->render(function ($job) {
                    return Link::make('')
                    ->icon('pencil')
                    ->route('platform.job.edit', $job->id);
            }),
        ];
    }
}
