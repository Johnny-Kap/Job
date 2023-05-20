@extends('layouts.admins')

@section('content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('fr');
    Carbon::yesterday()-> diffForHumans();
@endphp
    <!--=================================
            inner banner -->
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Secteur d'activité</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"> Accueil </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Secteur
                                d'activité</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
              inner banner -->

    <!--=================================
              category -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title-02">
                    <h2 class="text-center">Les secteurs d'activité</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($secteurs as $item)
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-3">
                    <div class="category-style-02">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{route('candidat.job.list.secteur', ['id' => $item->id])}}">
                                    <h6 class="category-title">{{$item->intitule}}</h6> <span class="category-count">{{$item->jobs_count}}</span>
                                </a></li>
                        </ul>
                    </div>
                </div><br><br>
                @endforeach
            </div>
        </div>
    </section>
    <!--=================================
              category -->
@endsection
