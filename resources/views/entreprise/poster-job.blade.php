@extends('layouts.admins-employer')

@section('content')
    <!--=================================
                    tab -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="text-primary">Post a New Job</h2>
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
                            <form action="{{ route('entreprise.postjob.add') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="mb-2">Job Title *</label>
                                        <input type="text" name="titre" class="form-control" value=""
                                            placeholder="Enter a Title" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="mb-2">Email Address de contact *</label>
                                        <input type="email" name="email" class="form-control" value=""
                                            placeholder="Enter Email Address of Contact Person" required>
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label class="mb-2">Description *</label>
                                        <textarea class="form-control" name="description" rows="4" required></textarea>
                                    </div>

                                    {{-- <div class="form-group col-md-6 mb-3">
                                        <label class="mb-2">Username *</label>
                                        <input type="text" class="form-control" value="" placeholder="Username">
                                    </div> --}}
                                    <div class="form-group col-md-6 mb-3 datetimepickers">
                                        <label class="mb-2">Application Deadline</label>
                                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                value="08/11/1999" name="dateline" data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Job Sector *</label>
                                        <select class="form-control basic-select" name="secteur">
                                            @foreach ($secteurs as $item)
                                                <option value="{{ $item->id }}">{{ $item->intitule }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Job Sous secteur *</label>
                                        <select class="form-control basic-select" name="sous_secteur">
                                            @foreach ($sous_secteurs as $item)
                                                <option value="{{ $item->id }}">{{ $item->intitule }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <label class="mb-2">Type de Job</label>
                                        <select class="form-control basic-select" name="type_job">
                                            @foreach ($type_job as $item)
                                                <option value="{{ $item->id }}">{{ $item->titre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1é">
                                        <label class="mb-2">Salary *</label>
                                    </div>
                                    {{-- <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select">
                                            <option value="value 01">10000</option>
                                            <option value="value 02">25000</option>
                                            <option value="value 03">35000</option>
                                        </select>
                                    </div> --}}
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend d-flex">
                                                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                            </div>
                                            <input type="text" name="salaire_min" class="form-control" placeholder="Min"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend d-flex">
                                                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                            </div>
                                            <input type="text" name="salaire_max" class="form-control" placeholder="Max"
                                                required>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                                        <label class="mb-2">State</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">Connecticut</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                                        <label class="mb-2">Currency position</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">U.S. Dollar (USD)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                                        <label class="mb-2">Thousand separator</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">Energy</option>
                                            <option value="value 02">Human Resources</option>
                                            <option value="value 03">IT & Telecoms</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                                        <label class="mb-2">Number of decimals</label>
                                        <select class="form-control basic-select">
                                            <option value="value 02">Human Resources</option>
                                            <option value="value 01">Energy</option>
                                            <option value="value 03">IT & Telecoms</option>
                                        </select>
                                    </div> --}}
                                </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-12">
                            <h5 class="mb-4">Other Information</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                {{-- <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Offered Salary</label>
                                    <select class="form-control basic-select">
                                        <option value="value 02">Human Resources</option>
                                        <option value="value 03">IT & Telecoms</option>
                                        <option value="value 01">Energy</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Career Level</label>
                                    <select class="form-control basic-select">
                                        <option value="value 03">IT & Telecoms</option>
                                        <option value="value 02">Human Resources</option>
                                        <option value="value 01">Energy</option>
                                    </select>
                                </div> --}}
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
                                    <label class="mb-2">Gender *</label>
                                    <select class="form-control basic-select" name="genre">
                                        <option value="Homme / Femme">Homme / Femme</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group col-md-6 select-border mb-md-0 mb-3">
                                    <label class="mb-2">Industry *</label>
                                    <select class="form-control basic-select">
                                        <option value="value 02">Human Resources</option>
                                        <option value="value 01">Energy</option>
                                        <option value="value 03">IT & Telecoms</option>
                                    </select>
                                </div> --}}
                                <div class="form-group col-md-6 select-border mb-md-0 mb-3">
                                    <label class="mb-2">Qualifications *</label>
                                    <select class="form-control basic-select" name="qualification">
                                        <option value="Bac +2">Bac +2</option>
                                        <option value="Bac +3 - Licence">Bac +3 - Licence</option>
                                        <option value="Bac +5 - Master / Ingénieur">Bac +5 - Master / Ingénieur</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Telephone *</label>
                                    <input type="text" name="tel" class="form-control" placeholder="Tel">
                                </div>
                                <div class="form-group col-md-6 select-border mb-3">
                                    <label class="mb-2">Site internet</label>
                                    <input type="text" name="site_internet" class="form-control"
                                        placeholder="Site internet">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mt-4 mt-lg-5">
                        <div class="col-12">
                            <h5 class="mb-4">File Attachments</h5>
                        </div>
                    </div>
                    <div class="input-group mb-3 choose-file">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Choose file</label>
                    </div> --}}

                    <div class="row mt-5">
                        <div class="col-12">
                            <h5 class="mb-4">Address / Location</h5>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        {{-- <div class="form-group col-md-6 select-border mb-3">
                            <label class="mb-2">Country</label>
                            <select class="form-control basic-select">
                                <option value="value 01" selected="selected">Armenia</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 select-border mb-3">
                            <label class="mb-2">State</label>
                            <select class="form-control basic-select">
                                <option value="AL">Alabama</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 select-border mb-3">
                            <label class="mb-2">City</label>
                            <select class="form-control basic-select">
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            </select>
                        </div> --}}
                        <div class="form-group col-xl-10 col-md-9 col-sm-8 mb-3">
                            <label class="mb-2">Full Address *</label>
                            <input type="text" class="form-control" name="adresse" value="" required>
                        </div>
                        {{-- <div class="col-xl-2 col-md-3 col-sm-4 mb-3">
                            <a class="btn btn-outline-primary d-grid" href="#">Find on Map</a>
                        </div>
                        <div class="form-group col-md-4 mb-md-0 mb-3">
                            <label class="mb-2">Latitude</label>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-4 mb-md-0 mb-3">
                            <label class="mb-2">Longitude</label>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="mb-2">Zoom</label>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="form-group col-12 mt-4 mt-lg-5 mb-0">
                            <div class="company-address-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"
                                    height="400" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="form-group col-12 mt-3 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="accepts-01">
                                <label class="form-check-label ps-1" for="accepts-01">You accept our Terms and Conditions
                                    and Privacy Policy</label>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Post Job</button>
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
