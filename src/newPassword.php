<?php 

require_once('users.php');
session_start();
$username = $_SESSION['user_forgot'];
$u = new User;
$msg = "";


if(isset($username))
{
    
    $newPassword = addslashes($_POST['newPassword']);
    $cPassword = addslashes($_POST['cPassword']);
   
    if(!empty($newPassword) && (!empty($cPassword))){
        $u->connect();
        if($u->msgErro == ""){
            
            if(strlen($newPassword) > 6){
                if($newPassword == $cPassword){

                    if($u->newPassword($username, $newPassword)){
                        $msg = "Senha alterada com sucesso!";
                        session_destroy();
                        header("location: ../index.php?sucess=$msg&username=$username");
                        exit;
                        
                    }
                    else{
                        $msg = "Erro inesperado";
                        header("location: ../forgot2.php?erro=$msg");
                        
                        
                    }
                }
                else{
                    $msg = "Confirmar senha invalido !";
                    header("location: ../forgot2.php?erro=$msg");
                    
                    
                }
            }
            else{
                $msg = "Digite uma senha de no mínimo 6 digitos";
                    header("location: ../forgot2.php?erro=$msg");
                    
            }
            
        }
        else{
            $msg = "Erro: ".$u->msgErro;
            header("location: ../forgot2.php?erro=$msg");
            
            
        }
    }

    else{
        $msg = "Preencha todos os campos!";
        header("location: ../forgot2.php?erro=$msg");
        
        
    }
}


?>