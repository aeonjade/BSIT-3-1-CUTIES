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
    <title>About | 3-1 CUTIES</title>
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="main-bg">
   
<?php include "includes/navFunction.php" ?>

    <main class="about">
        <section class="header">
            <div class="about-container">
                <img class="abt-img" src="images/logo.png" alt="Logo">
                <div class="about-text">
                    <h1>3-1 CUTIES</h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sed nemo magnam quia minus distinctio voluptas aut eaque. Quod inventore iusto aliquam unde, iste animi exercitationem ipsam perspiciatis quo saepe quos velit dignissimos tenetur consequuntur,
                </div>
            </div>
        </section>


        <!-- Meet the Developers Section -->
        <section class="developers">
            <h2>Meet the Developers</h2>
            <div class="developer-grid">
                <?php
                // Developers array with image and description
                $developers = [
                    ['image' => 'images/bretz.jpg', 'description' => 'Jhonn Michael Bretana  <br> <span> The Food Expert </span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure! '],
                    ['image' => 'images/pongs.jpeg', 'description' => 'Kurt Arthur Pantaleon  <br> <span> The NBA Referee </span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure! '],
                    ['image' => 'images/aeons.jpg', 'description' => 'Aeon Jade Vicentuan  <br> <span> The Backend Expert </span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure! '],
                    ['image' => 'images/vics.jpg', 'description' => 'Vic Vincent Centeno <br> <span> The Fullstack Wizard </span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure! '],
                    ['image' => 'images/drews.jpg', 'description' => 'Andrew Bautista  <br> <span> The Backend Expert </span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure! '],
                    ['image' => 'images/zads.jpg', 'description' => 'Zadkiel Ondivella  <br> <span> The Document Expert </span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!  ']
                ];
                foreach ($developers as $developer) { ?>
                    <div class="developer-card">
                        <div class="picture">
                            <img src="<?= $developer['image'] ?>" alt="Developer" />
                        </div>
                        <div class="description"><?= $developer['description'] ?></div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- The 3-1 Officers Section -->
        <section class="officers">
            <h2>The 3-1 Officers</h2>
            <div class="officer-grid">
                <?php
                // Officers array with image, role, and description
                $officers = [
                    ['role' => 'P', 'image' => 'images/officer1.jpg', 'description' => 'President '],
                    ['role' => 'VP', 'image' => 'images/officer2.jpg', 'description' => 'Vice President '],
                    ['role' => 'S', 'image' => 'images/officer3.jpg', 'description' => 'Secretary '],
                    ['role' => 'T', 'image' => 'images/officer4.jpg', 'description' => 'Treasurer ']
                ];
                foreach ($officers as $officer) { ?>
                    <div class="officer-card">
                        <div class="picture">
                            <img src="<?= $officer['image'] ?>" alt="<?= $officer['role'] ?>" />
                        </div>
                        <div class="description"><?= $officer['description'] ?></div>
                    </div> 
                <?php } ?>
            </div>
        </section>
    </main>

    <?php include "includes/footer.php" ?>

</body>

</html>