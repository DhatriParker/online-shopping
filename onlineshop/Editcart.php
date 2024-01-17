<?php session_start();
include("header.php");
$a=$_REQUEST["pid"];
$b=$_REQUEST["quantity"];
?>
<div id="container">
	<div class="productqty">
<h3>Enter Product Quantity</h3>
<form method="get" action="updatecart.php">
	<input type="text" name="txtqty" value="<?php echo($b);?>"> <br>
	<input type="hidden" name="cartid" value="<?php echo($a); ?>">
	<input type="submit" value ="submit">
</form>
	</div>
</div> <!--- end of container-->
<?php
include("footer.php");	
?>