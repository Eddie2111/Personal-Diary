<?php
include_once("connection.php");

        $title  =    $_REQUEST['title'];
        $data   =    $_REQUEST['data'];
        $date   =    $_REQUEST['date'];
        $date2 =     $date.date("h:i:sa");
        
        $sql = "INSERT INTO `notes` (`id`, `title`, `data`, `date`) VALUES (NULL, '$title', '$data', '$date')" ;
        $result = $conn->query($sql);
?>
<?
// "INSERT INTO notes  ('id', 'username', 'password', 'email') VALUES('', '".$username."', '".$password."', '".$email."')"))
// "INSERT INTO `notes` (`id`, `title`, `data`, `date`) VALUES (NULL, '$title', '$data', '$date')"" 
?>
<?php
// index.php
if ($result) {
        header("Location: ../index.php", TRUE, 301);
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>