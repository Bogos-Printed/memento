<?php
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if ($_POST["email"] == $bdd and $_POST["password_confirm"] == $bdd) {
        $_SESSION['login'] = true;
    }
    if ($_SESSION["login"] = true){
        header("location:index.php");
    }

    if (empty($_POST["email"]) || empty($_POST["password"])){
        echo 'error, please input log-in informations';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a value="Back" href="index.php">Back</a>
    <form enctype="multipart/form-data" method="post" action="">
        <label for="username">Insert username</label><br>
        <input id="username" type="text" name="username"><br>

        <label for="name">Insert name (optional)</label><br>
        <input id="name" type="text" name="name"><br>

        <label for="firstname">Insert firstname (optional)</label><br>
        <input id="firstname" type="text" name="firstname"><br>

        <label for="email">Insert mail</label><br>
        <input id="email" type="text" name="email"><br>

        <label for="password">Insert password</label><br>
        <input id="password" type="password" name="password_confirm"><br>
        
        <label for="password">confirm password</label><br>
        <input id="password" type="password" name="password_confirm"><br>

        <button type="submit">Log-in</button>
    </form>
    
</body>
</html>