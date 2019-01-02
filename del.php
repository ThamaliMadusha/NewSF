<? php 
session_start();
include "connection/connection.php";
if($_SESSION["Agent"]!= true){
    ?>

    <script type="text/Javascript">
    window.location="allproducts.php";
    exit();
     </script>
    
    <? php
    }
    $id=$_GET["id"];
    $a="DELETE from products where id='$id' ";
    $sql=mysqli_query($link,$a);
    if (!$sql) {
        printf("Error: %s\n", mysqli_error($link));
   exit();
    }
    else{
    ?>
    <script>
    window.location="allproducts.php";
    exit();
    </script>
    <? php
}
?>