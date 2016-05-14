<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emilie_DashBoard</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77550588-1', 'auto');
  ga('send', 'pageview');

</script>
    

    <!-- Styles -->
    {{ Html::style('css/app.css') }}




</head>
<body id="app-layout">
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
                <a class="navbar-brand" href="{{ url('/') }}"><img src="img/InfoproDigital.jpg"/></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                @if (Auth::check())

                        @if (Auth::user()->isAdmin)
                        <ul class="nav navbar-nav">
                        <li><a href="{{ url('/admin/index') }}">Admin</a></li>

                        <li><a href="{{ url('/vente') }}">Mes Ventes</a></li>
                        <li><a href="{{ url('/avenant') }}">Mon Avenant</a></li>

                            </ul>

                        @else
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Mon Suivi</a></li>
                    <li><a href="{{ url('/vente') }}">Mes Ventes</a></li>
                    <li><a href="{{ url('/avenant') }}">Mon Avenant</a></li>

                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                </ul>
                        @endif
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Se connecter</a></li>
                        <li><a href="{{ url('/register') }}">Créer un compte</a></li>
                    @else
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

    @yield('content')

            <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    {{Html::script('js/jquery_ui.min.js')}}

</body>
</html>
