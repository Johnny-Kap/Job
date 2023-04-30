<?php

namespace App\Orchid\Screens;

use App\Models\Genre;
use App\Orchid\Layouts\GenreListLayout;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;

class GenreList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $genres = Genre::paginate();

        return [
            'genre' => $genres
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des genres';
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
                ->route('platform.genre')
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
            GenreListLayout::class
        ];
    }
}
