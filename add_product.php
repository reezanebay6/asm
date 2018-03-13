<?php include_once('header.php'); ?>
<?php 
 // error_reporting(E_ALL);
//ini_set('display_errors', 1);

$products = get_products($db_con);

 ?>
 <link rel="stylesheet" href="css/jquery-ui.css">
  
 
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="container">

        <div class="container" style="max-width:600px;padding:40px 20px;background:#ebeff2">
  <form class="form-horizontal" role="form" method="POST">
     
     <div class="form-group">
        <label for="address" class ="control-label col-sm-3">Product Name:</label>
        <font id="prdnameerror" style="color:red;display:none;" >Enter Product Name</font>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="prdname" name="prdname" placeholder="">
    </div>
      </div>
    
     <div class="col-sm-offset-2 col-sm-8">
       <button type="submit" id="addprdsubmit" name="addprdsubmit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" id="addprdcancel" name="addprdcancel" >Cancel</button>
     </div>
  </form>

</div><br />
<br />
<br />
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>&nbsp;&nbsp;Products List</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="product_table" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Product ID</th>
                  <th>Created Date</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Product Name</th>
                  <th>Product ID</th>
                  <th>Created Date</th>
                  
                </tr>
              </tfoot>
              <tbody>
                <?php for($i=0;$i<count($products['prdname']);$i++) {
                  echo '<tr>';
                  echo '<td>'.$products['prdname'][$i].'</td>';
                  echo '<td>'.$products['prdid'][$i].'</td>';
                  echo '<td>'.$products['created_date'][$i].'</td>';
                  echo '</tr>';
                }
                ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
<br />
       </div>
 
    </div>
  <?php include_once('footer.php'); ?>
  rrrrrrrrrrrr
<script>
  /*$('#addprdsubmit').click(function(){
  var  formData = "instoresale=1&name=ravi&age=31";
  alert('$$$4');
$.ajax({
    url : "/includes/ajaxrequest.php",
    type: "POST",
    data : formData,
     beforeSend: function(){
           
        },
        
        success: function(res){
    
      alert(res);
    },
    error : function (res) {
            
        }
});
});
  $('#addprdsubmit').on('click',function (e){       
   alert("ok");
   var  formData = "instoresale=1&name=ravi&age=31";
   $.ajax({

    url : "/includes/ajaxrequest.php",
    type: "POST",
    data : formData,
     beforeSend: function(){
           
        },
        
        success: function(res){
    
      alert(res);
    },
    error : function (res) {
            
        }
});
 e.preventDefault();
});*/
</script>
<?php
?>
