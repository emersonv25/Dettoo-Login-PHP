<?php 
require_once('users.php');

$u = new User;
$msg = "";
if(isset($_POST['username']))
{
    $name = addslashes($_POST['name']);
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $cPassword = addslashes($_POST['cPassword']);
    $email = addslashes($_POST['email']);
    
    
    if(!empty($name) && !empty($username) && !empty($password) &&  !empty($email)){
        $u->connect();

        if($u->msgErro == ""){
            
            if(strlen($password) > 6){
                if($password == $cPassword){

                    if($u->register($name,$username,$password,$email)){
                        $msg = "Cadastrado com sucesso";
                        header("location: ../register.php?sucess=$msg");
                        
                        
                    }
                    else{
                        $msg = "Usuário ou E-mail já cadastrado";
                        header("location: ../register.php?erro=$msg&name=$name&username=$username&email=$email");
                        
                    }
                }
                else{
                    $msg = "Confirmar senha invalido !";
                    header("location: ../register.php?erro=$msg&name=$name&username=$username&email=$email");
                    
                    
                }
            }
            else{
                $msg = "Digite uma senha de no mínimo 6 digitos";
                    header("location: ../register.php?erro=$msg&name=$name&username=$username&email=$email");
            }
            
        }
        else{
            $msg = "Erro: ".$u->msgErro;
            header("location: ../register.php?erro=$msg&name=$name&username=$username&email=$email");
            
        }
    }

    else{
        $msg = "Preencha todos os campos!";
        header("location: ../register.php?erro=$msg&name=$name&username=$username&email=$email");
        
    }
}
?>