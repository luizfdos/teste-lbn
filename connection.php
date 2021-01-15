<?php
define('HOST', 'localhost');
define('USER', 'luizfern_luizfernando');
define('PASSWORD', 'Luiz@2021');
define('DB', 'luizfern_test');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possível conectar');

?>