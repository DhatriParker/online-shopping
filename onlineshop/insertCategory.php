<?php 
   $a=$_REQUEST["txtName"];
   $b=$_REQUEST["txtDname"];
   $c=$_FILES["flImage"];
   $d=$_REQUEST["cmbType"];

   if($d=="Primary")
     $e=0;
   else 
      $e=$_REQUEST["cmbParent"];
   
   $img=$c["name"];

   include("dbconnect.php");
   
   $tm=time();  

  $newimg=$tm . "_" .$img; 
  move_uploaded_file($c["tmp_name"],".//collection//$newimg"); 

   $rsCat=mysqli_query($con,"insert into category_info(cat_name, cat_dname, image_path,cat_type,cat_parent_id, reg_date) values ('$a', '$b', '$newimg', '$d', '$e' , now())") or die("Query Error");
      header("location:categoryForm.php?resmsg=1");
     
   
?>