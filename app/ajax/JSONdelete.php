<?php
require_once "../../includes/connect.php";

try{
    $db = new mysqli($host,$db_user,$db_pass,$db_name);
    if($db->connect_errno != 0){
        throw new mysqli_sql_exception("connect error!");
    }else{
        $query = "SELECT id, title FROM dirs";
        if(!$polecenie = $db->prepare($query)){
            throw new mysqli_sql_exception("query preapre error");
        }else{
            $polecenie->execute();
            $result = $polecenie->get_result();
            if($result->num_rows != 0){
                $resultassoc = $result->fetch_assoc();
                $arr['rows'][] = $resultassoc;
                echo json_encode($arr);
            }else{
            }

        }
    }
}catch(mysqli_sql_exception $e){
    echo json_encode($e);
}