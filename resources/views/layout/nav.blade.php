<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brief_8</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/solar/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Barre de navigation</font></font></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Basculer la navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/login"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connexion
              </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actuel)</font></font></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caractéristiques</font></font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ route('reservation') }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">liste_reservation</font></font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À propos</font></font></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dérouler</font></font></a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/association"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AssociationRegister</font></font></a>
              <a class="dropdown-item" href="/assos"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AssociationLogin</font></font></a>
              <a class="dropdown-item" href="/evenement"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajout d'évenement</font></font></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('afficheListe')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liste des événements</font></font></a>
            </div>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Recherche">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recherche</font></font></button>
        </form>
      </div>
    </div>
  </nav>

  @yield('contenu')

</body>
</html>
   