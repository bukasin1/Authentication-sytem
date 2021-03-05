<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alert</title>
</head>
<body>
    
    <?php
        if($_POST["email"] == $_SESSION["email"] && $_POST["password"] == $_SESSION["password"]){
            echo 'Welcome ' . $_SESSION["name"] . '  to SideHustle' ;
        }else{
            echo 'Incorrect email or password' ;
        }
    ?>

</body>
</html>