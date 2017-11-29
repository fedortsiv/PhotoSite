<?php

define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','root');
define('DBNAME','photosite');

$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>