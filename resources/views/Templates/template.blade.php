<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        {!!Html::style('css/gsb.css')!!}
        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        <header>
            @yield('titreItem')
        </header>
        @yield('contenu')
        <footer class="footer">
            Application Visiteurs médicaux - copyright GSB - 2020
        </footer>
    </body>
</html>
