<?php

namespace App\Orchid\Screens;

use App\Models\Secteur;
use App\Orchid\Layouts\SecteurListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SecteurList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $secteurs = Secteur::paginate();

        return [
            'secteur' => $secteurs
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des secteurs activités';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Ajouter')
                    ->icon('plus')
                    ->route('platform.secteur')
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
            SecteurListLayout::class
        ];
    }
}
