<?php


	$nome = $_POST["inputLogin"];
	$senha = $_POST["inputSenha"];
	
	if ( $senha == "adm") {
		 header("Location: ../paginas/principal.html");
	}
	else{
		 header("Location: ../index.html");
	}




?>