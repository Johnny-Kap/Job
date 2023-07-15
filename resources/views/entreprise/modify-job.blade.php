@extends('layouts.admins-employer')

@section('content')
    <!--=================================
                    tab -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="text-primary">Modifier l'offre d'emploi</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="Job-detail" role="tabpanel" aria-labelledby="Job-detail-tab">
            <section class="space-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('entreprise.post.job.modified.ok', ['id' => $jobs->id]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="mb-2">Titre de l'offre d'emploi *</label>
                                        <input type="text" name="titre" class="form-control" value="{{$jobs->titre}}"
                                            placeholder="Enter a Title" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="mb-2">Adresse e-mail de contact *</label>
                                        <input type="email" name="email" class="form-control" value="{{$jobs->email_contact}}"
                                            placeholder="Enter Email Address of Contact Person" required>
                                    </div>
<<<<<<< HEAD
                                    {{-- <div class="form-group col-md-12 mb-3">
                                        <label class="mb-2">Description *</label>
                                        <textarea class="form-control" name="description" rows="6" required>{{$jobs->description}}</textarea>
                                    </div> --}}
                                    <div class="form-group col-md-12 mb-3">
                                        <label class="mb-2">Description *</label>
                                        <textarea class="form-control form--control user-text-editor" name="description" rows="10" cols="40" required>{!!html_entity_decode($jobs->description)!!}</textarea>
                                        <div class="d-flex align-items-center pt-2">
                                            <div class="mr-3">
                                                ``` <code class="badge bg-gray border border-gray text-gray">code</code> ```
                                            </div>
                                            <div class="mr-3 fw-bold">**gras**</div>
                                            <div class="mr-3 font-italic">*italique*</div>
                                            <div>&gt;quote</div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-md-6 mb-3 datetimepickers">
=======
                                    <div class="form-group col-md-12 mb-3">
                                        <label class="mb-2">Description *</label>
                                        <textarea class="form-control" name="description" rows="6" required>{{$jobs->description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6 mb-3 datetimepickers">
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                        <label class="mb-2">Date limite d'inscription *</label>
                                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                value="{{$jobs->dateline}}" lang="fr" required name="dateline" data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
<<<<<<< HEAD
                                    </div> --}}
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="mb-2">Date limite d'inscription *</label>
                                        <input type="datetime-local" class="form-control" value="{{$jobs->dateline}}" required name="dateline">
=======
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Secteur d'activité *</label>
                                        <select class="form-control basic-select" name="secteur">
                                            @foreach ($secteurs as $item)
                                                <option value="{{ $item->id }}">{{ $item->intitule }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Sous-secteur d'activité *</label>
                                        <select class="form-control basic-select" name="sous_secteur">
                                            @foreach ($sous_secteurs as $item)
                                                <option value="{{ $item->id }}">{{ $item->intitule }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Type d'emploi *</label>
                                        <select class="form-control basic-select" name="type_job">
                                            @foreach ($type_job as $item)
                                                <option value="{{ $item->id }}">{{ $item->titre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1é">
                                        <label class="mb-2">Salaire *</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend d-flex">
                                                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                            </div>
                                            <input type="text" name="salaire_min" class="form-control" value="{{$jobs->salaire_min}}" placeholder="Min"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend d-flex">
                                                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                            </div>
                                            <input type="text" name="salaire_max" class="form-control" value="{{$jobs->salaire_max}}" placeholder="Max"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Catégorie d'emploi *</label>
                                        <select class="form-control basic-select" name="contrat">
                                                <option value="CDI">CDI</option>
                                                <option value="CDD">CDD</option>
<<<<<<< HEAD
=======
                                                <option value="Temporaire">Temporaire</option>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-12">
                            <h5 class="mb-4">Autres Informations</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Experience *</label>
                                    <select class="form-control basic-select" name="experience">
                                        <option value="6M Experience" selected="selected">6M Experience</option>
                                        <option value="9M Experience">9M Experience</option>
                                        <option value="1Y Experience">1Y Experience</option>
                                        <option value="2Y Experience">2Y Experience</option>
                                        <option value="5Y Experience">5Y Experience</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Genre *</label>
                                    <select class="form-control basic-select" name="genre">
                                        <option value="Homme / Femme">Homme / Femme</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 select-border mb-md-0 mb-3">
                                    <label class="mb-2">Qualification *</label>
                                    <select class="form-control basic-select" name="qualification">
                                        <option value="Bac +2">Bac +2</option>
                                        <option value="Bac +3 - Licence">Bac +3 - Licence</option>
                                        <option value="Bac +5 - Master / Ingénieur">Bac +5 - Master / Ingénieur</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Téléphone *</label>
                                    <input type="text" name="tel" class="form-control" value="{{$jobs->tel}}" placeholder="Tel">
                                </div>
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Site internet</label>
                                    <input type="text" name="site_internet" class="form-control"
                                        placeholder="Site internet" value="{{$jobs->site_internet}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h5 class="mb-4">Adresse</h5>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="form-group col-xl-12 col-md-9 col-sm-8 mb-3">
                            <label class="mb-2">Adresse complète *</label>
                            <input type="text" class="form-control" name="adresse" value="{{$jobs->adresse}}" required>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!--=================================
                      feature-info-->
@endsection

