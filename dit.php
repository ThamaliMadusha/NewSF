<?php 
session_start();
include "connection/connection.php";
    $id="";
    $iname="";
    $quantity="";
    $price="";
    $cat="";
    $sellername="";
    $image="";

if($_SESSION["user"]!= true){
    ?>
    
    <script type="text/Javascript">
    window.location="myproducts.php";
    exit();

    </script>

    <? php
        $id=$_GET["id"];

        $sql1 = "SELECT * FROM products WHERE id='$id";
        $res = $link->query($sql1);
        print_r($res);
        // $iname=$_GET["iname"];
        // $quantity=$_GET["quantity"];
        // $price=$_GET["price"];
        // $cat=$_GET["cat"];
        // $sellername=$_GET["sellername"];
        // $image=$_GET["image"];
   
if(isset($_POST["submit"])){
    $id="$_POST[id]";
    $iname="$_POST[iname]";
    $cat="$_POST[cat]";
    $quantity="$_POST[quantity]";
    $price="$_POST[price]";
    $sellername="$_POST[sellername]";
    $image ="$_POST[image]";    
    
    
        $a="update products set iname ='$iname',  
             cat='$cat', 
             quantity ='$quantity',
             price ='$price',
             sellername='$sellername',
             image='$image' where id ='$id'";
        echo $a;
        echo $_POST['iname'];
        $sql= mysqli_query($link,$a);

        if (!$sql) {
         printf("Error: %s\n", mysqli_error($link));
        exit();
         }
echo "<form align="center" name="editform" action="edit.php" method="POST">";







             ?>
            <script type="text/javascript">
            window.location="myproducts.php"
            </script>

            <?php
    }

?>


<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product items</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="  #ffe6e6">

<--? php  require "navbar/viewnav.php" ?>

        <h1 align="center">Edit Product</h1>
<div class="fm">
	<form align="center" name="editform" action="edit.php" method="POST">
        <label for="Products">Prodcut Name:</label><br>
		<input type="text" value="<--?php echo $res['iname'];?>" name="iname" ><br>
        <label for="Category">Category:</label><br>
        <input type="text" value="<--?php echo $quantity;?>" name="quantity" ><br>
		
        <label for="Products quantity">Prodcut Quantity:</label><br>
		<input type="text" value="<?php  $quantity;?>" name="quanttity"  ><br>
		
        <label for="Price"> Price: </label> <br>
		<input type="number"  value="<?php  $price;?>" name="price"><br>

        <label for="sellername">Seller name:</label><br>
        <input type="text"  value="<?php  $sellername;?>" name="sellername"><br>
		
        
        <input type="submit" value="Update" name="submit">
    </form>
</div>

</body>
</html>
							
