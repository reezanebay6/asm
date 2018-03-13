$(document).ready(function() {
  $('#salesubmit').click(function(){
    var prdid = $('#prdid').val();
    var prdname = $('#prdname').val();
    var price = $('#price').val();
    var quantity = $('#quantity').val();
    var datepicker = $('#datepicker').val();
    var formerror = 0;

    if(prdid.length <= 0){
      $('#prdiderror').show();
      formerror = 1;
    } else {
      $('#prdiderror').hide();
      formerror = 0;
    }

    if(prdname.length <= 0){
      $('#prdnameerror').show();
      formerror = 1;
    } else {
      $('#prdnameerror').hide();
      formerror = 0;
    }

    if(price.length <= 0){
      $('#priceerror').show();
      formerror = 1;
    } else {
      var decimal=  /^[0-9]*\.?[0-9]*$/;
      if(price.match(decimal)) 
      { 
        $('#priceerror').hide();
        formerror = 0;
      }
      else
      { 
        $('#priceerror').show();
        formerror = 1;
      }
      
    }

    if(quantity.length <= 0){
      $('#quantityerror').show();
      formerror = 1;
    } else {
      $('#quantityerror').hide();
      formerror = 0;
    }

    if(datepicker.length <= 0){
      $('#dateerror').show();
      formerror = 1;
    } else {
      $('#dateerror').hide();
      formerror = 0;
    }


    if(formerror == 1){
      return false;
    } else {
        $.ajax({
        type: "POST",
        url: 'actionintegrate.php',   
        data: {"prdid": "status", "name": "name"},
        success: function (result) {
             alert(result);
        }
      });
    }
    
});

   $('#salesexecsubmit').click(function(){
    var prdid = $('#prdid').val();
    var prdname = $('#prdname').val();
    var quantity = $('#quantity').val();
    var datepicker = $('#datepicker').val();
    var sales_person = $('#sales_person').val();

    var formerror = 0;

    if(prdid.length <= 0){
      $('#prdiderror').show();
      formerror = 1;
    } else {
      $('#prdiderror').hide();
      formerror = 0;
    }

    if(prdname.length <= 0){
      $('#prdnameerror').show();
      formerror = 1;
    } else {
      $('#prdnameerror').hide();
      formerror = 0;
    }

    if(quantity.length <= 0){
      $('#quantityerror').show();
      formerror = 1;
    } else {
      $('#quantityerror').hide();
      formerror = 0;
    }
    if (sales_person == 'Select') {
        formerror = 1;
        $('#sales_personerror').show();
      } else {
      $('#sales_personerror').hide();
      formerror = 0;
    }

    if(datepicker.length <= 0){
      $('#dateerror').show();
      formerror = 1;
    } else {
      $('#dateerror').hide();
      formerror = 0;
    }


    if(formerror == 1){
      return false;
    } else {
        $.ajax({
        type: "POST",
        url: 'actionintegrate.php',   
        data: {"prdid": "status", "name": "name"},
        success: function (result) {
             alert(result);
        }
      });
    }
    
});
   $('#addprdsubmit').on('click',function (e){
    var  data = '';
    var prdname = $('#prdname').val();
   
    var formerror = 0;

    if(prdname.length <= 0){
      $('#prdnameerror').show();
      formerror = 1;
    } else {
      $('#prdnameerror').hide();
      formerror = 0;
    }


    if(formerror == 1){
      return false;
    } else {
      data = 'addprdsubmit=1'+'&prdname='+prdname;;
        $.ajax({
        type: "POST",
        url: '/includes/ajaxrequest.php',   
        data: data,
        success: function (result) {
          $('#prdname').val('');
             alert(result);
            document.location.reload(true);

        }
      });
    }
    e.preventDefault();
  });
   
   $('#add_coloumn').click(function () {
    var fullDate = new Date();
    var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) :(fullDate.getMonth()+1);
  
    var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
  
    var table = $(this).closest('table');
    var rowCount = $('#product_details_table tr').length;
    //rowCount = rowCount + 1;
  //  alert(rowCount);
    //$('#datepicker').attr('id','datepicker'+rowCount);
        table.append('<tr><td>&nbsp;</td><td><input type="text" class="form-control" id="prdid'+rowCount+'" name="prdid'+rowCount+'" placeholder=""><font id="prdiderror'+rowCount+'" style="color:red;display:none;" >Enter Product ID</font></td><td><input type="text" class="form-control" id="prdname'+rowCount+'" name="prdname'+rowCount+'" placeholder=""><font id="prdnameerror'+rowCount+'" style="color:red;display:none;" >Enter Product Name</font></td><td><input type="text" class="form-control" id="quantity'+rowCount+'" name="quantity'+rowCount+'" placeholder=""><font id="quantityerror'+rowCount+'" style="color:red;display:none;" >Enter Quantity</font></td><td><input type="text" class="form-control" id="piece'+rowCount+'" name="piece'+rowCount+'" placeholder=""><font id="pieceerror'+rowCount+'" style="color:red;display:none;" >Enter No of piece</font></td><td><input type="text" class="form-control" id="datepicker'+rowCount+'" name="datepicker'+rowCount+'" placeholder="" value='+currentDate+'> <font id="dateerror'+rowCount+'" style="color:red;display:none;" >Enter Date</font></td></tr>');

        
         $('#remove_coloumn').show();
    
});
$('#remove_coloumn').click(function () {
    var table = $(this).closest('table');
    table.find('input:text').last().closest('tr').remove();
    
});

  $('#prod_details_submit').click(function(){
    var rowCount = $('#product_details_table tr').length;
    var formerror = 0;
    alert(rowCount);
    //rowCount = rowCount - 1;
    var prdid = prdname = quantity = datepicker = [];
    for(var i=2; i < rowCount;i++) {
      if(i != 1 ){
//alert(i);
        prdid[i] = $('#prdid'+i).val();
        prdname[i] = $('#prdname'+i).val();
        quantity[i]= $('#quantity'+i).val();
        datepicker[i] = $('#datepicker'+i).val();
        //var sales_person = $('#sales_person').val();

        

        if(prdid[i].length <= 0){
          $('#prdiderror'+i).show();
          formerror = 1;
        } else {
          $('#prdiderror'+i).hide();
          formerror = 0;
        }

        if(prdname[i].length <= 0){
          $('#prdnameerror'+i).show();
          formerror = 1;
        } else {
          $('#prdnameerror'+i).hide();
          formerror = 0;
        }

        if(quantity[i].length <= 0){
          $('#quantityerror'+i).show();
          formerror = 1;
        } else {
          $('#quantityerror'+i).hide();
          formerror = 0;
        }
        

        if(datepicker[i].length <= 0){
          $('#dateerror'+i).show();
          formerror = 1;
        } else {
          $('#dateerror'+i).hide();
          formerror = 0;
        } 
      }
    }
    


    if(formerror == 1){
      return false;
    } else {
        $.ajax({
        type: "POST",
        url: 'ajaxrequest.php',   
        data: {"prdid": "status", "name": "name"},
        success: function (result) {
             //alert(result);
        }
      });
    }
    
  });

  
});