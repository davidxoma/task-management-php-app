<?php
require_once("Functions/functions.php");
require_once("Class/Templates.php");
require_once("Class/checkers.php");

$temp = new Templates;
$check = new Check;


$temp->Header();

$check->Check_Destination();
$temp->Footer();
?>

    
