<?php session_start();
 $_SESSION["price"]=$_REQUEST["pdprice"];
 $_SESSION["prodid"]=$_REQUEST["pdid"];
include("header.php");
?>
<div id="container">

	<?php
	    if($_SESSION["utype"]=="user")

		{
			header("location:buyqty.php");
		}
		
		else
		{
			header("location:newloginform.php");
		}
	?>
</div> <!--- end of container-->
<?php
include("footer.php");	
?>

