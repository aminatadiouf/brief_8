
@extends('layout.nav')
@section('contenu')

@if(session('even')) 
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('even') }}</font></font></strong>
</font></font></div>
@endif
<form action="/evenement/store" method="POST" enctype="multipart/form-data">
  @csrf
  
  
      
 



<div class="form-group">
  <input type="hidden" name="association_id" >
 <label class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulaires d'ajout événement</font></font></label>
 <div class="row justify-content-around">
  <div class="card   mt-5 w-25 h-50">
 <div>
  <select class="form-select" id="exampleSelect1" name="association_id">
    @foreach ($assocs as $assoc)
    <option value="{{ $assoc->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $assoc->nom_association }}</font></font></option>
    @endforeach
  </select>
</div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="libelle" id="floatingInput" placeholder="">
      <label for="libellé" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">libellé</font></font></label>
    </div>

 
    <div class="form-floating">
      <input type="date" class="form-control" name="date_limit_inscription"    id="" placeholder="date_limit_inscription" >
      <label for="date_limit_inscription"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">date limit d'inscription</font></font></label>
    </div>
  

 
    <div class="form-floating mb-3">
      <input type="text" class="form-control"  name="description" id="" placeholder="">
      <label for="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">description</font></font></label>
    </div>
     

        <div class="form-floating mb-3">
          <input type="date" class="form-control" name="date_de_l_evenement" id="" placeholder="date_de_l_evenement" >
          <label for="date_de_l_evenement"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">date de l'événement</font></font></label>
        </div>

        <div class="form-group">
          <label for="formFile" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de saisie de fichier par défaut</font></font></label>
          <input class="form-control" type="file" name="image" id="image">
</div>


        <fieldset class="form-group">
          {{-- <legend class="mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Statut de l'événement</font></font></legend>
          {{-- <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox"  name="statut[]"  value="en_cours" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Evénement en cours</font></font></label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="hidden"  name="statut[]" value="termine"   id="flexSwitchCheckDefault">
          </div> --}} 
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de sélection</font></font></label>
            <select class="form-select" id="exampleSelect1" name="statut">
              <option value="en_cours"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">en_cours</font></font></option>
              <option value="termine"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">termine</font></font></option>
              
            </select>
          </div>
        </fieldset>

      </fieldset>
      <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajouter</font></font></button>
    </fieldset>
    
              
</form>
</div>
</div>

@endsection