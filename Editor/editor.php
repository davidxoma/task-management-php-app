<?php
session_start();
require_once("../Functions/functions.php");
require_once("../DB/db.php");
require_once("../Class/Templates.php");

if( $_GET["action"] == "logout" ){
    
session_destroy();
header("Location: ../?auth=loggedout&page=login");

};
if( $_GET["action"] == "auth" ){
    $c_username = $_POST["username"];
    $c_password = $_POST["password"];
    if( auth_user($c_username, $c_password, $conn) ){
        $_SESSION['USER'] = $c_username;
        $_SESSION['USER_AUTH'] = true;
        header("Location: ../?auth=true&page=dashboard");
    }else{
        header("Location: ../?auth=false&page=login");
    }
    
};


?>