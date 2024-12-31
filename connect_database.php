<!DOCTYPE html>
<head>
<title>Database Connection</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = FALSE;
$dbname = "we_miniproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
</body>
</html>
