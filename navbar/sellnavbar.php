<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/public.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<style>

.topnav-right {
  float: right;
  margin-right:25px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #3CB371;
}

li {
    float: left;
    font-family: Roboto;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul> <!-- navigation bar -->
        <li><a href="homepage.php">HOME</a></li>
        <li><a href="sellharvest.php">ADD PRODUCTS</a></li>
        <li><a href="allproducts.php">ALL PRODUCTS</a></li>
        <li><a href="myproducts.php">MY PRODUCTS</a></li>
        <li><a href="orders.php">ORDER REQUESTS</a></li>

           <ul class="topnav-right">
              <li><a href="index.php">LOG OUT</a></li></ul>
             <div class="navbar2">
                   <ul><li> 
                          <?php
                          session_start();
                          $user= $_SESSION['user'];
                          echo "$user";
                          ?>
                        </li>       
                        <li> <img src="img/logo.png" width="25px" height="25px" > </li>
                    </ul>
                  </div>
                </ul>

</body>
</html>