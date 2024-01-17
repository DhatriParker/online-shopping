<?php session_start();
 $cartcount=$_REQUEST["txtcnt"];
 $tcamnt=$_REQUEST["txtamnt"];
 $ship=$_REQUEST["txtsadd"];
 $usr=$_SESSION["uname"];


 include("dbconnect.php");
 mysqli_query($con,"update cust_info set adderess='$ship' where user_name='$usr'") or die("query error");

 $rscartmain=mysqli_query($con,"select count(*) as x ,sum(prod_price*prod_qty) as y from cart_info where user_name='$usr'") or die("query error 1");
 $row=mysqli_fetch_array($rscartmain);
 $a=$row[0];
 $b=$row[1];
 
 mysqli_query($con,"insert into order_main(user_name,order_cat_qty,total_price,adderess,status,order_date,last_update_date) values('$usr','$a','$b','$ship','initiate',now(),now())") or die("query error 2");
$rsorder=mysqli_query($con,"select max(order_id) from order_main") or die("query error 3");
$row=mysqli_fetch_array($rsorder);
$mid=$row[0];

$rscart=mysqli_query($con,"select * from cart_info where user_name='$usr'") or die("query error 4");
while($row=mysqli_fetch_array($rscart)) 
{
  mysqli_query($con,"insert into order_detail(order_rate,item_id,order_qty,ref_reg_no) values('".$row["prod_price"]."','".$row["prod_id"]."','".$row["prod_qty"]."','$mid')") or die("query error 5");

}
mysqli_query($con,"delete from cart_info where user_name='$usr'") or die ("query error6");
header("location:ShowBill.php");

?>