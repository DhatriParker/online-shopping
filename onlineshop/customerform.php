<?php
include("header.php");
?>
<div id="container">
	<div class="Myform">
	<?php 
     if(isset($_REQUEST["resmsg"]))
     {
       echo("<div id='resmessage'>");
        if($_REQUEST["resmsg"]==1)
        {
           echo("This user name is not available");
        }
        else if($_REQUEST["resmsg"]==2)
        {
          echo("Congratulations...Customer has been inserted.");
        }

       echo("</div>");
     }
  ?>
	<div>
	<form method="get" action="insertCustomer.php">
		<label>Enter Your Name</label>
		<input type="text" name="txtName">
		<label>Enter Your Email</label>
		<input type="text" name="txtEmail">
		<label>Enter Your contact</label>
		<input type="text" name="txtContact">
		<label>Enter Your Address</label>
		<textarea name="txtAddress" rows="5"></textarea>
		<label>Enter User Name</label>
		<input type="text" name="txtUserName">
		<label>Enter Password</label>
		<input type="text" name="txtPassword">
		<br>
		<input type="submit" name="ok">
		<input type="reset" name="cancel">

	</form>
    </div>
</div> <!--end of Myform-->

</div> <!--- end of container-->
<?php
include("footer.php");	
?>