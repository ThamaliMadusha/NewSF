
<?php session_start(); ?>


<?php
if($_SESSION['fromMain'] == "false"){
  
   header("Location: adminpage.php");
}
else{
   //reset the variable
   $_SESSION['fromMain'] = "false";
}

?>



<?php require("connection/connection.php"); ?>



  
  <link rel="stylesheet" type="text/css" href="css/public.css">


<header>
<div class="main">
  <div class="topnav">
    <div class="nametxt">
      <h1>Smart Farming</h1><!-- heading -->
    </div>
  </div>
</div>


		
		
		
				
                    

				<center><form action="adminpage.php" method="post">
                    <fieldset class="fieldset-auto-width" >
                        <legend>
                    
                    
                    Enter Name to delete or add:
                        </legend> 
					<input type="text" name="name">
                </fieldset><br><br>

                    <button type="submit" name="delete">Delete User</button><br><br>

                    <fieldset class="fieldset-auto-width" >
                        <legend>


					Enter field to add:</legend> 
					<input type="text" name="field"></fieldset><br><br>
                    
                    <fieldset class="fieldset-auto-width" >
                        <legend>
                    Enter address to add:</legend> 
                    <input type="text" name="address"></fieldset><br><br>
                    <fieldset class="fieldset-auto-width" >
                        <legend>
                    Enter phone to add: </legend>
                    <input type="text" name="phone"></fieldset><br><br>

                    <fieldset class="fieldset-auto-width" >
                        <legend>
                    Enter email to add: </legend>
                    <input type="text" name="email"></fieldset><br><br>
                    
					
					<button type="submit" name="add">Add new user</button>
               
            
				</form>

                <form action ="index.php" method="post">
                <button type="submit" name="logout">logout</button>
                </form>
                </fieldset>
            </center>
                
				</div>

			</div>
		</div>

		


<?php
	if (null !==(filter_input(INPUT_POST, 'delete'))){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM users WHERE name='$name';";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (null !==(filter_input(INPUT_POST, 'add'))){
        $name=$_POST['name'];
        
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];






        $sql1 = "INSERT INTO users(name,field,address,phone,email)  VALUES ('$name','$field','$address','$phone','$email');";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }
	$mysqli_close = mysqli_close($link);
?>