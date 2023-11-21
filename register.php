<?php
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //passwords don't match
    if ($_POST["password"] != $_POST["password_confirm"]){
        echo "error passwords do not match";
    }
    
    //obligatory info missing
    if (empty($_POST["email"]) || empty($_POST["password"])||empty($_POST["username"])){
        echo 'error, please input log-in informations like the username email and password';
    }

    //form properly filled
    if (!empty($_POST["email"]) and !empty($_POST["password"]) === $_POST["password_confirm"]) {
        $req = $bdd->prepare("INSERT INTO users( username, name, first_name, email, password) VALUES (:username, :name, :firstname, :email, :password)");
        $req -> execute([
            ":username" => $_POST["username"] ,
            ":name" => $_POST['name'],
            ":firstname" => $_POST['firstname'], 
            ":email" => $_POST["email"],
            ":password" => $_POST['password'],
        ]);//alas it finally works, Don't touch!
        // $_SESSION['login'] = true;
    // if ($_SESSION["login"] = true){
        header("location:index.php");
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
        <input id="email" type="email" name="email"><br>

        <label for="password">Insert password</label><br>
        <input id="password" type="password" name="password"><br>
        
        <label for="password">confirm password</label><br>
        <input id="password" type="password" name="password_confirm"><br>

        <button type="submit">Log-in</button>
    </form>
    
</body>
</html>