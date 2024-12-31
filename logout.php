<?php
// logout.php
session_start();
session_destroy();
echo "<br /><br />Logout successful. Back to main page in 3 seconds";
header("refresh:3;url=index.php");
?>
<!DOCTYPE html>
<head>
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/logout.css" />
<body>

</body>
</html>
