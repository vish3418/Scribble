<?php
 session_start();
include('connection.php');


$missingUsername='<p>Please enter a username.</p>';
$missingEmail='<p>Please enter an email.</p>';
$invalidEmail='<p>Inavlid Email.</p>';
$missingPassword='<p>Please enter a password.</p>';
$invalidPassword='<p>Invalid Password.</p>';
$differentPassword='<p>Passwords do not match.</p>';
$missingPassword2='<p>Please confirm your password.</p>';

//get username
if(empty($_POST["Username"])){
    $errors .= $missingUsername;
}else{
    $username = filter_var($_POST["Username"], FILTER_SANITIZE_STRING);
}

//get email
if(empty($_POST["email"])){
    $errors .= $missingEmail;
}else{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors .= $invalidEmail;
    }
}

//get password
if(empty($_POST["password"])){
    $errors .= $missingPassword;
}elseif(!(strlen($_POST["password"]) > 6 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]))) {
    $errors .= $invalidPassword;
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    if(empty($_POST["confirm"])){
        $errors .= $missingPassword2;
    }else{
        $password2 = filter_var($_POST["confirm"], FILTER_SANITIZE_STRING);
        if($password !== $password2)
        {
            $errors .= $differentPassword;
        }
    }
}

//print errors
if($errors){
    $resultMessage = '<div class="alert alert-danger">'. $errors .'</div>';
    echo $resultMessage;
}

//no errors
//set variables
$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
//function to hash password
//this function will work better than our previous md5 function
$password = hash('sha256', $password);

//username exits or nah?
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($link,$sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running query</div>';
    //echo '<div class="alert alert-danger">' . mysqli_error($link) .'</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That username is already taken.</div>';
    exit;
}


//now email

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link,$sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That email is already taken.</div>';
    exit;
}

//making new key
//converting from bin 2 hex as well
$key = bin2hex(openssl_random_pseudo_bytes(16));

$sql = "INSERT INTO users (username, email, password, activation) VALUES ('$username', '$email', '$password', '$key')";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error inserting information.</div>';
    exit;
}

//take care of email verification;
$message = "Please click on this link to activate your account:\n\n";
$message .= "http://siddharthdhar.thecompletewebhosting.com/activate.php?email=" . urlencode($email) . "&key=$key";
if(mail($email, 'Confirm your Registration', $message, 'From:'.'vish3418@gmail.com')) {
   echo "<div class='alert alert-danger'>Email sent.</div>";
}


    
?>