<?php
require 'App/Model/Connect.php';
require 'App/Model/users.php';
require_once 'vendor/autoload.php';

// TODO: Corrigir esse if -> isset($_POST['email']) && isset($_POST['password'])
if(true):
    

    $u = new App\Model\Users();
 
     
    $login = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $u->login($login, $password);

    header('location: dashboard.php');
    
else:
    header('location:index.php');
endif;

?>