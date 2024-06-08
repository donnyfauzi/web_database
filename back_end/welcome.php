<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['username'] )){
}
$_SESSION['name'];
$_SESSION['username'];
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome Page</title>
</head>
<body>
   
</body>
</html>
    <div class="container">
<h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3>
<p>Your Email id is : <h6><?=$_SESSION['username'];?></h6></p>
<a href="../front_end/home.php" class="btn">LOGOUT</a>
</div>

 