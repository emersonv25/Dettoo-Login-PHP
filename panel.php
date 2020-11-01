<?php 

    session_start();
    if(!isset($_SESSION['id_username'])){
        header("location: index.php");
        exit;
    }
    $username = $_SESSION['username'];
    $id_username = $_SESSION['id_username'];



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
    <title>Painel</title>

    <!--Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md text-center">
                <h1>PAINEL DO USUÁRIO</h1>
                <p>EM DESENVOLVIMENTO !</p>
            </div>

            <div class="col-md text-center">
                <h1>SEJA BEM VINDO</h1>
                <img src="images/avatar.png" class="avatar">
                <div class="w-100"></div>
                <h1 id="username"><?php echo $username;?></h1>
                <a href="src/logout.php" class="btn btn-danger" id="btn-logout">Sair</a>
            </div>
            
        </div>   

    

</body>
</html>