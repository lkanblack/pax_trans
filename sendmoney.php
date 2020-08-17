<?php 

    $mysql = new mysqli('localhost', 'root', 'root', 'transaction');
    
    $arr = $mysql->query("SELECT * FROM `wallets`");
    $arr = $arr->fetch_assoc();
    
    $nick = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];
    $name = $_COOKIE['name'];
    $amount = $_COOKIE['amount'];

    $wallet = $_POST['wallet'];
    $pay = $_POST['pay'];
    $percent = 1.5;

    if($wallet != null) {
        if($wallet == $arr['login']){
            echo('hei');
        } else {
            echo('no hei');
        }
    } else {
        echo "empty fieilds";
    }
?>