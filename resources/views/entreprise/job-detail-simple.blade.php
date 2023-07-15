@extends('layouts.admins-employer')

@section('content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('fr');
    Carbon::yesterday()-> diffForHumans();
@endphp
    <!--=================================
                banner -->
    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url(/../libraries/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <h1 style="color: white;">Detail de l'offre d'emploi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                  banner -->

    <!--=================================
                  job list -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="job-list border">
                                <div class=" job-list-logo">
                                    @if ($show_detail->users->image == null)
                                        <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg"
                                            alt="">
                                    @else
                                        <img class="img-fluid" src="{{ Storage::url($show_detail->users->image) }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0">{{ $show_detail->titre }}</h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li>via: <a href="#">{{ $show_detail->users->name }}</a>
                                                </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>{{ $show_detail->adresse }}
                                                </li>
                                                <li><i class="fas fa-phone fa-flip-horizontal fa-fw"></i><span
                                                        class="ps-2">{{ $show_detail->tel }}</span></li>
                                                <li><a class="temporary" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>{{ $show_detail->type_jobs->titre }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time">
                                    {{-- <form action="{{route('candidat.job.favori.create',['id' => $show_detail->id])}}" method="post"> @csrf
                                    <button type="submit" class="job-list-favourite order-2">
                                       @if($fav_count == 0)
                                        <i class="far fa-heart"></i>
                                       @else
                                        <i class="fas fa-heart text-danger"></i>
                                       @endif
                                        <i class="far fa-heart"></i>
                                    </button></form> --}}

                                    <span class="job-list-time order-1"><i
                                            class="far fa-clock pe-1"></i>{{ $show_detail->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border p-4 mt-4 mt-lg-5">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-personal-profile"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Catégorie</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{ $show_detail->contrat }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-debit-card"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Salaire offert</label>
                                        <span class="mb-0 fw-bold d-block text-dark">${{ $show_detail->salaire_min }} -
                                            ${{ $show_detail->salaire_max }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-love"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Genre</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{ $show_detail->genre_id }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-bar-chart"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Secteur activité</label>
                                        <span
                                            class="mb-0 fw-bold d-block text-dark">{{ $show_detail->secteurs->intitule }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-md-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-apartment"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Sous-secteurs activité</label>
                                        <span
                                            class="mb-0 fw-bold d-block text-dark">{{ $show_detail->sous_secteurs->intitule }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-medal"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Experience</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{ $show_detail->experience }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-mortarboard"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Qualification</label>
                                        <span
                                            class="mb-0 fw-bold d-block text-dark">{{ $show_detail->qualification }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4 my-lg-5">
                        <h5 class="mb-3 mb-md-4">Description de l'emploi</h5>
                        {!!html_entity_decode($show_detail->description)!!}
                    </div>
                </div>
                <!--=================================
                        sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <div class="widget d-grid">
                            <a href="{{ route('entreprise.post.job.modify', ['id' => $show_detail->id, 'name' => str_slug($show_detail->titre)]) }}" class="btn btn-primary"><i class="far fa-edit"></i>Modifier</a>

                        </div>
                        <div class="widget">
                            <div class="company-address widget-box">
                                <ul class="list-unstyled mt-3">
                                    <li><a href="http://{{ $show_detail->site_internet }}"><i class="fas fa-link fa-fw"></i><span
                                                class="ps-2">
                                            @if ($show_detail->site_internet == null)
                                            Aucun site internet
                                            @else
                                            {{ $show_detail->site_internet }}
                                            @endif
                                            </span></a></li>
                                    <li><a href="tel:{{ $show_detail->tel }}"><i
                                                class="fas fa-phone fa-flip-horizontal fa-fw"></i><span
                                                class="ps-2">{{ $show_detail->tel }}</span></a></li>
                                    <li><a href="mailto:{{ $show_detail->email_contact }}"><i class="fas fa-envelope fa-fw"></i><span
                                                class="ps-2">{{ $show_detail->email_contact }}</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="jobber-company-view">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="widget-box">
                                            <div class="d-flex">
                                                <i class="flaticon-clock fa-2x fa-fw text-primary"></i>
                                                <span class="ps-3">Expire: {{ $show_detail->dateline->format('d/m/Y') }}</span>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="widget-box">
                                            <div class="d-flex">
                                                <i class="flaticon-personal-profile fa-2x fa-fw text-primary"></i>
                                                <span class="ps-3">300-500 Application</span>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================
                        sidebar -->
            </div>
        </div>
    </section>
    <!--=================================
                  job list -->
@endsection
