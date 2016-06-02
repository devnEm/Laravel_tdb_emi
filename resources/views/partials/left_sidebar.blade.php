<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Devnem.com
            </a>
        </li>

            @if (Auth::user()->isAdmin)
                <li><a href="{{ url('/') }}"><i class="fa fa-btn"></i>Accueil</a></li>
                <li><a href="{{ url('/blog') }}"><i class="fa fa-btn"></i>Blog</a></li>
                <li><a href="{{ url('/admin/index') }}"><i class="fa fa-btn"></i>Admin</a></li>
                <li><a href="{{ url('/home') }}"><i class="fa fa-btn"></i>Commercial</a></li>
                <li><a href="{{ url('/requete') }}">Requete</a></li>
                <li><a href="{{ url('/profil') }}">Profil</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            @else
                <li><a href="{{ url('/') }}"><i class="fa fa-btn"></i>Accueil</a></li>
                <li><a href="{{ url('/blog') }}"><i class="fa fa-btn"></i>Blog</a></li>
                <li><a href="{{ url('/home') }}"><i class="fa fa-btn"></i>Commercial</a></li>
                <li><a href="{{ url('/requete') }}">Requete</a></li>
                <li><a href="{{ url('/profil') }}"><i class="fa fa-user "></i>Profil</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            @endif

    </ul>
</div>