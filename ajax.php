<?php include_once('header.php'); ?>
  <?php include_once('footer.php'); ?>
  rrrrrrrrrrrr
<script>
	var  formData = "instoresale=1&name=ravi&age=31";
	alert('$$$4');
$.ajax({
    url : "/includes1/ajaxrequest.php",
    type: "POST",
    data : formData,
    success: function(res)
    {
      alert(res);
    },
    error: function (jqXHR, textStatus, errorThrown)
    {

    },
});
</script>
<?php
?>
