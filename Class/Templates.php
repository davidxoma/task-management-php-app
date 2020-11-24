<?php
class Templates
{
    public function The_Content($e){
        switch ($e) {
            case "dashboard":
                require_once("./Parts/dashboatd.php");
                break;
            case "userinfo":
                echo "userinfo";
                break;
            case "finished":
                echo "Finished tasks";
                break;
            default:
                echo "error";
        }
    }
    public function Login_page(){
        require_once("./Parts/login.php");
    }
    public function Header(){
        require_once("./Parts/header.php");
    }

    public function Footer(){
        require_once("./Parts/footer.php");
    }
}
?>