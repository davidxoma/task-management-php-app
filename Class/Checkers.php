<?php
class Check
{
    public function Check_Destination(){

        switch (Get_Page()) {
            case "login":
              require_once("./Parts/login.php");
              break;
            case NULL:
            require_once("./Parts/error.php");
            break;
          
        }
    }
}
?>