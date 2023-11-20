<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST["email"] == $email and $_POST["password"] == $password) {
        header("location:index.php");
        $_SESSION['login'] = true;
    }
    // if ($_SESSION["login"] = true){
    //     header("location:index.php");
    // }

    if (empty($_POST["email"]) and empty($_POST["password"]) or $_POST["email"] != $email and $_POST["password"] != $password){
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
        <label for="email">Insert mail</label><br>
        <input id="email" type="text" name="email"><br>

        <label for="password">Insert password</label><br>
        <input id="password" type="password" name="password"><br>
        
        <button type="submit">Log-in</button>
    </form>
    
</body>
</html>