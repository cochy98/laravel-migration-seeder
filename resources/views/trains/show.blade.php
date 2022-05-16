@extends('layouts.main')

@section('title', 'Details')

@section('main')
<div class="container">
  <h1 class="py-4">{{ $message }}</h1>
  <p scope="col">Codice Treno: <span>{{ $train->train_code }}</span></p>
  <p scope="col">Operato da: <span>{{ $train->agency }}</span></p>
  <p scope="col">Stazione partenza: <span>{{ $train->departure_station }}</span></p>
  <p scope="col">Stazione arrivo: <span>{{ $train->arrival_station }}</span></p>
  <p scope="col">Data: <span>{{ $train->departure_date }}</span></p>
  <p scope="col">Orario partenza: <span>{{ $train->departure_time }}</span></p>
  <p scope="col">Orario Arrivo: <span>{{ $train->arrival_time }}</span></p>
  <p scope="col">Numero carrozze: <span>{{ $train->number_of_carriages }}</span></p>
  <p scope="col">In Orario: <span>{{ $train->in_time }}</span></p>
  <p scope="col">Cancellato: <span>{{ $train->is_deleted }}</span></p>
</div>
    
@endsection
