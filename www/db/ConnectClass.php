<?php
class ConnectClass{

    var $conn;

    public function openConnect(){

        $servername = "db"; // nome do servidor (localhost)
        $username = "root"; // nome de usuário do banco de dados
        $password = "1q2w3e4r5t"; // senha do banco de dados
        $dbname = "pw_exemple"; // nome do banco de dados

        // Cria uma conexão com o banco de dados
        $this -> conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi estabelecida com sucesso
        if (!$this -> conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
        }
    }

    public function getConn(){
        return $this -> conn;
    }
    
}


?>
