@extends('layaut.app')

@section('content')
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center py-4">
            <h1>Trains</h1>
        </div>
        <div class="col-12">
            <div class="text-center">
                <table class="table">
                    @foreach ($trains as $train)
                        <thead>
                            <th>Agency</th>
                            <th>Departure Station</th>
                            <th>Arrival Station</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Train Code</th>
                            <th>Number Carriages</th>
                            <th>In Time</th>
                            <th>Deleted</th>
                        </thead>
                        <tbody>
                            <td>{{ $train->agency }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->number_carriages }}</td>
                            <td>
                                @if ($train->in_time)
                                    In Time
                                @else
                                    Late
                                @endif
                            </td>
                            <td>
                                @if ($train->deleted)
                                    Deleted
                                @else
                                    Travelling
                                @endif
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
