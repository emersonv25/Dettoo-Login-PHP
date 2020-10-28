<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

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
                <h3 class="signin-text mb-3"> Cadastrar </h3>
                
                <?php
                
                    if(isset($_GET['erro'])){
                        echo '<div class="alert alert-danger" role="alert">'. htmlspecialchars($_GET["erro"]) .'</div>';
                    }
                    if(isset($_GET['sucess'])){
                        echo '<div class="alert alert-success" role="alert">'. htmlspecialchars($_GET["sucess"]) .'</div>';
                    }
                    
                    
                    if(isset($_GET['username']) || isset($_GET['name']) || isset($_GET['email'])){
                        $name = htmlspecialchars($_GET["name"]);
                        $username = htmlspecialchars($_GET["username"]);
                        $email = htmlspecialchars($_GET["email"]);
                        

                    }
                    else{
                        
                        $name = "";
                        $username = "";
                        $email = "";
                    }

                ?>


                <form action="src/register.php" method="POST"> 
                    <div class="form-group"> 
                        <label for="name"> Nome</label>
                        <input type="text" name="name" placeholder="Digite seu nome completo" class="form-control" maxlength="45" require value="<?=$name?>">
                    </div>
                    <div class="form-group"> 
                        <label for="username"> Usuário</label>
                        <input type="text" name="username" placeholder="Digite um usuário" class="form-control" maxlength="45" require value="<?=$username?>"> 
                    </div>
                    <div class="form-group"> 
                        <label for="password"> Senha</label>
                        <input type="password" name="password" placeholder="Digite uma senha" class="form-control" maxlength="45" minlength="6" require>   
                    </div>
                    <div class="form-group"> 
                        <label for="password"> Confirmar Senha</label>
                        <input type="password" name="cPassword" placeholder="Digite a senha novamente" class="form-control" maxlength="45" minlength="6" require>   
                    </div>
                    <div class="form-group"> 
                        <label for="email"> E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu E-mail" class="form-control" maxlength="45" require value="<?=$email?>">   
                    </div>
                    <button type="submit" class="btn btn-class">Cadastrar</button>   
                    <a href="index.php" class="btn btn-link">Cancelar</a>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>