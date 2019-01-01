<?php require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type=text/css> 
#wrap{width:95%; height: 500px;padding-right: 5px; padding-left: 5px;padding-bottom: 5px;}
.right{width:30%; height:250px; float:right;}
.left{width: 30%; height:250px; float:left;}
</style>
    <title>Document</title>
    
</head>
<?php include("navbar/viewnav.php"); ?>
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

	function showData($r){
		echo "<table style='margin-left:350px;margin-top:50px;'>";
            echo "<tr>";
            $i = 0;
            while($row=mysqli_fetch_array($r,MYSQL_ASSOC)){
                $i= $i+1;
                echo"<td>";
                ?>
                <img src="<?php echo $row["image"]; ?>" height="200" width="200">   
                <?php
                echo "<br>";

                echo"<br>"."Product Name : "."   ".$row["iname"]."</br>";
                echo"<br>"."Total Quantity: ".$row["quantity"]."</br>";
                echo "<br>"."Unit Price: ".$row["price"]."<br>";
                echo "<br>". "<a href='edit.php'> Edit product </a>" ;
                echo "<br>";
               

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

 </body>
</html>