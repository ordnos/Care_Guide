<!-- Inicio do Cabeçalho -->
<header>
    <?php include('./includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<main>
    <div class="container py-5 mt-5 mb-5">
        <div class="row py-5">
            <div class="col-md-5 ml-5 mr-5">
                <form method="POST" action="./actions/login.php">
                    <h2 class="text-center title-cg mb-5">Entrar</h2>
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Usuário" name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Senha" name="senha">
                        <a class="float-right mt-2 text-card-cg" href="register.php"><small>Ainda não tem uma conta?</small></a>
                    </div>
                    <div>
                        <button class="btn btn-lg btn-success mb-5 mt-4" type="submit" name="logar">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="w-75 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/WsznfDG/login.png">
            </div>
        </div>
    </div>
</main>

<!-- Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Inicio do Rodapé -->
<footer>
    <?php include('./includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->