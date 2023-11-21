<?php
require "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">
    <title>Memento stuff</title>
    <!-- <style>
        *{
            outline: 2px solid black;
        }
    </style> -->
    <!-- To Be Deleted -->
</head>

<body>
    <header>
        <p>Memento</p>
        <nav>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </nav>
    </header>
    <main>
        <section class="top" method="post">
            <h1>Memento</h1>
            <a href="memomaker.php"><button name="button" value="Add Post-It">Add Post-It</button></a>
        </section>
        <section id="post-area">
            <?php //gets every memos from database
                $query = "SELECT * FROM memos";
                $response = $bdd->query($query);
                $datas = $response->fetchAll();
                
                foreach($datas as $data) {?>

                <div class="note container">
                    <div class="title_button">
                        <h2><?= $data['title'] ?><br></h2>
                        <a href='delete.php?id=<?= $data['id']?>' title='<?= $data['title']?>'><?= $data['id']?><input type="button" value="X" alt="delete button"></a>
                    </div>
                    <?= $data['content'] ?><br>
                    <?= $data['date'] ?><br>
                </div>
            <?php } ?>
        </section>
        
    </main>
</body>
</html>