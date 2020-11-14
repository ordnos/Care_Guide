<?php

    // Requirindo o arquio...
    require_once "db_connect.php";

    // Se estiver recebendo uma resposta cadastrar...
    if (isset($_POST['cadastrar'])) {

        // Pegue os valores e coloque nas variáveis X
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Atribuindo na variável $sql o comando = Inserir na tabela usuarios os valores...
        $sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$senha');";

        // Executando o comando que está na variável $sql na conexão onde está o BD
        mysqli_query($connect, $sql);

        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: ../login.php");
    }

?>