<?php
    include_once("head.php");
    include_once("navbar.php");
    include_once("connection.php");
?>

<style>

form {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
</style>
<body id="body-pd">
<!--form for adding new task-->
<form  action="insert_task.php" method="post">
    <div class="card" style="border-color:'black'">
    <div class="card-header">
        Entry your ToDo's [Today: <?php echo date("m/d/Y");?> ]
    </div>
    <div class="card-body">

    <div class="mb-3">
        
        <input required="required" type="text" name= 'title' class="form-control" id="text" aria-describedby="text" placeholder="title">
    </div>
    <div class="mb-3">
        <input required="required" type="text" name='data' class="form-control" id="text" aria-describedby="text" placeholder="task">
    </div>
    
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <br/>
    </div>
    <br/>
</form>
</body>
<!--Card generation for tasks-->
<div class="container">
    <div class="row">

    <?php //Critical section here!
include_once("connection.php");
        // query
        $sql = "SELECT id, title, task FROM todolist ORDER BY `todolist`.`id` ASC";
        $result = $conn->query($sql);
    ?>

<!--keep it steady-->
<!--
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href='edit.php?id=".$row["id"]."' class='btn btn-primary'> Edit </a>
                    <a href='delete.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>
                </div>
            </div>
        </div>
-->
<!--keep it steady-->



<?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "
                <div class='col'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                    <h5 class='card-title'> ".$row["title"]." </h5>
                        <p class='card-text'>".$row["task"]."</p>
                        <a href='edit.php?id=".$row['id']."' class='btn btn-primary'> Edit </a>
                        <a href='delete_task.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
                        <a href='delete_task.php?id=".$row['id']."' class='btn btn-success'>Complete</a>
                    </div>
                </div>
            </div>
                    
                ";
            }
        } else {
            echo "<center> 
                    You have not assigned any task<br/> 
                    <Label> Create a task? </Label><br/> 
                    
                </center>
                
                
                "
                ;
        }
?> 


                
    </div>
</div>





