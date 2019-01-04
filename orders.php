<?php
require "connection/connection.php";
session_start();
if($_SESSION["user"] != true){
    ?>
    <script type="text/Javascript">
    window.location="login.php";
    exit();

    </script>
    <?php
}
$sellername=$_SESSION["user"];
 ?>
<html>
<head>
<title> Orders </title>
</head>
<?php include("navbar/sellnavbar.php"); ?>
<style>
.ptable{
    margin-top:10px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>    
<body>
        
<table id="customers">
 <?php
$res=mysqli_query($link,"SELECT * FROM myorder WHERE sellername='$sellername'");

echo "<table id='customers'class='ptable'>";
echo"<tr>";
    echo"<th>";echo "Inovice Number";echo"</th>";
    echo"<th>";echo "Product Name";echo"</th>";
    echo"<th>";echo "Seller Name";echo"</th>";
    echo"<th>";echo "Unit Price";echo"</th>";
    echo"<th>";echo "Order Quantity";echo"</th>";
    echo"<th>";echo "Total Price";echo"</th>";
    echo"<th>";echo "Buyer Name";echo"</th>";
    echo"<th>";echo "Buyer Contact";echo"</th>";
    echo"<th>";echo "Status";echo"</th>";
    echo"<th>";echo "Approve";echo"</th>";
    echo"<th>";echo "Not Approve";echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_assoc($res)){
    echo"<tr>";
        echo"<td>";echo $row["id"];echo"</td>";
        echo"<td>";echo $row["pname"];echo"</td>";
        echo"<td>";echo $row["sellername"];echo"</td>";
        echo"<td>";echo $row["unitprice"];echo "</td>";
        echo"<td>";echo $row["oqty"];echo"</td>";
        echo"<td>";echo $row["fprice"];echo "</td>";
        echo"<td>";echo $row["bname"];echo"</td>";
        echo"<td>";echo $row["bcontact"];echo"</td>";
        echo"<td>";echo $row["approve"];echo"</td>";
        echo"<td>";?><a href="approve.php?id=<?php echo $row["id"];?>& order=<?php echo $row["oqty"]; ?> & pname=<?php echo $row["pname"]; ?> & sellername=<?php echo $row["sellername"]; ?>">Approve</a><?php echo"</td>";
        echo"<td>";?><a href="notapprove.php?id=<?php echo $row["id"];?>& order=<?php echo $row["oqty"]; ?> & pname=<?php echo $row["pname"]; ?> & sellername=<?php echo $row["sellername"]; ?>">Not Approve</a><?php echo"</td>"; 
        echo"</tr>";
}
echo "</table>";
 
 
 ?> 



</table>




</body>
</html>
