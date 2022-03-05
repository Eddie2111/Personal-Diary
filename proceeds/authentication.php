<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "login";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  

<?php

$email      = trim($_REQUEST['email']);
$password   = $_REQUEST['password'];

$hash       = password_hash($password, PASSWORD_DEFAULT);


$sql        = "select * from users where email = '$email' and password = '$password'";  


$result     = mysqli_query($con,$sql);
$row        = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count      = mysqli_num_rows($result);

if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     
?>
