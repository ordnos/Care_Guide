<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: login.php");
		exit;
	}
?>



SEJA BEEEEEEEEM VINDOOOO!!
<a href="sair.php"> Sair </a>