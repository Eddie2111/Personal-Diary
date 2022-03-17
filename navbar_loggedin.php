<script src="modescript.js"></script>
<?php
include("head.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarTogglerDemo03" 
        aria-controls="navbarTogglerDemo03" 
        
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">Diary</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Write Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="todolist.php">To do</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        
        <p>&nbsp;</p>
        <a href="signout.php" class="btn btn-outline-success">Sign out</a>
      </form>
    </div>
  </div>
</nav>

<button class="btn btn-primary" onClick="modechange()" style="margin:0px 20px 0px 0px;float:left;position:fixed;"> 
              <i class='bx bxs-moon'> </i> 
      </button>
      <br/>