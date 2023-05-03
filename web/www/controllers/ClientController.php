<?php

class ClientController{


    function insertClient(){
        require_once('views/templates/header.php');
        require_once('views/clients/insertClient.php');
        require_once('views/templates/footer.php');
    }
    
    function insertClientAction(){

        $client = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
        );

        // var_dump($client);

        require_once('views/templates/header.php');
        require_once('views/clients/insertClientAction.php');
        require_once('views/templates/footer.php');

        
    }

    function listClients(){

        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $result = $clientModel -> listClients();

        $arrayClients = array();

        while ($line = $result -> fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        // var_dump($arrayClients);

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php');
    }
    
}


?>