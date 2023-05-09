@include('includes.head')

@include('includes.styles')

@php

    use App\Models\Genre;
    use App\Models\Secteur;

    $genres = Genre::all();

    $secteurs = Secteur::all();
@endphp

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-primary">S'enregistrer</h2>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"> Accueil </a></li>
                    <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> S'enregistrer </span></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--=================================
  inner banner -->

<!--=================================
  Register -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12">
                <div class="login-register">
                    <div class="section-title">
                        <h4 class="text-center">Créez votre compte</h4>
                    </div>
                    <fieldset>
                        <legend class="px-2">Choisissez votre type de compte</legend>
                        <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
                            <li class="nav-item me-4">
                                <a class="nav-link active" data-bs-toggle="tab" href="#candidate" role="tab">
                                    <div class="d-flex">
                                        <div class="tab-icon">
                                            <i class="flaticon-users"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Candidat</h6>
                                            <p class="mb-0">Je veux découvrir des entreprises.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" data-bs-toggle="tab" href="#employer" role="tab">
                                    <div class="d-flex">
                                        <div class="tab-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Entreprise</h6>
                                            <p class="mb-0">Je veux attirer les meilleurs talents.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </fieldset>
                    <div class="tab-content">
                        <div class="tab-pane active" id="candidate" role="tabpanel">
                            <form class="mt-4" method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12 select-border">
                                        <label class="form-label" for="genre">Vous etes :</label>
                                        <select class="form-control basic-select" name="is_enterprise">
                                                <option value="0" selected="selected">Un candidat</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="Username">Nom *</label>
                                        <input type="text" id="name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="Username">Prénom</label>
                                        <input type="text" id="name"
                                            class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                            value="{{ old('prenom') }}" required>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Adresse E-mail *</label>
                                        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Mot de passe *</label>
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="password2">Confirmer le mot de passe *</label>
                                        <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="phone">Téléphone :</label>
                                        <input type="text" id="tel" name="tel" class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-6 datetimepickers">
                                        <label class="form-label">Date de naissance</label>
                                        <div class="input-group date" id="datetimepicker-01"
                                            data-target-input="nearest">
                                            <input type="text"
                                                class="form-control datetimepicker-input"
                                                value="08/11/1999" name="date_naiss"
                                                data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex"
                                                data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i
                                                        class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-12 select-border">
                                        <label class="form-label" for="genre">Selectionner le genre *:</label>
                                        <select class="form-control basic-select" name="genre">
                                            @foreach ($genres as $item)
                                                <option value="{{$item->id}}" selected="selected">{{$item->titre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-12 select-border">
                                        <label class="form-label" for="sector">Selectionner un secteur d'activité *:</label>
                                        <select class="form-control basic-select" name="secteur">
                                            @foreach ($secteurs as $item)
                                                <option value="{{$item->id}}" selected="selected">{{$item->intitule}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="Remember-02">
                                            <label class="form-check-label" for="Remember-02">
                                                vous acceptez nos conditions générales et notre politique de confidentialité
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary d-block">
                                            Enregistrer
                                        </button>
                                    </div>
                                    <div class="col-md-6 text-md-end mt-2 text-center">
                                        <p>Déjà enregistré ? <a href="{{ route('login') }}"> Se connecter ici</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="employer" role="tabpanel">
                            <form class="mt-4" method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12 select-border">
                                        <label class="form-label" for="genre">Vous etes :</label>
                                        <select class="form-control basic-select" name="is_enterprise">
                                                <option value="1" selected="selected">Une entreprise</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nom de l'entreprise *</label>
                                        <input type="text" name="name" class="form-control" id="Username">
                                    </div>
                                    {{-- <div class="mb-3 col-md-6">
                                        <label class="form-label">prenom de l'entreprise *</label>
                                        <input type="text" name="prenom" class="form-control" id="Username">
                                    </div> --}}
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Adresse E-mail *</label>
                                        <input type="email" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Mot de passe *</label>
                                        <input type="password" name="password" class="form-control" id="Password">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="password2">Confirmer le mot de passe *</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password2">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="phone">Téléphone</label>
                                        <input type="text" class="form-control" name="tel" id="phone">
                                    </div>
                                    <div class="mb-3 col-md-6 datetimepickers">
                                        <label class="form-label">Date de création</label>
                                        <div class="input-group date" id="datetimepicker-01"
                                            data-target-input="nearest">
                                            <input type="text"
                                                class="form-control datetimepicker-input"
                                                value="08/11/1999" name="date_naiss"
                                                data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex"
                                                data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i
                                                        class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-12 select-border">
                                        <label class="form-label" for="sector">Selectionner le secteur d'actvité *:</label>
                                        <select class="form-control basic-select" name="secteur">
                                            @foreach ($secteurs as $item)
                                                <option value="{{$item->id}}" selected="selected">{{$item->intitule}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="mb-3 col-md-12">
                                        <label class="form-label">Genre</label>
                                        <input type="text" name="genre" class="form-control" id="email">
                                    </div> --}}
                                    <div class="mb-3 col-12 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="accepts-02">
                                            <label class="form-check-label" for="accepts-02">
                                                vous acceptez nos conditions générales et notre politique de confidentialité
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary d-block">Enregistrer</button>
                                    </div>
                                    <div class="col-md-6 text-md-end mt-2 text-center">
                                        <a href="{{ route('login') }}">Vous avez déjà un compte?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
  Register -->

@include('includes.scripts')

</body>

</html>
