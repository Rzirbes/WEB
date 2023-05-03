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
                    case 'login':
                        $main -> login();
                    break;
                }
            }
        break;
    }
}
