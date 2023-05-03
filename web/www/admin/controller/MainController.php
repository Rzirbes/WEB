<?php
// session_start();

class MainController {
    function index() {
        if(isset($_SESSION['user'])){
            require_once('views/templates/header.php');
            require_once('views/main/home.php');
            require_once('views/templates/footer.php');
        }else{
            header('Location: index.php?controller=main&action=login');
            exit(); // importante sair do script após enviar o cabeçalho
        }
    }

    function login() {
        require_once('views/main/login.php');
     }

    function logout() { }
}
