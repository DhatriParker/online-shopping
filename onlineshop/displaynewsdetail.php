<?php
include("header.php");
?>
<div id="container">
	<div id="displaynews">
<?php
include("dbconnect.php");

$rsnews=mysqli_query($con,"select * from news_info");
$cnt=0;
echo ("<br><table border='1' align='center'>");
  echo ("<tr><th>Sno</th><th >News Details</th></tr>");
while($row=mysqli_fetch_array($rsnews))
{$cnt++;

	echo("<tr align='center'>");
	echo("<td width='100'>");
	echo ("$cnt");
	echo("</td>");

	echo("<td width='600'>");
	echo ($row["news_detail"]);
	echo("</td>");
	echo("</tr>");
}
echo("</table>")
?>
	</div>
</div> <!--- end of container-->
<?php
include("footer.php");	
?>