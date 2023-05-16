<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_GET['controller'])){
    require_once('controller/MainController.php');
    $main = new MainController();
    $main -> index();
}else{
    switch ($_REQUEST['controller']) {
        case 'main':
            require_once('controller/MainController.php');
            $main = new MainController();
            if(!isset($_GET['action'])){
                //setar uma ação base
            }else{
                switch ($_REQUEST['action']) {
                    case 'index':
                        $main -> index();
                    break;

                    case 'login':
                        $main -> login();
                    break;

                    case 'logout':
                        $main -> logout();
                    break;
                }
            }
        break;

        case 'user':
            require_once('controller/UserController.php');
            $user = new UserController();
            if(!isset($_GET['action'])){
                //setar uma ação base
            }else{
                switch ($_REQUEST['action']) {
                    case 'validateLogin':
                        $user -> validateLogin();
                    break;
                }
            }
        break;
        case 'client':
            require_once('controller/ClientController.php');
            $client = new ClientController();
            if(!isset($_GET['action'])){
                $client -> insertClient();
            }else{
                switch ($_REQUEST['action']) {
                    case 'listClients':
                        $client -> listClients();
                    break;
                    case 'insertClient':
                        $client -> insertClient();
                    break;
                    case 'insertClientAction':
                        $client -> insertClientAction();
                    break;
                    case 'updateClient':
                        if(isset($_GET['id'])){
                            $client -> updateClient($_GET['id']);
                        }
                    break;
                    case 'updateClientAction':
                        if(isset($_GET['id'])){
                            $client -> updateClientAction($_GET['id']);
                        }
                    break;
                    case 'deleteClient':
                        if(isset($_GET['id'])){
                            $client -> deleteClient($_GET['id']);
                        }
                    break;
                }
            }
        break;
    }
}
