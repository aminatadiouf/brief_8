@extends('layout.nav')
@section('contenu')

    

@if(session('error')) 
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('error') }}</font></font></strong>
</font></font></div>
@endif

@foreach($reserv as $reservation)

<div class="row justify-content-around">
  <div class="card   mt-5 w-25 h-15">
    <input type="hidden" name="evenement_id" id="evenement_id">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">


  <h3 class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Details réservation</font></font></h3>
  <div class="card-body">
    <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom de l'utilisateur: {{$reservation->user->name}}</font></font></h5>
    <h6 class="card-subtitle text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom de l'événement : {{ $reservation->evenement->libelle }}</font></font></h6>
  </div>
  <input type="hidden" name="evenement_id" value="{{ $reservation->evenement->id }}">

    <img src="/storage/{{$reservation->evenement->image}}" alt="img">
    <div class="card-body">
    <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font></font></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de place: {{ $reservation->nombre_de_place }}</font></font></li>
    <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Statut : {{ $reservation->statut_recervation }}</font></font></li>
    <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $reservation->created_at }}</font></font></li>
  </ul>


  <div class="card-body"> <a href={{ route('reservationUser') }}button class="btn btn-primary btn-lg">Accepté</button></a>
  <a href={{ route("reservationdecline",$reservation->id) }} button class="btn btn-primary">décliné</button></a>
  </div>
</div>





  @endforeach
  @endsection
  