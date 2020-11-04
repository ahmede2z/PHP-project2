<?php

session_start();
    if(isset($_SESSION['isLoggedIn'])){
        unset($_SESSION['isLoggedIn']);
        session_destroy();
        header('Location: home.php');
    }else{
        header('Location: account.php');
    } 

?>