<?php
if(isset( $_POST['name'])){
    $name = $_POST['name'];
    #checks to see if name is set or not
}
if(isset( $_POST['email'])){
    $email = $_POST['email'];
    #checks to see if email is set or not
}

if(isset( $_POST['message'])){
    $message = $_POST['message'];
    #checks to see if message to owners is set aka empty or not
}

if(isset( $_POST['subject'])){
    $subject = $_POST['subject'];
    #checks to see if subject is set or not
}

if ($name === ''){
    echo "Name cannot be empty.";
    #if name is empty, an echo statment is sent
die();
}
if ($email === ''){
    echo "Email cannot be empty.";
    #if email field is empty, an echo warning statment is set
die();
} 
else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email format invalid.";
        #filter checks the format of the email
    die();
    }
}
if ($subject === ''){
    echo "Subject cannot be empty.";
die();
}
if ($message === ''){
    echo "Message cannot be empty.";
die();
}

$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="feedback";
#setting the hostname,database username, database password, database name, and table name 

#Try to Create a Connection
$conn = new mysqli($host, $dbusername, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name)){
        echo("Enter your name");
    }

    $query = "SELECT * from feedback where name ='$name'";
    #checks if the first name of a professor is in the database but you want to check all 
    if ($result=mysqli_query($conn,$query))
    {
        if(mysqli_num_rows($result) > 0)
        {
            $response['sucess'] = 0;
            echo "Exists";
        }
        else{
            $sql = "INSERT INTO feedback (name,email,subject,message)
            VALUES ('$name', '$email', '$subject', '$message')";
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

    
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Thanks, email sent!";
?>