<?php
session_start();
include "conexao.php";
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	

	if((!empty($usuario))){
		$result_usuario = "SELECT cod_aluno,email FROM tbalunos WHERE email='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if($usuario==$row_usuario['email']){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location:aulas/aulas.php");
			}else{
				$_SESSION['msg'] = "Email incorreto!";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Email incorreto!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}
