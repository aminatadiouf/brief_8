
@extends('layout.nav')
@section('contenu')

@if(session('modif')) 
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('modif') }}</font></font></strong>
</font></font></div>
@endif
<form action="{{ route('modifier',$events->id) }}" method="POST" enctype="multipart/form-data">
  @csrf

  
</div> --}}

<div class="form-group">
 <label class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulaires d'événement</font></font></label>
   
    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="libelle" id="floatingInput" placeholder="" value={{($events->libelle) }}>
      <input type="hidden" name="association_id" value="{{ $assocs }}" >
      <label for="libellé" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">libellé</font></font></label>
    </div>

 
    <div class="form-floating">
      <input type="date" class="form-control" name="date_limit_inscription"   value={{($events->date_limit_inscription) }}  id="" placeholder="date_limit_inscription" >
      <label for="date_limit_inscription"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">date limit d'inscription</font></font></label>
    </div>
  

 
    <div class="form-floating mb-3">
      <input type="text" class="form-control"  value={{($events->description) }}  name="description" id="" placeholder="">
      <label for="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">description</font></font></label>
    </div>
     

        <div class="form-floating mb-3">
          <input type="date" class="form-control" name="date_de_l_evenement" value={{($events->date_de_l_evenement) }} id="" placeholder="date_de_l_evenement" >
          <label for="date_de_l_evenement"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">date de l'événement</font></font></label>
        </div>

        <div class="form-group">
          <label for="formFile" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de saisie de fichier par défaut</font></font></label>
          <input class="form-control" type="file" name="image"  id="image">
</div>


        <fieldset class="form-group">
       
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de sélection</font></font></label>
            <select class="form-select" id="exampleSelect1"  name="statut">
              <option value="en_cours" {{($events->statut=="en_cours" ? 'Selected' :  '') }} ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">en_cours</font></font></option>
              <option value="termine" {{($events->statut=="termine" ? 'Selected' :  '') }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">termine</font></font></option>
              
            </select>
          </div>
        </fieldset>

      </fieldset>
      <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajouter</font></font></button>
    </fieldset>
    
              
</form>


@endsection
















