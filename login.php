<?php include_once 'welcome.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <?php if(isset($_GET['success'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                <?php   
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                   
                ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <form action="signin.php" method="post">
            E-mail: <input type="email" name="email" class="input"><br>
            Password: <input type="password" name="password" class="input"><br>
            <input type="submit" value="logIn" class="but">
            <input type= 'reset' value = 'Reset'>
        </form>
    </div>
    <div style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 500px;">
        <p>Not yet registered? click below</p>
        <button class="but1"><a class="but" href="register.html">Register</a></button>
        <button class="but1" style="margin-left: 200px;"><a class="but" href="index.html">Back Home</a></button>
    </div>
</body>
</html>