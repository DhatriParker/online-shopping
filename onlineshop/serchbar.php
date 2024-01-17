<?php
include("header.php");
$a=$_REQUEST["txtSearch"];
?>	
<div id="container">
  <div id="homeMenu">
    <a href="news.php">News</a>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="customerform.php">New User</a>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="loginform.php">Login</a>
    
  </div> <!--end of home menu-->
  <div id="indexCategoryList">
    <?php 
      if(isset($_REQUEST["cid"]))
      {
           $prid=$_REQUEST["cid"];
      }
      else 
      {
          $prid=0;
      }
      
         include("dbconnect.php");
         $rsCat=mysqli_query($con,"select * from category_info where cat_dname like '%".$a."%' ");
         while($row=mysqli_fetch_array($rsCat))
         {
            
          $id=$row["cat_id"];
            echo("<div class='category'>");
            echo("<a href='index.php?cid=$id'>");
            echo($row["cat_dname"]."<br><br>");
            $img=$row["image_path"];
            echo("<img src='.//collection//$img' width='100' height='100'>");

            echo("</a>");
            
            echo("</div>");
         }
    ?>
  </div><!--end of indexCategoryList-->

  
  <div id="indexProductList">
    <?php 
      if(isset($_REQUEST["cid"]))
      {
           $prid=$_REQUEST["cid"];
      }
      else 
      {
          $prid=0;
      }
      
         include("dbconnect.php");
         $psCat=mysqli_query($con,"select * from product_info where prod_name like '%".$a."%'order by prod_name");
         while($row=mysqli_fetch_array($psCat))
         {
            
          $pid=$row["prod_id"];
            echo("<div class='product'>");
            echo($row["prod_name"]."<br><br>");
            $img1=$row["prod_image_path"];
            echo("<img src='.//collection//$img1' width='100' height='100'>");
            echo "<br>";
            
            echo("Price Rs-<s>".$row['prod_price']."</s><br>");
            
            echo("Discount- ".$row['discount']."% <br>");
            $disc=$row['prod_price']-(($row['prod_price']*$row['discount'])/100);
            echo("Final Price-".$disc."<br>");

            echo("Product Details-".$row['prod_detail']."<br>");
            echo("<div id='buy'><a href='buy.php?pdprice=$disc&pdid=$pid'>Buy Now</a></div>");
            
            echo("</div>");
         }
    ?>
  </div><!--end of indexProductList-->
</div> <!--- end of container-->
<?php
include("footer.php");  
?>

