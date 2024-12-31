<?php
session_start();
if (!isset($_SESSION['id'])){
	header("location:login.html");
}
else
{
	$userid=$_SESSION['id'];
	$username1=$_SESSION['adname'];
}
?>
<!DOCTYPE html>
<head>
<title>Admin Homepage</title>

<link rel="stylesheet" href="css/header_navigationbar.css" />
</head>
<style>
table, th, td {
    border: 2px solid #050119;
    border-collapse: collapse;
	font-size: 20px;
	width : 900px;
	text-align: center;
}
</style>
<?php
include_once"connect_database.php";
include'setting/adminpage_navigation.php';
?>

<body><center>
<h1 style="padding-left:100px"> List Of Admins </h1></center>
<br>
<table align="center">
<tr>
	<th> Serial NO </th>
	<th> Admin ID </th>
	<th> Alumni Name</th>
</tr>
<?php
$sqlshowAWA= "SELECT adminmember.ad_id, adminmember.ad_fullname FROM adminmember";
$resultAWA = $conn->query($sqlshowAWA);
$no = 1;

while ($row = mysqli_fetch_assoc($resultAWA))
{
	echo "<tr>";
	echo "<td>" . $no. "</td>";
	echo "<td>" . $row['ad_id']. "</td>";
	echo "<td>" . $row['ad_fullname']. "</td>";
	$no++;
}
?>
</table></body>
</html>
