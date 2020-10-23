<?php
    
    if(!$_SESSION['username']){
        header('Location: index.php');
        exit();
}

?>