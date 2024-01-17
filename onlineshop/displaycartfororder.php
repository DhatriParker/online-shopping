<?php session_start();
include("header.php");
?>
<div id="container">
<?php 
$usr=$_SESSION["uname"];
include("dbconnect.php");
$rscart=mysqli_query($con,"select * from cart_info,product_info where product_info.prod_id=cart_info.prod_id and user_name='$usr'") or die ("query error");
echo("<br><table border=1 align='center'>");
echo("<tr><th>Sno</th><th>Product Name</th><th>Product Image</th><th>Product Price</th><th>Product Quantity</th><th>User Name </th><th>Total Price</th><th>Edit</th><th>Delete</th></tr>");
$cnt=0;
$totalamnt=0;
 while ($row=mysqli_fetch_array($rscart)) 
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
echo($row["user_name"]);
echo("</td>");

echo("<td>");
$amt=$row["prod_qty"]*$row["prod_price"];
echo($amt);
$totalamnt=$totalamnt+$amt;
echo("</td>");

$id=$row["cart_id"];
echo("<td>");
$pqty=$row["prod_qty"];
echo("<a href='Editcart.php?pid=$id& quantity=$pqty'>Edit</a>");
echo("</td>");

echo("<td>");
echo("<a href=Deletecart.php?pid=$id>Delete</a>");
echo("</td>");
echo("</tr>");

}
 echo("<tr>");
 echo("<td colspan='6'>");
 echo("<b>Total Amount </b>");
 echo("</td>");

echo("<td colspan='4'>");
 echo("<b>$totalamnt</b>");
 echo("</td>");

 echo("</tr>");

echo("</table>");
?>
<?php
echo("<div class='prodbuybtn'>");
 echo("<a href='editaddress.php?tcnt=$cnt&tamnt=$totalamnt'><h3>Place Order</h3></a>
</div>");
?>
</div> <!---end of container-->

<?php
include("footer.php");	
?>