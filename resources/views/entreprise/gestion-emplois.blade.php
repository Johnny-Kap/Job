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
                                    <img class="img-fluid" src="{{ Storage::url(Auth::user()->image) }}" alt="">
                                @endif
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <div class="profile-avatar-info ms-4">
                                <h3>{{Auth::user()->prenom}} {{Auth::user()->name}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!--=================================
                                                                                  inner banner -->
    <!--=================================
        Manage Jobs -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box mb-0">
                        <div class="row mb-4">
                            <div class="col-md-7 col-sm-5 d-flex align-items-center">
                                <div class="section-title-02 mb-0 ">
                                    <h4 class="mb-0">Manage Jobs</h4>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
                                {{-- <div class="search">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Search....">
                                </div> --}}
                            </div>
                        </div>
                        <div class="user-dashboard-table table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Expiration</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Secteur</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job as $item)
                                    <tr>
                                        <th scope="row">{{$item->titre}}</th>
                                        <td>{{$item->dateline}}</td>
                                        <td>{{$item->adresse}}</td>
                                        <td>{{$item->secteurs->intitule}}</td>
                                        <td>
                                            <ul class="list-unstyled mb-0 d-flex">
                                                <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="view"><i class="far fa-eye"></i></a></li>
                                                <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                                                <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                {{$job->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Manage Jobs -->
@endsection
