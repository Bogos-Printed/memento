<?php
require "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    header('location: index.php');
    exit();
}
// $req = $bdd->prepare("DELETE FROM memo WHERE id = :id");
// $req -> execute([":id" => $_POST["id"],]);

$query ="SELECT FROM memos WHERE id= :id";
$response = $bdd ->prepare("SELECT * FROM memos WHERE id=:id");
$response-> execute([
    ":id"=> $_POST["id"]
    ]);

$data = $response->fetch();

var_dump($query);

}
?>

<a href='index.php' title='back'>Back</a><br>
<div class="note container">
    <div class="title_button">
        <h2><?= $datas['title'] ?><br></h2>
        <button type="button" value="X" alt="delete button">delete</button>
    </div>
    <?= $data['content'] ?><br>
    <?= $data['date'] ?><br>
</div>