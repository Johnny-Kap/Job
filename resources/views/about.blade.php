@extends('layouts.admins')

@section('content')

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-primary">À propos de nous</h2>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}"> Accueil </a></li>
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> À propos de nous </span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  inner banner -->

  <!--=================================
  Millions of jobs -->
  <section class="space-ptb" style="background-image: url(libraries/images/google-map.png); background-position: center center; background-repeat: no-repeat;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <h2 class="mb-4">Des millions d'emplois, trouve celui qui vous convient</h2>
        </div>
        <div class="col-lg-10">
          <div class="text-center">
            <p class="mb-lg-5 mb-4 lead">Nous connaissons également ces histoires épiques, ces légendes des temps modernes entourant les premiers échecs de personnes aussi prospères que Michael Jordan et Bill Gates. Nous pouvons remonter un peu plus loin dans le temps jusqu'à Albert Einstein ou encore plus loin jusqu'à Abraham Lincoln.</p>
            <img class="img-fluid mt-lg-4 mt-3" src="libraries/images/about/about-img1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Millions of jobs -->

  <!--=================================
  Advertise A Job -->
  <section class="space-pb">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="feature-info feature-info-border p-xl-5 p-4 text-center">
            <div class="feature-info-icon mb-3">
              <i class="flaticon-contract"></i>
            </div>
            <div class="feature-info-content">
<<<<<<< HEAD
              <h5 class="text-black">Annoncer un emploi</h5>
=======
              <h5 class="text-black">Advertise A Job</h5>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
              <p class="mb-0">Utilisez une défaite passée comme motivation. Rappelez-vous que vous n'avez nulle part où aller sauf.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="feature-info feature-info-border p-xl-5 p-4 text-center">
            <div class="feature-info-icon mb-3">
              <i class="flaticon-profiles"></i>
            </div>
            <div class="feature-info-content">
              <h5 class="text-black">Profils des recruteurs</h5>
              <p class="mb-0">Laissez le succès vous motiver. Trouvez une image de ce qui incarne le succès pour vous.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-info feature-info-border p-xl-5 p-4 text-center">
            <div class="feature-info-icon mb-3">
              <i class="flaticon-job-3"></i>
            </div>
            <div class="feature-info-content">
              <h5 class="text-black">Trouvez l'emploi de vos rêves</h5>
              <p class="mb-0">Faites une liste de vos réalisations vers votre objectif à long terme et rappelez à vos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Advertise A Job -->

  <!--=================================
counter -->
<section class="space-pb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bg-dark py-5">
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="counter mb-5 mb-lg-0 justify-content-center">
                  <div class="counter-icon">
                    <i class="flaticon-curriculum"></i>
                  </div>
                  <div class="counter-content">
<<<<<<< HEAD
                    <span class="timer mb-1 text-white" data-to="{{$jobs_count}}" data-speed="1000">{{$jobs_count}}</span>
=======
                    <span class="timer mb-1 text-white" data-to="1227" data-speed="10000">1227</span>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    <label class="mb-0 text-white">Offres d'emploi affichées</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="counter mb-5 mb-lg-0 justify-content-center">
                  <div class="counter-icon">
                    <i class="flaticon-resume"></i>
                  </div>
                  <div class="counter-content">
<<<<<<< HEAD
                    <span class="timer mb-1 text-white" data-to="{{$apply_job_count}}" data-speed="1000">{{$apply_job_count}}</span>
=======
                    <span class="timer mb-1 text-white" data-to="123" data-speed="10000">123</span>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    <label class="mb-0 text-white">Emplois pourvus</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="counter mb-5 mb-sm-0 justify-content-center">
                  <div class="counter-icon">
                    <i class="flaticon-suitcase"></i>
                  </div>
                  <div class="counter-content">
<<<<<<< HEAD
                    <span class="timer mb-1 text-white" data-to="{{$companies_count}}" data-speed="1000">{{$companies_count}}</span>
=======
                    <span class="timer mb-1 text-white" data-to="170" data-speed="10000">170</span>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    <label class="mb-0 text-white">Entreprises</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="counter justify-content-center">
                  <div class="counter-icon">
                    <i class="flaticon-users"></i>
                  </div>
                  <div class="counter-content">
<<<<<<< HEAD
                    <span class="timer mb-1 text-white" data-to="{{$members_count}}" data-speed="1000">{{$members_count}}</span>
=======
                    <span class="timer mb-1 text-white" data-to="127" data-speed="10000">127</span>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    <label class="mb-0 text-white">Membres</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  counter -->

  <!--=================================
  Testimonial -->
  {{-- <section class="space-pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-12 text-center">
          <div class="owl-carousel owl-nav-top-center" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
            <div class="item">
              <div class="testimonial-item text-center">
                <div class="avatar">
                  <img class="img-fluid rounded-circle" src="libraries/images/avatar/04.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>La base de données PMS a été l'une de nos sources actuelles de recrutement, soutenue par une équipe très expérimentée qui ferait tout son possible pour s'assurer que les demandes sont traitées à l'avance..</p>
                </div>
                <div class="testimonial-name">
                  <i class="fas fa-quote-left quotes"></i>
                  <h6 class="mb-1">Sara Lisbon</h6>
                  <span>Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item text-center">
                <div class="avatar">
                  <img class="img-fluid rounded-circle" src="libraries/images/avatar/02.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>Portal is very user-friendly in terms of searching for resumes and job postings. Also, they have an excellent database to search for resumes. As far as services are involved, it's terrific! </p>
                </div>
                <div class="testimonial-name">
                  <i class="fas fa-quote-left quotes"></i>
                  <h6 class="mb-1">Joana Williams</h6>
                  <span>Graphic Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--=================================
  Testimonial -->

@endsection
