{{-- Implemento la pagina main --}}
@extends('layouts.main')

{{-- Do un titolo a questa section --}}
@section('title', 'Trains')

{{-- Punto dove implemento questa section nella pagina principale --}}
@section('main')    
  <div class="container">
    <h1 class="py-4">{{ $message }}</h1>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Codice Treno</th>
            <th scope="col">Operato da</th>
            <th scope="col">Stazione partenza</th>
            <th scope="col">Stazione arrivo</th>
            <th scope="col">Data</th>
            <th scope="col">Orario partenza</th>
            <th scope="col">Orario Arrivo</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        @foreach ($trains as $train)
          <tbody>
            <tr>
              <th scope="row">{{ $train->train_code }}</th>
              <td>{{ $train->agency }}</td>
              <td>{{ $train->departure_station }}</td>
              <td>{{ $train->arrival_station }}</td>
              <td>{{ $train->departure_date }}</td>
              <td>{{ $train->departure_time }}</td>
              <td>{{ $train->arrival_time }}</td>
              <td>{{ $train->number_of_carriages }}</td>
              <td>{{ $train->in_time }}</td>
              <td>{{ $train->is_delected }}</td>
            </tr>
          </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection
