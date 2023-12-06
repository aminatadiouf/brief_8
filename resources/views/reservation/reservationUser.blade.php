


@extends('layout.nav')
@section('contenu')

@if(session('pour')) 
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('pour') }}</font></font></strong>
</font></font></div>
@endif

<form action="{{ route('reserv') }}" method="Post">
    @csrf


    <div class="row justify-content-around">
      <div class="card   mt-5 w-25 h-50">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
<input type="hidden" name="evenement_id" id="evenement_id">


    <div class="form-floating mb-3">
        <input type="number" class="form-control" name="nombre_de_place" id="floatingInput" placeholder="">
        <label for="nombre_de_place" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nombre de place</font></font></label>
      </div>



<fieldset class="form-group">
       
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de sélection</font></font></label>
      <select class="form-select"  id="exampleSelect1" name="statut_recervation" >
        <option value="accepte"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">accepté</font></font></option>
        <option value="decline"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">decliné</font></font></option>
        
      </select>
    </div>
  </fieldset>
<fieldset>
<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">demande de  reservation</font></font></button>
</fieldset>

</form>
</div>
</div>
@endsection