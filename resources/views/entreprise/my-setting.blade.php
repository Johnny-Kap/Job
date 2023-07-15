@extends('layouts.admins-employer')

@section('content')
    <!--=================================
                                                                            inner banner -->
    <div class="header-inner bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="candidates-user-info">
                        <div class="jobber-user-info">
                            <div class="profile-avatar">
                                @if (Auth::user()->image == null)
                                    <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg" alt="">
                                @else
                                    <img class="img-fluid" style="width: 110px; height:120px;"
                                        src="{{ Storage::url(Auth::user()->image) }}" alt="">
                                @endif
                                {{-- <i class="fas fa-pencil-alt"></i> --}}
                            </div>
                            <div class="profile-avatar-info ms-4">
                                <h3>{{ Auth::user()->name }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
                                                                              inner banner -->

    <!--=================================
                                                                              Dashboard Nav -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-job justify-content-center d-flex border-0 pb-3">
                        <div class="mb-4 mb-md-0">
                            <ul class="nav nav-tabs justify-content-center d-flex" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Gérer mon profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Modifier mot de passe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#email" role="tab"
                                        aria-controls="profile" aria-selected="false">Modifier mon email</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#resume" role="tab"
                                        aria-controls="profile" aria-selected="false">Gérer mon CV</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#manage" role="tab"
                                        aria-controls="profile" aria-selected="false">Gérer mes offres d'emploi</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#saved" role="tab"
                                        aria-controls="profile" aria-selected="false">Gérer mes favoris</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Profile -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="user-dashboard-info-box">
                                        <div class="section-title-02 mb-2 d-grid">
                                            <h4>Informations de base</h4>
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <form action="{{ route('entreprise.photo.change') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <label for="formFile" class="form-label">Modifier la photo de
                                                            profil</label>
                                                        <div class="form-group mb-3 col-md-4">
                                                            <input class="form-control" name="file" type="file"
                                                                id="formFile">
                                                        </div>
                                                        <div class="form-group mb-3 col-md-6">
                                                            <button type="submit" class=""
                                                                style="border-color: transparent; background-color:transparent;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <form method="post" action="{{ route('entreprise.profil.edited') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Nom</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                                {{-- <div class="form-group mb-3 col-md-6 datetimepickers">
                                                    <label class="form-label">Date de création</label>
                                                    <div class="input-group date" id="datetimepicker-01"
                                                        data-target-input="nearest">
                                                        <input type="text" name="date_creation"
                                                            class="form-control datetimepicker-input"
                                                            value="{{ Auth::user()->date_naiss }}"
                                                            data-target="#datetimepicker-01">
                                                        <div class="input-group-append d-flex"
                                                            data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i
                                                                    class="far fa-calendar-alt"></i></div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="mb-2">Date de création</label>
                                                    <input type="datetime-local" class="form-control"
                                                        value="{{ Auth::user()->date_naiss }}" name="date_creation">
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Téléphone</label>
                                                    <input type="text" name="tel" class="form-control"
                                                        value="{{ Auth::user()->tel }}">
                                                </div>
                                                {{-- <div class="form-group mb-3 col-md-6">
                                                    <label class="d-block mb-3">Gender</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="genre"
                                                            id="customRadio1" value="1"
                                                            checked="{{ Auth::user()->genres->etat == '0' ? 'checked' : '' }}">
                                                        <label class="form-check-label" for="customRadio1">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="genre"
                                                            id="customRadio2" value="2"
                                                            checked="{{ Auth::user()->genres->etat == '1' ? 'checked' : '' }}">
                                                        <label class="form-check-label" for="customRadio2">Female</label>
                                                    </div>
                                                </div> --}}
                                                <div class="form-group mb-3 col-md-6 select-border">
                                                    <label class="form-label">Secteur d'activité</label>
                                                    <select name="secteur" class="form-control basic-select">
                                                        @foreach ($secteurs as $item)
                                                            <option value="{{ $item->id }}">{{ $item->intitule }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3 col-md-6 select-border">
                                                    <label class="form-label">Sous-secteur d'activité</label>
                                                    <select name="sous_secteur" class="form-control basic-select">
                                                        @foreach ($sous_secteurs as $item)
                                                            <option value="{{ $item->id }}">{{ $item->intitule }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                {{-- <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Salary</label>
                                                    <input type="text" class="form-control" value="$33,000">
                                                </div> --}}
                                                <div class="form-group mb-3 col-md-12">
                                                    <label class="mb-2">Description</label>
                                                    <textarea class="form-control form--control user-text-editor" name="description" rows="10" cols="40"
                                                        required>{!! html_entity_decode(Auth::user()->description) !!}</textarea>
                                                    <div class="d-flex align-items-center pt-2">
                                                        <div class="mr-3">
                                                            ``` <code
                                                                class="badge bg-gray border border-gray text-gray">code</code>
                                                            ```
                                                        </div>
                                                        <div class="mr-3 fw-bold">**gras**</div>
                                                        <div class="mr-3 font-italic">*italique*</div>
                                                        <div>&gt;quote</div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="user-dashboard-info-box">
                                        <div class="section-title-02 mb-3">
                                            <h4>Réseaux sociaux</h4>
                                        </div>

                                        <div class="row">
                                            <div class="form-group mb-3 col-md-6">
                                                <label class="form-label">Facebook</label>
                                                <input type="text" name="facebook" class="form-control"
                                                    value="{{ Auth::user()->facebook }}">
                                            </div>
                                            <div class="form-group mb-3 col-md-6">
                                                <label class="form-label">Twitter</label>
                                                <input type="email" name="twitter" class="form-control"
                                                    value="{{ Auth::user()->twitter }}">
                                            </div>
                                            <div class="form-group mb-0 col-md-6">
                                                <label class="form-label">Linkedin</label>
                                                <input type="text" name="linkedin" class="form-control"
                                                    value="{{ Auth::user()->linkedin }}">
                                            </div>
                                            <div class="form-group mb-3 col-md-6">
                                                <label class="form-label">Site internet</label>
                                                <input type="text" name="site_internet" class="form-control"
                                                    value="{{ Auth::user()->site_internet }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-dashboard-info-box">
                                        <div class="form-group mb-0">
                                            <h4 class="mb-3">Address</h4>
                                            <div class="form-group mb-3">
                                                <label class="form-label">Adresse</label>
                                                <input type="text" name="adresse" class="form-control"
                                                    value="{{ Auth::user()->Adresse }}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">Sauvegarder</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- Change password -->
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="user-dashboard-info-box">
                                        <div class="section-title-02 mb-4">
                                            <h4>Changer mot de passe</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="row" method="POST"
                                                    action="{{ route('entreprise.password.change') }}">
                                                    @csrf
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label class="form-label">Mot de passe actuel</label>
                                                        <input type="password" name="old_password" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label class="form-label">Nouveau mot de passe</label>
                                                        <input type="password" name="new_password" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <label class="form-label">Confirmer mot de passe</label>
                                                        <input type="password" name="confirm_password"
                                                            class="form-control" value="">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary" type="submit">Changer mot de passe</button>
                                </div>
                                </form>
                            </div>
                        </div><!-- Change email -->
                        <div class="tab-pane fade show" id="email" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="user-dashboard-info-box">
                                        <div class="section-title-02 mb-4">
                                            <h4>Changer e-mail</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="row">
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label class="form-label">Mon E-mail</label>
                                                        <input type="email" class="form-control" value="">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-primary" href="#">Changer e-mail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                          Jobs-listing -->
@endsection
