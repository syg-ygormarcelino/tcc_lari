<?php
    session_start();
    if(!$_SESSION['session']){
        header('Location: ../view/login.php');
        exit();
    }
?>