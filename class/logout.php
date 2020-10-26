<?php
session_start();
session_destroy();
header('Location: ../index.php?sucess=Deslogado com Sucesso !');exit;
?>