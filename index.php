<!doctype html>
<html lang="pt-br">
<head>
  <!-- Informações sobre a Página -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CareGuid - MVP</title>
  <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
  <meta name="keywords" content="MVP Básico, Recode Pro 2020">
  <meta name="author" content="Squad 9 - SP2">
  <link rel="shortcut icon" href="https://i.ibb.co/Sn5qHr2/plus.png" type="image/png">
  <!-- FontAwesome Icons -->
  <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/main.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
  crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
  crossorigin="anonymous" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
  integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
  crossorigin="anonymous" defer></script>
</head>
  <body class="bg-cg">
    <!-- Inicio do Menu Index -->
    <nav class="navbar navbar-expand-lg fixed-top bg-menu-cg shadow-sm p-3 mb-5">
      <!-- Logo -->
      <a class="navbar-brand font-weight-bold text-white ml-5" href="./index.php"> CareGuide </a>
        <!-- Botão de Menu -->
        <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" 
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars"></span>
        </button>
        <!-- Inicio de Links do Menu -->
        <div class="collapse navbar-collapse justify-content-end text-center" id="navbarTogglerDemo03">

          <ul class="navbar-nav col-12 justify-content-end">
            <li class="nav-item">
              <a class="nav-link h6 font-weight-bold text-white" href="./php/reference.php">
              <span class="fas fa-project-diagram mr-2 text-white"></span>Referencias</a>
            </li>

            <li class="nav-item">
              <a class="nav-link h6 font-weight-bold text-white" href="./php/locator.php">
              <span class="fas fa-map-marker mr-2 text-white"></span>Localizador</a>
            </li>

            <li class="nav-item">
                <a class="nav-link h6 font-weight-bold text-white" href="./php/login.php">
                <span class="fas fa-door-open mr-2 text-white"></span>Entrar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link h6 font-weight-bold text-white" href="./actions/exit.php">
                <span class="fas fa-door-closed mr-2 text-white"></span>Sair</a>
            </li>
          </ul>
  
        </div>
        <!-- Fim de Links do Menu -->
      </nav>
      <!-- Fim do Menu Index -->

    <!-- Inicio do Espaçador -->
    <div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
    <!-- Fim do Espaçador -->

    <!-- Inicio do Conteúdo principal -->
    <main>
      <!-- Inicio da Section Main -->
        <?php include('./php/includes/section-main.php'); ?>
      <!-- Fim da Section Main -->
      
      <!-- Inicio dos Cards-Teams -->
        <?php include('./php/includes/team-card.php'); ?>
      <!-- Fim dos Cards-Teams -->
    </main>
    <!-- Fim do Conteúdo principal -->

    <!-- Inicio do Espaçador -->
    <div class="medium-spacing"></div>
    <!-- Fim do Espaçador -->
    
    <!-- Inicio do Rodapé -->
    <footer>
        <?php include('./php/includes/footer.php'); ?>
    </footer>
    <!-- Fim do Rodapé -->

</body>
</html>