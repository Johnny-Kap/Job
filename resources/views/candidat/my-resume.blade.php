@extends('layouts.admins')

@section('content')
    <!--=================================
        My Resume -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="resume-base bg-light user-dashboard-info-box">
                                <div class="profile">
                                    <div class="jobber-user-info">
                                        <div class="profile-avatar">
                                            @if (Auth::user()->image == null)
                                            <img class="img-fluid " src="..\libraries\images\no-profile-pic-icon-0.jpg" alt="">
                                            @else
                                            <img class="img-fluid " src="{{ Storage::url(Auth::user()->image) }}" alt="">
                                            @endif
                                        </div>
                                        <div class="profile-avatar-info mt-3">
                                            <h5>{{Auth::user()->prenom}} {{Auth::user()->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-candidate border-top">
                                    <div class="candidate-info">
                                        <h6>Nom:</h6>
                                        <p>{{Auth::user()->name}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Prénom:</h6>
                                        <p>{{Auth::user()->prenom}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>E-mail:</h6>
                                        <p>{{Auth::user()->email}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Téléphone:</h6>
                                        <p>{{Auth::user()->tel}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Date de naissance:</h6>
                                        <p>{{Auth::user()->date_naiss->format('d/m/Y')}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Adresse:</h6>
                                        <p>{{Auth::user()->adresse}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Genre:</h6>
                                        <p>{{Auth::user()->genres->titre}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Description:</h6>
                                        <p>{!! html_entity_decode(Auth::user()->description) !!}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Profession:</h6>
                                        <p>{{Auth::user()->profession}}</p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6>Secteur d'activité:</h6>
                                        <p>{{Auth::user()->secteurs->intitule}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="resume-experience ps-0">
                                <div class="timeline-box mt-4">
                                    <h5 class="resume-experience-title">Expériences professionnelles:</h5>
                                    @foreach ($experiences as $item)
                                    <div class="jobber-candidate-timeline">
                                        <div class="jobber-timeline-item mb-0">
                                            <div class="jobber-timeline-cricle">
                                                <i class="far fa-circle"></i>
                                            </div>
                                            <div class="jobber-timeline-info">
                                                <div class="dashboard-timeline-info">
                                                    <span class="jobber-timeline-time">{{$item->date_debut->format('d/m/Y')}} à {{$item->date_fin->format('d/m/Y')}}</span>
                                                    <h6 class="mb-2">{{$item->poste}}</h6>
                                                    <span>- {{$item->nom_entreprise}}</span>
                                                    <p class="mt-2">{{$item->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="timeline-box">
                                    <h5 class="resume-experience-title">Formation:</h5>
                                    @foreach ($educations as $item)
                                    <div class="jobber-candidate-timeline">
                                        <div class="jobber-timeline-item">
                                            <div class="jobber-timeline-cricle">
                                                <i class="far fa-circle"></i>
                                            </div>
                                            <div class="jobber-timeline-info">
                                                <div class="dashboard-timeline-info">
                                                    <span class="jobber-timeline-time">{{$item->date_debut->format('d/m/Y')}} - {{$item->date_fin->format('d/m/Y')}}</span>
                                                    <h6 class="mb-2">{{$item->nom_diplome}}</h6>
                                                    <span>- {{$item->ecole}}</span>
                                                    <p class="mt-2">{{$item->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="mt-4">
                                    <h5>Compétences:</h5>
                                    @foreach ($competences as $item)
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width:0%" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="">
                                            <div class="progress-bar-title">{{$item->intitule}}</div>
                                            <span class="progress-bar-number">{{$item->niveau}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="mt-4">
                                    <h5>Langues:</h5>
                                    @foreach ($langues as $item)
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width:0%" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="">
                                            <div class="progress-bar-title">{{$item->intitule}}</div>
                                            <span class="progress-bar-number">{{$item->niveau}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          My Resume -->
@endsection
