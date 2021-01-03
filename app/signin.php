<?php
require_once "../includes/fulllib-min.php";

$login = $_POST['login'];
$password = $_POST['pass'];

if($returned = login($login,$password,"connect.php","users","user","pass")){
    header("Location: adminpanel.php");
}else{
    echo $returned;
    header("Location: index.html");
}