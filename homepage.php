
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  body {
  
    background: url("img/two.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  
}
</style>
  </head>

  <body>
      <?php include("includes/mdnload.php"); ?>
    
      <?php include("includes/header1.php"); ?>
  



  <!-- <h2>Smart Farming</h2> -->
  
       <div class="img.map">
        
  <img class="menuimg" src="images/pic.png" alt="menu" usemap="#menumap" hidefocus="true" align="center" width="50%" height="30px">
  <map name="menumap">
    <area shape="circle" coords="290,160,100" href="problems.php" title="I Have a Problem">
    <area shape="circle" coords="500,160,100" href="sellharvest.php" title="Sell Your Harvest">
    <area shape="circle" coords="170,300,100" href="watering.php" title="Water Your Farm">
    <area shape="circle" coords="550,300,100" href="buyitems.php" title="Buy Items">

</map>
</div>

</center>
 

  

      

</body>

  <?php include("includes/footer.php"); ?>
</html>
