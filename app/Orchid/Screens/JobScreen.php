<?php

namespace App\Orchid\Screens;

use App\Models\Job;
use App\Models\Secteur;
use App\Models\SousSecteur;
use App\Models\TypeJob;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Relation;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Alert;

class JobScreen extends Screen
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
        return 'Enregistrer une nouvelle offre';
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
                ->route('platform.job.list')
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
                Input::make('job.titre')
                    ->title('Titre')
                    ->placeholder('Entrer un titre')
                    ->horizontal()
                    ->required(),

                Quill::make('job.description')
                    ->title('Description')
                    ->placeholder('Entrer une description')
                    ->horizontal()
                    ->required(),

                Input::make('job.email_contact')
                    ->title('Email contact')
                    ->placeholder('Entrer une adresse e-mail de contact')
                    ->horizontal(),

                Input::make('job.dateline')
                    ->type('date')
                    ->title('Date expiration')
                    ->value('2023-08-19')
                    ->horizontal()
                    ->required(),

                Input::make('job.salaire_min')
                    ->title('Salaire min')
                    ->placeholder('Entrer un salaire min')
                    ->horizontal(),

                Input::make('job.salaire_max')
                    ->title('Salaire max')
                    ->placeholder('Entrer un salaire max')
                    ->horizontal(),

                Select::make('job.experience')
                    ->title('Experience')
                    ->options([
                        '6M Experience'   => '6M Experience',
                        '9M Experience' => '9M Experience',
                        '1Y Experience' => '1Y Experience',
                        '2Y Experience' => '2Y Experience',
                        '5Y Experience' => '5Y Experience',
                    ])
                    ->horizontal()
                    ->required(),

                Select::make('job.qualification')
                    ->title('Qualification')
                    ->options([
                        'Bac +2'   => 'Bac +2',
                        'Bac +3 - Licence' => 'Bac +3 - Licence',
                        'Bac +5 - Master / Ingénieur' => 'Bac +5 - Master / Ingénieur',
                    ])
                    ->horizontal()
                    ->required(),

                Select::make('job.contrat')
                    ->title('Type de contrat')
                    ->options([
                        'CDI'   => 'CDI',
                        'CDD' => 'CDD',
                    ])
                    ->horizontal()
                    ->required(),

                Select::make('job.genre_id')
                    ->title('Genre')
                    ->options([
                        'Homme/Femme'   => 'Homme/Femme',
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ])
                    ->horizontal()
                    ->required(),

                Input::make('job.adresse')
                    ->title('Adresse')
                    ->placeholder('Entrer une adresse')
                    ->horizontal()
                    ->required(),

                Input::make('job.tel')
                    ->title('Téléphone')
                    ->placeholder('Entrer un numéro de téléphone')
                    ->horizontal()
                    ->required(),

                Input::make('job.site_internet')
                    ->title('Site internet')
                    ->placeholder('Entrer un site internet')
                    ->horizontal(),

                Relation::make('job.secteur_id')
                    ->title('Secteur activité')
                    ->horizontal()
                    ->fromModel(Secteur::class, 'id')
                    ->displayAppend('full')
                    ->required(),

                Relation::make('job.sous_secteur_id')
                    ->title('Secteur-sous activité')
                    ->horizontal()
                    ->fromModel(SousSecteur::class, 'id')
                    ->displayAppend('full')
                    ->required(),

                Relation::make('job.type_job_id')
                    ->title('Type emploi')
                    ->horizontal()
                    ->fromModel(TypeJob::class, 'id')
                    ->displayAppend('full')
                    ->required(),

                Select::make('job.etat')
                    ->title('Disponible')
                    ->options([
                        1   => 'Disponible',
                        0 => 'Indisponible',
                    ])
                    ->horizontal()
                    ->required(),

                Select::make('job.user_id')
                    ->title('Créé par')
                    ->options([
                        Auth::user()->id => Auth::user()->name . ' (Moi)',
                    ])
                    ->horizontal()
                    ->required(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])
        ];
    }

    public function register(Request $request, Job $jobs)
    {
        $jobs->fill($request->get('job'))->save();

        Alert::info('Offre emploi a été créée avec succès.');

        return redirect()->route('platform.job');
    }
}
