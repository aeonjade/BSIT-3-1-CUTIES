<?php
session_start();
include "php/functions.php";
include("connection.php");
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"   href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <title>Gallery</title>
    <link rel="shorthand icon" href="images/VITS LOGO.png">
</head>

<body>
    <?php include "includes/navFunction.php" ?>

    <section class="section-1">

<div class="container">
    <div class="text-graphics">
        <h1> BSIT 3 - 1 Exhibit</h1>
        <div class="three-wan">
            <img src="./images/threewan/treewan.png" alt="">
        </div>
    </div>
</div>
</section>


<section class="section2">

<center>
    <div class="text-exhibit">
        <h3> See the works of BSIT 3 - 1 </h3>
    </div>
</center>



<div class="container2">
    <img class="works" src="../images/works/works/house.png" alt="">
    <div class="content-text">
        <h1 id="titles"> CUTIE HOUSE </h1>
        <p><strong> Date: </strong> November 26, 2024 11:00AM </p>
        <p><strong> By: </strong> Bretana, Pantaleon </p>
        <p><strong>Description:</strong>These cuties made a cute 3D gingerbread house
            through Blender to celebrate the magic of Christmas.</p>
    </div>
</div>

<div class="container2">
    <img class="works" src="../images/works/works/srs.png" alt="">
    <div class="content-text">
        <h1 id="titles"> REINDEER, SLEIGH AND SANTA CUTIE </h1>
        <p><strong> Date: </strong> November 30, 2024 02:00PM </p>
        <p><strong> By: </strong> Bautista, Ondevilla </p>
        <p><strong>Description:</strong>These cuties made a set of Santa-related #D designs through Blender
            showcasing the spirit of Christmas. Perhaps hoping for Santa to pass by!!</p>
    </div>
</div>

<div class="container2">
    <img class="works" src="../images/works/works/house.png" alt="">
    <div class="content-text">
        <h1 id="titles"> CHRISTMAS TREE AND GIFTS CUTIE </h1>
        <p><strong> Date: </strong> November 30, 2024 03:00PM </p>
        <p><strong> By: </strong> Centeno, Vicentuan </p>
        <p><strong>Description:</strong>These cuties made a set of Tree and Gifts 3D designs through Blender
            showcasing the spirit of Christmas. Perhaps hoping for Santa to pass by!!</p>
    </div>
</div>

<div class="container2">
    <img class="works" src="../images/works/works/VAF.png" alt="">
    <div class="content-text">
        <h1 id="titles"> FORT & VERA CUTIE </h1>
        <p><strong> Date: </strong> November 30, 2024 07:00PM </p>
        <p><strong> By: </strong> Bretana, Pantaleon </p>
        <p><strong>Description:</strong>These cuties made a set of Christmas-related 3d outfits
            throug VRoid and Blender, roleplating as mini Santa Claus aside from the real Santa.</p>
    </div>
</div>

<div class="container2">
    <img class="works" src="../images/works/works/VAF.png" alt="">
    <div class="content-text">
        <h1 id="titles"> CUTIE HOUSE </h1>
        <p><strong> Date: </strong> November 26, 2024 11:00AM </p>
        <p><strong> By: </strong> Bretana, Pantaleon </p>
        <p><strong>Description:</strong>These cuties made a cute 3D gingerbread house
            through Blender to celebrate the magic of Christmas.</p>
    </div>
</div>

<div class="container2">
    <img class="works" src="../images/works/works/house.png" alt="">
    <div class="content-text">
        <h1 id="titles"> CUTIE HOUSE </h1>
        <p><strong> Date: </strong> November 26, 2024 11:00AM </p>
        <p><strong> By: </strong> Bretana, Pantaleon </p>
        <p><strong>Description:</strong>These cuties made a cute 3D gingerbread house
            through Blender to celebrate the magic of Christmas.</p>
    </div>
</div>
</section>










    
    <?php include "includes/footer.php" ?>
</body>

</html>