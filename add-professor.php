<?php

$host = 'localhost';
$dbusername = 'ks4vp';
$password = 'CSgods123';
$dbnmame = 'professors';


$db = new PDO ($dsn, $username, $password);


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
    $university = $_POST['university'];


    echo 'Your information has been submitted';
}
?>