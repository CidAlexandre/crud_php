<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])):
    
    require 'App/Model/Connect.php';
    require_once 'vendor/autoload.php';

    $u = new \App\Model\Users;
    session_start();
   
   
    $login = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $u->login($login, $password);
    header('location: dashboard.php');
    
else:
    header('location:index.php');
endif;

?>