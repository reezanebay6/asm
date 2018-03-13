<?php
  //error_reporting(E_ALL);
//ini_set('display_errors', 1);
   $db_server =  'localhost';
   $db_username =  'root';
   $db_password =  'admin';
   $db_database =  'asmytech';
   $db_con = mysqli_connect($db_server,$db_username,$db_password,$db_database);
   if($db_con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    
}

?>
