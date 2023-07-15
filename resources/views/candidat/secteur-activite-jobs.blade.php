@extends('layouts.admins')

@section('content')
    @php
        use Carbon\Carbon;
        Carbon::setLocale('fr');
        Carbon::yesterday()->diffForHumans();
    @endphp
    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url(/../libraries/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <h1 style="color:white;">Les offres d'emplois disponibles</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
<<<<<<< HEAD
                          banner -->
=======
                  banner -->
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad

    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!--=================================
<<<<<<< HEAD
                                    left-sidebar -->
=======
                            left-sidebar -->
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
<<<<<<< HEAD
                            {{-- <hr>
=======
                            <hr>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
                                            <input type="radio" name="quali" value="Graduate" class="form-check-input"
                                                id="qualification3"
                                                onclick='decocherQuali("qualification2","qualification1")'>
                                            <label class="form-check-label" for="qualification3">Graduate</label>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
                            </div> --}}
=======
                            </div>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    </div>
                </div>
                <div class="col-lg-9">
                    <!--=================================
<<<<<<< HEAD
                                                                  right-sidebar -->
=======
                                                          right-sidebar -->
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
<<<<<<< HEAD
                        @if ($show_jobs_count == 0)
                            <div class="row-fluid">
                                <div class="span12 text-center">
                                    <b>Aucune offre d'emploi</b>
                                </div>
                            </div>
                        @else
                            @foreach ($show_jobs as $item)
                                <div class="col-12">
                                    <div class="job-list ">
                                        <div class="job-list-logo">
                                            @if ($item->users->image == null)
                                                <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg"
                                                    alt="">
=======
                        <div class="col-12">
                            @if ($show_jobs_count == 0)
                                <div class="row-fluid">
                                    <div class="span12 text-center">
                                        <b>Aucune offre d'emploi</b>
                                    </div>
                                </div>
                            @else
                                @foreach ($show_jobs as $item)
                                    <div class="job-list ">
                                        <div class="job-list-logo">
                                            @if ($item->users->image == null)
                                                <img class="img-fluid"
                                                    src="\..\libraries\images\no-profile-pic-icon-0.jpg" alt="">
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                            @else
                                                <img class="img-fluid" src="{{ Storage::url($item->users->image) }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h5 class="mb-0"><a
<<<<<<< HEAD
                                                            href="{{ route('candidat.job.detail', ['id' => $item->id, 'name' => str_slug($item->titre)]) }}">{{ $item->titre }}</a>
=======
                                                            href="{{ route('candidat.job.detail', ['id' => $item->id]) }}">{{ $item->titre }}</a>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                                    </h5>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li> <span>via</span> <a
<<<<<<< HEAD
                                                                href="{{ route('candidat.entreprise.detail', ['id' => $item->users->id, 'name' => str_slug($item->users->name)]) }}">{{ $item->users->name }}</a>
=======
                                                                href="{{ route('candidat.entreprise.detail', ['id' => $item->users->id]) }}">{{ $item->users->name }}</a>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
<<<<<<< HEAD
                                                    @if ($item->job_favoris_count == 0)
=======
                                                    @if ($fav_count == 0)
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
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
<<<<<<< HEAD
                                </div>
                            @endforeach
                        @endif
=======
                                @endforeach
                            @endif
                        </div>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            {{ $show_jobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
