@extends('layouts/app')

@section('content')

<div class="container">

    <table class="table">
        <tr>
            <th>Stazione di partenza</th>
            <th>Stazione di arrivo</th>
            <th>Azienda</th>
            <th>Orario di partenza</th>
            <th>Giorno di partenza</th>
            <th>Orario di arrivo</th>
            <th>Codice Treno</th>
            <th>Numero Carrozze</th>
            <th>In orario</th>
            <th>Cancellato</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->Stazione_di_partenza }}</td>
                <td>{{ $train->Stazione_di_arrivo }}</td>
                <td>{{ $train->Azienda }}</td>
                <td>{{ $train->Orario_di_partenza }}</td>
                <td>{{ $train->Giorno_di_partenza }}</td>
                <td>{{ $train->Orario_di_arrivo }}</td>
                <td>{{ $train->Codice_Treno }}</td>
                <td>{{ $train->Numero_Carrozze }}</td>
                <td>{{ $train->In_orario ? 'In orario' : '' }}</td>
                <td>{{ $train->Cancellato ? 'Cancellato' : '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection