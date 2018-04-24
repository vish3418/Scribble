<?php

session_start();
include('connection.php');

if(!isset($_GET['email']) || !isset($_GET['key'])) {
    echo '<div class="alert alert-danger">There was an error.</div>';
    exit;
}
$email = $_GET['email'];
$key = $_GET['key'];

$email = mysqli_real_escape_string($link, $email);
$key = mysqli_real_escape_string($link, $key);

$sql = "UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key') LIMIT 1";

$result = mysqli_query($link, $sql);

if(mysqli_affected_rows($link)) {
    
    echo '<div class="alert alert-success">You have been activated.</div>';
    echo '<a href="index.php" type="button" class="btn-lg btn-success">Log in<a/>';
    
}else{
    echo '<div class="alert alert-danger">Not activated.</div>';
}



?>