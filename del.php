<?php 
session_start();
include "connection/connection.php";
    $id=$_GET["id"];
    echo $id;
    $a="DELETE from products where id=$id ";
    $sql=mysqli_query($link,$a);
    header("location: myproducts.php");
?>