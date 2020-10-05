<table class="table table-bordered table-stiped">
    <thead>
    <th>Depot légal</th>
    <th>Nom Commercial</th>
    <th>Composition</th>
    <th>Effets</th>
    <th>Contreindications</th>
    </thead>
    @foreach($medicaments as $medicamant)
        <tr>
            <td> {{ $medicamant->MED_DEPOTLEGAL }}</td>
            <td> {{ $medicamant->MED_NOMCOMMERCIAL }}</td>
            <td> {{ $medicamant->MED_COMPOSITION }}</td>
            <td> {{ $medicamant->MED_EFFETS }}</td>
            <td> {{ $medicamant->MED_CONTREINDIC }}</td>
        </tr>
    @endforeach
</table>
