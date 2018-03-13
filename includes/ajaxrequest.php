<?php

 include_once 'db.php'; 
  error_reporting(E_ALL);
ini_set('display_errors', 1);


 if($_POST['addprdsubmit'] == 1){
 	$prdname = trim(mysqli_real_escape_string($db_con, $_POST['prdname']));

 	$created_date = date('Y-m-d');
 	$sql = "select prdname from products where prdname = '".$prdname."'";
 	$result = mysqli_query($db_con, $sql);
 	//echo mysqli_num_rows($result);
 	//exit;
 	if (mysqli_num_rows($result) == 0) {
	 	$sql = "insert into products (prdname,created_date) values ('".$prdname."','".$created_date."')";
		if (mysqli_query($db_con, $sql) === TRUE) {
			echo "Product Inserted successfully";
		}else {
		    echo "error while inserting product please try again later";
		}
	} else {
		echo "Product Already Exists, Please choose another name";
	}
      
}
 mysqli_close($db_con);
?>
