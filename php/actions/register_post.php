<?php

    require_once "db_connect.php";

    session_start();

    if(isset($_POST['comentar'])){
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $whatsapp = $_POST['whatsapp'];
        $id = $_SESSION['id'];

        $sql = "INSERT INTO posts VALUES(null, '$titulo', '$conteudo', '$whatsapp', $id);";

        mysqli_query($connect, $sql);

        header("Location: ../login_user.php");

    }
?>