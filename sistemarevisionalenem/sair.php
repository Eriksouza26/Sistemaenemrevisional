<?php

session_start();
unset($_SESSION['id'], $_SESSION['email']);

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: login.php");