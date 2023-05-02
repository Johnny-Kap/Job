@extends('layouts.admins')

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
                                    <img class="img-fluid" style="width: 110px; height:120px;" src="{{ Storage::url(Auth::user()->image) }}" alt="">
                                @endif
                                {{-- <i class="fas fa-pencil-alt"></i> --}}
                            </div>
                            <div class="profile-avatar-info ms-4">
                                <h3>{{ Auth::user()->prenom }} {{ Auth::user()->name }}</h3>
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
                    <div class="browse-job d-flex border-0 pb-3">
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
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#resume" role="tab"
                                        aria-controls="profile" aria-selected="false">Gérer mon CV</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#manage" role="tab"
                                        aria-controls="profile" aria-selected="false">Gérer mes offres d'emploi</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#saved" role="tab"
                                        aria-controls="profile" aria-selected="false">Gérer mes favoris</a>
                                </li>
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
                                            <h4>Basic Information</h4>
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <form action="{{route('candidat.photo.change')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <label for="formFile" class="form-label">Upload Cover Photo</label>
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
                                        <form method="post" action="{{ route('candidat.edited.profile') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Your Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Your Prenom</label>
                                                    <input type="text" class="form-control" name="prenom"
                                                        value="{{ Auth::user()->prenom }}">
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Your profession</label>
                                                    <input type="text" class="form-control" name="profession"
                                                        value="{{ Auth::user()->profession }}">
                                                </div>
                                                <div class="form-group mb-3 col-md-6 datetimepickers">
                                                    <label class="form-label">Date of birth</label>
                                                    <div class="input-group date" id="datetimepicker-01"
                                                        data-target-input="nearest">
                                                        <input type="text" name="date_naiss"
                                                            class="form-control datetimepicker-input"
                                                            value="{{ Auth::user()->date_naiss }}"
                                                            data-target="#datetimepicker-01">
                                                        <div class="input-group-append d-flex"
                                                            data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i
                                                                    class="far fa-calendar-alt"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Phone</label>
                                                    <input type="text" name="tel" class="form-control"
                                                        value="{{ Auth::user()->tel }}">
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                    <label class="form-label">Profession</label>
                                                    <input type="text" name="profession" class="form-control"
                                                        value="{{ Auth::user()->profession }}">
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
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
                                                </div>
                                                <div class="form-group mb-3 col-md-6 select-border">
                                                    <label class="form-label">Secteur</label>
                                                    <select name="secteur" class="form-control basic-select">
                                                        @foreach ($secteurs as $item)
                                                            <option value="{{ $item->id }}">{{ $item->intitule }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3 col-md-6 select-border">
                                                    <label class="form-label">Sous secteur</label>
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
                                                <div class="form-group mb-0 col-md-12">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control" rows="5" name="description">{{ Auth::user()->description }}</textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="user-dashboard-info-box">
                                        <div class="section-title-02 mb-3">
                                            <h4>Social Links</h4>
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
                                            <div class="form-group mb-0 col-md-6">
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
                                                <label class="form-label">Enter Your Location</label>
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
                                            <h4>Change Password</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="row" method="POST"
                                                    action="{{ route('candidat.password.change') }}">
                                                    @csrf
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label class="form-label">Current Password</label>
                                                        <input type="password" name="old_password" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label class="form-label">New Password</label>
                                                        <input type="password" name="new_password" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <label class="form-label">Confirm Password</label>
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
                                            <h4>Changer email</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="row">
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label class="form-label">Mon Email</label>
                                                        <input type="email" class="form-control" value="">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-primary" href="#">Change Password</a>
                                </div>
                            </div>
                        </div>
                        <!-- Resume -->
                        <div class="tab-pane fade show" id="resume" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <div class="section-title-02">
                                        <h3>My Resume</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-lg-end">
                                    <a class="btn btn-primary btn-md mb-4 mb-lg-0"
                                        href="{{ route('candidat.resume.show') }}">Preview My
                                        Resume</a>
                                </div>
                                <div class="col-12">
                                    <div class="user-dashboard-info-box">
                                        <div class="dashboard-resume-title d-flex align-items-center">
                                            <div class="section-title-02 mb-sm-0">
                                                <h4 class="mb-0">Informations</h4>
                                            </div>
                                            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse"
                                                href="#dateposted-05" role="button" aria-expanded="false"
                                                aria-controls="dateposted">Add informations</a>
                                        </div>
                                        <div class="collapse show" id="dateposted-05">
                                            <div class="bg-light p-3 mt-4">
                                                <form class="row" method="POST"
                                                    action="{{ route('candidat.resume.info.add') }}">
                                                    @csrf
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Plus haut niveau d'étude</label>
                                                        <input type="text" class="form-control" name="niveau"
                                                            value="">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Nombre total d'expériences</label>
                                                        <input type="text" class="form-control" name="year"
                                                            value="">
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <button type="submit" class="btn btn-md btn-primary">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @foreach ($informations as $item)
                                            <div class="jobber-candidate-timeline mt-4">
                                                <div class="jobber-timeline-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="jobber-timeline-item">
                                                    <div class="jobber-timeline-cricle">
                                                        <i class="far fa-circle"></i>
                                                    </div>
                                                    <div class="jobber-timeline-info">
                                                        <div class="dashboard-timeline-info">
                                                            <div class="dashboard-timeline-edit">
                                                                <ul class="list-unstyled d-flex">
                                                                    <li><a class="text-end" data-bs-toggle="collapse"
                                                                            href="#dateposted-06" role="button"
                                                                            aria-expanded="false"
                                                                            aria-controls="dateposted">
                                                                            <i
                                                                                class="fas fa-pencil-alt text-info me-2"></i>
                                                                        </a></li>
                                                                    <li><a href="#"><i
                                                                                class="far fa-trash-alt text-danger"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <span>Plus haut niveau d'étude : </span>
                                                            <h6 class="mb-2">{{ $item->high_level_education }}</h6>
                                                            <span>Nombre total d'expériences : </span>
                                                            <h6 class="mb-2">{{ $item->total_year_experience }}</h6>
                                                        </div>
                                                        <div class="collapse show" id="dateposted-06">
                                                            <div class="bg-light p-3">
                                                                <form class="row collapse show" id="dateposted-form-01"
                                                                    method="POST"
                                                                    action="{{ route('candidat.resume.info.update', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Plus haut niveau
                                                                            d'étude</label>
                                                                        <input type="text" name="niveau"
                                                                            class="form-control"
                                                                            value="{{ $item->high_level_education }}">
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Nombre total
                                                                            d'expériences</label>
                                                                        <input type="text" name="year"
                                                                            class="form-control"
                                                                            value="{{ $item->total_year_experience }}">
                                                                    </div>
                                                                    <div class="form-group col-md-12 mb-0">
                                                                        <button type="submit"
                                                                            class="btn btn-md btn-primary">Modifier</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="user-dashboard-info-box">
                                        <div class="dashboard-resume-title d-flex align-items-center">
                                            <div class="section-title-02 mb-sm-0">
                                                <h4 class="mb-0">Education</h4>
                                            </div>
                                            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse"
                                                href="#dateposted" role="button" aria-expanded="false"
                                                aria-controls="dateposted">Add Education</a>
                                        </div>
                                        <div class="collapse show" id="dateposted">
                                            <div class="bg-light p-3 mt-4">
                                                <form class="row" method="post"
                                                    action="{{ route('candidat.resume.educ.add') }}">
                                                    @csrf
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="titre" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border">
                                                        <label class="form-label">Year debut</label>
                                                        <select name="date_debut" class="form-control basic-select">
                                                            <option value="2020" selected="selected">2020</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border">
                                                        <label class="form-label">Year fin</label>
                                                        <select name="date_fin" class="form-control basic-select">
                                                            <option value="Aujourd'hui" selected="selected">Aujourd'hui
                                                            </option>
                                                            <option value="2008">2008</option>
                                                            <option value="2008">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Institute</label>
                                                        <input type="text" name="ecole" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" name="description" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <button type="submit"
                                                            class="btn btn-md btn-primary">Ajouter</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="jobber-candidate-timeline mt-4">
                                            @foreach ($educations as $item)
                                                <div class="jobber-timeline-item mb-0">
                                                    <div class="jobber-timeline-cricle">
                                                        <i class="far fa-circle"></i>
                                                    </div>
                                                    <div class="jobber-timeline-info">
                                                        <div class="dashboard-timeline-info">
                                                            <div class="dashboard-timeline-edit">
                                                                <ul class="list-unstyled d-flex">
                                                                    <li><a class="text-end" data-bs-toggle="collapse"
                                                                            href="#dateposted-03" role="button"
                                                                            aria-expanded="false"
                                                                            aria-controls="dateposted">
                                                                            <i
                                                                                class="fas fa-pencil-alt text-info me-2"></i>
                                                                        </a></li>
                                                                    <li><a href="#"><i
                                                                                class="far fa-trash-alt text-danger"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <span class="jobber-timeline-time">{{ $item->date_debut }} -
                                                                {{ $item->date_fin }}</span>
                                                            <h6 class="mb-2">{{ $item->nom_diplome }}</h6>
                                                            <span>- {{ $item->ecole }}</span>
                                                            <p class="mt-2">{{ $item->description }}</p>
                                                        </div>
                                                        <div class="collapse" id="dateposted-03">
                                                            <div class="bg-light p-3">
                                                                <form class="row collapse show" id="dateposted-04"
                                                                    method="post"
                                                                    action="{{ route('candidat.resume.educ.update', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Title</label>
                                                                        <input type="text" name="titre"
                                                                            class="form-control"
                                                                            value="{{ $item->nom_diplome }}">
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-6 select-border">
                                                                        <label class="form-label">Year debut</label>
                                                                        <select class="form-control basic-select"
                                                                            name="date_debut">
                                                                            <option value="value 01" selected="selected">
                                                                                2020
                                                                            </option>
                                                                            <option value="value 02">2008</option>
                                                                            <option value="value 03">2009</option>
                                                                            <option value="value 04">2010</option>
                                                                            <option value="value 05">2011</option>
                                                                            <option value="value 06">2012</option>
                                                                            <option value="value 07">2013</option>
                                                                            <option value="value 08">2014</option>
                                                                            <option value="value 09">2015</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-6 select-border">
                                                                        <label class="form-label">Year fin</label>
                                                                        <select class="form-control basic-select"
                                                                            name="date_fin">
                                                                            <option value="value 01" selected="selected">
                                                                                Aujourd'hui
                                                                            </option>
                                                                            <option value="value 02">2008</option>
                                                                            <option value="value 03">2009</option>
                                                                            <option value="value 04">2010</option>
                                                                            <option value="value 05">2011</option>
                                                                            <option value="value 06">2012</option>
                                                                            <option value="value 07">2013</option>
                                                                            <option value="value 08">2014</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Institute</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $item->ecole }}" name="ecole">
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Description</label>
                                                                        <textarea class="form-control" rows="4" name="description">{{ $item->description }}</textarea>
                                                                    </div>
                                                                    <div class="form-group col-md-12 mb-0">
                                                                        <button type="submit"
                                                                            class="btn btn-md btn-primary">Modifier</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--=================================
                                                                                          Work & Experience -->
                                    <div class="user-dashboard-info-box">
                                        <div class="dashboard-resume-title d-flex align-items-center">
                                            <div class="section-title-02 mb-sm-0">
                                                <h4 class="mb-0">Work & Experience</h4>
                                            </div>
                                            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse"
                                                href="#dateposted-05" role="button" aria-expanded="false"
                                                aria-controls="dateposted">Add Experience</a>
                                        </div>
                                        <div class="collapse show" id="dateposted-05">
                                            <div class="bg-light p-3 mt-4">
                                                <form class="row" method="POST"
                                                    action="{{ route('candidat.resume.expe.add') }}">
                                                    @csrf
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="poste" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Company name</label>
                                                        <input type="text" name="nom_entreprise" class="form-control"
                                                            value="">
                                                        <label class="form-label">Adresse</label>
                                                        <input type="text" name="adresse" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="mb-3 col-md-6 datetimepickers">
                                                        <label class="form-label">From</label>
                                                        <div class="input-group date" id="datetimepicker-01"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                value="08/11/1999" name="date_debut"
                                                                data-target="#datetimepicker-01">
                                                            <div class="input-group-append d-flex"
                                                                data-target="#datetimepicker-01"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                        <label class="form-label">Two</label>
                                                        <div class="input-group date" id="datetimepicker-02"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                value="08/11/1999" name="date_fin"
                                                                data-target="#datetimepicker-02">
                                                            <div class="input-group-append d-flex"
                                                                data-target="#datetimepicker-02"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" name="description" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <button type="submit" class="btn btn-md btn-primary">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @foreach ($experiences as $item)
                                            <div class="jobber-candidate-timeline mt-4">
                                                <div class="jobber-timeline-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="jobber-timeline-item">
                                                    <div class="jobber-timeline-cricle">
                                                        <i class="far fa-circle"></i>
                                                    </div>
                                                    <div class="jobber-timeline-info">
                                                        <div class="dashboard-timeline-info">
                                                            <div class="dashboard-timeline-edit">
                                                                <ul class="list-unstyled d-flex">
                                                                    <li><a class="text-end" data-bs-toggle="collapse"
                                                                            href="#dateposted-06" role="button"
                                                                            aria-expanded="false"
                                                                            aria-controls="dateposted">
                                                                            <i
                                                                                class="fas fa-pencil-alt text-info me-2"></i>
                                                                        </a></li>
                                                                    <li><a href="#"><i
                                                                                class="far fa-trash-alt text-danger"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <span class="jobber-timeline-time">{{ $item->date_debut }} to
                                                                {{ $item->date_fin }}</span>
                                                            <h6 class="mb-2">{{ $item->poste }}</h6>
                                                            <span>- {{ $item->nom_entreprise }}</span>
                                                            <p class="mt-2">{{ $item->description }}</p>
                                                        </div>
                                                        <div class="collapse show" id="dateposted-06">
                                                            <div class="bg-light p-3">
                                                                <form class="row collapse show" id="dateposted-form-01"
                                                                    method="POST"
                                                                    action="{{ route('candidat.resume.expe.update', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Title</label>
                                                                        <input type="text" name="poste"
                                                                            class="form-control"
                                                                            value="{{ $item->poste }}">
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Company name</label>
                                                                        <input type="text" name="nom_entreprise"
                                                                            class="form-control"
                                                                            value="{{ $item->nom_entreprise }}">
                                                                        <label class="form-label">Adresse</label>
                                                                        <input type="text" name="adresse"
                                                                            class="form-control"
                                                                            value="{{ $item->adresse }}">
                                                                    </div>
                                                                    <div
                                                                        class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                                        <label class="form-label">From</label>
                                                                        <div class="input-group date"
                                                                            id="datetimepicker-05"
                                                                            data-target-input="nearest">
                                                                            <input type="text"
                                                                                class="form-control datetimepicker-input"
                                                                                value="{{ $item->date_debut }}"
                                                                                name="date_debut"
                                                                                data-target="#datetimepicker-05">
                                                                            <div class="input-group-append d-flex"
                                                                                data-target="#datetimepicker-05"
                                                                                data-toggle="datetimepicker">
                                                                                <div class="input-group-text"><i
                                                                                        class="far fa-calendar-alt"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                                        <label class="form-label">Two</label>
                                                                        <div class="input-group date"
                                                                            id="datetimepicker-06"
                                                                            data-target-input="nearest">
                                                                            <input type="text"
                                                                                class="form-control datetimepicker-input"
                                                                                value="{{ $item->date_fin }}"
                                                                                name="date_fin"
                                                                                data-target="#datetimepicker-06">
                                                                            <div class="input-group-append d-flex"
                                                                                data-target="#datetimepicker-06"
                                                                                data-toggle="datetimepicker">
                                                                                <div class="input-group-text"><i
                                                                                        class="far fa-calendar-alt"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3 col-md-12">
                                                                        <label class="form-label">Description</label>
                                                                        <textarea class="form-control" rows="4" name="description">{{ $item->description }}</textarea>
                                                                    </div>
                                                                    <div class="form-group col-md-12 mb-0">
                                                                        <button type="submit"
                                                                            class="btn btn-md btn-primary">Modifier</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!--=================================
                                                                                          Work & Experience -->
                                    <!--=================================
                                                                                          Professional Skill -->
                                    <div class="user-dashboard-info-box">
                                        <div class="dashboard-resume-title d-flex align-items-center">
                                            <div class="section-title-02 mb-sm-0">
                                                <h4 class="mb-0">Compétences</h4>
                                            </div>
                                            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse"
                                                href="#dateposted-15" role="button" aria-expanded="false"
                                                aria-controls="dateposted">Add compétences</a>
                                        </div>
                                        <div class="collapse show" id="dateposted-15">
                                            <div class="bg-light p-3 mt-4">
                                                <form class="row" method="POST"
                                                    action="{{ route('candidat.resume.compe.add') }}">
                                                    @csrf
                                                    <div class="form-group mb-3 col-md-6">
                                                        <label class="form-label">Titre</label>
                                                        <input type="text" name="intitule" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6">
                                                        <label class="form-label">Niveau</label>
                                                        <select class="form-control basic-select" name="niveau">
                                                            <option value="Debutant">Debutant</option>
                                                            <option value="Intermediaire">Intermediaire</option>
                                                            <option value="Professionnel">Professionnel</option>
                                                            <option value="Expert">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <button type="submit" class="btn btn-md btn-primary">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                            @foreach ($competences as $item)
                                                <div class="jobber-candidate-timeline mt-4">
                                                    <div class="jobber-timeline-icon">
                                                        <i class="fas fa-trophy"></i>
                                                    </div>
                                                    <div class="jobber-timeline-item">
                                                        <div class="jobber-timeline-cricle">
                                                            <i class="far fa-circle"></i>
                                                        </div>
                                                        <div class="jobber-timeline-info">
                                                            <div class="dashboard-timeline-info">
                                                                <div class="dashboard-timeline-edit">
                                                                    <ul class="list-unstyled d-flex">
                                                                        <li><a class="text-end" data-bs-toggle="collapse"
                                                                                href="#dateposted-16" role="button"
                                                                                aria-expanded="false"
                                                                                aria-controls="dateposted"> <i
                                                                                    class="fas fa-pencil-alt text-info me-2"></i>
                                                                            </a></li>
                                                                        <li><a href="#"><i
                                                                                    class="far fa-trash-alt text-danger"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <span
                                                                    class="jobber-timeline-time">{{ $item->intitule }}</span>
                                                                <h6 class="mb-2">{{ $item->niveau }}</h6>
                                                            </div>
                                                            <div class="collapse show" id="dateposted-16">
                                                                <div class="bg-light p-3">
                                                                    <form class="row collapse show"
                                                                        id="dateposted-form-07" method="POST"
                                                                        action="{{ route('candidat.resume.compe.update', ['id' => $item->id]) }}">
                                                                        @csrf
                                                                        <div class="form-group mb-3 col-md-6">
                                                                            <label class="form-label">Titre</label>
                                                                            <input type="text" name="intitule"
                                                                                class="form-control"
                                                                                value="{{ $item->intitule }}">
                                                                        </div>
                                                                        <div class="form-group mb-3 col-md-6">
                                                                            <label class="form-label">Niveau</label>
                                                                            <select class="form-control basic-select"
                                                                                name="niveau">
                                                                                <option value="Debutant">Debutant</option>
                                                                                <option value="Intermediaire">Intermediaire
                                                                                </option>
                                                                                <option value="Professionnel">Professionnel
                                                                                </option>
                                                                                <option value="Expert">Expert</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-12 mb-0">
                                                                            <button class="btn btn-md btn-primary"
                                                                                type="submit">Modifier</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--=================================
                                                                                          Professional Skill -->
                                    <!--=================================
                                                                                          Langue -->
                                    <div class="user-dashboard-info-box">
                                        <div class="dashboard-resume-title d-flex align-items-center">
                                            <div class="section-title-02 mb-sm-0">
                                                <h4 class="mb-0">Langues</h4>
                                            </div>
                                            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse"
                                                href="#dateposted-15" role="button" aria-expanded="false"
                                                aria-controls="dateposted">Add langue</a>
                                        </div>
                                        <div class="collapse show" id="dateposted-15">
                                            <div class="bg-light p-3 mt-4">
                                                <form class="row" method="POST"
                                                    action="{{ route('candidat.resume.lang.add') }}">
                                                    @csrf
                                                    <div class="form-group mb-3 col-md-6">
                                                        <label class="form-label">Langue</label>
                                                        <input type="text" name="intitule" class="form-control"
                                                            value="">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6">
                                                        <label class="form-label">Niveau</label>
                                                        <select class="form-control basic-select" name="niveau">
                                                            <option value="Debutant">Debutant</option>
                                                            <option value="Intermediaire">Intermediaire</option>
                                                            <option value="Professionnel">Professionnel</option>
                                                            <option value="Expert">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <button type="submit" class="btn btn-md btn-primary">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                            @foreach ($langues as $item)
                                                <div class="jobber-candidate-timeline mt-4">
                                                    <div class="jobber-timeline-icon">
                                                        <i class="fas fa-trophy"></i>
                                                    </div>
                                                    <div class="jobber-timeline-item">
                                                        <div class="jobber-timeline-cricle">
                                                            <i class="far fa-circle"></i>
                                                        </div>
                                                        <div class="jobber-timeline-info">
                                                            <div class="dashboard-timeline-info">
                                                                <div class="dashboard-timeline-edit">
                                                                    <ul class="list-unstyled d-flex">
                                                                        <li><a class="text-end" data-bs-toggle="collapse"
                                                                                href="#dateposted-16" role="button"
                                                                                aria-expanded="false"
                                                                                aria-controls="dateposted"> <i
                                                                                    class="fas fa-pencil-alt text-info me-2"></i>
                                                                            </a></li>
                                                                        <li><a href="#"><i
                                                                                    class="far fa-trash-alt text-danger"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <span
                                                                    class="jobber-timeline-time">{{ $item->intitule }}</span>
                                                                <h6 class="mb-2">{{ $item->niveau }}</h6>
                                                            </div>
                                                            <div class="collapse show" id="dateposted-16">
                                                                <div class="bg-light p-3">
                                                                    <form class="row collapse show"
                                                                        id="dateposted-form-07" method="POST"
                                                                        action="{{ route('candidat.resume.lang.update', ['id' => $item->id]) }}">
                                                                        @csrf
                                                                        <div class="form-group mb-3 col-md-6">
                                                                            <label class="form-label">Titre</label>
                                                                            <input type="text" name="intitule"
                                                                                class="form-control"
                                                                                value="{{ $item->intitule }}">
                                                                        </div>
                                                                        <div class="form-group mb-3 col-md-6">
                                                                            <label class="form-label">Niveau</label>
                                                                            <select class="form-control basic-select"
                                                                                name="niveau">
                                                                                <option value="Debutant">Debutant</option>
                                                                                <option value="Intermediaire">Intermediaire
                                                                                </option>
                                                                                <option value="Professionnel">Professionnel
                                                                                </option>
                                                                                <option value="Expert">Expert</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-12 mb-0">
                                                                            <button class="btn btn-md btn-primary"
                                                                                type="submit">Modifier</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--=================================
                                                                                          Langue -->
                                    {{-- <a class="btn btn-md btn-primary" href="#">Save Settings</a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Manage jobs -->
                        {{-- <div class="tab-pane fade show" id="manage" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="user-dashboard-info-box mb-0">
                                        <div class="row mb-4">
                                            <div class="col-md-7 col-sm-5 d-flex align-items-center">
                                                <div class="section-title-02 mb-0 ">
                                                    <h4 class="mb-0">Manage Jobs</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
                                                <div class="search">
                                                    <i class="fas fa-search"></i>
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-dashboard-table table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th scope="col">Job Title</th>
                                                        <th scope="col">Applications</th>
                                                        <th scope="col">Featured</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Job 01
                                                            <p class="mb-1 mt-2">Expiry: 2020-04-15</p>
                                                            <p class="mb-0">Address: Wellesley Rd, London</p>
                                                        </th>
                                                        <td>Applications</td>
                                                        <td><i class="far fa-star"></i></td>
                                                        <td>
                                                            <ul class="list-unstyled mb-0 d-flex">
                                                                <li><a href="#" class="text-primary"
                                                                        data-bs-toggle="tooltip" title="view"><i
                                                                            class="far fa-eye"></i></a></li>
                                                                <li><a href="#" class="text-info"
                                                                        data-bs-toggle="tooltip" title="Edit"><i
                                                                            class="fas fa-pencil-alt"></i></a></li>
                                                                <li><a href="#" class="text-danger"
                                                                        data-bs-toggle="tooltip" title="Delete"><i
                                                                            class="far fa-trash-alt"></i></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Job 02
                                                            <p class="mb-1 mt-2">Expiry: 2020-10-20</p>
                                                            <p class="mb-0">Address: Ormskirk Rd, Wigan</p>
                                                        </th>
                                                        <td>Applications</td>
                                                        <td><i class="far fa-star"></i></td>
                                                        <td>
                                                            <ul class="list-unstyled mb-0 d-flex">
                                                                <li><a href="#" class="text-primary"
                                                                        data-bs-toggle="tooltip" title="view"><i
                                                                            class="far fa-eye"></i></a></li>
                                                                <li><a href="#" class="text-info"
                                                                        data-bs-toggle="tooltip" title="Edit"><i
                                                                            class="fas fa-pencil-alt"></i></a></li>
                                                                <li><a href="#" class="text-danger"
                                                                        data-bs-toggle="tooltip" title="Delete"><i
                                                                            class="far fa-trash-alt"></i></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Job 03
                                                            <p class="mb-1 mt-2">Expiry: 2020-11-30</p>
                                                            <p class="mb-0">Address: New Castle, PA</p>
                                                        </th>
                                                        <td>Applications</td>
                                                        <td><i class="far fa-star"></i></td>
                                                        <td>
                                                            <ul class="list-unstyled mb-0 d-flex">
                                                                <li><a href="#" class="text-primary"
                                                                        data-bs-toggle="tooltip" title="view"><i
                                                                            class="far fa-eye"></i></a></li>
                                                                <li><a href="#" class="text-info"
                                                                        data-bs-toggle="tooltip" title="Edit"><i
                                                                            class="fas fa-pencil-alt"></i></a></li>
                                                                <li><a href="#" class="text-danger"
                                                                        data-bs-toggle="tooltip" title="Delete"><i
                                                                            class="far fa-trash-alt"></i></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Job 04
                                                            <p class="mb-1 mt-2">Expiry: 2020-12-14</p>
                                                            <p class="mb-0">Address: Ormskirk Rd, Wigan</p>
                                                        </th>
                                                        <td>Applications</td>
                                                        <td><i class="far fa-star"></i></td>
                                                        <td>
                                                            <ul class="list-unstyled mb-0 d-flex">
                                                                <li><a href="#" class="text-primary"
                                                                        data-bs-toggle="tooltip" title="view"><i
                                                                            class="far fa-eye"></i></a></li>
                                                                <li><a href="#" class="text-info"
                                                                        data-bs-toggle="tooltip" title="Edit"><i
                                                                            class="fas fa-pencil-alt"></i></a></li>
                                                                <li><a href="#" class="text-danger"
                                                                        data-bs-toggle="tooltip" title="Delete"><i
                                                                            class="far fa-trash-alt"></i></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-12 text-center">
                                                <ul class="pagination mt-3">
                                                    <li class="page-item disabled me-auto">
                                                        <span class="page-link b-radius-none">Prev</span>
                                                    </li>
                                                    <li class="page-item active" aria-current="page"><span
                                                            class="page-link">1 </span> <span
                                                            class="sr-only">(current)</span></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item ms-auto">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Saved jobs -->
                        <div class="tab-pane fade show" id="saved" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="user-dashboard-info-box mb-0 pb-4">
                                        <div class="section-title-02 mb-4">
                                            <h4>Saved Jobs</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="job-list ">
                                                    <div class="job-list-logo">
                                                        <img class="img-fluid" src="images/svg/01.svg" alt="">
                                                    </div>
                                                    <div class="job-list-details">
                                                        <div class="job-list-info">
                                                            <div class="job-list-title">
                                                                <h5 class="mb-0"><a href="job-detail.html">Marketing
                                                                        and Communications</a></h5>
                                                            </div>
                                                            <div class="job-list-option">
                                                                <ul class="list-unstyled">
                                                                    <li> <span>via</span> <a
                                                                            href="employer-detail.html">Fast Systems
                                                                            Consultants</a> </li>
                                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley
                                                                        Rd, London</li>
                                                                    <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                                                                    <li><a class="freelance" href="#"><i
                                                                                class="fas fa-suitcase pe-1"></i>Freelance</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-list-favourite-time"> <a
                                                            class="job-list-favourite order-2" href="#"><i
                                                                class="fas fa-heart text-danger"></i></a> <span
                                                            class="job-list-time order-1"><i
                                                                class="far fa-clock pe-1"></i>1M ago</span> </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="job-list">
                                                    <div class="job-list-logo">
                                                        <img class="img-fluid" src="images/svg/02.svg" alt="">
                                                    </div>
                                                    <div class="job-list-details">
                                                        <div class="job-list-info">
                                                            <div class="job-list-title">
                                                                <h5 class="mb-0"><a href="job-detail.html">Web
                                                                        Developer – .net</a></h5>
                                                            </div>
                                                            <div class="job-list-option">
                                                                <ul class="list-unstyled">
                                                                    <li> <span>via</span> <a
                                                                            href="employer-detail.html">Pendragon Green
                                                                            Ltd</a> </li>
                                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Needham,
                                                                        MA</li>
                                                                    <li><i class="fas fa-filter pe-1"></i>IT &amp;
                                                                        Telecoms</li>
                                                                    <li><a class="part-time" href="#"><i
                                                                                class="fas fa-suitcase pe-1"></i>Part-Time</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-list-favourite-time"> <a
                                                            class="job-list-favourite order-2" href="#"><i
                                                                class="fas fa-heart text-danger"></i></a> <span
                                                            class="job-list-time order-1"><i
                                                                class="far fa-clock pe-1"></i>3D ago</span> </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="job-list">
                                                    <div class=" job-list-logo">
                                                        <img class="img-fluid" src="images/svg/03.svg" alt="">
                                                    </div>
                                                    <div class="job-list-details">
                                                        <div class="job-list-info">
                                                            <div class="job-list-title">
                                                                <h5 class="mb-0"><a href="job-detail.html">Payroll and
                                                                        Office Administrator</a></h5>
                                                            </div>
                                                            <div class="job-list-option">
                                                                <ul class="list-unstyled">
                                                                    <li> <span>via</span> <a
                                                                            href="employer-detail.html">Wight Sound
                                                                            Hearing LLC</a> </li>
                                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>New
                                                                        Castle, PA</li>
                                                                    <li><i class="fas fa-filter pe-1"></i>Banking</li>
                                                                    <li><a class="temporary" href="#"><i
                                                                                class="fas fa-suitcase pe-1"></i>Temporary</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-list-favourite-time"> <a
                                                            class="job-list-favourite order-2" href="#"><i
                                                                class="fas fa-heart text-danger"></i></a> <span
                                                            class="job-list-time order-1"><i
                                                                class="far fa-clock pe-1"></i>2W ago</span> </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="job-list">
                                                    <div class="job-list-logo">
                                                        <img class="img-fluid" src="images/svg/04.svg" alt="">
                                                    </div>
                                                    <div class="job-list-details">
                                                        <div class="job-list-info">
                                                            <div class="job-list-title">
                                                                <h5 class="mb-0"><a href="job-detail.html">Data Entry
                                                                        Administrator</a></h5>
                                                            </div>
                                                            <div class="job-list-option">
                                                                <ul class="list-unstyled">
                                                                    <li> <span>via</span> <a
                                                                            href="employer-detail.html">Tan Electrics
                                                                            Ltd</a> </li>
                                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Park
                                                                        Avenue, Mumbai</li>
                                                                    <li><i class="fas fa-filter pe-1"></i>Charity &amp;
                                                                        Voluntary</li>
                                                                    <li><a class="full-time" href="#"><i
                                                                                class="fas fa-suitcase pe-1"></i>Full-time</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-list-favourite-time"> <a
                                                            class="job-list-favourite order-2" href="#"><i
                                                                class="fas fa-heart text-danger"></i></a> <span
                                                            class="job-list-time order-1"><i
                                                                class="far fa-clock pe-1"></i>3M ago</span> </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="job-list">
                                                    <div class="job-list-logo">
                                                        <img class="img-fluid" src="images/svg/05.svg" alt="">
                                                    </div>
                                                    <div class="job-list-details">
                                                        <div class="job-list-info">
                                                            <div class="job-list-title">
                                                                <h5 class="mb-0"><a href="job-detail.html">Operational
                                                                        manager part-time</a></h5>
                                                            </div>
                                                            <div class="job-list-option">
                                                                <ul class="list-unstyled">
                                                                    <li> <span>via</span> <a
                                                                            href="employer-detail.html">Fleet Home
                                                                            Improvements Pvt</a> </li>
                                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Green
                                                                        Lanes, London</li>
                                                                    <li><i class="fas fa-filter pe-1"></i>Accountancy
                                                                        (Qualified)</li>
                                                                    <li><a class="part-time" href="#"><i
                                                                                class="fas fa-suitcase pe-1"></i>Part-Time</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-list-favourite-time"> <a
                                                            class="job-list-favourite order-2" href="#"><i
                                                                class="fas fa-heart text-danger"></i></a> <span
                                                            class="job-list-time order-1"><i
                                                                class="far fa-clock pe-1"></i>6D ago</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center mt-4 mt-sm-5">
                                                <ul class="pagination justify-content-center mb-0 mb-sm-4">
                                                    <li class="page-item disabled"> <span
                                                            class="page-link b-radius-none">Prev</span> </li>
                                                    <li class="page-item active" aria-current="page"><span
                                                            class="page-link">1 </span> <span
                                                            class="sr-only">(current)</span></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">25</a>
                                                    </li>
                                                    <li class="page-item"> <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
