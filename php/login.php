<?php
session_start();
include('connect.php');

if(empty($_POST['username']) || empty($_POST['password'])){
    header('Location: ../index.php');
    exit();
}

$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "select id, usuario from usuario where usuario = '$username' and senha = md5('$password')";

$result = mysqli_query($connect, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['username'] = $username;
    header('Location: ../painel.php');
    exit();
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');

    exit();
}