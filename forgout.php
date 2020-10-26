<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <form action="php/login.php" method="POST"> 

                    <div class="form-group"> 
                        <label for="email"> E-mail</label>
                        <input type="text" name="email" placeholder="Digite seu E-mail" class="form-control" maxlength="45" require>
                    </div>
                    <button type="submit" class="btn btn-class">Recuperar</button>   
                    <a href="index.php" class="btn btn-light">Cancelar</a>

                </form>
                
            </div>
        </div>
    </div>

    

</body>
</html>