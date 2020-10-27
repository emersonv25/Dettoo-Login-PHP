<?php 

require_once('users.php');

$u = new User;
$msg = "";
if(isset($_POST['username']))
{
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    
    if(!empty($username) && !empty($password)){
        $u->connect();
        if($u->msgErro == ""){
            
            if($u->login($username,$password)){
            header("location: ../panel.php");
            
            }

            else{
                $msg = "Usuário ou senha invalido";
                header("location: ../index.php?erro=$msg&username=$username");
                
            }


        }    
        else{
            $msg = $msgErro;
            header("location: ../index.php?erro=$msg&username=$username");
            
        }            
    }

    else{
        $msg = "Usuário ou senha em branco";
        header("location: ../index.php?erro=$msg");
        
        
    }
}


?>