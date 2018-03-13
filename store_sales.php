<?php include_once('header.php'); ?>
 <link rel="stylesheet" href="css/jquery-ui.css">
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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
  <form class="form-horizontal" role="form">
     <div class="form-group">
        <label for="name" class ="control-label col-sm-3">Product ID:</label>
        <font id="prdiderror" style="color:red;display:none;" >Enter Product ID</font>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="prdid" name="prdid" placeholder="">
    </div>
      </div>
     <div class="form-group">
        <label for="address" class ="control-label col-sm-3">Product Name:</label>
        <font id="prdnameerror" style="color:red;display:none;" >Enter Product Name</font>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="prdname" name="prdname" placeholder="">
    </div>
      </div>
     <div class="form-group">
        <label for="email" class ="control-label col-sm-3">Price:</label>
        <font id="priceerror" style="color:red;display:none;" >Enter correct Price</font>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="price" name="price" placeholder="">
    </div>
      </div>
     <div class="form-group">
        <label for="pwd" class ="control-label col-sm-3">Quantity:</label>
        <font id="quantityerror" style="color:red;display:none;" >Enter Quantity</font>
    <div class="col-sm-8">
       <input type="text" class="form-control" id="quantity" name="quantity" placeholder="">
    </div>
      </div>
       <div class="form-group">
        <label for="pwd" class ="control-label col-sm-3">Date</label>
        <font id="dateerror" style="color:red;display:none;" >Enter Date</font>
    <div class="col-sm-8">
       <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="">
    </div>
      </div>
     <div class="col-sm-offset-2 col-sm-8">
       <button type="submit" id="salesubmit" name="salesubmit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" id="salescancel" name="salescancel" >Cancel</button>
     </div>
  </form>

</div>
<br />
       </div>
 
    </div>
 <?php include_once('footer.php'); ?>  
