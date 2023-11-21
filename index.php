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
        <section class="top">
            <h1>Memento</h1>
            <input type="button" onclick="" value="Add Post-It">
        </section>
        <section id="post-area">
            <div class="note container">
                <?php 
                $query = "SELECT * FROM memos";
                $response = $bdd->query($query);
                $datas = $response->fetchAll();
                
                foreach($datas as $data) {?>

                <div class="title_button">
                    <h2><?= $data['title'] ?><br></h2>
                    <input type="button" value="X" alt="delete button">
                </div>
                
                <?= $data['content'] ?><br>
                <?= $data['date'] ?><br>
            </div>
            <?php } ?>
            <!-- <div class="note container">
                <div class="title_button">
                    <h2>title</h2>
                    <input type="button" value="X" alt="delete button">
                </div>
                <p>paragraph</p>
                <p>paragraph</p>
            </div>
            <div class="note container">
                <div class="title_button">
                    <h2>title</h2>
                    <input type="button" value="X" alt="delete button">
                </div>
                <p>paragraph</p>
                <a href="#">some link to a website</a>
            </div> -->
        </section>
        
    </main>
</body>
</html>