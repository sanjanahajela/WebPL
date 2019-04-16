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


$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Thanks, email sent!";
?>