<!-- Inicio do Cabeçalho -->
<header>
    <?php include('includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->
<div class="long-spacing "></div>

<main>
    <div class="container py-5 mt-5">
        <div class="row py-5">
            <div class="col-md-5 ml-5 mr-5">
                <form method="POST" action="./actions/register_users.php">
                    <h2 class="text-center title-cg mb-5">Cadastro</h2>
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control input-lg" placeholder="Nome completo" maxlength="30">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-lg" placeholder="Usuário" maxlength="40">
                        </div>
                        <div class="form-group">
                            <input type="password" name="senha" id="password" class="form-control input-lg" placeholder="Senha" maxlength="15" autocomplete="new-password">
                            <a class="float-right mt-2" href="login.php">Já possui uma conta ?</a>
                        </div>
                        <div>
                            <button class="btn btn-lg btn-success mb-5 mt-4" name="cadastrar" type="submit">Cadastrar</button>
                        </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="w-75 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/NCbPhck/register.png">
            </div>
        </div>
    </div>
</main>

<!-- Espaçador -->
<div class="long-spacing"></div>

<!-- Inicio do Rodapé -->
<footer>
    <?php include('includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->