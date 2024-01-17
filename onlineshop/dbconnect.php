<?php 
$con=mysqli_connect("127.0.0.1","root","") or die("connection error");
mysqli_select_db($con,"onlineshop") or die("database selection error");
?>