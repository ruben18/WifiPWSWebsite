<?php
require_once("pages/bd.php");
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['username'];
$senha = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='".$login."' AND password='".md5($senha)."'";
$result = $link->query($sql);
mysqli_close($link);

if ($result->num_rows > 0) {
	$_SESSION['login'] = $login;
	header('location:pages/home.php');
}else{
	header('location:index.php');
}