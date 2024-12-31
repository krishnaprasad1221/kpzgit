<!DOCTYPE html>
<head>
<title>Search Alumni</title>
<link rel="stylesheet" href="css/index.css" />
<?php
session_start();
include_once"connect_database.php";
if (!isset($_SESSION['id'])){
	header("location:login.html");
}
else
{
  $userid=$_SESSION['id'];
  if (strchr("$userid","AD")==true)
	{
    $username1=$_SESSION['adname'];
    
	}
	else
	{	
    $alusername=$_SESSION['adname'];
   
	}
}
?>
<style>
.dropbtn {
    background-color: white;
    color: #red;
    padding: 5px 116px;
    font-size: 15px;
	border: 2px #050119;
    cursor: pointer;
}

input.i1{
padding: 3px 119px;
    font-size: 20px;
}
	
</style>
<body>
<form action="search_result2.php" method="post">
<center><width="450" style="border:hidden;font-size:25px"> Search Via Anyone of the following:</center>
<table width="710" align="center" style="border:2px hidden;" cellspacing="20">
</tr>
<tr>
<th align="left" width="450" style="border:hidden;font-size:18px">Name </th>
<td width="450" style="border:hidden"><input size="45" type="text" value="" name="pid"/></td>
</tr>
<tr>
<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
<td width="450" style="border:hidden;font-size:15px">OR</td>
</tr>
<tr>
<th align="left" width="450" style="border:hidden;font-size:18px">Registration Number </th>
<td width="450" style="border:hidden"><input size="45" type="text" value="" name="aid"/></td>
</tr>
<td colspan=2 align="center" style="border:hidden"><button type="submit" name="addpayment" >Submit</button></td>

<button><b><a href="admin_homepage.php">Search Later</a></b></button>
</tr>
</table>
</form>

</html>
