<?php 
    require 'dbconn.inc.php';
        $usr = "admin";
        $psw = "password";
        $username = '$_POST[user]';
        $password = '$_POST[pass]';

        session_start();
        if(($_POST['user'] == "admin" && $_POST['pass']=="password")) {
            header("Location: http://localhost/BSC_TRAINEE_EXAM%202021/Melvin-Cabanes_BSC-TRAINEE-EXAM/FrontEnd/profile.php");
            exit();
            $_SESSION['submit']=true;
        }else {
            echo "incorrect login";
        }

?>