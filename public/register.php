<?php 
require_once 'users.php';
$u = new Usuario();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - MVP</title>
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
        <div class="container py-5 mt-5">
            <div class="row py-5">
                <div class="col-md-5 ml-5 mr-5">
                    <form method="POST">
                        <h2 class="text-center title-cg mb-5">Cadastro</h2>
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control input-lg" placeholder="Nome completo" maxlength="30">
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control input-lg" placeholder="Telefone" maxlength="30">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-lg" placeholder="Usuário" maxlength="40">
                            </div>
                            <div class="form-group">
                                <input type="password" name="senha" id="password" class="form-control input-lg" placeholder="Senha" maxlength="15">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confSenha" class="form-control input-lg" placeholder="Confirmar Senha">
                                <a class="float-right mt-2 text-cg" href="login.php"><small>Já possui uma conta ?</small></a>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-lg btn-primary mb-5 mt-4" value="Cadastrar">
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
        <?php include('components/footer.html'); ?>
    </footer>
    <!-- Fim do Rodapé -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <?php
    //verificar se clicou no botao
    if(isset($_POST['nome']))
    {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);
        //verificar se esta preenchido
        if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
        {
            $u->conectar("care_guide","localhost","root","");
            if($u->msgErro == "")//se esta tudo ok
            {
                if($senha == $confirmarSenha)
                {
                    if($u->cadastrar($nome,$telefone,$email,$senha))
                    {
                        ?>
                        <div id="msg-sucesso">
                        Cadastrado com sucesso! Acesse para entrar!
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="msg-erro">
                            Email ja cadastrado!
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                        Senha e confirmar senha não correspondem
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div class="msg-erro">
                    <?php echo "Erro: ".$u->msgErro;?>
                </div>
                <?php
            }
        }else
        {
            ?>
            <div class="msg-erro">
                Preencha todos os campos!
            </div>
            <?php
        }
    }
?>
</body>
</html>