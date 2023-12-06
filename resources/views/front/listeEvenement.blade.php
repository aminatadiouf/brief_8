@extends('layout.nav')
@section('contenu')

@if (session('moi'))
<div class="alert alert-dismissible alert-success">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ session('moi') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ce message d'alerte important</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
</font></font></div>
@endif 
   
@foreach($events as $event)
    
    <div class="row justify-content-around">
    <div class="card   mt-5 w-25 h-15">
        <h3 class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Details evenement</font></font></h3>
        <div class="card-body">
           
          <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $event->association->nom_association }}</font></font></h5>
          <h6 class="card-subtitle text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $event->libelle }}</font></font></h6>
        </div>
  
     
          <img src="/storage/{{$event->image}}" alt="img">
       
        <div class="card-body">
          <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $event->description }} </font></font></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $event->date_limit_inscription }} </font></font></li>
          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $event->date_de_l_evenement }}</font></font></li>
          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $event->statut }}</font></font></li>
        </ul>
        <div class="card-body">

          <a href="{{ route('edit',$event->id) }}"  class="btn btn-success">Modifier  </a>

          <form action="{{ route('suppression',$event->id)}}" method="POST">
          @csrf
     
         <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </div>
        @auth
            
      
        <div class="card-body"> <a href={{('reservation/'.$event->id) }} button class="btn btn-primary btn-lg">demande de réservation</button></a>
          @endauth
    </div>
</div>

      @endforeach
      

   
    @endsection














