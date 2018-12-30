<?php require ("connection/connection.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<div class="hello">	
	<form name="inputproduct" method="POST" action="sellharvestform.php" enctype="multipart/form-data">
		Product Name:<br>
		<input type="text" name="iname" ><br>
		Product Quantity:<br>
		<input type="number" name="quantity"><br>
		Unit Price:<br>
        <input type="number" step="0.01" name="price"><br>
        Category:<br>
        <select name="select">
        	<option value="vegetable">Vegetable</option>
        	<option value="fruits"> Fruits</option>
        	<option value="Agricultural tools">Agricultural Tools</option>
        	<option value="Home made foods"> Home-made foods</option>
        	<option value="Handicrafts"> Handicrafts</option>
        	<option value="other">Other</option>
        </select>
		Upload Image:<br><br>

		<input type="file" value="upload" name="fileToUpload"><br> <br>
		<input type="submit" name="submit" value="Insert Product">
		<br>
		
	</form>

	<?php
	$target_dir = "./images";
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	// $username=$_SESSION["Farmer"];
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(isset($_POST["submit"])){
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	$sql=mysqli_query($link,"INSERT INTO products VALUES ('','$_POST[iname]','$_POST[select]'	,'$_POST[quantity]','$_POST[price]','$_POST[Category]' '$target_file')");
    
}
	
	?>
</div>