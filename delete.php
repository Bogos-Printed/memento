<?php
require "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
//     header('location: index.php');
//     exit();
// }

// $req = $bdd->prepare("DELETE FROM memo WHERE id = :id");
// $req -> execute([":id" => $_POST["id"],]);


$data = $bdd ->prepare("SELECT * FROM memos WHERE id=:id");
$data -> execute([":id"=> $_POST["id"]]);

$datas = $data->fetch();
var_dump(id);

}
?>

<a href='index.php' title='back'>Back</a><br>
<div class="note container">
    <div class="title_button">
        <h2><?= $datas['title'] ?><br></h2>
        <button name="id" type="button" value="X" alt="delete button"></a></button>
    </div>
    <?= $datas['content'] ?><br>
    <?= $datas['date'] ?><br>
</div>