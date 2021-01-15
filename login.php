<?php
session_start();
include('connection.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: login/index.php');
	exit();
}

$user = mysqli_real_escape_string($connection, $_POST['user']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$query = "select user from user where user = '$user' and password = md5('$password');";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
  $_SESSION['user'] = $user;
  header('Location: painel.php');
  exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: /login/');
	exit();
}

?>