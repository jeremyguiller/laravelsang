@extends('Templates/template')

@section('titrePage')
    Liste des visiteurs
@endsection

@section('titreItem')
    <h1>Tous les visiteurs :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-stiped">
        <thead>
        <th>Nom du visiteur</th>
        <th>Prenom du visiteur</th>
        <th>Adresse du visiteur</th>
        <th>Code postal du visiteur</th>
        <th>Ville du visiteur</th>
        <th>date d'embauche</th>
        </thead>
        @foreach($visiteurs as $visiteur)
            <tr>
                <td> {{ $visiteur->VIS_NOM }}</td>
                <td> {{ $visiteur->VIS_PRENOM }}</td>
                <td> {{ $visiteur->VIS_ADRESSE }}</td>
                <td> {{ $visiteur->VIS_CP }}</td>
                <td> {{ $visiteur->VIS_VILLE }}</td>
                <td> {{ $visiteur->VIS_DATEEMBAUCHE }}</td>

            </tr>
        @endforeach
    </table>
@endsection
