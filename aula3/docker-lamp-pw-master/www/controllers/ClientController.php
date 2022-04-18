<?php

    class ClientController{

        function insertClient(){
            require_once("views/templates/header.php");
            require_once("views/client/insertClient.php");
            require_once("views/templates/footer.php");
        }

        function insertClientAction(){

            $client = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'addres' => $_POST['addres'],
                'phone' => $_POST['phone'],
            );

            //var_dump($client);

            require_once("views/templates/header.php");
            require_once("views/client/insertClientAction.php");
            require_once("views/templates/footer.php");
        }
    }

?>