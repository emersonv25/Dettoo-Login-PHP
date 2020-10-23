<?php
session_start();
$usuario = $_SESSION['username'];
include('php/login_check.php');

?>
<h1 class=bemvindo>Bem vindo <?php echo $usuario;?></h1>
<h1><a href="php/logout.php" class="btn btn-danger">Logout</a></h1>



