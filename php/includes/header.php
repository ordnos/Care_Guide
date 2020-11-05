<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CareGuid - MVP</title>
    <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
    <meta name="keywords" content="MVP Básico, Recode Pro 2020">
    <meta name="author" content="Squad 9 - SP2">
    <link rel="shortcut icon" href="#" type="image/png">
    <link rel="stylesheet" href="./../css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
    <script src="./js/functions.js" crossorigin="anonymous" defer></script>
  </head>
  <body class="bg-cg">
        
    <nav class="navbar navbar-expand-lg fixed-top bg-menu-cg shadow-sm p-3 mb-5 rounded">
      <a class="navbar-brand font-weight-bold text-white ml-5" href="./../index.php">
          CareGuide
      </a>
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
          <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
          <ul class="navbar-nav col-5 justify-content-end">
            <li class="nav-item">
              <a class="nav-link h6 font-weight-bold text-white" href="./reference.php"><span class="fas fa-project-diagram mr-2 text-white"></span>Referencias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h6 font-weight-bold text-white" href="./locator.php"><span class="fas fa-map-marker mr-2 text-white"></span>Localizador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h6 font-weight-bold text-white" href="./login.php"><span class="fas fa-user mr-2 text-white"></span>Entrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h6 font-weight-bold text-white" href="./actions/exit.php"><span class="fas fa-user mr-2 text-white"></span>Sair</a>
            </li>
          </ul>
        </div>
      </nav>