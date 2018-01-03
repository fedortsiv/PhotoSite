<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['category']) || empty($_SESSION['category'])){
  //header("location: login.php");
  echo "string1";
  require_once 'php/base.php';
  //exit;
}
echo $_SESSION['category'];

//require_once("config.php");
require_once("uploadimg.php");
//require_once 'php/base.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhotoSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
    <link rel="stylesheet" href="css/main.css"> 

</head>
<body>

<!-- Navbar -->
<!-- Modal -->
<?php
require_once 'footer.php';
?>


<form method="post" action="" enctype='multipart/form-data' style="padding-top: 50px;">
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
</form>

<!-- Body -->




	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/main.js"></script> 

</body>
</html>