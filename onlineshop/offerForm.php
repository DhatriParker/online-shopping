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
           echo("Product inserted successfuly.");
        }
        else if($_REQUEST["resmsg"]==2)
        {
          echo("offer insert successfuly.");
        }

       echo("</div>");
     }
  ?>
    		<div>
    		<form method="get" action="insertoffer.php">
    		<label>enter offer name</label>
    		<input type="text" name="txtoffer">
    		<label>choose offer start date</label>
    		<input type="date" name="txtoffsrtdate">
			<label>choose offer end date</label>
    		<input type="date" name="txtoffenddate">
    		<label>choose category</label>
         	<select name="cmbParent">
         	 <option value="0">Choose category name</option>
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

    		<label>enter offer discount in %</label>
    		<input type="text" name="txtdis">
    		<input type="submit" value="submit">
    		<input type="reset" name="cancel">
    		
    	</form>
    	</div> 
    	</div><!--end of myform--->
    </div>  <!--end of rightChild--> 


  </div><!--end of parentcontainer--> 
	
</div> <!--- end of container-->
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