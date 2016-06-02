<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">Devnem.com</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            @if (Auth::check())

                    <!-- Left Side Of Navbar -->

                @if (Auth::user()->isAdmin)
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/admin/index') }}">Admin</a></li>
                        <li><a href="{{ url('/redaction/index') }}">Redaction</a></li>
                        {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                    </ul>
                    @else
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Mon Suivi</a></li>
                        <li><a href="{{ url('/vente') }}">Mes Ventes</a></li>
                        <li><a href="{{ url('/avenant') }}">Mon Avenant</a></li>
                        {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                    </ul>

                @endif
            @else
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/blog') }}"><i class="fa fa-btn"></i>Blog</a></li>
                </ul>
            @endif
                    <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Se connecter</a></li>
                    <li><a href="{{ url('/register') }}">Créer un compte</a></li>
                @else
                    <li><a href="{{ url('/requete') }}">Requete</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if (Auth::user()->isAdmin)
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn"></i>Accueil</a></li>
                                <li><a href="{{ url('/admin/index') }}"><i class="fa fa-btn"></i>Admin</a></li>
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn"></i>Commercial</a></li>
                                <li><a href="{{ url('/requete') }}">Requete</a></li>
                                <li><a href="{{ url('/profil') }}">Profil</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            @else
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn"></i>Accueil</a></li>
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn"></i>Commercial</a></li>
                                <li><a href="{{ url('/requete') }}">Requete</a></li>
                                <li><a href="{{ url('/profil') }}">Profil</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
