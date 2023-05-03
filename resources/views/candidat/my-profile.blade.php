@extends('layouts.admins')

@section('content')
    <!--=================================
        banner -->
    <div class="candidate-banner bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="candidate-list bg-light">
                        <div class="candidate-list-image">
                            @if (Auth::user()->image == null)
                                <img class="img-fluid" src="libraries\images\no-profile-pic-icon-0.jpg" alt="">
                            @else
                                <img class="img-fluid" style="width: 110px; height:90px;" src="{{ Storage::url(Auth::user()->image) }}" alt="">
                            @endif
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0">{{ Auth::user()->prenom }} {{ Auth::user()->name }}</h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pe-1"></i>{{ Auth::user()->secteurs->intitule }}</li>
                                        <li><i class="fas fa-map-marker-alt pe-1"></i>
                                            @if (Auth::user()->Adresse == null)
                                                Aucune adresse
                                            @else
                                                {{ Auth::user()->Adresse }}
                                            @endif
                                        </li>
                                        @if (Auth::user()->email_verified_at == null)
                                        <li class="candidates-feature-info bg-danger" style="border-radius: 5px; padding:2px;">
                                            <span class="candidates-info-title text-white">Email non vérifié</span>
                                        </li>
                                        @else
                                        <li class="candidates-feature-info bg-success" style="border-radius: 5px; padding:2px;">
                                            <span class="candidates-info-title text-white">Email vérifié</span>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget ms-auto mb-0">
                            <div class="company-detail-meta ms-auto">
                                <a class="btn btn-primary" href="{{route('candidat.gestion-emplois')}}">Gérer mes emplois <i class="far fa-edit"></i></a>
                                <a class="btn btn-primary" href="{{route('candidat.my-setting')}}">Mettre à jour <i class="fas fa-cog ms-1"></i></a>
                                <ul class="list-unstyled mt-3 mb-0 ms-2 ms-sm-0">
                                    <li>
                                        <div class="share-box share-dark-bg">
                                            <a href="#"> <i class="fas fa-share-alt"></i><span
                                                    class="ps-2">Share</span></a>
                                            <ul class="list-unstyled share-box-social">
                                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                                                <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                                                <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                                                <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{route('candidat.resume.show')}}"><i class="fas fa-print"></i><span class="ps-2">Visualiser CV</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
          banner -->

    <section class="space-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sticky-top secondary-menu-sticky-top">
                        <div class="secondary-menu">
                            <ul>
                                <li><a href="#about"> About </a></li>
                                <li><a href="#informations"> Informations personnelles </a></li>
                                <li><a href="#education"> Education </a></li>
                                <li><a href="#experience"> Work Experience </a></li>
                                <li><a href="#skill"> professional Skill </a></li>
                                <li><a href="#langues"> Langues </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <div class="jobber-candidate-detail">
                        <div class="row mb-3 mb-lg-5 mt-3 mt-lg-0">
                            {{-- <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="candidates-feature-info bg-dark">
                                    <div class="candidates-info-icon text-white">
                                        <i class="fas fa-globe-asia"></i>
                                    </div>
                                    <div class="candidates-info-content">
                                        <h6 class="candidates-info-title text-white">Total Applications</h6>
                                    </div>
                                    <div class="candidates-info-count">
                                        <h3 class="mb-0 text-white">01</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="candidates-feature-info bg-success">
                                    <div class="candidates-info-icon text-white">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div class="candidates-info-content">
                                        <h6 class="candidates-info-title text-white">Shortlisted Applications</h6>
                                    </div>
                                    <div class="candidates-info-count">
                                        <h3 class="mb-0 text-white">00</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="candidates-feature-info bg-danger">
                                    <div class="candidates-info-icon text-white">
                                        <i class="fas fa-thumbs-down"></i>
                                    </div>
                                    <div class="candidates-info-content">
                                        <h6 class="candidates-info-title text-white">Rejected Applications</h6>
                                    </div>
                                    <div class="candidates-info-count">
                                        <h3 class="mb-0 text-white">00</h3>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="user-dashboard-info-box mb-0 pb-4">
                            <div class="section-title">
                                <h4>Recent Applied Jobs</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="job-list">
                                        <div class="job-list-logo">
                                            <img class="img-fluid" src="libraries/images/svg/05.svg" alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h5 class="mb-0"><a href="job-detail.html">Operational manager
                                                            part-time</a></h5>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li> <span>via</span> <a href="employer-detail.html">Fleet Home
                                                                Improvements Pvt</a> </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                                        <li><i class="fas fa-filter pe-1"></i>Accountancy (Qualified)</li>
                                                        <li><a class="part-time" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2"
                                                href="#"><i class="far fa-edit"></i></a> <span
                                                class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <hr class="my-4 my-md-5">
                        <div id="about">
                            <h5 class="mb-3">About Me</h5>
                            <div class="border p-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-account"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Name:</label>
                                                <span class="d-block fw-bold text-dark">{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-account"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Prénom:</label>
                                                <span class="d-block fw-bold text-dark">{{ Auth::user()->prenom }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-approval"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Email:</label>
                                                <span class="d-block fw-bold text-dark">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-curriculum"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Secteur:</label>
                                                <span
                                                    class="d-block fw-bold text-dark">{{ Auth::user()->secteurs->intitule }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-contact"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Phone :</label>
                                                <span class="d-block fw-bold text-dark">{{ Auth::user()->tel }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-appointment"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Date Of Birth :</label>
                                                <span class="d-block fw-bold text-dark">
                                                    @if (Auth::user()->date_naiss == null)
                                                        Aucune date
                                                    @else
                                                        {{ Auth::user()->date_naiss }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-map"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Address :</label>
                                                <span class="d-block fw-bold text-dark">
                                                    @if (Auth::user()->adresse == null)
                                                        Aucune adresse
                                                    @else
                                                        {{ Auth::user()->adresse }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-man"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Sex :</label>
                                                <span
                                                    class="d-block fw-bold text-dark">{{ Auth::user()->genres->titre }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mt-sm-5">
                                <b>Description du profil :</b>
                                @if (Auth::user()->description == null)
                                    Aucune description
                                @else
                                    {{ Auth::user()->description }}
                                @endif
                            </div>
                        </div>
                        <hr class="my-4 my-md-5">
                        <div id="informations">
                            <h5 class="mb-3">Informations personnelles</h5>
                            <div class="jobber-candidate-timeline">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="jobber-timeline-item mb-0">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <span class="jobber-timeline-time">High level education :
                                            @foreach ($informations as $item)
                                            {{$item->high_level_education}}
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                                <div class="jobber-timeline-item mb-0">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <span class="jobber-timeline-time">Nombre total d'experience :
                                            @foreach ($informations as $item)
                                            {{$item->total_year_experience}}
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 my-md-5">
                        <div id="experience">
                            <h5 class="mb-3">Work & Experience</h5>
                            @foreach ($experiences as $item)
                            <div class="jobber-candidate-timeline">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="jobber-timeline-item">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <span class="jobber-timeline-time">{{$item->date_debut}} <b>to</b> {{$item->date_fin}}</span>
                                        <h6 class="mb-2">{{$item->poste}}</h6>
                                        <span>- {{$item->nom_entreprise}}</span>
                                        <p class="mt-2">{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <hr class="my-4 my-md-5">
                        <div id="education">
                            <h5 class="mb-3">Education</h5>
                            @foreach ($educations as $item)
                            <div class="jobber-candidate-timeline">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="jobber-timeline-item">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <span class="jobber-timeline-time">{{$item->date_debut}} - {{$item->date_fin}}</span>
                                        <h6 class="mb-2">{{$item->nom_diplome}}</h6>
                                        <span>- {{$item->ecole}}</span>
                                        <p class="mt-2">{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <hr class="my-4 my-md-5">
                        <div id="skill">
                            <h5 class="mb-3">Compétences</h5>
                            @foreach ($competences as $item)
                            <div class="jobber-candidate-timeline">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="jobber-timeline-item mb-0">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <span class="jobber-timeline-time">{{$item->intitule}} -- {{$item->niveau}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <hr class="my-4 my-md-5">
                        <div id="langues">
                            <h5 class="mb-3">Langues</h5>
                            @foreach ($langues as $item)
                            <div class="jobber-candidate-timeline">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="jobber-timeline-item mb-0">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <span class="jobber-timeline-time">{{$item->intitule}} -- {{$item->niveau}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
