<?php



if(isset($_POST['upload'])){
 
 $name = $_FILES['file']['name'];
 $target_dir = "upload/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
 if ($stmt = mysqli_prepare($link, "INSERT INTO photo title WHERE name = ?")) {
  
  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);
  

  mysqli_stmt_close($stmt);
} else{
  $success = false;
  $errorMSG = "Trabl with connect to DB";
    }
}
}
/*
  $query = "insert into images(name) values('".$name."')";
  mysqli_query($link,$query);
  echo "string";
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

 }else{
 	echo "trabl";
 }
 }
 */

?>

/*
<?php

$sql = "SELECT title FROM images WHERE id=1";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' >

*/

// <?php 
//
//  while ($row = mysqli_fetch_array($result)) {
//    $image = $row['name'];
//    $image_src = "image/".$image;
//
//    echo "<img src="$image_src" alt="..." class="img-thumbnail">";
//  }
  //<img src="..." alt="..." class="img-thumbnail">
//?>
//