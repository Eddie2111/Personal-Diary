<!Doctype HTML>
<?php
session_start();
    $title = "Diary";
    $page = "home";
?>
<html>
<?php include("head.php"); ?>

    <body id="body-pd">
    <?php include_once("navbar.php")?>

<?php //Critical section here!
 include_once("connection.php");
        // query
        $sql = "SELECT id, title, data, date FROM notes ORDER BY `notes`.`id` DESC";
        $result = $conn->query($sql);
?>

<!-- //posts are here// -->
<?php
        if ($result->num_rows > 0) {
            // output data of each row
            echo '<div class="container"> <div class="row"> <div class="col-6">';
            while($row = $result->fetch_assoc()) {
                echo "
                
                    <div class='card' style='min-width: 26rem;''>
                    <div class='card-body'>
                        <h5 class='card-title'>
                            ".$row["title"]."
                        </h5>
                        <p class='card-text'>
                            ".$row["data"]."
                        </p>
                        <div class='card-footer text-muted'>
                            ".$row["date"]."
                        </div>

                <a href='edit.php?id=".$row["id"]."' class='btn btn-primary'> Edit </a>
                <a href='delete_day.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>
                    </div>
                    </div>
                    <br/>
                ";
            }
        } else {
            echo "<center> 
                    0 results<br/> 
                    <Label>No post here, Create a post? </Label><br/> 
                    <a href='post.php' class='btn btn-primary'>Create</a>
                </center>
                
                
                "
                ;
        }
?> 
<!-- //posts are here// -->

            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proposed footer</h5>
                <p class="card-text">Should add the updates here.</p>
            </div>
            </div>
    

  


</html>