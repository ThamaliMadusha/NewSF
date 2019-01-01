<?php include("includes/wateringhead.php"); ?>
<div>
	<h2>Purchase Food Items</h2>
<?php  require "connection/connection.php";
session_start();
$pselected='Your Product Name';
if($_SESSION["user"] != true){
    ?>
    <script type="text/Javascript">
    window.location="login.php";
    exit();

    </script>
    <?php
}

    
    
if(isset($_POST["submitpurchase"])){
    mysqli_query($link,"INSERT INTO myorder VALUES('','$_POST[iname]','$_POST[aname]','$_POST[unitprice]', '$_POST[oqty]','$_POST[price]', '$_SESSION[user]','Not Approved')");
    $msg = "Order Purchased Success Fully";
                echo "<script type='text/javascript'>
                alert('$msg');
                </script>";

}   
    ?>
<html>
<head>
<title> Order</title>
<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>

<h1> Request Your Order </h1>
<div class="hello">	
	<form name="buyerreg" action="buyitems.php" method="POST">
		Search You Product :<br>
		<!-- Get product list from the datbase -->
        <select name="pname1"  id="">
            <?php
      $res=mysqli_query($link,"SELECT DISTINCT iname from products");
        while($row=mysqli_fetch_array($res))
         {
             echo"<option>";
             echo $row["iname"];
            echo "</option>";
            }

            ?>
        </select>
        <input type="submit" value="Get Available Sellers" name="submitproduct" style="width:250px;"> <br>
		Seller Name List:<br>
        <!-- Get available seller names -->
        <select name="sellername" id="">
            <?php
            if(isset($_POST["submitproduct"])){
                $pselected=$_POST['pname1'];
      $res=mysqli_query($link,"SELECT sellername from products where iname= '$_POST[pname1]'");
        while($row=mysqli_fetch_array($res))
         {
             echo"<option>";
             echo $row["sellername"];
            echo "</option>";
            }


        }
        
        ?>
        </select>
        Product Name:<br>
        <input type="text" value="<?php echo $pselected; ?>" name="productname"><br>
        <input type="submit" value="Request Product Details" name="alldetails" style="width:250px;"> <br>
     <!-- get all the product details -->
     <?php

            if(isset($_POST["alldetails"])){
        $res=mysqli_query($link,"SELECT * FROM products WHERE iname='$_POST[productname]'&& sellername='$_POST[sellername]'");
        while($row=mysqli_fetch_array($res))
         {     
            
             
             $pname=$row["iname"];
             $quantity=$row["quantity"];
             $unitprice=$row["price"];
             $sellername=$row["sellername"]; 
               

     
        }
        ?>
        Product Name:<br>
        <input type="text" value="<?php echo $pname; ?>" name="pname" readonly><br>
        Seller Name:<br>
        <input type="text" value="<?php echo $sellername; ?>" name="sellername" readonly><br>
        Unit Price:<br>
        <input type="number" value="<?php echo $unitprice; ?>" name="unitprice" readonly><br>
        Available Product Quantity:<br>
        <input type="number" value="<?php echo $quantity; ?>" name="aqty" readonly><br>
        Order Your Quantity:<br>
        <input type="number" name="oqty"><br>
                  
<?php
     }
        ?> 
             <input type="submit" value="Calculate my price" name="pricecal" style="width:250px;"> <br>

                <?php
         if(isset($_POST["pricecal"])){
             if( $_POST['oqty']>$_POST['aqty']){
                $error = "Ordered quantity Should not exceed the available quantity";
                echo "<script type='text/javascript'>
                alert('$error');
                </script>";
               
             }elseif($_POST['oqty']==0 ||$_POST['oqty']==null){
                $error = "Ordered quantity Should be at least 1";
                echo "<script type='text/javascript'>
                alert('$error');
                </script>";
               }else
             {
                $pname1= $_POST['pname'];
                $agentname2=$_POST['sellername'];
                $unitprice=$_POST['unitprice'];
                $aqty=$_POST['aqty'];
                $oqty=$_POST['oqty'];
                $total=($_POST['unitprice']*$_POST['oqty']);
                ?>
                
                 

        Product Name:<br>
        <input type="text" value=<?php echo $pname1; ?> name="iname" readonly><br>
        Agent Name:<br>
        <input type="text" value=<?php echo $agentname2; ?> name="aname" readonly><br>
        Unit Price:<br>
        <input type="number" value=<?php echo $unitprice; ?> name="unitprice" readonly><br>
        Available Product Quantity:<br>
        <input type="number" value="<?php echo $aqty; ?>" name="aqty" readonly><br>
        Ordered Your Quantity:<br>
        <input type="number" value=<?php echo $oqty;?> name="oqty"><br>
        Final Price: <br>
        <input type="number" name="price" value=<?php echo $total; ?>><br>
        <input type="submit" value="Purchase order" name="submitpurchase">
                 <?php

             }
        
         }
        ?>

		
    </form>
    
</script>
</body>
</html>