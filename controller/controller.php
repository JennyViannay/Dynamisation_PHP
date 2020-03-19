<?php
    function getUserConnected($name){
        $_SESSION['username'] = $name;
        $_SESSION['isConnected'] = true;
        return $_SESSION;
    }
?>