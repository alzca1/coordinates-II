<?php 

function url_for($script_path){
    if($script_path[0] != '/'){
        $script_path = "/" . $script_path; 
    }
    return WWW_ROOT . $script_path; 
}

function url_root_for($script_path){
    if($script_path[0] != '/'){
        $script_path = "/" . $script_path; 
    }
    return ROOT . $script_path; 
}

function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] === 'GET'; 
}

function redirect_to($location){
    header("Location: " . $location);
    exit; 
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function error_404()
{

    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    exit();
}


function error_500()
{
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    exit();
}
