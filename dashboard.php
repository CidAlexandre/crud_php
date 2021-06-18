<?php
    require_once 'vendor/autoload.php';

    session_start();

    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;

    $productsDao = new \App\Model\ProductsDao();

    foreach($productsDao->readProduct() as $product):
        echo $product[0]." - ".$product[1]."<hr>";
    endforeach;

