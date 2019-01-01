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

<?php require "navbar/viewnav.php"; ?>

<h1 style="text-align:center;">My products</h1>
    <div class="product-list">
        <?php
            $agent=$_SESSION["user"];
            $i=0; 
            $res=mysqli_query($link,"SELECT * FROM products WHERE sellername ='$user'");
            echo "<table style='margin-left:350px;margin-top:50px;'>";
            echo "<tr>";
            while($row=mysqli_fetch_array($res)){
                $i= $i+1;
                echo"<td>";
                ?>
                <img src="<?php echo $row["img"]; ?>" height="200" width="200">
                <?php
                echo "<br>";
                echo"<b>"."Product Name ".$row["iname"]."</b>";
                echo "<br>";
                echo"<b>"."Quantity ".$row["quantity"]."</b>";
                echo"<br>";
                echo "<br>"."Unit Price ".$row["unitprice"]."<br>";
                echo "<br>"."Agent Name: ".$row["agentname"]."<br>";
                echo "<br>"."Discount ".$row["discount"]."%"."<br>";
                echo"<br>";?><a href="../agent/edit.php?id=<?php echo $row["id"];?>& pname=<?php echo $row["pname"]; ?> & pquantity=<?php echo $row["pquantity"]; ?> & agentname=<?php echo $row["agentname"]; ?>& unitprice=<?php echo $row["unitprice"]; ?>& discount=<?php echo $row["discount"]; ?>">Edit Product</a><?php echo"</br>";
                echo"<br>";?><a href="../agent/del.php?id=<?php echo $row["id"];?>"onclick="myFunction()">Delete Product</a><?php echo"</br>";

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