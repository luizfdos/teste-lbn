<?php 
session_start();
if(!$_SESSION['user']) {
  header('Location: login/index.php');
  exit();
}
?>