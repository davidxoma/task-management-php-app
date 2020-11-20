<?php
    function Get_Page(){
        $page = $_GET["page"] ?? NULL;
        return $page;
    }
?>