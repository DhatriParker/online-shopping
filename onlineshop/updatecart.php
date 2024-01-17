<?php session_start();
 $a=$_REQUEST["cartid"];
 $b=$_REQUEST["txtqty"];

 include("dbconnect.php");
 mysqli_query($con,"update cart_info set prod_qty='$b' where cart_id='$a'") or die("query error");
 header("location:displaycartfororder.php");
?>