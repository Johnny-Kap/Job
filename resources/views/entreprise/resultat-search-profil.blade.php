@extends('layouts.admins-employer')

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
                            {{-- <form class="form row">
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
                            </form> --}}
                            <h1 style="color:white;">Resultat de la recherche</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                      banner -->

    <!--=================================
                                      job-list -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!--=================================
                                            left-sidebar -->
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Date Posted</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#dateposted" role="button"
                                    aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse show" id="dateposted">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted1">
                                        <label class="form-check-label" for="dateposted1">Last hour</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted2">
                                        <label class="form-check-label" for="dateposted2">Last 24 hour</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted3">
                                        <label class="form-check-label" for="dateposted3">Last 7 days</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted4">
                                        <label class="form-check-label" for="dateposted4">Last 14 days</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted5">
                                        <label class="form-check-label" for="dateposted5">Last 30 days</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Specialism</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#specialism" role="button"
                                    aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse show" id="specialism">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism1">
                                        <label class="form-check-label" for="specialism1">IT Contractor</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism2">
                                        <label class="form-check-label" for="specialism2">Charity & Voluntary</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism3">
                                        <label class="form-check-label" for="specialism3">Digital & Creative</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism4">
                                        <label class="form-check-label" for="specialism4">Estate Agency</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism5">
                                        <label class="form-check-label" for="specialism5">Graduate</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Job Type</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#jobtype" role="button"
                                    aria-expanded="false" aria-controls="jobtype"> <i class="fas fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse show" id="jobtype">
                                <div class="widget-content">
                                    <div class="form-check fulltime-job">
                                        <input type="checkbox" class="form-check-input" id="jobtype1">
                                        <label class="form-check-label" for="jobtype1">Full Time</label>
                                    </div>
                                    <div class="form-check parttime-job">
                                        <input type="checkbox" class="form-check-input" id="jobtype2">
                                        <label class="form-check-label" for="jobtype2">Part-Time</label>
                                    </div>
                                    <div class="form-check freelance-job">
                                        <input type="checkbox" class="form-check-input" id="jobtype3">
                                        <label class="form-check-label" for="jobtype3">Freelance</label>
                                    </div>
                                    <div class="form-check temporary-job">
                                        <input type="checkbox" class="form-check-input" id="jobtype4">
                                        <label class="form-check-label" for="jobtype4">Temporary</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Experience</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#experience" role="button"
                                    aria-expanded="false" aria-controls="experience"> <i class="fas fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse show" id="experience">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="experience1">
                                        <label class="form-check-label" for="experience1">Fresher</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="experience2">
                                        <label class="form-check-label" for="experience2">Less than 1 year</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="experience3">
                                        <label class="form-check-label" for="experience3">2 Year</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="experience4">
                                        <label class="form-check-label" for="experience4">3 Year</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="experience5">
                                        <label class="form-check-label" for="experience5">4 Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Offered Salary</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#Offeredsalary" role="button"
                                    aria-expanded="false" aria-controls="Offeredsalary"> <i
                                        class="fas fa-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="Offeredsalary">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Offeredsalary1">
                                        <label class="form-check-label" for="Offeredsalary1">10k - 20k</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Offeredsalary2">
                                        <label class="form-check-label" for="Offeredsalary2">20k - 30k</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Offeredsalary3">
                                        <label class="form-check-label" for="Offeredsalary3">30k - 40k</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Offeredsalary4">
                                        <label class="form-check-label" for="Offeredsalary4">40k - 50k</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Offeredsalary5">
                                        <label class="form-check-label" for="Offeredsalary5">50k - 60k</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Gender</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#gender" role="button"
                                    aria-expanded="false" aria-controls="gender"><i class="fas fa-chevron-down"></i></a>
                            </div>
                            <div class="collapse show" id="gender">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="gender1">
                                        <label class="form-check-label" for="gender1">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="gender2">
                                        <label class="form-check-label" for="gender2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Qualification</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#qualification" role="button"
                                    aria-expanded="false" aria-controls="qualification"> <i
                                        class="fas fa-chevron-down"></i></a>
                            </div>
                            <div class="collapse show" id="qualification">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="qualification1">
                                        <label class="form-check-label" for="qualification1">Matriculation</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="qualification2">
                                        <label class="form-check-label" for="qualification2">Intermediate</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="qualification3">
                                        <label class="form-check-label" for="qualification3">Graduate</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!--=================================
                                                          right-sidebar -->
                    {{-- <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="section-title mb-3 mb-lg-4">
                                <h6 class="mb-0">Showing 1-5 of <span class="text-primary">28 Jobs</span></h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="job-filter-tag">
                                <ul class="list-unstyled">
                                    <li><a href="#">Freelance <i class="fas fa-times-circle"></i> </a></li>
                                    <li><a class="filter-clear" href="#">Reset Search <i
                                                class="fas fa-redo-alt"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                        {{-- <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i
                                    class="fa fa-envelope"></i>Get job alert </a> </div> --}}
                        <div class="job-shortby ms-sm-auto d-flex align-items-center">
                            <form class="form-inline">
                                <div class="d-sm-flex align-items-center mb-0">
                                    <label class="justify-content-start me-2 mb-2 mb-sm-0">Trier par :</label>
                                    <div class="short-by">
                                        <select class="form-control basic-select">
                                            <option>Le plus recents</option>
                                            <option>Le plus anciens</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($resultat_count == 0)
                            <div class="row-fluid">
                                <div class="span12 text-center">
                                <b>Aucun profil</b>
                                </div>
                            </div>
                            @else
                            @foreach ($resultat as $item)
                            <div class="job-list ">
                                <div class="job-list-logo">
                                    @if ($item->image == null)
                                        <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg"
                                            alt="">
                                    @else
                                        <img class="img-fluid" src="{{ Storage::url($item->image) }}" alt="">
                                    @endif
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="{{route('entreprise.profil.detail', ['id' => $item->id, 'name' => str_slug($item->name)])}}">{{ $item->prenom }} {{ $item->name }}</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-filter pe-1"></i>{{ $item->secteurs->intitule }}
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>
                                                    @if ($item->Adresse == null)
                                                        Aucune adresse
                                                    @else
                                                        {{ $item->Adresse }}
                                                    @endif
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time">
                                    {{-- <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> --}}
                                        <span
                                        class="job-list-time order-1"><i
                                            class="far fa-clock pe-1"></i>a rejoint le {{ $item->created_at->format('d-m-y') }}</span>
                                </div>
                            </div>
                        @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            {{ $resultat->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                      job-list -->
@endsection
