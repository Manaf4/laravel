<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-secondary">
<nav class=" navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid ">
 

  <a class="navbar-brand text-secondary shadow-sm p-3 mb-5 bg-body-tertiary rounded fw-bold " href="#"> UNIVERSITE</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('candidat.create')}}">Ajouter un candidat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('candidat.list')}}">Afficher candidat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('formation.list')}}">Ajouter Formation</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('nbCandidatFormation')}}">Nombre candidat par formation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('nbFormationReferentiel')}}">Nombre formation par referentiel</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('candidatparsexe')}}">Repartition des candidats par sexe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('candidat.list')}}">Repartition des formations par type</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('candidat.list')}}">Graphe de le tranche d'age</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('candidat.list')}}">statistique des formations</a>
        </li>

            
        
        
        
        
      
    </div>
  </div>
</nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
</body>
</html>
