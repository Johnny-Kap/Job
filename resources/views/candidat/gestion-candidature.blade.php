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
                                    <img class="img-fluid" src="libraries\images\no-profile-pic-icon-0.jpg" alt="">
                                @else
                                    <img class="img-fluid" style="width: 110px; height:120px;"
                                        src="{{ Storage::url(Auth::user()->image) }}" alt="">
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
                                    <h4 class="mb-0">Manage Jobs Application</h4>
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
                                        <th scope="col">Applications</th>
                                        <th scope="col">Date de candidature</th>
                                        <th scope="col">Validation</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apply_job as $item)
                                        <tr>
                                            <th scope="row">{{ $item->jobs->titre }}
                                                <p class="mb-1 mt-2">Expiry: {{ $item->jobs->dateline }}</p>
                                                <p class="mb-0">Address: {{ $item->jobs->adresse }}</p>
                                            </th>
                                            <td>Soumis</td>
                                            <td>{{ $item->created_at->format('d-m-y') }}</td>
                                            <td>
                                                @if ($item->validated == 1)
                                                    Validé
                                                @else
                                                    En attente
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{route('candidat.job.apply.supp', ['id' => $item->id])}}" method="post"> @csrf
                                                    <button type="submit" style="background-color: transparent; border:0px;" class="text-danger" data-toggle="modal" data-target="#exampleModal"><i class="far fa-trash-alt">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                {{ $apply_job->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
              Manage Jobs -->
@endsection
