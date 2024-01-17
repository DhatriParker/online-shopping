<?php 
  include("header.php");
?>
<div id="container">
<div class="Myform">
  <?php 
     if(isset($_REQUEST["resmsg"]))
     {
       echo("<div id='resmessage'>");
        if($_REQUEST["resmsg"]==1)
        {
           echo("Wrong User Name");
        }
        else if($_REQUEST["resmsg"]==2)
        {
          echo("Wrong Password");
        }

       echo("</div>");
     }
  ?>

  <div>
   <form method="get" action="checkLogin.php">
       
        <label>Enter your user name</label>
        <input type="text" name="txtUser">
        <label>Enter your password</label>
        <input type="password" name="txtPass">
        <br>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">

       


   </form>
  </div>
</div><!--end of myForm-->

</div>
<!--end of container--> 
<?php 
   include("footer.php");
?>
