<?php 
   $a=$_REQUEST["txtName"];
   $b=$_REQUEST["txtPrice"];
   $c=$_FILES["flImage"];
   $d=$_REQUEST["cmbParent"];
   $e=$_REQUEST["txtPdetail"];
   $f=$_REQUEST["txtdiscount"];
   
   $img=$c["name"];

   include("dbconnect.php");
   
   $tm=time();   

  $newimg=$tm . "_" .$img; 
  move_uploaded_file($c["tmp_name"],".//collection//$newimg"); 

   $rsprod=mysqli_query($con,"insert into product_info(prod_name, prod_price, prod_image_path, category_parent_id, prod_detail, discount, reg_date) values ('$a', '$b', '$newimg', '$d', '$e','$f' , now())") or die("Query Error");
      header("location:productForm.php?resmsg=1");

?>