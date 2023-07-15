<?php

namespace App\Orchid\Screens;

use App\Models\Secteur;
use App\Models\SousSecteur;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;

class SousSecteurScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Sous-Secteur';
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
            ->route('platform.sous-secteur.list')
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
            Layout::rows([
                Input::make('sous_secteur.intitule')
                    ->title('Intitule')
                    ->placeholder('Entrer un intitule')
                    ->horizontal()
                    ->required(),

                Relation::make('sous_secteur.secteur_id')
                    ->title('Secteur activité')
                    ->horizontal()
                    ->fromModel(Secteur::class, 'id')
                    ->displayAppend('full')
                    ->required(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])->title('Engistrer un centre interet'),
        ];
    }

    public function register(Request $request, SousSecteur $centre)
    {
        $centre->fill($request->get('sous_secteur'))->save();

        Alert::info('Le sous-secteur a été créé avec susscès.');

        return redirect()->route('platform.sous-secteur');
    }
}
