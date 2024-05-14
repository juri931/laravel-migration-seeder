@extends('layout.main')

@section('content')

<h1>Fake Trains</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Company</th>
      <th scope="col">Departure Station</th>
      <th scope="col">Arrival Station</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Train Code</th>
      <th scope="col">Cariages Number</th>
      <th scope="col">On Time</th>
      <th scope="col">Cancelled</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($trains as $train)
        <tr>
            <th>{{ $train->company }}</th>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->carriages_number }}</td>
            <td>{{ $train->is_in_time }}</td>
            <td>{{ $train->is_cancelled }}</td>





        </tr>
    @endforeach
  </tbody>
</table>

@endsection
