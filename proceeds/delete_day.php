<?php
include_once("connection.php");
$id  =    $_GET['id'];
$sql = "DELETE FROM `notes` WHERE `notes`.`id` = $id";
$result = mysqli_query($conn, $sql);

//index.php
header("Location: ../index.php", TRUE, 301);
exit();
?>