@extends('layout.nav')
@section('contenu')

@if (session('status'))
<div class="alert alert-dismissible alert-success">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ session('status') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ce message d'alerte important</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
</font></font></div>
@endif 
<form action="login/store" method="post">
  @csrf
  <div class="row justify-content-around">
    <div class="card   mt-5 w-25 h-50">
            <fieldset>
              <legend>Login client</legend>


              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

            
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
              </div>

              

            </fieldset>
            <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soumettre</font></font></button>
          </fieldset>
            </form>
          
          </div>
        </div>
@endsection

