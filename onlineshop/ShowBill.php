<?php session_start();
include("header.php");
?>
<div id="container">

	<div class="showBill">
		<?php
		$usr=$_SESSION["uname"];
		echo("<br>"."<b>"."&nbsp;&nbsp;customer Name &nbsp;&nbsp;- &nbsp;"."$usr"."<br>");

		include("dbconnect.php");
		$rsbill=mysqli_query($con,"select order_id,adderess from order_main where user_name='$usr'");
		$row=mysqli_fetch_array($rsbill);
		echo("&nbsp;&nbsp;Order Number &nbsp;&nbsp;-&nbsp".$row["order_id"]."<br>");
		echo("&nbsp;&nbsp;Shipping Adderess &nbsp;&nbsp;-&nbsp".$row["adderess"]."<br><br>");

		$rsShowBill=mysqli_query($con,"select * from cart_info,product_info where product_info.prod_id=cart_info.prod_id and user_name='$usr'") or die ("query error");
echo("<br><table border=1 align='center'>");
echo("<tr><th>Sno</th><th>Product Name</th><th>Product Image</th><th>Product Price</th><th>Product Quantity</th><th>Total Price</th></tr>");
$cnt=0;
$totalamnt=0;
 while ($row=mysqli_fetch_array($rsShowBill)) 
 {
 	$cnt++;

 	echo("<tr>");

	echo("<td>");
	echo("$cnt");
	echo("</td>");

    echo("<td>");
	echo($row["prod_name"]);
	echo("</td>");

	$img=$row["prod_image_path"];
	echo("<td>");
	echo("<img src='.//collection//$img' width='130' height='100' border='1'>");
	echo("</td>");

	echo("<td>");
	echo($row["prod_price"]);
	echo("</td>");

	echo("<td>");
	echo($row["prod_qty"]);
	echo("</td>");

	echo("<td>");
	$amt=$row["prod_qty"]*$row["prod_price"];
	echo($amt);
	$totalamnt=$totalamnt+$amt;
	echo("</td>");

	$id=$row["cart_id"];

	echo("</tr>");

}
 	echo("<tr>");
 	echo("<td colspan='5'>");
 	echo("<b>Total Amount </b>");
 	echo("</td>");

	echo("<td colspan='1'>");
 	echo("<b>$totalamnt</b>");
 	echo("</td>");

 	echo("</tr>");

	echo("</table>");
	echo("<button onClick='window.print()'>Print</button>");
?>
		
</div> <!--showbill--->

	
</div> <!--- end of container-->
<?php
include("footer.php");	
?>