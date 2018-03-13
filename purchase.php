<?php include_once('header.php'); ?>
<link rel="stylesheet" href="css/jquery-ui.css">
  <script>
  $( function() {
    //$( "#datepicker" ).datepicker();
    
  } );
  </script>
<style>
#dataTable_length, #dataTable_filter {
  margin: 0;display: none;
}
</style>
<?php 
$sales_person = array('Select','abdullah','sulaiman','test'); 
 ?>
 
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
 


  <form class="form-horizontal" role="form">

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Store Products purchase Details</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="product_details_table" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><a href="#"><img src="/css/images/plus_tiny.png" id="add_coloumn"></a><br /><a href="#"><img src="/css/images/minus_tiny.png" id="remove_coloumn" style="display:none;"></a></th>
                  <th>Product Name</th>
                  <th>Product ID</th>
                  <th>Quantity</th>
                  <th>No of Piece</th>
                  <th>Date</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>&nbsp;</th>
                  <th>Product Name</th>
                  <th>Product ID</th>
                  <th>Quantity</th>
                  <th>No of Piece</th>
                  <th>Date</th>
                  
                </tr>
              </tfoot>
              <tbody>
                
              </tbody>
            </table>
            <div class="col-sm-offset-2 col-sm-8">
             <button type="button" id="prod_details_submit" name="prod_details_submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" id="prod_details_cancel" name="prod_details_cancel" >Cancel</button>
           </div>
          </div>
        </div>
      </div>
    </div>



     
  </form>

<br />
       </div>
 
    </div>
 <?php include_once('footer.php'); ?>  
