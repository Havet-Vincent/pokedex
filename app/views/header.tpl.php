<!doctype html>
<html lang="fr">
  <div class="container-fluid ">
  <head>
    <!-- Required meta tags -->
    <base href="<?= $params['baseURL']; ?>/" target="_self" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $params['cssURL'] ?>styles.css">

    <title>Les Pokemons</title>
  </head>
  <body>
      <div class="container-fluid col-12 col-lg-10 col-xl-8">

    <header class=" mb-3">
   
      <nav class="d-flex navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">  
          <div class="mr-auto p-1 bd-highlight"><a class="nav-link" href="<?= $params['baseURL']; ?>"><h1>Pokédex</h1></a></div>
          <div class="p-1 bd-highlight"><a class="nav-link" href="<?= $params['typesURL']; ?>">Liste Types</a></div>   
      </nav>
          
      </header>