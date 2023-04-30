<?php

namespace App\Orchid\Screens;

use App\Models\TypeJob;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class TypeJobScreen extends Screen
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
        return 'Ajouter un type de Job';
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
                ->route('platform.typejob.list')
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
                Input::make('typejob.titre')
                    ->title('Le titre')
                    ->placeholder('Entrer un titre')
                    ->horizontal()
                    ->required(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])->title('Engistrer un genre'),
        ];
    }

    public function register(Request $request, TypeJob $typejob)
    {
        $typejob->fill($request->get('typejob'))->save();

        Alert::info('Le Type de job a été créé avec susscès.');

        return redirect()->route('platform.typejob');
    }
}
