<!DOCTYPE html>
<head>
<title>Update Profile Navigation</title>
<link rel="stylesheet" href="css/header_navigationbar.css" />
</head>
<body> 
  <?php
	echo "Welcome "." ".$alusername;
	?>
  <div class="dropdown-content">

   <button><b><a href="alumni_home.php"><span class="span1">My Profile</span></a></b></button>
    
   <button><b><a href="update_profile.php">Update Profile</a></b></button>
      
   <button><b><a href="search_alumni2.php"><span class="span1">Search Alumni</span></a></b></button>

   <button><b><a href="news.php#events">Events</a></b></button>

   <button><b><a href="logout.php"><span class="span1">Logout</a></b></button>
</div>
</body> 
</html>