<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SousSecteurListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'sous_secteur';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('intitule', 'Titre'),
            TD::make('secteur', 'Titre secteur activite')->render(function($sous_secteurs){
                return $sous_secteurs->secteurs->intitule;
            }),
            TD::make('created_at', 'Date de création'),
        ];
    }
}
