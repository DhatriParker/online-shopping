<?php
include("dbconnect.php");
$nhead=$_REQUEST["txtnHead"];
$ndetail=$_REQUEST["txtnDetail"];

$rsnew=mysqli_query($con,"insert into news_info(news_head, news_detail) values ('$nhead','$ndetail')")or die("query error");
header("location:newsForm.php?resmsg=1");

?>