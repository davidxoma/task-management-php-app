<?php
function get_username(){
    return $_SESSION["USER"];
}
function logged(){
    if ( isset( $_SESSION['USER'] ) && $_SESSION['USER'] !== ""){
        return true;
    }else{
        return false;
    }
}
    function auth_user($username, $password, $conn){
        $sql = "SELECT user_username, user_password FROM users WHERE user_username = '$username' AND user_password = '$password'";
        $result = $conn->query($sql);
        if ( $result->num_rows > 0 ){

            return true;
        }else{
            return false;
        }
        $conn->close();
        
    }
    function Get_Page(){
        $page = $_GET["page"] ?? NULL;
        return $page;
    }
?>