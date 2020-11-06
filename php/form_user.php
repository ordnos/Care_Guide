<?php 

    session_start();

    if (isset($_SESSION['id'])) {
        include_once "./includes/header.php";
?>
<!-- Inicio do Cabeçalho -->
<header>
    <?php include('./includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->
<div class="long-spacing"></div> 
<main>
<div class="container py-2 mt-5 mb-5">
        <div class="row ">
            <div class="col-md-5 col-ms-8 mx-auto">
                <form method="POST" action="./actions/register_post.php">
                    <h2 class="h3 text-center title-cg mb-5">Instituição e Programas</h2>
                    <div class="form-group mb-4">
                        <input class="form-control" type="text" placeholder="Nome" name="titulo">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" placeholder="Sobre" name="conteudo"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" placeholder="Whatsapp" name="whatsapp">
                    </div>
                    <div>
                        <button class="btn btn-lg btn-success mb-5 mt-4" type="submit" name="comentar">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<div class="medium-spacing"></div>

<?php
    include_once "./includes/footer.php";
    } else {
        header("Location: login.php");
    }
?>