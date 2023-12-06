@extends('layout.nav')
@section('contenu')

@if (session('message'))
<div class="alert alert-dismissible alert-success">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ session('message') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ce message d'alerte important</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
</font></font></div>
@endif 

@if (session('error'))
<div class="alert alert-dismissible alert-success">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ session('error') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ce message d'alerte important</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
</font></font></div>
@endif

<form action="/association/store" method="post" enctype="multipart/form-data">
    @csrf

    
    <div class="row justify-content-around">
      <div class="card   mt-5 w-25 h-50">
              <fieldset>
                <legend>Formulaire d'inscription pour l'association</legend>
  
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Nom de l'association</label>
                  <input type="text" class="form-control" name="nom_association" id="" aria-describedby="emailHelp">
                </div>

                
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">date_creation</label>
                    <input type="date" class="form-control" name="date_creation" id="" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">slogan</label>
                    <input type="text" class="form-control" name="slogan" id="" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="formFile" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de saisie de fichier par défaut</font></font></label>
                    <input class="form-control" type="file" name="image" id="image">
                  </div>

                </fieldset>
                <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soumettre</font></font></button>
              </fieldset>

      </div>
    </div>
@endsection