<div class="container-fluid" style="background-color: white; padding:20px; border-radius:10px;">
    <div class="row">
        <b>
            <h2>Autres informations :</h2><br>
        </b>

        <b>
            <h4>Informations personnelles</h4>
        </b>
        @if ($infos_count == 0)
            <span>Aucune information</span><br><br>
        @else
            @foreach ($infos as $item)
                <span>
                    <b>-> Le plus haut niveau d'étude :</b> {{ $item->high_level_education }} <br>
                    <b>-> Nombre total d'expérience :</b> {{ $item->total_year_experience }} <br><br>
                </span>
            @endforeach
        @endif

        <b>
            <h4>Formation</h4>
        </b>
        @if ($formation_count == 0)
            <span>Aucune formation</span><br><br>
        @else
            @foreach ($formation as $item)
                <span>
                    <b>-> Nom diplome :</b> {{ $item->nom_diplome }} <br>
                    <b>Ecole :</b> {{ $item->ecole }} <br>
                    <b>Date de debut :</b> {{ $item->date_debut }} <br>
                    <b>Date de fin :</b> {{ $item->date_fin }} <br>
                    {{-- <b>Niveau :</b> {{$item->niveau}} | --}}
                    <b>Description de la formation :</b> {{ $item->description }} <br><br>
                </span>
            @endforeach
        @endif

        <b>
            <h4>Expériences professionnelles</h4>
        </b>
        @if ($experience_count == 0)
            <span>Aucune expérience</span><br><br>
        @else
            @foreach ($experience as $item)
                <span>
                    <b>-> Poste :</b> {{ $item->poste }} <br>
                    <b>Nom entreprise :</b> {{ $item->nom_entreprise }} <br>
                    <b>Adresse:</b> {{ $item->adresse }} <br>
                    <b>Date de debut :</b> {{ $item->date_debut }} <br>
                    <b>Date de fin :</b> {{ $item->date_fin }} <br>
                    {{-- <b>Niveau :</b> {{$item->niveau}} | --}}
                    <b>Description de l'expérience :</b> {{ $item->description }} <br><br>
                </span>
            @endforeach
        @endif

        <b>
            <h4>Compétences</h4>
        </b>
        @if ($compentence_count == 0)
            <span>Aucune compétence</span><br><br>
        @else
            @foreach ($compentence as $item)
                <span>
                    <b>-> Titre :</b> {{ $item->intitule }} <br>
                    <b>Niveau :</b> {{ $item->niveau }} <br><br>
                </span>
            @endforeach
        @endif

        <b>
            <h4>Langues</h4>
        </b>
        @if ($langue_count == 0)
            <span>Aucune langue</span><br><br>
        @else
            @foreach ($langue as $item)
                <span>
                    <b>-> Titre :</b> {{ $item->intitule }} <br>
                    <b>Niveau :</b> {{ $item->niveau }} <br><br>
                </span>
            @endforeach
        @endif
    </div>
</div>
