<?php

require_once 'config.php';

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


// перевірка наявності реєстрації

if ($stmt = mysqli_prepare($link, "SELECT email FROM author WHERE email = ?")) {
  
  mysqli_stmt_bind_param($stmt, "s", $usermail);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $email_is);
  mysqli_stmt_fetch($stmt);
                      
  mysqli_stmt_close($stmt);
} 

if ($email_is == "") {
	$sql = "INSERT INTO author (email, password) VALUES (?, ?)";
  if ($stmt2 = mysqli_prepare($link, $sql)) {
  
  mysqli_stmt_bind_param($stmt2, "ss", $usermail, $password);
  mysqli_stmt_execute($stmt2);
                      
  mysqli_stmt_close($stmt);
} 
} else{
	echo "email  is already taken";
}




mysqli_close($link);

?>