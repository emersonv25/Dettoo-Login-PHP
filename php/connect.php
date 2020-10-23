<?php
define('HOST', 'localhost'); 
define('USERNAME', 'root'); //username
define('PASSWORD', ''); //password
define('DB', 'mydb');

$connect = mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die('Não foi possivel conectar ao banco de dados');
?>