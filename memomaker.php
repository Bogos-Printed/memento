<?php
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //grabs the time
    $t=time();
    $date = date("Y-m-d",$t);

    if (!empty($_POST["title"]) and !empty($_POST["content"])) {
        $req = $bdd->prepare("INSERT INTO memos(user_id, title, content, date) VALUES (:id, :title, :content, :date)");
        $req -> execute([
            ":title" => $_POST["title"] ,
            ":content" => $_POST['content'], 
            ":date" => $date,
            ":id" => $_POST["id"],
        ]);
        $_SESSION['login'] = true;
    }

    if ($_SESSION["login"] = true){
         header("location:index.php");
    }

    if (empty($_POST["title"]) || empty($_POST["content"])){
        echo 'error, please input log-in informations';
    }
    
}

?>
<a value="Back" href="index.php">Back</a>
    <form enctype="multipart/form-data" method="post" action="">
        <label for="id">User</label><br>
        <input id="id" type="text" name="id"><br>

        <label for="title">Title</label><br>
        <input id="title" type="text" name="title"><br>

        <label for="content">Your post's content</label><br>
        <input id="content" type="text" name="content"><br>

        <button type="submit">Log-in</button>
    </form>