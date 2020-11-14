<?php

    // Requirindo o arquio...
    require_once "db_connect.php";

    // Iniciar Sessão
    session_start();

    // Se estiver recebendo uma resposta comentar...
    if(isset($_POST['comentar'])){
        
        // Pegue os valores dos desses campos e coloque nas variáveis...
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $whatsapp = $_POST['whatsapp'];
        $id = $_SESSION['id'];

        // Atribuindo na variável $sql o comando SQL X
        // Comando: Insira na tabela posts os valores X que estão nas variáveis X
        $sql = "INSERT INTO posts VALUES(null, '$titulo', '$conteudo', '$whatsapp', $id);";

        // Executando o comando que está na variável $sql na conexão onde está o BD
        mysqli_query($connect, $sql);

        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: ../login_user.php");

    }
?>