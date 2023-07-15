@extends('layouts.admins')

@section('content')
    <!--=================================
    inner banner -->
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Contactez-nous</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html"> Accueil </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Contactez-nous </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
      inner banner -->

    <!--=================================
      feature-info -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Adresse</h5>
                            <span class="d-block"> </span>
                            <span>Montréal, Québec</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-contact fa-flip-horizontal"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Numéro téléphone</h5>
                            <span class="d-block">#</span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-approval"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">E-mail</h5>
                            <span class="d-block">contact@portneufms.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-curriculum"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Fax</h5>
                            <span class="d-block">#</span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
      feature-info -->

    <!--=================================
      Let’s Get In Touch -->
    <section class="space-ptb pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-02 text-center">
                        <h2>Prenons contact!</h2>
                        {{-- <p>Nous avons réalisé plus de 1000 projets pour cinq cents clients. Confiez-nous votre prochain projet.</p> --}}
                    </div>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="Username" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="email" placeholder="Objet">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="Password" placeholder="Entrez votre adresse email">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="phone" placeholder="Entrez votre numéro de téléphone">
                    </div>
                    <div class="form-group col-12 mb-0">
                        <textarea rows="5" class="form-control" id="sector" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a class="btn btn-primary" href="#">Envoyez votre message</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="space-ptb pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex mb-md-0 mb-4">
                        <i class="font-xlll text-primary flaticon-hand-shake"></i>
                        <div class="feature-info-content ps-4">
                            <h5>Discutez avec nous en ligne</h5>
                            <p class="mb-0">Discutez avec nous en ligne si vous avez des questions.</p>
                            <a class="mt-2 mb-0 d-block" href="#">Cliquez ici pour ouvrir le chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex mb-md-0 mb-4">
                        <i class="font-xlll text-primary flaticon-profiles"></i>
                        <div class="feature-info-content ps-4">
                            <h5>Ecrivez nous</h5>
                            <p class="mb-0">Notre agent de soutien travaillera avec vous pour répondre à vos besoins de prêt.</p>
                            <h5 class="mt-2 mb-0">contact@portneufms.com</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="d-flex">
                        <i class="font-xlll text-primary flaticon-conversation-1"></i>
                        <div class="feature-info-content ps-4">
                            <h5>Lisez nos dernières nouvelles</h5>
                            <p class="mb-0">Visit our Blog page and know more about news and career tips</p>
                            <a class="mt-2 mb-0 d-block" href="#">Read Blog post </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--=================================
      Let’s Get In Touch -->
@endsection
