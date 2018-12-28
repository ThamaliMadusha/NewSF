<!DOCTYPE html>
<html>
<head>
  <title>Smart Farming</title>
  <link rel="stylesheet" type="text/css" href="css/public.css">
</head>
<body>
<header>
<div class="main">

  <div class="topnav">
    <img src="Images/smatrfarm.png" class="img1">
    <div class="nametxt font7">
      <h1>Smart Farming</h1>  <!-- heading -->
    </div>
  </div>
  <div class="navbar1">
      <ul> <!-- navigation bar -->
        <li><a href="sellharvest.php"> PROFILE </a> </li>
        <li><a href="./allproducts.php"> MY PRODUCTS </a> </li>
        <li><a href="index.php"> LOG OUT </a> </li>
        <li> <?php
  session_start();
  $user= $_SESSION['user'];
  echo "$user";
  ?>
  </li>
      </ul> 
    </div>
</div>
</header>
</body>
</html>
