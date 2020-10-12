<!doctype html>
<html lang="fr">



<head>



    <meta charset="utf-8">



    {!! Html::style('css/gsb.css') !!}
    {!! Html::style('lib/bootstrap/bootstrap.min.css') !!}



    <title>
        @yield('titrePage')
    </title>



</head>



<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">GSB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Voir...
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Les comptes-rendus de visite</a>
                        <a class="dropdown-item" href="{{url('/medicaments')}}">Les médicaments</a>
                        <a class="dropdown-item" href="{{url('/praticiens')}}">Les praticiens</a>
                    </div>
                </li>
                <li class ="nav-item">
                    <a class="nav-link" href="#">Créer un compte-rendu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    @yield('titreItem')
</header>
@yield('contenu')



<footer class="footer">
    Application Visiteurs médicaux - copyright GSB - 2020
</footer>



{!! Html::script('lib/jquery/jquery-3.5.1.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootsrap.js/bootstrap.min.js') !!}



</body>
</html>
