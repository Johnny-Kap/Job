@extends('layouts.admins')

@section('content')
    <section>
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
                                        <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg"
                                            alt="">
                                    @else
                                        <img class="img-fluid" style="width: 110px; height:120px;"
                                            src="{{ Storage::url(Auth::user()->image) }}" alt="">
                                    @endif
                                </div>
                                <div class="profile-avatar-info ms-4">
                                    <h3>{{ Auth::user()->prenom }} {{ Auth::user()->name }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!--=================================
    inner banner -->


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box mb-0 pb-4">
                        <div class="section-title-02 mb-4">
                            <h4>Saved Jobs</h4>
                        </div>
                        <div class="row">
                            @foreach ($job_favoris as $item)
                            <div class="col-12">
                                <div class="job-list ">
                                    <div class="job-list-logo">
                                        <img class="img-fluid" src="images/svg/01.svg" alt="">
                                    </div>
                                    <div class="job-list-details">
                                        <div class="job-list-info">
                                            <div class="job-list-title">
                                                <h5 class="mb-0"><a href="job-detail.html">Marketing and
                                                        Communications</a></h5>
                                            </div>
                                            <div class="job-list-option">
                                                <ul class="list-unstyled">
                                                    <li> <span>via</span> <a href="employer-detail.html">Fast Systems
                                                            Consultants</a> </li>
                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                                                    <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                                                    <li><a class="freelance" href="#"><i
                                                                class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                            href="#"><i class="fas fa-heart text-danger"></i></a> <span
                                            class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 text-center mt-4 mt-sm-5">
                                {{$job_favoris->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
