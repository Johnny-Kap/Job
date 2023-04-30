<?php

namespace App\Orchid\Screens;

use App\Models\TypeJob;
use App\Orchid\Layouts\TypeJobListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class TypeJobList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $Typejob = TypeJob::paginate();

        return [
            'typejob' => $Typejob
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des types de Job';
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
                ->route('platform.typejob')
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
            TypeJobListLayout::class
        ];
    }
}
