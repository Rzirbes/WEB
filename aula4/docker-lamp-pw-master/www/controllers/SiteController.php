<?php

class SiteController{
    function home(){
        //cabeçalho
        require_once("views/templates/header.php");
        //home
        require_once("views/pages/home.php");
        //rodape
        require_once("views/templates/footer.php");
    }
    function about(){
        //cabeçalho
        require_once("views/templates/header.php");
        //about
        require_once("views/pages/about.php");
        //rodape
        require_once("views/templates/footer.php");
    }

    function products(){
        //cabeçalho
        require_once("views/templates/header.php");
        //about
        require_once("views/pages/products.php");
        //rodape
        require_once("views/templates/footer.php");
    }

    function contact(){
        //cabeçalho
        require_once("views/templates/header.php");
        //about
        require_once("views/pages/contact.php");
        //rodape
        require_once("views/templates/footer.php");
    }
}

?>