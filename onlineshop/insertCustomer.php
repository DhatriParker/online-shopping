<?php 
   $a=$_REQUEST["txtName"];
   $b=$_REQUEST["txtEmail"];
   $c=$_REQUEST["txtContact"];
   $d=$_REQUEST["txtAddress"];
   $e=$_REQUEST["txtUserName"];
   $f=$_REQUEST["txtPassword"];

   include("dbconnect.php");

   $rsCust=mysqli_query($con,"select * from cust_info where user_name='$e'") or die("Query Error");
   if(mysqli_num_rows($rsCust)==1)
   {
       header("location:customerForm.php?resmsg=1");
   }
   else 
   {
      $sql="insert into cust_info(name,email,contact,adderess,user_name,pass,user_type,reg_date) values('$a','$b','$c','$d','$e','$f','user',now())";
      mysqli_query($con,$sql) or die("Query Error 2");
      header("location:customerForm.php?resmsg=2");
     
   }
?>