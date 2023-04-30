<?php

namespace App\Orchid\Screens;

use App\Models\ApplyJob;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Screen;

class ApplyJobScreen extends Screen
{
    public $jobapply;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(ApplyJob $jobapply): iterable
    {

        return [
            'jobapply' => $jobapply
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Apply Job';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Label::make('label')
            ->title(),
        ];
    }
}
