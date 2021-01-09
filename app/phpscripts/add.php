<?php
require_once "../../includes/fulllib-min.php";
require_once "../../includes/connect.php";
session_start();
if(!isset($_POST['title'])){
    header("Location: adminpanel.php");
    exit();
}
$valid = true;
if(!is_string( $_POST['title'])){
    $valid = false;
}
if(!is_string($_POST['desc'])){
    $valid = false;
}
if(uploadimg("../../img/", "photo")){
    $valid = false;
}
if(!$valid){
    $_SESSION['error'] = "insert correct data";
}else{
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    //TODO: Napisać całą mechanikę działania 
}