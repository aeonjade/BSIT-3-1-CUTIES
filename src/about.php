<p?php
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

<body>
   
<?php include "includes/navFunction.php" ?>
    
    <main class="about">
        <section class="header">
            <div class="about-container">
                <img class="abt-img" src="images/logo.png" alt="Logo">
                <div class="about-text">
                    <h1>3-1 CUTIES</h1>
                    <div class="description">
                    We are a passionate group of BSIT 3-1 students committed to creating a platform that reflects our needs, ideas, and shared goals. 
                    ThreeWanCuties is built by students, for students! This website was published on December 2, 2024, as a project for partial
                     fulfillment in Event-Driven Programming. Its developers are: Bautistia, Bretana, Centeno, Ondevilla, Pantaleon, Vicentuan.</p>

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
                            <span>PHP Magician</span>
                            <p> Bretz makes PHP like his bread and butter.
                                 He cooks PHP code and succesfully makes a great 
                                 work aligning with our goals.</p>
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
                            <span>PHP Maestro</span>
                            <p> Kurt is a reliable PHP meister. 
                                He manages to get PHP code to work and even ensure 
                                that most of its bugs get optimized.</p>
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
                            <span>Back-end GOAT Leader</span>
                            <p> Aeon Jade supervises the management 
                                of the team. He’s PHP and back-end expert, 
                                and can mange whether it be the team or the database.</p>
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
                            <span>Front-end Wizard</span>
                            <p>Vic breathes life into the website with his eye for aesthetics 
                                and practicality of designs. He makes life look beautiful.</p>
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
                            <span>Front-end Sorcerer</span>
                            <p>Andrew comes and conquers designs with his intuitive mind, 
                                aspiring to make the website look as much appealing as
                                 possible to everyone.</p>
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
                            <span>Generalist</span>
                            <p>Zadkiel handles a variety of tasks of which help the team work
                                 efficiently and methodically. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- The 3-1 Officers Section -->
        <section class="officers">
            
                <!--</*?php
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
                            <img src="<//?= $officer['image'] ?>" alt="<//?= $officer['role'] ?>" />
                        </div>
                        <div class="description"><//?= $officer['description'] ?></div>
                    </div> 
                <//?php } ?>-->
                <h4>Officers of IT 3-1</h4>
                <div class="team-container">
                    <!-- Officer 1 -->
                    <div class="team-member">
                        <img src="images/officers/President.jpeg" alt="Officer 1">
                        <div class="member-info">
                            <h2>Name:</h2> 
                            <p>Alcober, Heather Mae</p>
                            <h2>Position:</h2>
                            <p>President</p>
                        </div>
                    </div>

                    <!-- Officer 2 -->
                    <div class="team-member">
                        <img src="images/officers/VicePresident.jpeg" alt="Officer 2">
                        <div class="member-info">
                            <h2>Name:</h2> 
                            <p>Frias, Bryx</p>
                            <h2>Position:</h2>
                            <p>Vice President</p>
                        </div>
                    </div>

                    <!-- Officer 3 -->
                    <div class="team-member">
                        <img src="images/officers/Secretary.jpeg" alt="Officer 3">
                        <div class="member-info">
                            <h2>Name:</h2> 
                            <p>Lalantacon, John Roy</p>
                            <h2>Position:</h2>
                            <p>Secretary</p>
                        </div>
                    </div>

                    <!-- Officer 4 -->
                    <div class="team-member">
                        <img src="images/officers/Treasurer.jpeg"alt="Officer 4">
                        <div class="member-info">
                            <h2>Name:</h2> 
                            <p>Deguzman, Jasmine</p>
                            <h2>Position:</h2>
                            <p>Treasurer</p>
                        </div>
                    </div>

                </div>
        </section>
                    

    <?php include "includes/footer.php" ?>

</body>

</html>