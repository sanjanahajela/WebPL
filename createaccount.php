<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<?php


$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="user";
$yourfield = "first_name";


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
    $user_password = $_POST['pwd'];

    $query = "SELECT * from user where username ='$username'";
    #checks if the first name of a professor is in the database but you want to check all 
    if ($result=mysqli_query($conn,$query))
    {
        if(mysqli_num_rows($result) > 0)
        {
            $response['sucess'] = 0;
            echo "Exists";
        }
        else{
            $sql = "INSERT INTO user (first_name, last_name, username,user_password)
            VALUES ('$first_name', '$last_name', '$username', '$user_password')";
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

    


    //echo 'Your information has been submitted';
}

?>