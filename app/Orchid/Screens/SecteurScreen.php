<?php

namespace App\Orchid\Screens;

use App\Models\Secteur;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class SecteurScreen extends Screen
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
        return 'secteur';
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
            ->route('platform.secteur.list')
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
                Input::make('secteur.intitule')
                    ->title('Intitule')
                    ->placeholder('Entrer un intitule')
                    ->horizontal()
                    ->required(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])->title('Engistrer un secteur'),
        ];
    }

    public function register(Request $request, Secteur $genres)
    {
        $genres->fill($request->get('secteur'))->save();

        Alert::info('Le secteur a été créé avec susscès.');

        return redirect()->route('platform.secteur');
    }
}
