<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="main">
		<div id="header">
			<div id="leftlogo">
			<a href="index.php"><img src="./img/logo.jpg"></a>
			</div> <!---end of  leftlogo--->
		<div id="center">
			<a href="index.php"><h1>Online Shop</h1></a>
			<h3>Online shopping is best way compaire to another </h3>
		<?php 
          if(isset($_SESSION["uname"]))
          {
            echo("<div id='userinfo'>");
            echo("Welcome ". $_SESSION["uname"]. " , ");
            echo("<a href='logout.php'>Logout</a>");
            echo("</div>");
          }
        ?>
		</div> <!---end of  center--->
		<div id="rightlogo">
			<a href="index.php"><img src="./img/cart.png"></a>
		</div> <!---end of  rightlogo--->
		<div id="searchbar">
			<form method="get" action="searchbar.php">
				<table>
					<tr><td>Enter Your Criteria</td> <td><input type="search" name="txtSearch" placeholder="search here..."></td><td><input type="submit" value="ok"></td></tr>
				</table>
			</form>
		</div>
		</div> <!-- end of header-->
