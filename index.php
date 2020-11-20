<?php
require_once("Class/Templates.php");
require_once("Functions/functions.php");
$temp = new Templates;



$temp->Header();

echo Get_Page();

$temp->Footer();
?>

    
