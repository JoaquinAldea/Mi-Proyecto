<!doctype html>
<html lang="en" style="background: aliceblue">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>Mi proyecto final</title>
  </head>

<style>
    .container{
        width:850px;
        margin-left: center;
        padding: 1%;
    }
</style>


  <body style="background:aliceblue; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> 
        <div class="container" style="width:450px;">
            <ul class="navbar">
            <li><a href="/home">Home</a></li>
            <li><a href="/editar">Editar</a></li>
            <li><a href="/objeto">Ver Objeto</a></li>
            </ul>
      </div>

 <!-- Contenedor para las demas paginas-->

  <div class="container" style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >
      @yield('seccion')

  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    
  </body>
</html>