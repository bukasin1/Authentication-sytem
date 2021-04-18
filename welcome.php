<?php

session_start();

if(isset($_POST['register'])){

  
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION['message'] = "Registration Successful!";
        $_SESSION['msg_type'] = "success";

        header(
            'location: login.php?success'
        );

}

?>
