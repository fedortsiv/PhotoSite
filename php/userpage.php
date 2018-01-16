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
//echo $_SESSION['idauthor'];

require_once("config.php");
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
    <link rel="stylesheet" href="/css/main.css"> 

</head>
<body>

<!-- Navbar -->
<!-- Modal -->
<?php
require_once 'footer.php';
?>


<form method="post" action="" enctype='multipart/form-data' style="padding-top: 50px;">
  <input type='file' name='file' />
  <input type="hidden" name='idauthor' value="<?php echo $_SESSION['idauthor'] ?>" />
  <input type='submit' value='Save name' name='but_upload' />
</form>

<!-- Body -->
<?php

//<!-- load image -->
$idauth = $_SESSION['idauthor'];

$sql = "SELECT title FROM photo WHERE idauthor = '$idauth'";
$result = mysqli_query($link,$sql);
$i = 1;

while ($row = mysqli_fetch_array($result)) {
  $image = $row['title'];
  $image_src = "image/".$image;
  $i++;


?>

    <div class="col-md-6 col-sm-12 co-xs-12">
      <div class="panel panel-default">
               <div class="panel-image">
                    <img src="<?php echo $image_src ?>" class="panel-image-preview" />
                    <label for="toggle-1"></label>
               </div>

                <input type="checkbox" id="toggle-1" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>Title of Image</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>

       </div>
    </div>
<?php
}

?>

	<script src="/js/jquery.min.js"></script>
	<script src="/js/popper.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/validator.js"></script>
	<script src="/js/main.js"></script> 

</body>
</html>