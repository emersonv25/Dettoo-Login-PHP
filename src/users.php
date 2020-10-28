<?php
include('../config/config.php');

Class User
{
    private $pdo;
    public $msgErro = "";

    // CONECTA AO BANCO
    public function connect($dbname = DB_NAME, $host = HOST, $username = DB_USER, $password = DB_PASSWORD)
    {
        global $pdo;

        // tenta se conectar ao banco de dados
        try
        {   
            
            $pdo = new PDO("mysql:dbname=".$dbname.";host".$host,$username,$password);
        }
        catch(PDOException $e)
        {
            $msgErro = $e -> getMessage();
        }
    }

    // REGISTRA UM USUARIO
    public function register($name, $username, $password, $email)
    {
        global $pdo;
        //Consulta o banco
        $sql = $pdo->prepare("SELECT id FROM usuario WHERE usuario = :u or email = :e");
        $sql->bindValue(":u" , $username);
        $sql->bindValue(":e" , $email);
        $sql->execute();

        if($sql-> rowCount() > 0){ // se a tabela for maior que 0 retorna false
            return false;
        }
        else{ // se não, faz o cadastro
            $sql = $pdo->prepare("INSERT INTO usuario(usuario, senha, nome, email) VALUES(:u, :s, :n, :e);");
            $sql->bindValue(":u" , $username);
            $sql->bindValue(":s" , md5($password));
            $sql->bindValue(":n" , $name);
            $sql->bindValue(":e" , $email);
            $sql->execute();
            return true;
        }

        

    }

    // LOGIN
    public function login ($username, $password){
        global $pdo;
        // consulta o banco e verifica  se o username é valido
        $sql = $pdo->prepare("SELECT id, usuario FROM usuario WHERE usuario = :u AND senha = :s;");
        $sql->bindValue(":u" , $username);
        $sql->bindValue(":s" , md5($password));
        $sql->execute();

        if($sql-> rowCount() > 0){
           
            // conecta na sesssao e verifica o id do username
            $dado = $sql->fetch();
            session_start(); // inicia a sessão
            // salva o id e o username na sessão
            $_SESSION['id_username'] = $dado['id'];
            $_SESSION['username'] = $dado['usuario'];
           
            return true;
        }
        else{
            return false;
        }
    }

    // Retorna a id do usuario através do email
    public function forgot($email){ 
        
        global $pdo;
        // consulta o banco 
        $sql = $pdo->prepare("SELECT id, usuario FROM usuario WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        // verifica se existe conta cadastrada no email
        if($sql-> rowCount() > 0){ 
            $dado = $sql->fetch();
            session_start();
            $_SESSION['user_forgot'] = $dado['usuario'];
            $_SESSION['id_forgot'] = $dado['id'];
            return true; // caso exista, retornara o nome do usuario

        }
        else{
            return false;
        }

    }

    // Altera a senha
    public function new_password($id, $newPassword){
        global $pdo;
        //consulta o banco 
        $sql = $pdo->prepare("SELECT id, usuario FROM usuario WHERE id = :i");
        $sql->bindValue(":i", $id);
        $sql->execute();

        // Se existir um usuario com a id, alterará a senha
        if($sql-> rowCount() > 0){                
            //consulta o banco 
            $sql2 = $pdo->prepare("UPDATE usuario SET senha = :p WHERE id = :i");
            $sql2->bindValue(":i", $id);
            $sql2 ->bindValue(":p", md5($newPassword));
            $sql2->execute();
            return true;
        }
        else{
            return false;
        }

    }



}


?>