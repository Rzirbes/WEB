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
        $sql = 'SELECT * FROM clients ORDER BY idClient ASC';
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getClientByID($idClient) {
        $sql = "SELECT * FROM clients WHERE idClient = $idClient";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insertClientAction($name, $phone, $email, $address) {
        $sql = "INSERT INTO clients (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function updateClientAction($idClient, $newName, $newPhone, $newEmail, $newAddress) {
        $sql = "
        UPDATE clients 
        SET name = '$newName', phone = '$newPhone', email = '$newEmail', address = '$newAddress' 
        WHERE idClient = $idClient
        ";
        
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteClientByID($idClient) {
        $sql = "DELETE FROM clients WHERE idClient = $idClient";
        $result = $this->conn->query($sql);
        return $result;
    }
}


?>