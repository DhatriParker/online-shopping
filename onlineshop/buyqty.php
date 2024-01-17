<?php session_start();
include("header.php");
?>
<div id="container">
	<div class="productqty">
<h3>Enter Product Quantity</h3>
<form method="get" action="ProductInsertCart.php">
	<input type="text" name="txtqty"><br>
	<input type="submit" value ="submit">
</form>
	</div>
</div> <!--- end of container-->
<?php
include("footer.php");	
?>