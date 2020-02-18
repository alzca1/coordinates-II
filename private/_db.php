<?php

require_once("db_credentials.php");

function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER,DB_PASS,DB_NAME);
    confirm_db_connect(); 
    return $connection; 
}

function db_disconnect($connection){
    if(isset($connection)){
        mysqli_close($connection); 
    }
}

function confirm_db_connect(){
    if(mysqli_connect_errno()){
        $msg = "Database connection failed"; 
        $msg .= mysqli_connect_error() ; 
        $msg .= " (" . mysqli_connect_errno() . " )" ; 
        exit($msg);
    }
}

function confirm_result_set($result_set){
    if(!$result_set){
        exit("Database query failed!"); 
    }
}




// $mysqli = new mysqli('127.0.0.1', 'root', '', 'my_app');

// if ($mysqli->connect_errno) {
//     echo "Lo sentimos, este sitio web está experimentando problemas.";
//     echo "Error: Fallo al conectarse a MySQL debido a: \n";
//     echo "Errno: " . $mysqli->connect_errno . "\n";
//     echo "Error: " . $mysqli->connect_error . "\n";
//     exit;
// }
// $mysqli->set_charset("utf8");

// ?>
