<?php @session_start(); 

   unset($_SESSION["uname"]);
   unset($_SESSION["utype"]);
   session_destroy();

   header("location:index.php");

?>

<?php @session_start();
   unset($_SESSION["uname"]);
   unset($_SESSION["utype"]);
   session_destroy();

   header("location:index.php");
   
?>