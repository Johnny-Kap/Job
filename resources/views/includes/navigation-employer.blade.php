<!--=================================
Header -->
<header class="header bg-dark">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target=".navbar-collapse">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="{{route('entreprise.home')}}">
                <img class="img-fluid" src="/../libraries/images/logo-pms.png" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown {{ Request::route()->named('entreprise.home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('entreprise.home')}}" id="navbarDropdown">Accueil</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::route()->named('entreprise.post.job') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Emplois <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('entreprise.post.job')}}">Poster une offre d'emploi</a></li>
                            {{-- <li><a class="dropdown-item" href="{{route('candidat.job.consulter')}}">Consulter les emplois</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{ Request::route()->named('entreprise.consulte.profil') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Profils <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('entreprise.consulte.profil')}}">Consulter les profils</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item mega-menu {{ Request::route()->named('entreprise.about') ? 'active' : '' }}">
                        <a href="{{route('entreprise.about')}}" class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::route()->named('entreprise.contact') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="{{route('entreprise.contact')}}"
                            aria-haspopup="true" aria-expanded="false">
                            Nous contacter</a>
                    </li>
                </ul>
            </div>
            @guest
                <div class="add-listing">
                    <div class="login d-inline-block me-4">
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}"><i class="far fa-user pe-2"></i>Se connecter</a>
                        @endif

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><i class="far fa-user pe-2"></i>S'enregistrer</a>
                        @endif
                    </div>
                </div>
            @else
                <div class="border-left border-left-gray pl-4 justify-content-end">
                    <div class="login d-inline-block pl-4">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                @if(Auth::user()->image == NULL)
                                <img src="\libraries\images\no-profile-pic-icon-0.jpg" alt="" class="rounded-full" style="width: 30px; height: 30px; position: relative; top:23px; border-radius:15px;">
                                @else
                                <img src="{{ Storage::url(Auth::user()->image) }}" alt="" class="rounded-full" style="width: 30px; height: 30px; position: relative; top:23px; border-radius:15px;">
                                @endif
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()->prenom}} {{Auth::user()->name}} <i class="fas fa-chevron-down fa-xs"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('entreprise.profil')}}">Mon profil</a></li>
                                    <li><a class="dropdown-item" href="{{route('entreprise.jobs.manage')}}">Gérer mes emplois</a></li>
                                    <li><a class="dropdown-item" href="{{route('entreprise.candidature.manage')}}">Gérer les candidatures</a></li>
                                    <li><a class="dropdown-item" href="{{route('entreprise.setting')}}">Paramètres</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Déconnexion</a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            @endguest

    </nav>
</header>
<!--=================================
Header -->
