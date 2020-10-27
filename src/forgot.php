<?php 

require_once('users.php');

$u = new User;
$msg = "";
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
   
    if(!empty($email)){
        $u->connect();
        if($u->msgErro == ""){
            
            
            if($u->forgot($email)){
                header("location: ../forgot2.php");
                
            }
            else{
                $msg = "E-mail não cadastrado";
                header("location: ../forgot.php?erro=$msg");
                
            }


        }    
        else{
            $msg = $msgErro;
            header("location: ../forgot.php?erro=$msg");
            
        }            
    }

    else{
        $msg = "Informe o E-mail que deseja recuperar";
        header("location: ../forgot.php?erro=$msg");
        
        
    }
}


?>