<?php  @session_start();
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