<?php

echo 'Welcome ' . $_POST["name"] . '<br> Your email is: ' . $_POST["email"] ;

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alert</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <p><a href = "login.html" class = "but">Click</a> to login</p>
    <?php
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
    ?>
</body>
</html>