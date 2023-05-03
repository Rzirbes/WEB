<?php

class UserController{


    function validateLogin(){
        
        $login = $_POST['login'];
        $password = $_POST['password'];

        require_once('models/UserModel.php');
        $UserModel = new UserModel();
        $result = $UserModel -> getUser($login);

        if($user = $result -> fetch_assoc()){
            if($user['password'] == $password){
                //usuário autenticado com sucesso
                $_SESSION['user'] = $user;
                //redirecionando para a pagina principal
                header('Location: index.php?controller=main&action=index');
            }else{
                print('senha incorreta');
            }
        }else{
            print('Usuário não existe');
        } 
    }
}

?>