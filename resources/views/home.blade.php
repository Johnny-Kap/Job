@extends('layouts.admins')

@section('content')
    <!--=================================
                        Banner -->
    <section class="banner bg-holder bg-overlay-black-30 text-white"
        style="background-image: url(libraries/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center position-relative">
                    <h1 class="text-white mb-3">Déposez votre <span class="text-primary"> CV & Obtenez </span> l'emploi souhaité</h1>
                    <p class="lead mb-4 mb-lg-5 fw-normal">Trouver des emplois, des opportunités d'emploi et de carrière</p>
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <form class="form row" method="GET" action="{{route('candidat.search.job')}}">
                                <div class="col-lg-5">
                                    <div class="form-group mb-3">
                                        <div class="d-flex">
                                            <label class="form-label">Quoi ?</label>
                                            <span class="ms-auto">e.g. titre d'une offre d'emploi</span>
                                        </div>
                                        <div class="position-relative left-icon">
                                            <input type="text" class="form-control" name="job_title"
                                                placeholder="Titre de l'emploi">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group mb-3">
                                        <div class="d-flex">
                                            <label class="form-label">Où ?</label>
                                            <span class="ms-auto">e.g. Adresse</span>
                                        </div>
                                        <div class="position-relative left-icon">
                                            <input type="text" class="form-control location-input" name="job_adresse"
                                                placeholder="Adresse">
                                            <i class="far fa-compass"></i>
                                            {{-- <a href="#">
                                                <div class="detect">
                                                    <span class="d-none d-sm-block">Detect</span>
                                                    <i class="fas fa-crosshairs"></i>
                                                </div>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="form-group mb-3 form-action">
                                        <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i>
                                            Trouver des emplois</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="job-tag mt-4">
                        <ul class="justify-content-center">
                            <li class="text-primary">Trending Keywords :</li>
                            <li><a href="#">Automotive,</a></li>
                            <li><a href="#">Education,</a></li>
                            <li><a href="#">Health and Care Engineering</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                        Banner -->

    <!--=================================
                        Category-style -->
    <section class="space-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="section-title">
                        <h2 class="title">Choisissez votre secteur</h2>
                        <p class="mb-0">Je crois vraiment que les paroles d'Augustin sont vraies et si vous regardez l'histoire, vous le savez
                            est vrai.</p>
                    </div>
                    {{-- <a class="btn btn-outline btn-lg" href="#">Afficher plus d'emplois</a> --}}
                </div>
                <div class="col-lg-9 mt-0 mt-md-3 mt-lg-0">
                    <div class="category-style text-center">
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-account"></i>
                            </div>
                            <h6>Comptabilité</h6>
                            {{-- <span class="mb-0">301 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-conversation"></i>
                            </div>
                            <h6>Apprentissages</h6>
                            {{-- <span class="mb-0">287 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-money"></i>
                            </div>
                            <h6>Banque</h6>
                            {{-- <span class="mb-0">542 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-mortarboard"></i>
                            </div>
                            <h6>Education</h6>
                            {{-- <span class="mb-0">785 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-worker"></i>
                            </div>
                            <h6>Ingénieurie</h6>
                            {{-- <span class="mb-0">862 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-businessman"></i>
                            </div>
                            <h6>Agence immobilière</h6>
                            {{-- <span class="mb-0">423 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-coding"></i>
                            </div>
                            <h6>IT & Telecoms</h6>
                            {{-- <span class="mb-0">253 Open Position </span> --}}
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-balance"></i>
                            </div>
                            <h6>Juridique</h6>
                            {{-- <span class="mb-0">689 Open Position </span> --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                        Category-style -->

    <!--=================================
                    Divider -->
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <hr class="m-0">
            </div>
        </div>
    </div>
    <!--=================================
                      Divider -->

    <!--=================================
                Jobs-listing -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Emplois qui pourraient vous intéresser</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="browse-job d-flex border-0 pb-3">
                        {{-- <div class="mb-4 mb-md-0">
                            <ul class="nav nav-tabs justify-content-center d-flex" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Hot Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Recent Jobs</a>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="job-found ms-auto mb-0">
                            <span class="badge badge-lg bg-primary">{{$jobs_count}}</span>
                            <h6 class="ms-3 mb-0">Offres d'emploi trouvés</h6>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Hot jobs -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <!-- Part-Time -->
                                    @if ($jobs_count == 0)
                                    <div class="row-fluid">
                                        <div class="span12 text-center">
                                        <b>Aucune offre d'emploi</b>
                                        </div>
                                    </div>
                                    @else
                                    @foreach ($jobs as $item)
                                        <div class="job-list">
                                            <div class="job-list-logo">
                                                @if ($item->users->image == null)
                                                    <img class="img-fluid"
                                                        src="\..\libraries\images\no-profile-pic-icon-0.jpg"
                                                        alt="">
                                                @else
                                                    <img class="img-fluid" src="{{ Storage::url($item->users->image) }}"
                                                        alt="">
                                                @endif
                                            </div>
                                            <div class="job-list-details">
                                                <div class="job-list-info">
                                                    <div class="job-list-title">
                                                        <h5 class="mb-0"><a
                                                                href="{{ route('candidat.job.detail', [ 'id' => $item->id ]) }}">{{ $item->titre }}</a></h5>
                                                    </div>
                                                    <div class="job-list-option">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <span>via</span>
                                                                <a href="employer-detail.html">{{ $item->users->name }}</a>
                                                            </li>
                                                            <li><i
                                                                    class="fas fa-map-marker-alt pe-1"></i>{{ $item->adresse }}
                                                            </li>
                                                            <li><i
                                                                    class="fas fa-filter pe-1"></i>{{ $item->secteurs->intitule }}
                                                            </li>
                                                            <li><a class="part-time" href="#"><i
                                                                        class="fas fa-suitcase pe-1"></i>{{ $item->type_jobs->titre }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-list-favourite-time"> <form action="{{route('candidat.job.favori.create',['id' => $item->id])}}" method="post"> @csrf
                                                <button type="submit" class="job-list-favourite order-2">
                                                   @if($fav_count == 0)
                                                    <i class="far fa-heart"></i>
                                                   @else
                                                    <i class="fas fa-heart text-danger"></i>
                                                   @endif
                                                    {{-- <i class="far fa-heart"></i> --}}

                                                </button></form>
                                                <span class="job-list-time order-1"><i
                                                        class="far fa-clock pe-1"></i>{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Recent jobs -->
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex mt-md-5 mt-4">
                    <a class="btn btn-outline btn-lg" href="{{route('candidat.job.consulter')}}">Afficher plus d'emplois</a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                  Jobs-listing -->

    <!--=================================
            Candidates & Companies -->
    <section class="space-pb">
        <div class="container">
            <div class="row">
                <!-- Featured Candidates -->
                {{-- <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="section-title">
                        <h2 class="title">Featured Candidates</h2>
                        <p>We know this in our gut, but what can we do about it? How can we motivate ourselves?</p>
                    </div>
                    <div class="candidate-list">
                        <div class="candidate-list-image">
                            <img class="img-fluid" src="images/avatar/05.jpg" alt="">
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0"><a href="candidate-detail.html">Felica Queen</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Union St, New Delhi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-list-favourite-time">
                            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                            <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>2D ago</span>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-2"></div>
                <!-- Top Companies -->
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="title">Top Entreprise</h2>
                        <p>Voici quelques conseils et méthodes pour vous motiver:</p>
                    </div>
                    <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true"
                        data-items="1" data-md-items="1" data-sm-items="2" data-xs-items="1" data-xx-items="1"
                        data-space="15" data-autoheight="true">
                        @if ($companies_count == 0)
                        <div class="row-fluid">
                            <div class="span12 text-center">
                            <b>Aucune entreprise</b>
                            </div>
                        </div>
                        @else
                        @foreach ($companies as $item)
                        <div class="item">
                            <div class="employers-grid">
                                <div class="employers-list-logo">
                                    @if ($item->image == null)
                                        <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg"
                                            alt="">
                                    @else
                                        <img class="img-fluid" src="{{ Storage::url($item->image) }}" alt="">
                                    @endif
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">{{$item->name}}</a>
                                            </h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>{{$item->Adresse}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              Candidates & Companies -->

    <!--=================================
        Easiest Way to Use -->
    <section class="space-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title center">
                        <h2 class="title">Utilisation la plus simple</h2>
                        <p>Donnez-vous le pouvoir de la responsabilité. Rappelez-vous que la seule chose qui vous arrête est
                            toi-même.</p>
                    </div>
                </div>
            </div>
            <div class="row bg-holder-pattern mt-3 mt-md-4 me-md-0 ms-md-0"
                style="background-image: url('libraries/images/step/pattern-01.png');">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature-step text-center">
                        <div class="feature-info-icon">
                            <i class="flaticon-resume"></i>
                        </div>
                        <div class="feature-info-content pb-2 pb-md-0">
                            <h5>Créer un compte</h5>
                            <p class="mb-0">Créez un compte et accédez à vos paramètres enregistrés sur n'importe quel appareil.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature-step text-center">
                        <div class="feature-info-icon">
                            <i class="flaticon-recruitment"></i>
                        </div>
                        <div class="feature-info-content pb-2 pb-md-0">
                            <h5>Trouvez votre poste</h5>
                            <p class="mb-0">Ne vous contentez pas de trouver. Être trouvé. Mettez votre CV devant de grands employeurs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="feature-step text-center">
                        <div class="feature-info-icon">
                            <i class="flaticon-position"></i>
                        </div>
                        <div class="feature-info-content pb-2 pb-md-0">
                            <h5>Obtenir un emploi</h5>
                            <p class="mb-0">Votre prochain changement de carrière commence ici. Choisissez Job parmi des milliers d'entreprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Easiest Way to Use -->

    <!--=================================
    Action box & Counter -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-sm-5 mb-lg-0">
                    <div class="d-sm-flex">
                        <div class="align-self-center footer-top-logo"><img class="img-fluid" src="images/logo-dark.svg"
                                alt=""></div>
                        <div class="ps-sm-3 ms-sm-3 mt-3 mt-sm-0 border-sm-start">Créez un compte gratuit pour trouver des milliers
                            d'emplois, d'opportunités d'emploi et de carrière autour de vous!</div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="counter mb-4 mb-sm-0">
                                <div class="counter-icon">
                                    <i class="flaticon-team"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer mb-1 text-dark"  data-to="{{$jobs_count}}" data-speed="5">{{$jobs_count}}</span>
                                    <label class="mb-0">Offres d'emploi affichées</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-job-3"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer mb-1 text-dark" data-to="{{$companies_count}}" data-speed="5">{{$companies_count}}</span>
                                    <label class="mb-0">Entreprises</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
      Action box & Counter -->
@endsection
