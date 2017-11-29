<?php

require_once 'config.php';

// Define variables and initialize with empty values
$usermail = $password = "";
$errorMSG = "";

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $usermail = trim($_POST["email"]);
}
// Password
if (empty($_POST["password"])) {
    $errorMSG .= "Password is required ";
} else {
    $password = trim($_POST["password"]);
}

$pass = "";
$first_name = "";														

if ($stmt = mysqli_prepare($link, "SELECT password, first_name FROM author WHERE email = ?")) {
  
  mysqli_stmt_bind_param($stmt, "s", $usermail);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $pass, $first_name);
  mysqli_stmt_fetch($stmt);
                      
  mysqli_stmt_close($stmt);
}

if ($pass == $password) {
  session_start();
  $_SESSION['username'] = $first_name;
  $success = true;
}else{
  $success = false;
}


//redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
        
    } else {
        echo $errorMSG;
    }
}

mysqli_close($link);
 
?>