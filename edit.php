<?php 
session_start();
include "connection/connection.php";

if(!isset($_SESSION["user"]))   
    
    {
        header("location: login.php");
    }

if(isset($_POST["submit"])){       

    $iname=$_POST["iname"];
    $id=$_POST["id"];
    $cat=$_POST["category"];
    $quantity=$_POST["quantity"];
    $price=$_POST["price"];



    echo $id, $iname;


    $a="UPDATE products set iname ='$iname',  cat='$cat', quantity =$quantity, price =$price where id =$id";
    echo $a;
    // echo $_POST['iname'];
    $sql= mysqli_query($link,$a);

        if (!$sql) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }
        else {
            header("location: myproducts.php");
        }
}         
                
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product items</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="  #ffe6e6">

<?php  require "navbar/viewnav.php" ?>

        <h1 align="center">Edit Product</h1>
<div class="fm">
	<form align="center" name="editform" action="edit.php" method="POST">
       
        <label for="Products">Prodcut  Name:</label><br>
		<input type="text" value="<?php echo $_GET['iname'];?>" name="iname" ><br>
        <label for="Category">Category:</label><br>
        <input type="text" value="<?php echo $_GET['cat'];?>" name="category" ><br>
		
        <label for="Products quantity">Prodcut Quantity:</label><br>
		<input type="text" value="<?php echo $_GET['quantity'];?>" name="quantity"  ><br>
		
        <label for="Price"> Price: </label> <br>
		<input type="number"  value="<?php echo $_GET['price'];?>" name="price"><br>

        <input type="text" value="<?php echo $_GET['id'];?>" name="id" hidden>
        
        <input type="submit" value="Update" name="submit">
    </form>
</div>

</body>
</html>
