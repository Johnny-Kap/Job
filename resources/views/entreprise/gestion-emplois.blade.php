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
                                    <img class="img-fluid" style="width: 110px; height:120px;"
                                        src="{{ Storage::url(Auth::user()->image) }}" alt="">
                                @endif
                                {{-- <i class="fas fa-pencil-alt"></i> --}}
                            </div>
                            <div class="profile-avatar-info ms-4">
                                <h3>{{ Auth::user()->name }}</h3>
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
                                    <h4 class="mb-0">Gestion des emplois</h4>
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
                                        <th scope="col">Titre</th>
                                        <th scope="col">Expiration</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Secteur d'activité</th>
                                        <th scope="col">Etat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($job_count == 0)
                                        <tr>
                                            <td colspan="6">
                                                <div class="row-fluid">
                                                    <div class="span12 text-center">
                                                        <b>Aucune offre d'emploi</b>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($job as $item)
                                            <tr>
                                                <th scope="row"><a href="{{route('entreprise.job.detail',['id' => $item->id, 'name' => str_slug($item->titre)])}}">{{ $item->titre }}</a></th>
                                                <td>{{ $item->dateline->format('d/m/Y') }}</td>
                                                <td>{{ $item->adresse }}</td>
                                                <td>{{ $item->secteurs->intitule }}</td>
                                                <td>
                                                    @if ($item->etat == 1 || $item->etat == null)
                                                        Actif
                                                    @else
                                                        Inactif
                                                    @endif
                                                </td>
                                                <td>

                                                    @if ($item->etat == 1 || $item->etat == null)
                                                        <div class="d-inline-block p-2">
                                                            <form
                                                                action="{{ route('entreprise.etat.job.change.off', ['id' => $item->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Désactiver</button>
                                                            </form>
                                                        </div>
                                                    @else
                                                        <div class="d-inline-block p-2">
                                                            <form
                                                                action="{{ route('entreprise.etat.job.change.on', ['id' => $item->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-success btn-sm">Activer</button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                    <div class="d-inline-block p-2">
                                                        <a href="{{ route('entreprise.post.job.modify', ['id' => $item->id, 'name' => str_slug($item->titre)]) }}" class="btn btn-primary btn-sm">
                                                            Modifier
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                {{ $job->links() }}
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
