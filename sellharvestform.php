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
		Product Name:<br>
		<input type="text" name="iname" ><br>
		Product Quantity:<br>
		<input type="number" name="quantity"><br>
		Unit Price:<br>
        <input type="number" step="0.01" name="price"><br>
       Category:<br>
        	<option value="vegetable"> Vegetables </option>
        	<option value="fruits"> Fruits </option>
        	<option value="Agricultural tools"> Agricultural tools </option>
        	<option value="Home made foods"> Home made foods </option>
        	<option value="Handicrafts"> Handicrafts </option>
        	<option value="other"> Other </option>
        </select> 
		<input type="submit" name="submit" value="Insert Product">
		
	</form>

	<?php
	$target_dir = "Images";
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    
}
	
	?>
</div>
</body>
</html>