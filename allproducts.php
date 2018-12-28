<?php require "connection/connection.php";
/*session_start();
if($_SESSION["buyer"] != true){
    ?>
    <script type="text/Javascript">
    window.location="../buyerlogin.php";
    exit();

    </script>
    <?php
}*/
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include("navbar/viewnav.php"); ?>
<body>
    <!-- navigatioon bara -->
    
    <h1 style="text-align:center;">All products</h1>





    <div class="product-list">
       <form action="allproducts.php" method="POST"> 
    <?php
        $query = "SELECT cat FROM `products`";
        $result = mysqli_query($link,$query);
        echo "<select name='cat'>";
        while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){                                                 
      
        echo " <option value='".$row['cat']."'>" .$row["cat"] ."</option>"  ;
      
        }
        echo "</select>" ;
    ?>
     <input type="submit" name="search" value="Search">
    </form> 

        
 <?php
        if (isset($_POST['search'])) {
            
            $c = $_POST['cat'];
            if ($c == "Fruits") {
        $categary = "Fruits";
    } else if($c == "Vegetables") {
        $categary = "Vegetables";
    } else if($c == "Agricutural tools") {
        $categary = "Agricutural tools";
    } else if($c == "Home-made foods") {
        $categary = "Home-made foods";
    } else if($c == "Handycrafts") {
        $categary = "Handycrafts";
    }
            $i=0; 
            $res=mysqli_query($link,"SELECT * FROM products where cat='$categary'");
            echo "<table style='margin-left:350px;margin-top:50px;'>";
            echo "<tr>";
            while($row=mysqli_fetch_array($res)){
                $i= $i+1;
                echo"<td>";
                ?>
                <img src="<?php echo $row["image"]; ?>" height="200" width="200">
                <?php
                echo "<br>";
                echo"<br>"."Product Name : "."   ".$row["iname"]."</br>";
                echo "<br>";
                echo"<br>"."Total Quantity: ".$row["quantity"]."</br>";
                echo"<br>";
                echo "<br>"."Unit Price: ".$row["price"]."<br>";
                // echo "<br>"."Buyer name: ".$row["bname"]."<br>";
                /*echo "<br>"."Discount ".$row["discount"]."%"."<br>";*/
                echo "</td>";
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