<?php

namespace App\Orchid\Screens;

use App\Models\ApplyJob;
use App\Models\User;
use App\Orchid\Layouts\ApplyJobListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ApplyJobList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {

        $apply_job = ApplyJob::paginate();

        return [
            'apply_job' => $apply_job,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des candidatures';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            // Link::make('Ajouter')
            //     ->icon('plus')
            //     ->route('platform.applyjob')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [

            ApplyJobListLayout::class,

            Layout::modal('editApply', [
                Layout::rows([
                    Select::make('validated')
                        ->options([
                            '0'   => 'Non validé',
                            '1' => 'Validé',
                        ])
                ]),
            ])
                ->title('Valider la demande')
                ->applyButton('Save'),

            Layout::modal('showUser', [
                Layout::legend('apply_job', [
                    Sight::make('id')->render(function($apply_job){
                        return '';
                    })

                ]),
            ])
                ->title('CV'),

        ];
    }

    public function edit(Request $request, ApplyJob $apply_job)
    {
        // Update the category
        $applyjob = ApplyJob::find($apply_job->id);
        $applyjob->validated = $request->get('validated');
        $applyjob->save();
    }

    public function show(Request $request, ApplyJob $apply_job)
    {
        $applyjobUser = User::find($apply_job->users->id);
        // $applyjob->validated = $request->get('validated');
        // $applyjob->save();
    }
}
