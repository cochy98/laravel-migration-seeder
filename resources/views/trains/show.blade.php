@extends('layouts.main')

@section('title', 'Details')

@section('main')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="pt-5">{{ $message }}</h1>
    </div>
  </div>

  <div class="details col-12">
    <p><strong>Codice Treno: </strong><span>{{ $train->train_code }}</span></p>
    <p><strong>Operato da: </strong><span>{{ $train->agency }}</span></p>
    <p><strong>Stazione partenza: </strong><span>{{ $train->departure_station }}</span></p>
    <p><strong>Stazione arrivo: </strong><span>{{ $train->arrival_station }}</span></p>
    <p><strong>Data: </strong><span>{{ $train->departure_date }}</span></p>
    <p><strong>Orario partenza: </strong><span>{{ $train->departure_time }}</span></p>
    <p><strong>Orario Arrivo: </strong><span>{{ $train->arrival_time }}</span></p>
    <p><strong>Numero carrozze: </strong><span>{{ $train->number_of_carriages }}</span></p>
    <p><strong>In Orario: </strong><span> @if ($train->in_time) SI @else NO @endif </span></p>
    <p><strong>Cancellato: </strong><span> @if ($train->is_deleted) SI @else NO @endif </span></p>
  </div>
</div>
    
@endsection
