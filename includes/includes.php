<?php


function get_products($db_con){
	$outputarr = array();
	$sql = "select prdname,prdid,created_date from products";
 	$result = mysqli_query($db_con, $sql);
 	if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               $outputarr['prdname'][] = $row['prdname'];
               $outputarr['prdid'][] = $row['prdid'];
               $outputarr['created_date'][] = $row['created_date'];
            }
         }
         mysqli_close($db_con);
         return $outputarr; 
         
 }


?>
