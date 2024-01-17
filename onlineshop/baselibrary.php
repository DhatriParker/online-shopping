<?php 
function displayTable($tabname,$delstatus=false)
{
     $con=mysqli_connect("127.0.0.1","root","");
     mysqli_select_db($con,"collage");


     $sql="select * from $tabname";
     $rs=mysqli_query($con,$sql);

     $rc=mysqli_num_rows($rs);
     $cc=mysqli_num_fields($rs);


     


       echo("<table border='1'>");

     echo("<tr><th>Sl. No.</th>"); 
     for($i=0;$i<=$cc-1;$i++)
     {
        echo("<th>");
        $col=mysqli_fetch_field_direct($rs,$i);
        echo($col->name);  
        echo("</th>");
     }
  if($delstatus==true)
  {
     echo("<th>Delete Status</th>");
  }

     echo("</tr>");


   $cnt=0;
   for($i=0;$i<=$rc-1;$i++)
   {
       mysqli_data_seek($rs,$i);
       $row=mysqli_fetch_array($rs);
       
        echo("<tr>");
        echo("<td>");
        echo(++$cnt);
        echo("</td>");
        $id=$row[0];
         for($j=0;$j<=$cc-1;$j++)
         {
            echo("<td>");
            echo($row[$j]);
            echo("</td>");
         }
         if($delstatus==true)
         {
            echo("<td><a href='delRecord.php?did=$id&tab=$tabname'>Delete</a></td>");
         }

         echo("</tr>");
   
    }



     echo("</table>");
  



   
}

displayTable("student",false);

?>