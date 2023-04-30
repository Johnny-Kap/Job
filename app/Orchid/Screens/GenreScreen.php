<?php

namespace App\Orchid\Screens;

use App\Models\Genre;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Color;

class GenreScreen extends Screen
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
        return 'Genre';
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
                ->route('platform.genre.list')
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
                Input::make('genre.titre')
                    ->title('Le titre')
                    ->placeholder('Entrer un titre')
                    ->horizontal()
                    ->required(),

                Input::make('genre.etat')
                    ->title('Etat')
                    ->horizontal()
                    ->placeholder('Ex : O ou 1')
                    ->required(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])->title('Engistrer un genre'),
        ];
    }

    public function register(Request $request, Genre $genres)
    {
        $genres->fill($request->get('genre'))->save();

        Alert::info('Le genre a été créé avec susscès.');

        return redirect()->route('platform.genre');
    }
}
