<?php session_start();
if(isset($_SESSION["uname"]))
{
  include("header.php");
?>
<div id="container">
  <div id="parentContainer">
    <div id="leftChildAdmin">
      <?php 
        include("adminMenu.php");
      ?>

    </div>  <!--end of left child--> 
    <div id="rightChildAdmin">
    <div class="Myform">
  <?php 
     if(isset($_REQUEST["resmsg"]))
     {
       echo("<div id='resmessage'>");
        if($_REQUEST["resmsg"]==1)
        {
           echo("Categroy inserted successfuly.");
        }
        else if($_REQUEST["resmsg"]==2)
        {
          echo("Congratulations...Category has been inserted.");
        }

       echo("</div>");
     }
  ?>
  <div>
   <form method="post" enctype="multipart/form-data" action="insertCategory.php">
        <label>Enter Category Name</label>
        <input type="text" name="txtName">
        <label>Enter Category Display Name</label>
        <input type="text" name="txtDname">
        <label>choose category image</label>
        <input type="file" name="flImage">
        <label>choose category type</label>
         <select name="cmbType">
          <option>Primary</option>
          <option>Secondary</option>
         </select>
         <label>choose parent category</label>
         <select name="cmbParent">
          <option value="0">Choose Parent Name Here</option>
          <?php 
              include("dbconnect.php");
              $rscat=mysqli_query($con,"select cat_id,cat_name from category_info order by cat_name");
              while($row=mysqli_fetch_array($rscat))
              {
                $id=$row[0];
                 echo("<option value='$id'>");
                  echo($row["cat_name"]);
                 echo("</option>");
              }
          ?>
          
         </select>
        
         <br>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
   </form>
  </div>
</div><!--end of myForm-->


    </div>  <!--end of rightChild--> 


  </div><!--end of parentcontainer--> 

</div>
<!--end of container--> 
<?php 
   include("footer.php");
?>

<?php 
}
else 
{
  header("location:loginForm.php");
}
?>