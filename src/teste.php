<?php
require_once('users.php');
session_start();
$u = new User;
$u->connect();
$username = $_SESSION['username'];

echo $username;

if ($u->newPassword($username, "pkapa1234")){
    echo "deu certo";
    exit;
}
else{echo "deu errado"; exit;}



?>