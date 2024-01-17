<?php session_start();
$produc_price=$_SESSION["price"];
$product_id=$_SESSION["prodid"];
$usr=$_SESSION["uname"];
$qty=$_REQUEST["txtqty"];
include("header.php");
?>
<div id="container">
	<div id="productbtn">

<?php

include("dbconnect.php");
mysqli_query($con,"insert into cart_info(prod_id, prod_price,prod_qty,user_name) values('$product_id','$produc_price','$qty','$usr')") or die("query error");

echo("<h3>Data succesfully insert into cart</h3> <br>");
echo("<h3>Do you want to add more item in your cart?</h3> <br>");
echo("<a href='index.php'>Yes</a> &nbsp;&nbsp;&nbsp;&nbsp;") ;
echo("<a href='displaycartfororder.php'>NO</a>");

?>
	</div> <!---end of productbtn --->
</div> <!--- end of container-->
<?php
include("footer.php");	
?>