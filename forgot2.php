<?php 

    session_start();
    if(!isset($_SESSION['id_forgot'])){
        header("location: index.php");
        session_destroy();
        exit;
    }
    $username = $_SESSION['user_forgot'];


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
    <title>Esqueci</title>

    <!--Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md">
                <a href="index.php"><img src="images/bannerF.png" class="img-fluid"> </a>
            </div>

            <div class="col-md">

                <h3 class="signin-text mb-3"> Recuperar </h3>
                <?php
                    if(isset($_GET['erro'])){
                        echo '<div class="alert alert-danger" role="alert">'. htmlspecialchars($_GET["erro"]) .'</div>';
                    }
                
                ?>  
                <form action="src/new_password.php" method="POST"> 
                    <h3><?php echo "Olá, ", $username;?></h3>
                    <h3>Digite sua nova senha</h3>
                    <div class="form-group"> 
                        <label for="newPassword"> Nova senha: </label>
                        <input type="password" name="newPassword" placeholder="Digite sua nova senha" class="form-control" maxlength="45" minlength="6" require>
                    </div>
                    <div class="form-group"> 
                        <label for="newPassword"> Confirmar nova senha: </label>
                        <input type="password" name="cPassword" placeholder="Digite sua nova senha" class="form-control" maxlength="45" minlength="6" require>
                    </div>
                    <button type="submit" class="btn btn-class">Recuperar</button>   
                    <a href="src/logout.php" class="btn btn-link">Cancelar</a>

                </form> 
            </div>
        </div>
    </div>

    

</body>
</html>