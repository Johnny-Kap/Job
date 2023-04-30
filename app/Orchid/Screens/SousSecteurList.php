<?php

namespace App\Orchid\Screens;

use App\Models\SousSecteur;
use App\Orchid\Layouts\SousSecteurListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SousSecteurList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {

        $sous_secteurs = SousSecteur::paginate();

        return [
            'sous_secteur' => $sous_secteurs
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des sous-secteurs activité';
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
                ->route('platform.sous-secteur')
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
            SousSecteurListLayout::class
        ];
    }
}
