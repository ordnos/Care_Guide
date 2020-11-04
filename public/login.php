<?php
require_once 'users.php';
$u = new Usuario();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - CareGuide</title>
    <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
    <meta name="keywords" content="MVP Básico, Recode Pro 2020">
    <meta name="author" content="Squad 9 - SP2">
    <link rel="shortcut icon" href="#" type="image/png">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
</head>

<body class="bg-cg">
    <!-- Inicio do Cabeçalho -->
    <header>
        <?php include('components/menu.html'); ?>
    </header>
    <!-- Fim do Cabeçalho -->
    <div class="long-spacing "></div>
    <main>
        <div class="container py-5 mt-5 mb-5">
            <div class="row py-5">
                <div class="col-md-5 ml-5 mr-5">
                    <form method="POST">
                        <h2 class="text-center title-cg mb-5">Entrar</h2>
                        <input type="email" placeholder="Usuário" name="email">
                        <input type="password" placeholder="Senha" name="senha">
                        <input type="submit" value="ACESSAR">
                        <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Espaçador -->
    <div class="long-spacing"></div>
    <!-- Inicio do Rodapé -->
    <footer>
        <?php include('components/footer.html'); ?>
    </footer>
    <!-- Fim do Rodapé -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- PHP -->
    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if (!empty($email) && !empty($senha)) {
            $u->conectar("care_guide", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha)) {
                    header("location: login_user.php");
                } else {
                    echo "Email e/ou senha estão incorretos!";
                }
            } else {
                echo "Erro: " . $u->msgErro;
            }
        } else {
            echo "Preencha todos os campos!";
        }
    }
    ?>
</body>

</html>