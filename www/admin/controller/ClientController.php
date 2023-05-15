<?php

class ClientController
{

    function __construct(){
        if(!isset($_SESSION['user'])){
            header('Location: index.php?controller=main&action=login');
        }
    }


    function insertClient()
    {
        require_once('views/templates/header.php');
        require_once('views/clients/insertClient.php');
        require_once('views/templates/footer.php');
    }

    function insertClientAction()
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $result = $clientModel->insertClientAction($name, $phone, $email, $address);

            
            if ($result) {
                $client = array(
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'address' => $address
                );
                
                // inserção bem sucedida, redireciona para página de sucesso
                require_once('views/templates/header.php');
                require_once('views/clients/insertClientAction.php');
                require_once('views/templates/footer.php');
            } else {
                // erro na inserção, exibe mensagem de erro
                echo "Erro ao inserir cliente!";
            }
        } else {
            // exibe formulário de inserção
            require_once('views/templates/header.php');
            require_once('views/clients/insertClientAction.php');
            require_once('views/templates/footer.php');
        }
    }


    function listClients()
    {

        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $result = $clientModel->listClients();

        $arrayClients = array();

        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        // var_dump($arrayClients);

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php');
    }
}
