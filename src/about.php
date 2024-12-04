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

<body id="about-bg">
   
<?php include "includes/navFunction.php" ?>

    <main class="about">
        <section class="header">
            <div class="about-container">
                <img class="abt-img" src="images/logo.png" alt="Logo">
                <div class="about-text">
                    <h1>3-1 CUTIES</h1>
                    <p class="description">
                          our one-stop destination for creativity, innovation, and inspiration.
                </div>
            </div>
        </section>


        <!-- Meet the Developers Section -->
        <section class="developers">
    <h2>Meet the Developers</h2>
    <div class="developer-grid">
        <div class="developer-card">
            <div class="card-content">
                <div class="picture">
                    <img src="images/bretz.jpg" alt="Jhonn Michael Bretana" />
                </div>
                <div class="description">
                    <h3>Jhonn Michael Bretana</h3>
                    <span>The Food Expert</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!</p>
                </div>
            </div>
        </div>

        <div class="developer-card">
            <div class="card-content">
                <div class="picture">
                    <img src="images/pongs.jpeg" alt="Kurt Arthur Pantaleon" />
                </div>
                <div class="description">
                    <h3>Kurt Arthur Pantaleon</h3>
                    <span>The NBA Referee</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!</p>
                </div>
            </div>
        </div>

        <div class="developer-card">
            <div class="card-content">
                <div class="picture">
                    <img src="images/aeons.jpg" alt="Aeon Jade Vicentuan" />
                </div>
                <div class="description">
                    <h3>Aeon Jade Vicentuan</h3>
                    <span>The Backend Expert</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!</p>
                </div>
            </div>
        </div>

        <div class="developer-card">
            <div class="card-content">
                <div class="picture">
                    <img src="images/vics.jpg" alt="Vic Vincent Centeno" />
                </div>
                <div class="description">
                    <h3>Vic Vincent Centeno</h3>
                    <span>The Fullstack Wizard</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!</p>
                </div>
            </div>
        </div>

        <div class="developer-card">
            <div class="card-content">
                <div class="picture">
                    <img src="images/drews.jpg" alt="Andrew Bautista" />
                </div>
                <div class="description">
                    <h3>Andrew Bautista</h3>
                    <span>The Backend Expert</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!</p>
                </div>
            </div>
        </div>

        <div class="developer-card">
            <div class="card-content">
                <div class="picture">
                    <img src="images/zads.jpg" alt="Zadkiel Ondivella" />
                </div>
                <div class="description">
                    <h3>Zadkiel Ondivella</h3>
                    <span>The Document Expert</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem, eligendi nam qui nesciunt unde corrupti sed praesentium repellendus iure!</p>
                </div>
            </div>
        </div>
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