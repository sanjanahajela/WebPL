<?php
$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="login";
// Create connection
$conn = new mysqli($host, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->close();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    echo('hello')
    #$query = "INSERT * from login where first_name ='$first_name'";
    
    // if ($result=mysqli_query($conn,$query))
    // {
    //     if(mysqli_num_rows($result) > 0)
    //     {
    //         echo "Exists";
    //     }
    //     else{
    //         $sql = "INSERT INTO profile (first_name, last_name, username, password)
    //         VALUES ('$first_name', '$last_name', '$username, $password')";
    //         if ($conn->query($sql) === TRUE) {
    //             header('location: http://localhost/WebPL/home.html');
    //         } else {
    //             echo "Error: " . $sql . "<br>" . $conn->error;
    //         }
    //     }
        
    // }
    // else{
    //     echo "Create Account failed.";
    // }
        
    
    
    //echo 'Your information has been submitted';
}
?>