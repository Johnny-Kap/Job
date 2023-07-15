@extends('layouts.admins')

@section('content')
    <!--=================================
<<<<<<< HEAD
                                                    inner banner -->
=======
                                                inner banner -->
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
<<<<<<< HEAD
                                                                                          inner banner -->
    <!--=================================
                Manage Jobs -->
=======
                                                                                      inner banner -->
    <!--=================================
            Manage Jobs -->
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box mb-0">
                        <div class="row mb-4">
                            <div class="col-md-7 col-sm-5 d-flex align-items-center">
                                <div class="section-title-02 mb-0 ">
<<<<<<< HEAD
                                    <h4 class="mb-0">Gérer mes candidatures</h4>
=======
                                    <h4 class="mb-0">Gérer les emplois sousmis</h4>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
                                        <th scope="col">Titre d'emploi</th>
                                        <th scope="col">Application</th>
                                        <th scope="col">Date de candidature</th>
                                        <th scope="col">Validation</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($apply_job_count == 0)
<<<<<<< HEAD
                                        <tr>
                                            <td colspan="5">
                                                <div class="row-fluid">
                                                    <div class="span12 text-center">
                                                        <b>Aucune offre d'emploi</b>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($apply_job as $item)
                                            <tr>
                                                <th scope="row">{{ $item->jobs->titre }}
                                                    <p class="mb-1 mt-2">Expire: {{ $item->jobs->dateline }}</p>
                                                    <p class="mb-0">Adresse: {{ $item->jobs->adresse }}</p>
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
                                                    {{-- <form
                                                        action="{{ route('candidat.job.apply.supp', ['id' => $item->id]) }}"
                                                        method="post"> @csrf
                                                        <button type="submit"
                                                            style="background-color: transparent; border:0px;"
                                                            class="text-danger" data-toggle="modal"
                                                            data-target="#exampleModal"><i class="far fa-trash-alt">
                                                    </form> --}}
                                                    <button type="button" style="border:0px;" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal"><i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form
                                                            action="{{ route('candidat.job.apply.supp', ['id' => $item->id]) }}"
                                                            method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Supprimer</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Voulez-vous vraiment supprimer votre candidature
                                                                        ?<br><br>
                                                                        <p><b>Note : Cette action est irréversible.</b></p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Fermer</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Supprimer</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
=======
                                    <tr>
                                        <td colspan="5">
                                            <div class="row-fluid">
                                                <div class="span12 text-center">
                                                <b>Aucune offre d'emploi</b>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @else
                                    @foreach ($apply_job as $item)
                                        <tr>
                                            <th scope="row">{{ $item->jobs->titre }}
                                                <p class="mb-1 mt-2">Expire: {{ $item->jobs->dateline }}</p>
                                                <p class="mb-0">Adresse: {{ $item->jobs->adresse }}</p>
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
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                    @endif
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
<<<<<<< HEAD
    <!--=================================
                  Manage Jobs -->
=======

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
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
@endsection
