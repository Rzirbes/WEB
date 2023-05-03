<?php

class UserModel{

    function getUser($login){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $conn = $connectClass -> getConn();

        $sql = "
            SELECT * FROM users
            WHERE user='{$login}'
        ";

        $conn -> query($sql);

        return $conn -> query($sql);
    }

}


?>