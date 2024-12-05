<?php
session_start();
include "php/functions.php";
include("connection.php");
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>BSIT 3-1 | CUTIES</title>
    <link rel="shorthand icon" href="images/VITS LOGO.png" />

</head>

<body>

    <?php include "includes/navFunction.php" ?>

    <main>

        <section class="banner">
            <div class="image-container">
                <img src="./images/threewan/bg.png ">

                <div class="monitor">
                    <img src="./images/threewan/pic1.png" alt="Group Photo" class="photo">

                </div>

                <div class="loading-container">
                    <div>LOADING...</div>
                    <div class="loading-bar">
                        <div class="loading-bar-inner"></div>
                    </div>
                </div>

                <div class="banner-text">
                    <h1>Welcome to BSIT 3-1</h1>
                </div>

                <div class="stacked-windows">
                    <img src="./images/assets/windiw.png" alt="Window" class="window" />
                    <div class="content-window">
                        <h4>For the Students, by the Students</h4>

                        <div class="buttons">
                            <a href="#" class="btn btn-exhibits">Other Exhibits</a>
                            <a href="#" class="btn btn-see-more">See More</a>
                        </div>

                    </div>
                </div>


                <img src="./images/assets/keyboard-mouse.png" alt="" class="mouse">

                <!-------------------------------------------------------------------------------->

        </section>

        <section class="developerss">
            <p>FEATURES OF THE WEEK</p>
        </section>

        <section class="project-showcase">
            <div class="container">
                <!-- Content Section -->
                <div class="content">
                    <!-- Images Section -->
                    <div class="card-container">
                        <!-- Card 1 -->
                        <div class="card" onclick="openModal('images/works/house.png')">
                            <div class="image-wrapper">
                                <img src=images\works\house.png alt="Image 1" class="image">
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="card" onclick="openModal('images/works/srs.png')">
                            <div class="image-wrapper">
                                <img src=images\works\srs.png alt="Image 2" class="image">
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="card" onclick="openModal('images/works/VAF.png')">
                            <div class="image-wrapper">
                                <img src=images\works\VAF.png alt="Image 3" class="image">
                            </div>
                        </div>
                    </div>

                    <!-- Modal for image popup -->
                    <div id="imageModal" class="modal-section2" onclick="closeModal()">
                        <span class="close">&times;</span>
                        <img id="modalImage" class="modal-contents" alt="Modal Image">
                    </div>

                    <!-- Text Section -->
                    <div class="text-content">
                        <h1>2D to 3D Christmas Theme Cutie</h1>
                        <h3>By Bautistia, Bretana, Centeno, Ondevilla, Pantaleon, Vicentuan</h3>
                        <p>
                        These cuties made a scene of Christmas-themed 3D
                         designs through Blender, exhibiting creativity over a 
                         predefined theme. 
                        </p>
                        <!-- Buttons Section -->
                        <div class="buttons">


                            <a href="gallery.php" class="btn btn-exhibits">Other Exhibits</a>
                            <a href="gallery.php" class="btn btn-see-more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="projecttoowan-showcase">
            <div class="container">
                <!-- Content Layout -->
                <div class="content">
                    <!-- Text Content -->
                    <div class="text-content">
                        <h1>Website</h1>
                        <h3>By: Bautistia, Bretana, Centeno, Ondevilla, Pantaleon, Vicentuan</h3>
                        <p>
                        These cuties made a PHP website for ThreeWanCuties Student Portal.
                        </p>
                        <!-- Buttons Section -->
                        <div class="buttons">
                            <button class="btn btn-exhibits">Other Exhibits</button>
                            <button class="btn btn-see-more">See More</button>
                        </div>
                    </div>

                    <!-- Images Layout -->
                    <div class="card-container">
                        <!-- Card 1 -->
                        <div class="card" onclick="openModal('images/aeons.jpg')">
                            <div class="image-wrapper">
                                <img src="images/aeons.jpg" alt="Image 1" class="image">
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="card" onclick="openModal('images/bretz.jpg')">
                            <div class="image-wrapper">
                                <img src="images/bretz.jpg" alt="Image 2" class="image">
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="card" onclick="openModal('images/drews.jpg')">
                            <div class="image-wrapper">
                                <img src="images/drews.jpg" alt="Image 3" class="image">
                            </div>
                        </div>
                    </div>

                    <!-- Modal for image popup -->
                    <div id="imageModal" class="modal-section2" onclick="closeModal()">
                        <span class="close">&times;</span>
                        <img id="modalImage" class="modal-contents" alt="Modal Image">
                    </div>


                </div>
            </div>
        </section>

        <section class="developersss">
            <h2>
                <center>CUTIES | Developer</center>
            </h2>
            <div class="developer-list">
                <div class="developer-card">
                    <div class="circle-border">
                        <div class="circle">AB</div>
                    </div>
                    <p>Andrew <br>Bautista</p>
                </div>
                <div class="developer-card">
                    <div class="circle-border">
                        <div class="circle">MB</div>
                    </div>
                    <p>Michael <br>Bretana</p>
                </div>
                <div class="developer-card">
                    <div class="circle-border">
                        <div class="circle">VC</div>
                    </div>
                    <p>Vincent<br>Centeno</p>
                </div>
                <div class="developer-card">
                    <div class="circle-border">
                        <div class="circle">ZO</div>
                    </div>
                    <p>Zadkiel<br> Ondevilla</p>
                </div>
                <div class="developer-card">
                    <div class="circle-border">
                        <div class="circle">KP</div>
                    </div>
                    <p>Kurt <br>Pantaleon</p>
                </div>
                <div class="developer-card">
                    <div class="circle-border">
                        <div class="circle">JV</div>
                    </div>
                    <p>Jade<br> Vicentuan</p>
                </div>
            </div>
        </section>




    </main>



    <script src="javascript/homepage.js"></script>
    <script src="javascript/carousel.js"></script>

    <?php include "includes/footer.php" ?>

</body>

</html>