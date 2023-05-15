<?php

class ClientModel {

    private $conn;

    public function __construct() {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass->openConnect();
        $this->conn = $connectClass->getConn();
    }

    public function listClients() {
        $sql = 'SELECT * FROM clients';
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insertClientAction($name, $phone, $email, $address) {
        $sql = "INSERT INTO clients (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";
        $result = $this->conn->query($sql);
        return $result;
    }
}


?>