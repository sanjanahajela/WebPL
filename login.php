<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->
<?php
// When an HTML form is submitted to the server using the post method,
// its field data are automatically assigned to the implicit $_POST global array variable.
// PHP script can check for the presence of individual submission fields using
// a built-in isset() function to seek an element of a specified HTML field name.
// When this confirms the field is present, its name and value can usually be
// stored in a cookie. This might be used to stored username and password details
// to be used across a website
$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="login";
$yourfield = "first_name";


// Create connection
$conn = new mysqli($host, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
   //echo "database connected";
}
// Define a function to handle failed validation attempts
function reject($entry)
{
//    echo 'Please <a href="login.php">Log in </a>';
   exit();    // exit the current script, no value is returned
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['username']) > 0)
{
   //echo "hi";
   $username = $_POST['username'];
    $password = $_POST['password'];
    //going through the database to find the username and password that are associated with what the user enters

   $query = "SELECT * FROM login WHERE username= '$username' AND password= '$password'";

   $user = trim($_POST['username']);
   $statement= mysqli_query($conn, $query);
   
      
   if (mysqli_num_rows($statement)!=0)
   {
      $pwd = trim($_POST['password']);
      
      
         // setcookie(name, value, expiery-time)
         // setcookie() function stores the submitted fields' name/value pair
      //creates a cookie when the user logs in 
         setcookie('user', $user, time()+3600);
         //starts a session 

         $_SESSION['user']=true;  
         header('Location: home.php');
         echo "user found";// create a hash conversion of password values using md5() function
    }
    else{
      echo "This user does not exist";
      header('Location: login.html');
    }           
         // redirect the browser to another page using the header() function to specify the target URL
         
      }
   

?>
