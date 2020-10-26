<?php
include('../config/config.php');

Class User
{
    private $pdo;
    public $msgErro = "";

    public function connect($dbname = DB_NAME, $host = HOST, $username = DB_USER, $password = DB_PASSWORD)
    {
        global $pdo;
        try
        {
            
            $pdo = new PDO("mysql:dbname=".$dbname.";host".$host,$username,$password);
        }
        catch(PDOException $e)
        {
            $msgErro = $e -> getMessage();
        }
    }

    public function register($name, $username, $password, $email)
    {
        global $pdo;
        // Verifica  se ja existe conta cadastrada no banco
        $sql = $pdo->prepare("SELECT id FROM usuario WHERE usuario = :u or email = :e");
        $sql->bindValue(":u" , $username);
        $sql->bindValue(":e" , $email);
        $sql->execute();

        if($sql-> rowCount() > 0){
            return false;
        }
        else{
            $sql = $pdo->prepare("INSERT INTO usuario(usuario, senha, nome, email) VALUES(:u, :s, :n, :e);");
            $sql->bindValue(":u" , $username);
            $sql->bindValue(":s" , md5($password));
            $sql->bindValue(":n" , $name);
            $sql->bindValue(":e" , $email);
            $sql->execute();
            return true;
        }

        

    }

    public function login ($username, $password){
        global $pdo;
        // Verifica  se o username é valido
        $sql = $pdo->prepare("SELECT id, usuario FROM usuario WHERE usuario = :u AND senha = :s");
        $sql->bindValue(":u" , $username);
        $sql->bindValue(":s" , md5($password));
        $sql->execute();

        if($sql-> rowCount() > 0){
           
            // conecta na seessao e verifica o id do username
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_username'] = $dado['id'];
            $_SESSION['username'] = $dado['usuario'];
           
            return true;
        }
        else{
            return false;
        }
    }
}


?>