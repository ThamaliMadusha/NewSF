<?php session_start(); 
require "connection/connection.php";


if($_SESSION["user"] != true){
    ?>
    <script type="text/Javascript">
    window.location="sellharvestform.php";
    exit();

    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
<!-- NAvigation bar -->

<?php require "includes/wateringhead.php"; ?>

<h1 style="text-align:center;">My products</h1>
    <div class="product-list">
        <?php
            $user=$_SESSION["user"];
            $i=0; 
            $res=mysqli_query($link,"SELECT * FROM products WHERE sellername ='$user'");
            echo "<table style='margin-left:350px;margin-top:50px;'>";
            echo "<tr>";
            while($row=mysqli_fetch_array($res)){
                $i= $i+1;
                echo"<td>";
                ?>
                <img src="<?php echo  $row["image"]; ?>" height="200" width="200">
                <?php
                echo "<br>";
                echo"<b>"."Product Name : "."</b>".$row["iname"]."<br>";
                echo"<b>"."Quantity : "."</b>".$row["quantity"]."<br>";
                echo "<b>"."Price :  "."</b>".$row["price"]."<br>";
                echo "<b>"."Price :  "."</b>".$row["price"]."<br>";
                echo "<b>"."Category  : "."</b>".$row["cat"]."</b>"."<br>" ;?>
                 <a href="edit.php?> 
                    id=<?php echo $row["id"];?> 
                    & iname=<?php echo $row["iname"]; ?> & quantity=<?php echo $row["quantity"]; ?>
                    & price=<?php echo $row["price"];  ?> & Category=<?php echo $row["cat"];  ?>
                    & quantity=<?php echo $row["quantity"];?>">
                    <b>Edit Product</b></a>
                    <?php 
                     echo"<br>";?><a href="del.php?id=<?php echo $row["id"];?>"onclick="myFunction()"><b>Delete Product</b></a><?php echo"</br>";

                echo "</td>";
                if($i==3){
                    echo "</tr>";
                    echo "<tr>";
                    $i=0;
                }
                


                
            }
            echo "</tr>";
            echo "</table>";
            
        
        ?>

            <script>
             function myFunction(){
                 confirm("Are You sure You want to delete this Product");
             }
            </script>

    </div>
    
</body>
</html>