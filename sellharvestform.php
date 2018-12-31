<?php 
require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>
<div class="hello">	
	<form name="inputproduct" method="POST" action="sellharvestform.php" enctype="multipart/form-data">
		Product Name:<br>
		<input type="text" name="iname" ><br>
		Product Quantity:<br>
		<input type="number" name="quantity"><br>
		Unit Price:<br>
        <input type="number" step="0.01" name="price"><br>
       Category:<br>
        <select name="cat">
        	<option value="vegetable"> Vegetables </option>
        	<option value="fruits"> Fruits </option>
        	<option value="Agricultural tools"> Agricultural tools </option>
        	<option value="Home made foods"> Home made foods </option>
        	<option value="Handicrafts"> Handicrafts </option>
        	<option value="other"> Other </option>
        </select> 
        Agent Name:<br>
		<input type="text" name="sellername"><br>
		Upload Image:<br>
		<input type="file" value="upload" name="fileToUpload"><br>
		<input type="submit" name="submit" value="Insert Product">
		
	</form>

	<?php
	if(isset($_POST["submit"])){
	$target_dir = "Images";
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	// $username=$_SESSION["Farmer"];
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	$sql=mysqli_query($link,"INSERT INTO products VALUES ('','$_POST[iname]','$_POST[cat]','$_POST[quantity]','$_POST[price]',$_POST[sellername]','$target_file')");
    
}
	
	?>
</div>