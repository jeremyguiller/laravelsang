<table class="table table-bordered table-stiped">
    <thead>
    <th>Numero</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Rue</th>
    <th>CodePostal</th>
    <th>Ville</th>
    <th>Specialité</th>
    </thead>
    @foreach($praticiens as $praticien)
        <tr>
            <td> {{ $praticien->PRA_NUM }}</td>
            <td> {{ $praticien->PRA_NOM }}</td>
            <td> {{ $praticien->PRA_PRENOM }}</td>
            <td> {{ $praticien->PRA_ADRESSE }}</td>
            <td> {{ $praticien->PRA_CP }}</td>
            <td> {{ $praticien->PRA_VILLE }}</td>
            <td> {{ $praticien->TYP_LIBELLE }}</td>


        </tr>
    @endforeach
</table>
