<?php

$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbnmame = 'professors';
$usertable= 'profiles'


$db = new PDO ($dsn, $first_name, $last_name, $username, $password );


catch(PDOException $e){
    $error_message = $e -> getMessage();
    echo "<p>An error occured while connecting to the database: $error_message </p>";

}

catch(Exception $e){
    $error_message = $e -> getMessage();
    echo "<p>Error message: $error_message </p>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username= $_POST['username'];
    $password= $_POST['password']


    echo 'Thank you for creating an account!';
}
?>