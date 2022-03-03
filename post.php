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

<form  action="insert_day.php" method="post">
<div class="card">
  <div class="card-header">
    Create a post [Today: <?php echo date("m/d/Y");?> ]
  </div>
  <div class="card-body">
    <h5 class="card-title">Fill up the form and press post</h5>
    <p class="card-text">You can modify after posting.</p>

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input required="required" type="text" name= 'title' class="form-control" id="text" aria-describedby="text">
    <div id="title" class="form-text">Keep the title short but great.</div>
  </div>
  <div class="mb-3">
    <label for="data" class="form-label">Story</label>
    <input required="required" type="text" name='data' class="form-control" id="text" aria-describedby="text">
    <div id="data" class="form-text">Describe well in 500 words.</div>
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input required="required" type="date" name='date' class="form-control" id="date" value="<?php echo date("m/d/Y");?> "/>
  </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>



</body>