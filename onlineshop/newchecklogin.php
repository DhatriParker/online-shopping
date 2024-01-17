<?php @session_start();
 $a=$_REQUEST["txtUser"];
 $b=$_REQUEST["txtPass"];
 include("dbconnect.php");

   $rsCust=mysqli_query($con,"select * from cust_info where user_name='$a'") or die("Query Error");
   if(mysqli_num_rows($rsCust)==1)
   {
       $row=mysqli_fetch_array($rsCust);
       if($row["pass"]==$b)
       {
           if($row["user_type"]=="admin")
           {
            $_SESSION["uname"]=$a;
            $_SESSION["utype"]="admin";
            header("location:adminDashboard.php");
           }
           else 
           {
            $_SESSION["uname"]=$a;
            $_SESSION["utype"]="user";

            header("location:buyqty.php");
           }
       }
       else 
       {
        header("location:newloginform.php?resmsg=2");    
       }
   }
   else
   {
    header("location:newloginform.php?resmsg=1");
   } 
   

?>