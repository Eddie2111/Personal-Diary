<?php
include_once("connection.php");
$id  =    $_GET['id'];
$sql = "DELETE FROM `progress` WHERE `progress`.`id` = $id";
$result = mysqli_query($conn, $sql);

//index.php
header("Location: ../progress.php", TRUE, 301);
exit();
?>