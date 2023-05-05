@extends('layouts.admins')

@section('content')
    <!--=================================
                                    Banner -->
    <section class="banner bg-holder bg-overlay-black-30 text-white"
        style="background-image: url(libraries/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center position-relative">
                    <h1 class="text-white mb-3">Drop <span class="text-primary"> Resume & Get </span> Your Desired Job</h1>
                    <p class="lead mb-4 mb-lg-5 fw-normal">Find Jobs, Employment & Career Opportunities</p>
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <form class="form row" method="GET" action="{{ route('candidat.search.job') }}">
                                <div class="col-lg-5">
                                    <div class="form-group mb-3">
                                        <div class="d-flex">
                                            <label class="form-label">What</label>
                                            <span class="ms-auto">e.g. job, company, title</span>
                                        </div>
                                        <div class="position-relative left-icon">
                                            <input type="text" class="form-control" name="job_title"
                                                placeholder="Job title, skill or company">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group mb-3">
                                        <div class="d-flex">
                                            <label class="form-label">Where</label>
                                            <span class="ms-auto">e.g. city, county or postcode</span>
                                        </div>
                                        <div class="position-relative left-icon">
                                            <input type="text" class="form-control location-input" name="job_adresse"
                                                placeholder="Town, city or postcode">
                                            <i class="far fa-compass"></i>
                                            <a href="#">
                                                <div class="detect">
                                                    <span class="d-none d-sm-block">Detect</span>
                                                    <i class="fas fa-crosshairs"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="form-group mb-3 form-action">
                                        <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i>
                                            Find Jobs</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="job-tag mt-4">
                        <ul class="justify-content-center">
                            <li class="text-primary">Trending Keywords :</li>
                            <li><a href="#">Automotive,</a></li>
                            <li><a href="#">Education,</a></li>
                            <li><a href="#">Health and Care Engineering</a></li>
                        </ul>
                    </div>
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
                        <h2 class="title">Choose your sector</h2>
                        <p class="mb-0">I truly believe Augustine’s words are true and if you look at history you know it
                            is true.</p>
                    </div>
                </div>
                <div class="col-lg-9 mt-0 mt-md-3 mt-lg-0">
                    <div class="category-style text-center">
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-account"></i>
                            </div>
                            <h6>Accountancy</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-conversation"></i>
                            </div>
                            <h6>Apprenticeships</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-money"></i>
                            </div>
                            <h6>Banking</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-mortarboard"></i>
                            </div>
                            <h6>Education</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-worker"></i>
                            </div>
                            <h6>Engineering</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-businessman"></i>
                            </div>
                            <h6>Estate Agency</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-coding"></i>
                            </div>
                            <h6>IT & Telecoms</h6>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-balance"></i>
                            </div>
                            <h6>Legal</h6>
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
                        <h2 class="title">Jobs You May be Interested in</h2>
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
                            <h6 class="ms-3 mb-0">Job Found</h6>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Hot jobs -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <!-- Part-Time -->
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
                                            <div class="job-list-favourite-time">
                                                <a class="job-list-favourite order-2" href="#"><i
                                                        class="far fa-heart"></i></a>
                                                <span class="job-list-time order-1"><i
                                                        class="far fa-clock pe-1"></i>{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex mt-md-5 mt-4">
                    <a class="{{route('candidat.job.consulter')}}" href="#">View More Jobs</a>
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
                        <h2 class="title">Top Companies</h2>
                        <p>Here are some tips and methods for motivating yourself:</p>
                    </div>
                    <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true"
                        data-items="1" data-md-items="1" data-sm-items="2" data-xs-items="1" data-xx-items="1"
                        data-space="15" data-autoheight="true">
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
                        <h2 class="title">Easiest Way to Use</h2>
                        <p>Give yourself the power of responsibility. Remind yourself the only thing stopping you is
                            yourself.</p>
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
                            <h5>Create Account</h5>
                            <p class="mb-0">Create an account and access your saved settings on any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature-step text-center">
                        <div class="feature-info-icon">
                            <i class="flaticon-recruitment"></i>
                        </div>
                        <div class="feature-info-content pb-2 pb-md-0">
                            <h5>Find Your Vacancy</h5>
                            <p class="mb-0">Don't just find. Be found. Put your CV in front of great employers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="feature-step text-center">
                        <div class="feature-info-icon">
                            <i class="flaticon-position"></i>
                        </div>
                        <div class="feature-info-content pb-2 pb-md-0">
                            <h5>Get A Job</h5>
                            <p class="mb-0">Your next career move starts here. Choose Job from thousands of companies</p>
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
                        <div class="ps-sm-3 ms-sm-3 mt-3 mt-sm-0 border-sm-start">Create a free account to find thousands
                            of Jobs, Employment & Career Opportunities around you!</div>
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
                                    <span class="timer mb-1 text-dark" data-to="{{$jobs_count}}" data-speed="5">{{$jobs_count}}</span>
                                    <label class="mb-0">Jobs Posted</label>
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
                                    <label class="mb-0">Companies</label>
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
