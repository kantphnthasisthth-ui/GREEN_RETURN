<?php
include("config.php");

$title = $_POST['title'];
$detail = $_POST['detail'];
$img = $_FILES['img']['name'];

move_uploaded_file($_FILES['img']['tmp_name'], "image/" . $img);

$sql = "INSERT INTO promotion (title, detail, img) VALUES ('$title', '$detail', '$img')";
$conn->exec($sql);

echo "<script>alert('บันทึกสำเร็จ!'); window.location='add_promotion.php';</script>";
exit();
?>
