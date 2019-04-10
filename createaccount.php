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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    $query = "SELECT * from login where username ='$username'";
    

    if ($result=mysqli_query($conn,$query))
    {
        if(mysqli_num_rows($result) > 0)
        {
            $response['sucess'] = 0;
            echo "Exists";
        }
        else{
            $sql = "INSERT INTO login (first_name, last_name, username, password)
            VALUES ('$first_name', '$last_name', '$username', '$password')";
            if ($conn->query($sql) === TRUE) {
                header('location: http://localhost/WebPL/home.html');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
    }
    else{
        echo "Query Failed.";

    }

        



    $conn->close();
}
?>