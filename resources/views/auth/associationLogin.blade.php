@extends('layout.nav')
@section('contenu')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('jeanne'))
<div class="alert alert-dismissible alert-success">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ session('jeanne') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ce message d'alerte important</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
</font></font></div>
@endif 


@if (session('message'))
<div class="alert alert-dismissible alert-success">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ session('message') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ce message d'alerte important</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
</font></font></div>
@endif 

<form action="/assoslogin/store" method="post" >
    @csrf

    <div class="row justify-content-around">
      <div class="card   mt-5 w-25 h-50">
             
    <fieldset>
                <legend>Login association</legend>
  
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
                  </div>

                </fieldset>
                <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soumettre</font></font></button>
              </fieldset>

            </form>
          </div>
        </div>
@endsection