<?php

namespace App\Orchid\Screens;

use App\Models\Job;
use App\Orchid\Layouts\JobListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class JobList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {

        $job = Job::paginate();

        return [
            'job' => $job
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des offres d\'emploi';
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
                ->route('platform.job')
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
            JobListLayout::class,
        ];
    }
}
