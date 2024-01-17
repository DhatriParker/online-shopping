<!DOCTYPE html>
<html>
	<body>
		<h1>Employee List</h1>
			<?php
 				$con=mysqli_connect("127.0.0.1","root","");
 				mysqli_select_db($con,"collage");
 				$sql="select count(*) from ofc order by eply";
 				$rsemp=mysqli_query($con,$sql) or die("query error");
 				$row=mysqli_fetch_array($rsemp);
 				$noOfRecordsperPage=5;
 				$totalRecors=$row[0];
 				$totalpages=ceil($totalRecors/$noOfRecordsperPage);
 		
 				for($i=1;$i<=$totalpages;$i++)
 				{
 					echo("<a href='paging.php?pgno=$i'>");
 					echo($i);
 					echo("</a>");	
 					echo("&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;");
 				}
 				if(isset($_REQUEST['pgno']))
 				{
 					$currec=($_REQUEST['pgno']-1)*($noOfRecordsperPage);
 				}
 				else
 				{
 					$currec=0;
 				}


 				$sql1="select * from ofc order by eply limit $currec,$noOfRecordsperPage";
 				$rsempl=mysqli_query($con,$sql1);

 				echo("<table border='1'> <tr><th>employee id</th><th> employee name</th><th>employee manager id</th></tr>");
 				$cnt=$currec;
 				while($row=mysqli_fetch_array($rsempl))
 				{
 				$cnt++;
 				echo("<tr>");
 				echo("<td>");
 				echo($cnt);
 				echo("</td>");
 				echo("<td>");
 				echo($row['eply']);
 				echo("</td>");
 				echo("<td>");
 				echo($row['mngrid']);
 				echo("</td>");
 				echo("</tr>");
 				}
?>


</body>
</html>