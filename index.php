<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['category']) || empty($_SESSION['category'])){
  //header("location: login.php");
  echo "string1";
  //require_once 'php/base.php';
  //exit;
}
//echo $_SESSION['category'];
//require_once 'php/base.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhotoSite </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
    <link rel="stylesheet" href="css/main.css"> 

    <?php 
    //include 'php/main.php'; 
    require_once('php/config.php');
    ?>

</head>
<body>

<!-- Navbar -->
<?php
require_once 'php/footer.php';
?>



<div class="container gal-container" style=padding-top: 60px;>
<?php

//<!-- load image -->

$sql = "SELECT title FROM photo";
$result = mysqli_query($link,$sql);
$i = 1;

while ($row = mysqli_fetch_array($result)) {
  $image = $row['title'];
  $image_src = "php/image/".$image;
  $i++;

?>

    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#<?php echo $i?>">
          <img src="<?php echo $image_src ?>" style="max-width: 300px;" >
        </a>
        <div class="modal fade" id="<?php echo $i?>" tabindex="-<?php echo $i?>" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="<?php echo $image_src ?>">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the first one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}

?>

</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/main.js"></script> 

</body>
</html>