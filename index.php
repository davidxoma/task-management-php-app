<?php
session_start();
require_once("Functions/functions.php");
require_once("Class/Templates.php");


$temp = new Templates;



$temp->Header();



if ( logged() ){

    header("Location: dash.php?page=dashboard");
    

}else{
    $temp->Login_page();
}



$temp->Footer();
?>

    
