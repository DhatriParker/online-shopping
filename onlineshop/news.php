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
  echo ("<tr><th>Sno</th><th >News Heading</th></tr>");
while($row=mysqli_fetch_array($rsnews))
{$cnt++;
	$nid=$row["0"];
	echo("<tr align='center'>");
	echo("<td width='100'>");
	echo ("$cnt");
	echo("</td>");

	echo("<td width='600'>");
	echo ("<a href='displaynewsdetail.php?nid=$nid'>$row[1]</a>");
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