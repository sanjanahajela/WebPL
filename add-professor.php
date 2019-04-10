<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<?php

$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="professor";
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
    $university = $_POST['university'];

    $sql = "INSERT INTO professor (first_name, last_name, university)
    VALUES ('$first_name', '$last_name', '$university')";


    if ($conn->query($sql) === TRUE) {
        header('location: http://localhost/WebPL/search.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

$conn->close();




    


    //echo 'Your information has been submitted';
}

?>