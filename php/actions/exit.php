<?php

    session_start();

    $_SESSION['id_ref'] = "";
    $_SESSION['cargo'] = "";
    $_SESSION['sobre'] = "";
    $_SESSION['facebook'] = "";
    $_SESSION['instagram'] = "";
    $_SESSION['youtube'] = "";
    $_SESSION['site'] = "";

    header("Location: ../index.php");
?>