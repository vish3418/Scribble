<?php
session_start();
//Connects to database
include("connection.php");

// Store the errors in the erros variable

$missingEmail = '<p><strong>Please enter your email address</strong></p>'
$missingEmail = '<p><strong>Please enter your password</strong></p>'
    
// Get email and password
    
if(empty($_POST["Email Address"])){
    $errors .= $missingEmail;
}else{
    $email = filter_var($_POST["Email Address"], FILTER_SANITIZE_EMAIL);
}

if(empty($_POST["password"])){
    $errors .= $missingPassword;
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
}

//If there are any errors.

if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">'. $errors .'</div>';
    echo $resultMessage;
} else {
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);
    $password = hash('sha256', $password);
}

//Run query and check combinations of email and password

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated'";
$result = mysql_query($link,$sql);

if(!$result){
    echo '<div class="alert alert-danger">Error running the query</div>';
    exit;
}

$count = mysqli_num_rows($result);
if($count != 1) {
    echo '<div class="alert alert-danger">Incorrect username or password</div>';
} else {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];
    echo "success";
}
?>