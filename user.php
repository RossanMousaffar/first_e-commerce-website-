<?php
session_start();
  $con=mysql_connect("localhost","root","");
  mysql_select_db("electronics",$con);
  if(!$con)
  {
   die('could not connect'. mysql_error());
  }

if($_REQUEST['action']=="select")
{
 $_SESSION['SID']=$_REQUEST['SID'];
 $result=mysql_query("SELECT *FROM user WHERE UserID=".$_SESSION['SID']."");
 $row=mysql_fetch_array($result);
 }

 if (isset($_POST['update']))
  {
    
    $Fname=$_POST['FirstName'];
	$Lname=$_POST['LastName'];
	$gender=$_POST['Gender'];
    $dateofbirth=$_POST['DateOfBirth'];
	$address=$_POST['LocalAddress'];
	$country=$_POST['Country'];
	$username=$_POST['Username'];
	$password=$_POST['Password']; 
	       
   
	$result=mysql_query("UPDATE user SET FirstName = '".$Fname."', LastName='".$Lname."',  Gender='".$gender."',DateOfBirth ='".$dateofbirth."', LocalAddress='".$address."', Country='".$country."', Username='".$username."', Password='".$password."' WHERE UserID=".$_SESSION['SID']."");
   }



if (isset($_POST['delete']))
{ 
    $LastName= $_POST['LastName'];
	$result=mysql_query("DELETE FROM user WHERE LastName='".$LastName."'");
}



?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User</title>
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
<form name="form1" id="form1" action="" method="post">
<form id="form1" name="form1" method="REQUEST" action="">
<div class="banner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div class="nav"><a href="AdminCust.php">Customer Information </a>| <a href="catalogue/home.php">Logout</a></div>
<div class="picture1"><img src="catalogue/pictures/Canon-Eos-7d-High-Zzom-Camera-Hd-Screen-Background.jpg" width="634" height="634" /></div>
<div class="picture2">
  <p>
<?php 
echo "<table border=0 style='color:white'>";
echo "<tr>";
echo "<td>First Name</td>";
echo "<td><input type='text' name='FirstName' value='".$row['FirstName']."'/></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Last Name</td>";
echo "<td><input type='text' name='LastName' value='".$row['LastName']."'/></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Gender</td>";
echo "<td><input type='text' name='Gender' id='Gender' value='".$row['Gender']."'/></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Date Of Birth</td>";
echo "<td><input type='date' name='DateOfBirth' id='date' value='".$row['DateOfBirth']."'/></td>";
echo "</tr>";
echo "<tr>";
echo "<td>LocalAddress</td>";
echo "<td><input type='text' name='LocalAddress' id='address' value='".$row['LocalAddress']."'/></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Country</td>
            <td><label for='country'></label>
              <select name='Country' id='country'>
                <option>Mauritius</option>
                <option>Agalega</option>
                <option>England</option>
                <option>France</option>
                <option>America</option>
                <option>India</option>
                <option>Italy</option>
                <option>Canada</option>
              </select></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Username</td>";
echo "<td><input type='text' name='Username' id='username' value='".$row['Username']."'/></td>";
echo "</tr>";
echo "<td>Password</td>";
echo "<td><input type='password' name='Password' id='password' value='".$row['Password']."'/></td>";
echo "</tr>";

echo "<tr>";
echo "<td></td>";
echo "<td><input type='submit' name='update' value='Update'/>
<input type='submit' name='delete' value='Delete'/></td>";
echo "</tr>";
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