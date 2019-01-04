<?php require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style> img {
  border-radius: 50%;
}
</style>

    <title>Document</title>
    
</head>
<?php include("navbar/sellnavbar.php"); ?>
<body>
    <!-- navigatioon bar -->
    
<?php
    if (isset($_POST['veg'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='vegetable'");
        showData($res);
    }

    if (isset($_POST['fruits'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='fruits'");
        showData($res);
    }

    if (isset($_POST['tools'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='Agricultural tools'");
        showData($res);
    }

    if (isset($_POST['foods'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='Home made foods'");
        showData($res);
    }

    if (isset($_POST['handi'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='Handicrafts'");
        showData($res);
    }

    if (isset($_POST['other'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='other'");
        showData($res);
    }
                 


    // 
    function showData($r){
        require "connection/connection.php";
        echo "<table style='margin-left:150px;margin-top:50px; border-collapse: separate;
  border-spacing: 50px 50px;'>";
            echo "<tr>";

        

            $i = 0;
            while($row=mysqli_fetch_array($r,MYSQL_ASSOC)){
                $s = $row['sellername'];
                $res1=mysqli_query($link,"SELECT name, contact_no FROM users WHERE name = '$s'");
                $row2 = mysqli_fetch_assoc($res1);
                $i= $i+1;
                echo"<td>";
                ?>
                <div class="container">
                <div class="row">
                  <div class="col-md-4">
                <img src="<?php echo $row["image"]; ?>" style="width:250px; height:250px;" >   
                     </div>
                </div>

                <?php

                echo"<br>"."<b>"."Product Name : "." </b>".$row["iname"];
                echo"<br>"."<b>"."Total Quantity: "." </b>".$row["quantity"];
                echo "<br>"."<b>"."Unit Price: "." </b>".$row["price"];
                echo "<br>"."<b>"."Seller Name: "." </b>".$row2["name"];
                echo "<br>"."<b>"."Seller Contact: "." </b>".$row2["contact_no"];




                if($i==3){
                    echo "</tr>";
                    echo "<tr>";
                    $i=0;
                }

            }
            echo "</tr>";
            echo "</table>";
    }
?>
                            </div>



 </body>
</html>