<?php

    require_once "db_connect.php";

    session_start();

    if (isset($_POST['cadastrar'])) {
        $cargo = $_POST['cargo'];
        $sobre = $_POST['sobre'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];
        $site = $_POST['site'];
        $id_ref = $_SESSION['id_ref'];

        $sql = "INSERT INTO posts VALUES(null, '$cargo', '$sobre', '$facebook', '$instagram', '$youtube', '$site', $id_ref);";

        mysqli_query($connect, $sql);

        header("Location: ../painel.php");

    }

?>