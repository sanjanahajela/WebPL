<!DOCTYPE html>
<?php
$host = 'localhost';
$dbusername = 'sh9as';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="login";
$yourfield = "first_name";

//connecting to database
$conn = new mysqli($host, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$usern= $_COOKIE["user"];
//searching through database to find the first and last name of the username 
$query = "SELECT * from login where username= '$usern'";
$records = mysqli_query($conn,$query);
while($p =mysqli_fetch_assoc($records)){
            echo "<tr>";
            echo "welcome ". "<td>".$p['first_name']. ' ' .$p['last_name']."</td>". "!";
            
            echo "</tr>";
          }
?>









<meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> if you downloaded bootstrap to your computer -->

    <!-- required scripts for IE --> 
   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
           
                <li class="nav-item"> 
              <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class = 'nav-item'>
                <a class = 'nav-link' href ='logOut.php'>Logout</a>
                </li> 
