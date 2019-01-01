<?php require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<?php include("navbar/viewnav.php"); ?>
<body>
    <!-- navigatioon bar -->
    
    <h1 style="text-align:center;">All products</h1>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/veg.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="veg" class="btn btn-primary" value="Vegetables">
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/fruit.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="fruits" class="btn btn-primary" value="Fruits">
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/tools.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="tools" class="btn btn-primary" value="Tools">
                </form>
            </div>
            </div>
        </div>
    </div>


<br>
<br>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/foods.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="foods" class="btn btn-primary" value="Home-Made Foods">
                </form>
            </div>
            </div>
    </div>



        <div class="col-md-4 ac">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/crafts.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="handi" class="btn btn-primary" value="Handicrafts">
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/other.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="other" class="btn btn-primary" value="Other">
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>




    