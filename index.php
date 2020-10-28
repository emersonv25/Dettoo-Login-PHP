<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md">
                
                <a href="index.php"><img src="images/bannerF.png" class="banner img-fluid"> </a>
                
                
            </div>

            <div class="col-md">
            <?php


                if(isset($_GET['erro'])){
                    echo '<div class="alert alert-danger" role="alert">'. htmlspecialchars($_GET["erro"]) .'</div>';
                }
                if(isset($_GET['sucess'])){
                    echo '<div class="alert alert-success" role="alert">'. htmlspecialchars($_GET["sucess"]) .'</div>';
                }
                if(isset($_GET['username'])){
                    $username = htmlspecialchars($_GET["username"]);
                }
                else{
                    $username = "";
                }
                
            ?>
                <h3 class="signin-text mb-3"> Login </h3>
                <form action="src/login.php" method="POST"> 

                    <div class="form-group"> 
                        <label for="username"> Usuário</label>
                        <input type="text" name="username" placeholder="Digite seu usuário" class="form-control" maxlength="45" require value="<?=$username?>">
                    </div>
                    <div class="form-group"> 
                        <label for="password"> Senha</label>
                        <input type="password" name="password" placeholder="Digite sua senha" class="form-control" maxlength="45" minlength="6" require>   
                    </div>
                    <div class="form-group form-check"> 
                        <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox"> Lembrar-me</label>
                    </div>
                    <button type="submit" class="btn btn-class">Entrar</button>   

                </form>
                
                <a href="forgot.php" class="btn btn-link"> Esqueceu sua senha ?</a>
                <a href="register.php" class="btn btn-link"> Não é um membro ? <strong>Cadastre-se</strong></a>
                
            </div>
            
        </div> 
        
        
    </div>
    

</body>
</html>