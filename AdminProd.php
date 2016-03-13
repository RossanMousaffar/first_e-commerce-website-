<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("electronics",$con);
  if(!$con)
  {
   die('could not connect'. mysql_error());
  }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Products</title>
<style type="text/css">
body {
	background-color: #000;
}
.banner {
	height: 113px;
	width: 1270px;
	background-image: url(catalogue/pictures/banner2.jpg);
}
.nav {
	background-color: #666;
	width: 1270px;
	text-align: right;
	color: #FFF;
	font-family: "Comic Sans MS", cursive;
	display: marker;
}
#form1 .picture1 {
	float: left;
	height: 635px;
	width: 635px;
	margin-top: 10px;
}
#form1 .picture3 {
	height: 323px;
	width: 1270px;
	background-image: url(catalogue/pictures/Untitled-1.jpg);
}
#form1 .footer {
	background-color: #666;
	text-align: center;
}
#form1 .picture2 {
	float: right;
	width: 35%;
	margin-top: 10px;
}

#form1 {
	width: 1270px;
}


#form1 .nav a {
	color: #0FF;
}
</style>

</head>

<body>
<form id="form1" name="form1" method="REQUEST" action="">
<div class="banner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div class="nav"><a href="AdminCust.php">Customer Information</a>| <a href="catalogue/home.php">Logout</a></div>
<div class="picture1">
  <p><img src="catalogue/pictures/6-reasons-to-buy-sonys-playstation-4-console.jpg" width="635" height="614" /></p>
</div>

<div class="picture2">
  <p>
<?php
 
   //run query
  
  $result =mysql_query("SELECT *FROM product");
  
  //create table
  
   echo "<table border='1' style='color:white'><tr><th>ProductName</th><th>Description</th>";
	
 while ($row=mysql_fetch_array ($result))
 {
  echo "<tr>";
  echo "<td><a style='color:#3FF' href='productadmin.php?SID=".$row['productID']."&action=select'>".$row['ProductName']."</a>";
  echo "<td>".$row['Description']."</td>";
 }

echo "</table>";
echo "<br>";



?>

</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>






  <div class="footer">Copyright © 2015 Electronics Store Inc. All Rights Reserved
</div>
</form>

</body>
</html>