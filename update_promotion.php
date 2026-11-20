<?php
include("config.php");

$id = $_GET['id'];
$title = $_POST['title'];
$detail = $_POST['detail'];
$img = $_FILES['img']['name'];

if ($img != "") {
    move_uploaded_file($_FILES['img']['tmp_name'], "image/" . $img);
    $sql = "UPDATE promotion SET title='$title', detail='$detail', img='$img' WHERE id='$id'";
} else {
    $sql = "UPDATE promotion SET title='$title', detail='$detail' WHERE id='$id'";
}

$conn->exec($sql);
header("Location: add_promotion.php");
exit();
?>
