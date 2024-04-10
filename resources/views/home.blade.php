@extends('layouts/app')

@section('content')

<div class="container">

    <h1 class="text-center display-3 py-5">LISTA TRENI</h1>

    <table class="table table-bordered">
        <tr>
            <th>Id treno</th>
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
            @if ($train->Giorno_di_partenza == '2024-04-10')
            <tr>
                <td>{{ $train->id }}</td>
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
            @endif
            @endforeach
        </tbody>
    </table>
</div>



@endsection