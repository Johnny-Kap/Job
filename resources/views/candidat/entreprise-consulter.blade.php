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
                            <h1 style="color: white;">Consulter les entreprises</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          banner -->

    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <!--=================================
                sidebar -->
                <div class="col-lg-3">
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
                                        <input class="form-check-input" type="checkbox" value="" id="dateposted1">
                                        <label class="form-check-label" for="dateposted1">Last hour</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="dateposted2">
                                        <label class="form-check-label" for="dateposted2">Last 24 hour</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="dateposted3">
                                        <label class="form-check-label" for="dateposted3">Last 7 days</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="dateposted4">
                                        <label class="form-check-label" for="dateposted4">Last 14 days</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="dateposted5">
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
                        <div class="widget">
                            <div class="widget-add">
                                <img class="img-fluid" src="images/add-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-9">
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                        <div class="job-shortby ms-sm-auto d-flex align-items-center">
                            <form class="form-inline">
                                <div class="input-group mb-0 align-items-center">
                                    <label class="justify-content-start me-2">Trier par :</label>
                                    <div class="short-by">
                                        <select class="form-control basic-select">
                                            <option>Les plus recents</option>
                                            <option>Les plus anciens</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if ($entreprises_count == 0)
                    <div class="row-fluid">
                        <div class="span12 text-center">
                        <b>Aucune entreprise</b>
                        </div>
                    </div>
                    @else
                    @foreach ($entreprises as $item)
                    <div class="employers-list">
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
                                    <h5 class="mb-0"><a
                                            href="{{ route('candidat.entreprise.detail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                    </h5>
                                </div>
                                <div class="employers-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pe-1"></i>{{ $item->secteurs->intitule }}</li>
                                        <li><i class="fas fa-map-marker-alt pe-1"></i>{{ $item->Adresse }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="employers-list-position">
                        {{-- <a class="btn btn-sm btn-dark" href="#">17 Open position</a> --}}
                        <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>a rejoint le
                                        {{ $item->created_at->format('d-m-y') }}</span>
                    </div>
                    </div>
                @endforeach
                    @endif
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-sm-5">
                            {{ $entreprises->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
