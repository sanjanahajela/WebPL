<?php

$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbname = 'professor';
$usertable="profiles";
$yourfield = "first_name";


$db = new PDO ($dsn, $username, $password );


catch(PDOException $e){
    $error_message = $e -> getMessage();
    echo "<p>An error occured while connecting to the database: $error_message </p>";

}

catch(Exception $e){
    $error_message = $e -> getMessage();
    echo "<p>Error message: $error_message </p>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 
    $username= $_POST['username'];
    $password= $_POST['password']


    echo 'Thank you for logging in!';
}
?>