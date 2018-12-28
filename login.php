 <?php 
include('connection/connection.php');
session_start();


  if(isset($_POST['submit'])){
    $username= ($_POST['username']);
    $password=($_POST['password']);
    $query = "SELECT * from users WHERE name='$username' AND password = '$password'";
    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) == 1)
    {
        if ($username=='Admin' AND $password==('admin'))
        {
            $_SESSION['fromMain']="true";
            $_SESSION['admin'] = $username;
            header('location:adminpage.php');
            }

        else{
            $_SESSION['user'] = $username;
            header('location:homepage.php');
            }
    }
    else{
        header('location:login.php');
    }
} ?> 
<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>
    <?php include("navbar/loginnav.php");?>
    <h1> Login </h1>
    <div class="login">
    <form name="login" method="POST" action="login.php">
        Name:<br>
        <input type="text" name="username" required><br>
        Password:<br>
        <input type="password" name="password"><br>
        
        <input type="submit" name="submit" value="Login" required>
    </form>
    </div>
