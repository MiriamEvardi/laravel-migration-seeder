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
            @if ($train->departure_date >= '2024-04-10')
            <tr>
                <td>{{ $train->id }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->departure_date }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->carriage_number }}</td>
                <td>{{ $train->in_time ? 'In orario' : '' }}</td>
                <td>{{ $train->deleted ? 'Cancellato' : '' }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>



@endsection