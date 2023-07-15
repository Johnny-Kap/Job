<!--=================================
Header -->
<style>
<<<<<<< HEAD
=======

>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
    /* .custom-a:hover {
    background-color: white;
    } */

    @media screen and (max-width: 1024px) {
<<<<<<< HEAD
        .custom {
=======
        .custom{
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
            position: relative;
            bottom: 10px;
            left: 15px;
        }

<<<<<<< HEAD
        .custom-2 {
=======
        .custom-2{
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
            position: relative;
            left: 10px;
        }

<<<<<<< HEAD
        .custom-a {
            color: #ff8a00;
        }

        .custom-pc-2 {
=======
        .custom-a{
            color: #ff8a00;
        }

        .custom-pc-2{
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
            position: relative;
            left: 14px;
        }

    }

    @media screen and (min-width: 1224px) {
<<<<<<< HEAD
        .custom-pc {
=======
        .custom-pc{
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
            position: relative;
            left: 200px;
        }

<<<<<<< HEAD
        .custom-pc-2 {
=======
        .custom-pc-2{
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
            position: relative;
            left: 140px;
            top: 29px;
        }

    }
</style>

<header class="header bg-dark">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target=".navbar-collapse">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid" src="/../libraries/images/logo-pms.png" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown {{ Request::route()->named('welcome') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('welcome') }}" id="navbarDropdown">Accueil</a>
                    </li>
                    <li
                        class="nav-item dropdown {{ Request::route()->named('candidat.job.consulter') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Emplois <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('candidat.job.consulter') }}">Consulter les
                                    emplois</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{ Request::route()->named('candidat.job.secteur') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Secteur activité <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('candidat.job.secteur') }}">Consulter les
                                    secteur d'activité</a></li>
                        </ul>
                    </li>
                    <li
                        class="nav-item dropdown {{ Request::route()->named('candidat.entreprise.consulter') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Entreprises <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('candidat.entreprise.consulter') }}">Consulter
                                    les entreprises</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item mega-menu {{ Request::route()->named('about') ? 'active' : '' }}">
<<<<<<< HEAD
                        <a href="{{ route('about') }}" class="nav-link">À propos</a>
=======
                        <a href="{{ route('about') }}" class="nav-link">A propos</a>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                    </li>
                    <li class="nav-item dropdown {{ Request::route()->named('contact') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="{{ route('contact') }}" aria-haspopup="true"
                            aria-expanded="false">
                            Nous contacter</a>
                    </li>
                </ul>
                @guest
                    {{-- <div class="navbar-collapse collapse justify-content-start" id="custom"> --}}
                    <ul class="nav navbar-nav custom-pc-2">
                        <li class="nav-item dropdown">
                            {{-- <div class="add-listing"> --}}
                            <div class="login d-inline-block me-6">
                                @if (Route::has('login'))
<<<<<<< HEAD
                                    <a href="{{ route('login') }}" class="custom-a"><i class="fas fa-user-friends pe-2"></i>Se
                                        connecter</a>
                                @endif

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="custom-a"><i
                                            class="fas fa-user-plus pe-2"></i>S'enregistrer</a>
=======
                                    <a href="{{ route('login') }}"  class="custom-a"><i class="far fa-user pe-2"></i>Se connecter</a>
                                @endif

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="custom-a"><i class="far fa-user pe-2"></i>S'enregistrer</a>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                @endif
                            </div>
                            {{-- </div> --}}
                        </li>
                    </ul>
                    {{-- </div> --}}
                @else
                    <div class="border-left border-left-gray pl-6 justify-content-start custom-pc">
                        <div class="login d-inline-block pl-6 custom-2">
                            <ul class="nav navbar-nav">
                                <li class="nav-item dropdown">
                                    @if (Auth::user()->image == null)
                                        <img src="\libraries\images\no-profile-pic-icon-0.jpg" alt=""
                                            class="rounded-full"
                                            style="width: 30px; height: 30px; position: relative; top:23px; border-radius:15px;">
                                    @else
                                        <img src="{{ Storage::url(Auth::user()->image) }}" alt=""
                                            class="rounded-full"
                                            style="width: 30px; height: 30px; position: relative; top:23px; border-radius:15px;">
                                    @endif
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle custom" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<<<<<<< HEAD
                                        {{ str_limit(Auth::user()->prenom, 9) }} <i class="fas fa-chevron-down fa-xs"></i>
=======
                                        {{ Auth::user()->prenom }} {{ Auth::user()->name }} <i
                                            class="fas fa-chevron-down fa-xs"></i>
>>>>>>> 085ef20ea26348da3ef71453a726ef04b15b06ad
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('candidat.my-profil') }}">Voir
                                                profil</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('candidat.gestion-candidatures') }}">Mes
                                                candidatures</a></li>
                                        <li><a class="dropdown-item" href="{{ route('candidat.gestion-favoris') }}">Mes
                                                favoris</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('candidat.my-setting') }}">Paramètres</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Déconnexion</a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endguest
            </div>
    </nav>
</header>
<!--=================================
Header -->
