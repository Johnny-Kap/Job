@extends('layouts.admins')

@section('content')
    <!--=================================
        banner -->
    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url(/../libraries/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <form class="form row">
                                <div class="col-lg-5">
                                    <div class="form-group left-icon mb-3">
                                        <input type="text" class="form-control" name="job_title" placeholder="What?">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group left-icon mb-3">
                                        <input type="text" class="form-control" name="job_title" placeholder="Where?">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="form-group form-action">
                                        <button type="submit" class="btn btn-primary mt-0"><i
                                                class="fas fa-search-location"></i> Find Job</button>
                                    </div>
                                </div>
                            </form>
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
                                    <img class="img-fluid" src="/../libraries/images/svg/10.svg" alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0">{{$show_detail->titre}}</h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>{{$show_detail->adresse}}</li>
                                                <li><i class="fas fa-phone fa-flip-horizontal fa-fw"></i><span
                                                        class="ps-2">{{$show_detail->tel}}</span></li>
                                                <li><a class="temporary" href="#"><i
                                                    class="fas fa-suitcase pe-1"></i>{{$show_detail->type_jobs->titre}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time">
                                    <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>{{$show_detail->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border p-4 mt-4 mt-lg-5">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-debit-card"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Offered Salary</label>
                                        <span class="mb-0 fw-bold d-block text-dark">${{$show_detail->salaire_min}} - ${{$show_detail->salaire_max}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-love"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Gender</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{$show_detail->genre_id}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-bar-chart"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Secteur activité</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{$show_detail->secteurs->intitule}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-md-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-apartment"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Sous secteurs activité</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{$show_detail->sous_secteurs->intitule}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-medal"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Experience</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{$show_detail->experience}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-mortarboard"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1">Qualification</label>
                                        <span class="mb-0 fw-bold d-block text-dark">{{$show_detail->qualification}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4 my-lg-5">
                        <h5 class="mb-3 mb-md-4">Job Description</h5>
                        {{$show_detail->description}}
                    </div>
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <div class="widget d-grid">
                            <form action="{{route('candidat.job.apply', ['id' => $show_detail->id])}}" method="post">
                                @csrf
                                <button class="btn btn-primary" type="submit"><i class="far fa-paper-plane"></i>Apply for job</button>
                            </form>
                        </div>
                        <div class="widget">
                            <div class="company-address widget-box">
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#"><i class="fas fa-link fa-fw"></i><span
                                                class="ps-2">{{$show_detail->site_internet}}</span></a></li>
                                    <li><a href="tel:+905389635487"><i
                                                class="fas fa-phone fa-flip-horizontal fa-fw"></i><span
                                                class="ps-2">{{$show_detail->tel}}</span></a></li>
                                    <li><a href="mailto:ali.potenza@job.com"><i class="fas fa-envelope fa-fw"></i><span
                                                class="ps-2">{{$show_detail->email_contact}}</span></a></li>
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
                                                <span class="ps-3">{{$show_detail->dateline}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-box">
                                            <div class="d-flex">
                                                <i class="flaticon-personal-profile fa-2x fa-fw text-primary"></i>
                                                <span class="ps-3">300-500 Application</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-title">
                                <h5>Similar Jobs</h5>
                            </div>
                            <div class="similar-jobs-item widget-box">
                                @foreach ($job_similar as $item)
                                <div class="job-list">
                                    <div class="job-list-logo">
                                        <img class="img-fluid" src="images/svg/19.svg" alt="">
                                    </div>
                                    <div class="job-list-details">
                                        <div class="job-list-info">
                                            <div class="job-list-title">
                                                <h6><a href="#">{{$item->titre}}</a></h6>
                                            </div>
                                            <div class="job-list-option">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span>via</span>
                                                        <a href="employer-detail.html">{{$item->users->name}}</a>
                                                    </li>
                                                    <li><a class="temporary" href="#"><i
                                                                class="fas fa-suitcase pe-1"></i>{{$item->type_jobs->titre}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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