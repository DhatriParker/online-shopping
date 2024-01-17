<?php session_start();
include("header.php");
?>
<div id="container">

<?php
$usr=$_SESSION["uname"];
$cartcnt=$_REQUEST["tcnt"];
$amntttl=$_REQUEST["tamnt"];

include("dbconnect.php");
$rsorder=mysqli_query($con,"select adderess from cust_info where user_name='$usr' ") or die("query error");

$row=mysqli_fetch_array($rsorder);
$x=$row["adderess"];

?>
<div id="subox">
<h3>confirm Your Adderess</h3>
<form action="insertorder.php" method="get">
	<table>
	<input type="hidden" name="txtcnt" value=<?php echo("$cartcnt");?>>
	<input type="hidden" name="txtamnt" value=<?php echo("$amntttl");?>>
	<textarea name="txtsadd"><?php echo("$x");?></textarea>
	<input type="hidden" name="txtcname" value=<?php echo("$usr");?>><br>
	<input type="submit" name="submit">
	<input type="reset" name="reset">
	</table>

</form>
</div>
</div> <!--- end of container-->
<?php
include("footer.php");	
?>