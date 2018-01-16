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



<div class="container" style= "padding-top: 60px";>
  <div class="row form-group">
<?php

//<!-- load image -->

$sql = "SELECT title FROM photo";
$sqlComent = "SELECT comvalue, idauthor FROM comments";
$result = mysqli_query($link,$sql);
$resultComent = mysqli_query($link, $sqlComent);
$i = 1;

while ($row = mysqli_fetch_array($result)) {
  $image = $row['title'];
  $image_src = "php/image/".$image;
  $i++;

  for ($i=0; $i < ; $i++) { 
    $rowComent = mysqli_fetch_array($resultComent);
  }
  

?>

    <div class="col-md-6 col-sm-12 co-xs-12">
      <div class="panel panel-default">
               <div class="panel-image">
                    <img src="<?php echo $image_src ?>" class="panel-image-preview" />
                    <label for="toggle-1"></label>
               </div>

               <input type="checkbox" id="toggle-1" class="panel-image-toggle">

                <div class="panel-body">
                    <h4>Comments</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>

                <?php if(isset($_SESSION['category'])) { ?>
                  <form>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Coment</label>
                         <input type="text" class="form-control" id="inputPassword2" placeholder="enter comment">
                    </div>
                   <button type="submit" class="btn btn-primary mb-2">Confirm Coment</button>
                  </form>
                  <?php  }  ?>

                </div>
                <div class="panel-footer text-center">

                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                </div>

       </div>
    </div>
<?php
}

?>
</div>

</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/main.js"></script> 

</body>
</html>