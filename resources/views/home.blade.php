@extends('layout.nav')
@section('contenu')


   
@foreach($event as $events)
    
    <div class="row justify-content-around">
    <div class="card   mt-5 w-25 h-15">
        <h3 class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Details evenement</font></font></h3>
        <div class="card-body">
           
          <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $events->association->nom_association }}</font></font></h5>
          <h6 class="card-subtitle text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $events->libelle }}</font></font></h6>
        </div>
       
     
          <img src="/storage/{{$events->image}}" alt="img">
       
        <div class="card-body">
          <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $events->description }} </font></font></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $events->date_limit_inscription }} </font></font></li>
          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $events->date_de_l_evenement }}</font></font></li>
          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $events->statut }}</font></font></li>
        </ul>
        <div class="card-body">

          <a href="{{ route('edit',$events->id) }}"  class="btn btn-success">Modifier  </a>

          <form action="{{ route('suppression',$events->id)}}" method="POST">
          @csrf
     
         <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </div>
        <div class="card-body"> <a href="{{ route('reservationUser') }}"button class="btn btn-primary btn-lg">demande de réservation</button></a>

    </div>
</div>

      @endforeach
      

   
    @endsection











