<?php
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //grabs the time
    $t=time();
    $date = date("Y-m-d",$t);

    //checks if the inputs for memos isn't empty
    if (!empty($_POST["title"]) and !empty($_POST["content"])) {
        $req = $bdd->prepare("INSERT INTO memos(user_id, title, content, date) VALUES (:id, :title, :content, :date)");
        $req -> execute([
            ":title" => $_POST["title"] ,
            ":content" => $_POST['content'], 
            ":date" => $date,
            ":id" => $_POST["id"], 
            //id is not grabed yet, manual input for the time being
        ]);
        $_SESSION['login'] = true;
    }

    //session condition
    if ($_SESSION["login"] = true){
         header("location:index.php");
    }

    //checks if memo info is empty
    if (empty($_POST["title"]) || empty($_POST["content"])){
        echo 'error, make sure to enter a title and content to the memo';
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