<?php
include_once("connection.php");

        $data   =    $_REQUEST['task'];
        
        $sql = "INSERT INTO `progress` (`id`, `task`) VALUES (NULL, '$data')" ;
        $result = $conn->query($sql);
?>
<?
// "INSERT INTO notes  ('id', 'username', 'password', 'email') VALUES('', '".$username."', '".$password."', '".$email."')"))
// "INSERT INTO `notes` (`id`, `title`, `data`, `date`) VALUES (NULL, '$title', '$data', '$date')"" 
?>
<?php
// index.php
if ($result) {
        header("Location: ../progress.php", TRUE, 301);
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>