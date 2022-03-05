<?php
include_once("connection.php");
$id  =    $_GET['id'];
$sql = "DELETE FROM `todolist` WHERE `todolist`.`id` = $id";
$result = mysqli_query($conn, $sql);

//index.php
header("Location: ../todolist.php", TRUE, 301);
exit();
?>