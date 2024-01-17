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
           echo("News has been added");
        }
        else if($_REQUEST["resmsg"]==2)
        {
          echo("try once more");
        }

       echo("</div>");
     	}
  ?>
    	<form method="get" action="insertnews.php">
    	<label>Enter News Heading</label>
    	<input type="text" name="txtnHead">
    	<label>Enter News Details</label>
    	<textarea name="txtnDetail" rows="5"></textarea>
    	<input type="submit" value="ok">
    	<input type="reset" value="Cancel">
    	</form>
    	</div>

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