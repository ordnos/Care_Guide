<?php 

    session_start();

    if (isset($_SESSION['id'])) {
        include_once "./includes/header.php";
?>

<!-- Inicio do Cabeçalho -->
<header>
    <?php include('includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->

<!-- Inicio do Espaçador -->
<div class="medium-spacing mb-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do COnteúdo -->
<main>
    <section>
        <div class="container mt-5 mb-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-cg"><b></b></p>
                    <p class="text-card-cg"><small></small></p>
                    <p class="text-card-cg">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing  layouts and visual mockups.
                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing  layouts and visual mockups.
                    </p>
                </div>
            </div>
        </div>
        </section>

        <section>
            <div class="container mb-5">
                <div class="row pt-5">
                    <div class="col-md-6">
                        <p class="title-cg">Seja bem-vindo,</p>
                        <p class="mb-5 title-cg">o que deseja fazer?</p>
                        <div class="row justify-content-initial">
                            <button type="button" class="btn btn-outline-dark p-4 mr-5 font-weight-bold">Encontrar <br/>Referencias</button>
                            <button type="button" class="btn btn-outline-dark p-4 font-weight-bold">Localizar <br/>Projetos</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="w-75 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/grKVcNV/welcome.png">
                    </div>
                </div>
            </div>
    </section>
    <a href="sair.php"> Sair </a>
</main>
<!-- Fim do Conteúdo -->

<!-- Inicio do Espaçador -->
<div class="long-spacing"></div>
<!-- Fim do Espaçador -->
 
<?php
    include_once "./includes/footer.php";
    } else {
        header("Location login.php");
    }
?>