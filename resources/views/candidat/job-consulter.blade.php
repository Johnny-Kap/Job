@extends('layouts.admins')

@section('content')
    @php
        use Carbon\Carbon;
        Carbon::setLocale('fr');
        Carbon::yesterday()->diffForHumans();
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
                            <form class="form row" method="GET" action="{{ route('candidat.search.job') }}">
                                <div class="col-lg-5">
                                    <div class="form-group left-icon mb-3">
                                        <input type="text" class="form-control" name="job_title"
                                            placeholder="Quoi? e.g Titre d'une offre d'emploi">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group left-icon mb-3">
                                        <input type="text" class="form-control" name="job_adresse"
                                            placeholder="Où? e.g Adresse">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="form-group form-action">
                                        <button type="submit" class="btn btn-primary mt-0"><i
                                                class="fas fa-search-location"></i> Rechercher</button>
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
                              job-list -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!--=================================
                                    left-sidebar -->
                    <div class="sidebar">
                        <form method="GET" action="" class="form-inline">
                            <div class="widget">
                                <div class="widget-title widget-collapse">
                                    <h6>Gender</h6>
                                    <a class="ms-auto" data-bs-toggle="collapse" href="#gender" role="button"
                                        aria-expanded="false" aria-controls="gender"><i class="fas fa-chevron-down"></i></a>
                                </div>
                                <div class="collapse show" id="gender">
                                    <div class="widget-content">
                                        <div class="form-check">
                                            <input type="radio" name="genre" value="Tout genre" class="form-check-input"
                                                id="toutGenre" onclick='decocherGenre("male","female")'>
                                            <label class="form-check-label" for="gender1">Tout genre</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="genre" value="Masculin" class="form-check-input"
                                                id="male" onclick='decocherGenre("toutGenre","female")'>
                                            <label class="form-check-label" for="gender2">Masculin</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="genre" value="Feminin" class="form-check-input"
                                                id="female" onclick='decocherGenre("toutGenre","male")'>
                                            <label class="form-check-label" for="gender2">Féminin</label>
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
                                            <input type="radio" name="quali" value="Matriculation"
                                                class="form-check-input" id="qualification1"
                                                onclick='decocherQuali("qualification2","qualification3")'>
                                            <label class="form-check-label" for="qualification1">Matriculation</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="quali" value="Intermediaire"
                                                class="form-check-input" id="qualification2"
                                                onclick='decocherQuali("qualification1","qualification3")'>
                                            <label class="form-check-label" for="qualification2">Intermediate</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="quali" value="Graduate"
                                                class="form-check-input" id="qualification3"
                                                onclick='decocherQuali("qualification2","qualification1")'>
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
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                        {{-- <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i
                                    class="fa fa-envelope"></i>Get job alert </a> </div> --}}
                        <div class="job-shortby ms-sm-auto d-flex align-items-center">
                            <div class="d-sm-flex align-items-center mb-0">
                                <label class="justify-content-start me-2 mb-2 mb-sm-0">Trier par :</label>
                                <div class="short-by me-2">
                                    <select class="form-control basic-select form-select-sm" name="tri">
                                        <option>Le plus récent</option>
                                        <option>Le plus ancien</option>
                                    </select>
                                </div>
                                <label class="justify-content-start me-2 mb-2 mb-sm-0">Secteur :</label>
                                <div class="short-by me-2">
                                    <select class="form-control basic-select form-select-sm" name="secteur">
                                        <option>Tout secteur</option>
                                        @foreach ($secteurs as $item)
                                            <option value="{{ $item->id }}">{{ $item->intitule }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="justify-content-start me-2 mb-2 mb-sm-0">Type :</label>
                                <div class="short-by me-2">
                                    <select class="form-control basic-select form-select-sm" name="type">
                                        <option>Tout type</option>
                                        @foreach ($type_job as $item)
                                            <option value="{{ $item->id }}">{{ $item->titre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="short-by">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class='fas fa-filter'></i>Filtrer</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($showJob_count == 0)
                                <div class="row-fluid">
                                    <div class="span12 text-center">
                                        <b>Aucune offre d'emploi</b>
                                    </div>
                                </div>
                            @else
                                @foreach ($showJob as $item)
                                    <div class="job-list ">
                                        <div class="job-list-logo">
                                            @if ($item->users->image == null)
                                                <img class="img-fluid"
                                                    src="\..\libraries\images\no-profile-pic-icon-0.jpg" alt="">
                                            @else
                                                <img class="img-fluid" src="{{ Storage::url($item->users->image) }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h5 class="mb-0"><a
                                                            href="{{ route('candidat.job.detail', ['id' => $item->id]) }}">{{ $item->titre }}</a>
                                                    </h5>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li> <span>via</span> <a
                                                                href="{{ route('candidat.entreprise.detail', ['id' => $item->users->id]) }}">{{ $item->users->name }}</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>{{ $item->adresse }}
                                                        </li>
                                                        <li><i
                                                                class="fas fa-filter pe-1"></i>{{ $item->secteurs->intitule }}
                                                        </li>
                                                        <li><a class="freelance" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>{{ $item->type_jobs->titre }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <form action="{{ route('candidat.job.favori.create', ['id' => $item->id]) }}"
                                                method="post"> @csrf
                                                <button type="submit" class="job-list-favourite order-2">
                                                    @if ($fav_count == 0)
                                                        <i class="far fa-heart"></i>
                                                    @else
                                                        <i class="fas fa-heart text-danger"></i>
                                                    @endif
                                                    {{-- <i class="far fa-heart"></i> --}}

                                                </button>
                                            </form>
                                            <span class="job-list-time order-1"><i
                                                    class="far fa-clock pe-1"></i>{{ $item->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            {{ $showJob->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                              job-list -->

    <script>
        function decocherQuali(a, b) {
            document.getElementById(a).checked = false;
            document.getElementById(b).checked = false;
        }

        function decocherGenre(a, b) {
            document.getElementById(a).checked = false;
            document.getElementById(b).checked = false;
        }
    </script>
@endsection
