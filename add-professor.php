<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<?php


$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="professor";
#setting the hostname,database username, database password, database name, and table name 

#Try to Create a Connection
$conn = new mysqli($host, $dbusername, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $university = $_POST['university'];

    if (empty($firt_name)){
        echo("Enter Professor's first name");
    }

    $query = "SELECT * from professor where first_name ='$first_name'";
    #checks if the first name of a professor is in the database but you want to check all 
    if ($result=mysqli_query($conn,$query))
    {
        if(mysqli_num_rows($result) > 0)
        {
            $response['sucess'] = 0;
            echo "Exists";
        }
        else{
            $sql = "INSERT INTO professor (first_name, last_name, university)
            VALUES ('$first_name', '$last_name', '$university')";
            if ($conn->query($sql) === TRUE) {
                header('location: http://localhost/WebPL/search.php');
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