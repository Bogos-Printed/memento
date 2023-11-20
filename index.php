<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Memento stuff</title>
    <style>
        *{
            outline: 2px solid black;
        }
    </style>
</head>

<body>
    <header>
        <p>Memento</p>
        <nav>
            <a href="">Login</a>
            <a href="">Register</a>
        </nav>
    </header>
    <main>
        <section class="top">
            <h1>Memento</h1>
            <input type="button" onclick="" value="Add Post-It">
        </section>
        <section id="post-area">
            <div class="note container">
                <h2>title</h2>
                <input type="button" value="X" alt="delete button">
                <p>paragraph</p>
                <p>paragraph</p>
                <p>paragraph</p>
                <p>paragraph</p>
            </div>
            <div class="note container">
                <h2>title</h2>
                <input type="button" value="X" alt="delete button">
                <p>paragraph</p>
                <p>paragraph</p>
            </div>
            <div class="note container">
                <h2>title</h2>
                <input type="button" value="X" alt="delete button">
                <p>paragraph</p>
                <a href="#">some link to a website</a>
            </div>
        </section>

    </main>
</body>
</html>