<?php 
$offname=$_REQUEST["txtoffer"];
$offsdate=$_REQUEST["txtoffsrtdate"];
$offedate=$_REQUEST["txtoffenddate"];
$offcat=$_REQUEST["cmbParent"];
$offdisc=$_REQUEST["txtdis"];

$tempdt=strtotime("1 day",strtotime($txtoffenddate));
$newdate=date('y-m-d',$tempdt);


include("dbconnect.php");
mysqli_query($con,"insert into offer_info(offer_name,offer_start_date,offer_end_date,offer_category_name,offer_discount,reg_date) values('$offname','$offsdate','$newdate','$offcat','$offdisc',now())") or die("query error1");

header("location:offerForm.php?resmsg=1");
 
?>