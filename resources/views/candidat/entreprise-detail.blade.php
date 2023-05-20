@extends('layouts.admins')

@section('content')
    <!--=================================
                    banner -->
    <div class="candidate-banner bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="candidate-list bg-light">
                        <div class="candidate-list-image">
                            @if ($entreprise_detail->image == null)
                                <img class="img-fluid" src="\..\libraries\images\no-profile-pic-icon-0.jpg" alt="">
                            @else
                                <img class="img-fluid" src="{{ Storage::url($entreprise_detail->image) }}" alt="">
                            @endif
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0">{{ $entreprise_detail->name }}</h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pe-1"></i>{{ $entreprise_detail->secteurs->intitule }}
                                        </li>
                                        <li><i class="fas fa-map-marker-alt pe-1"></i>
                                            @if ($entreprise_detail->Adresse == null)
                                                Aucune adresse
                                            @else
                                                {{ $entreprise_detail->Adresse }}
                                            @endif
                                        </li>
                                        {{-- @if ($entreprise_detail->email_verified_at == null)
                                            <li class="candidates-feature-info bg-danger"
                                                style="border-radius: 5px; padding:2px;">
                                                <span class="candidates-info-title text-white">Email non vérifié</span>
                                            </li>
                                        @else
                                            <li class="candidates-feature-info bg-success"
                                                style="border-radius: 5px; padding:2px;">
                                                <span class="candidates-info-title text-white">Email vérifié</span>
                                            </li>
                                        @endif --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="widget ms-auto mb-0">
                            <div class="company-detail-meta ms-auto">
                                <a class="btn btn-primary" href="{{ route('entreprise.jobs.manage') }}">Gérer mes emplois <i
                                        class="far fa-edit"></i></a>
                                <a class="btn btn-primary" href="{{ route('entreprise.setting') }}">Mettre à jour <i
                                        class="fas fa-cog ms-1"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
                          banner -->

    <section class="space-pb">
        <div class="container"><br><br>
            <div class="row">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <div class="jobber-candidate-detail">
                        <div class="user-dashboard-info-box mb-0 pb-4">
                            <div class="section-title">
                                <h4>Mes offres d'emploi recentes</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @if ($my_job_count == 0)
                                    <div class="row-fluid">
                                        <div class="span12 text-center">
                                        <b>Aucune offre d'emploi</b>
                                        </div>
                                    </div>
                                    @else
                                    @foreach ($my_job as $item)
                                        <div class="job-list">
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
                                                        <h5 class="mb-0"><a href="{{ route('candidat.job.detail', ['id' => $item->id]) }}">{{ $item->titre }}</a>
                                                        </h5>
                                                    </div>
                                                    <div class="job-list-option">
                                                        <ul class="list-unstyled">
                                                            <li> <span>via</span> <a
                                                                    href="#">{{ $item->users->name }}</a>
                                                            </li>
                                                            <li><i
                                                                    class="fas fa-map-marker-alt pe-1"></i>{{ $item->adresse }}
                                                            </li>
                                                            <li><i
                                                                    class="fas fa-filter pe-1"></i>{{ $item->secteurs->intitule }}
                                                            </li>
                                                            <li><a class="part-time" href="#"><i
                                                                        class="fas fa-suitcase pe-1"></i>{{ $item->type_jobs->titre }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-list-favourite-time"> <span class="job-list-time order-1"><i
                                                        class="far fa-clock pe-1"></i>{{ $item->dateline }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 my-md-5">
                        <div id="about">
                            <h5 class="mb-3">A propos de l'enterprise</h5>
                            <div class="border p-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-account"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Nom:</label>
                                                <span
                                                    class="d-block fw-bold text-dark">{{ $entreprise_detail->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-approval"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">E-mail:</label>
                                                <span
                                                    class="d-block fw-bold text-dark">{{ $entreprise_detail->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-curriculum"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Secteur d'activité:</label>
                                                <span
                                                    class="d-block fw-bold text-dark">{{ $entreprise_detail->secteurs->intitule }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-contact"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Téléphone :</label>
                                                <span
                                                    class="d-block fw-bold text-dark">{{ $entreprise_detail->tel }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-appointment"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Date de création :</label>
                                                <span class="d-block fw-bold text-dark">
                                                    @if ($entreprise_detail->date_naiss == null)
                                                        Aucune date
                                                    @else
                                                        {{ $entreprise_detail->date_naiss }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex">
                                            <i class="font-xll text-primary align-self-center flaticon-map"></i>
                                            <div class="feature-info-content ps-3">
                                                <label class="mb-0">Adresse :</label>
                                                <span class="d-block fw-bold text-dark">
                                                    @if ($entreprise_detail->Adresse == null)
                                                        Aucune adresse
                                                    @else
                                                        {{ $entreprise_detail->Adresse }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mt-sm-5">
                                <b>Description de l'entreprise :</b>
                                @if ($entreprise_detail->description == null)
                                    Aucune description
                                @else
                                    {{ $entreprise_detail->description }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
