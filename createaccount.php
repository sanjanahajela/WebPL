<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<?php


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



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $user_password = $_POST['pwd'];

    $query = "SELECT * from login where username ='$username'";
    #checks if the first name of a professor is in the database but you want to check all 
    if ($result=mysqli_query($conn,$query))
    {
        if(mysqli_num_rows($result) > 0)
        {//checks if the account is already in the database (username and password)
            $response['sucess'] = 0;
            echo "This account already exists";
        }
        else{//inserts new user account into the database including all of the attributes like first name, last name, username, password
            $sql = "INSERT INTO login (first_name, last_name, username,password)
            VALUES ('$first_name', '$last_name', '$username', '$user_password')";
            if ($conn->query($sql) === TRUE) {
                header('location: http://192.168.64.2/WebPL/home.html');
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