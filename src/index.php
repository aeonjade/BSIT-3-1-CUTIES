<?php 
session_start();

	include("connection.php");
	include("functions.php");

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

  <?php include "includes/nav.php" ?>

  <main>

        <section class="banner">
            
            <div class="overlay">
                <div class="left-content">
                    <h1>For the students,<br>by the students.</h1>
                </div>
                <div class="right-content">
                    <p class="introduction">
                        Hello, <?php echo $user_data['user_name']; ?>
                    </p>
                    <div class="buttons">
                        <button class="btn">WHAT WE DO</button>
                        <button class="btn">WHO WE ARE</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="developerss">
            <p>FEATURES OF THE WEEK</p>
        </section>

        <section class="project-showcase">
            <div class="container">
                <!-- Content Section -->
                <div class="content">
                    <!-- Images Section -->
                     <!-- Carousel Section -->
                        <section class="carousel-section">
                            <div class="carousel-container">
                                <div class="carousel">
                                    <div class="card">
                                        <img src="images/bretz.jpg" alt="Image 1">
                                    </div>
                                    <div class="card">
                                        <img src="images/aeons.jpg" alt="Image 2">
                                    </div>
                                    <div class="card">
                                        <img src="images/drews.jpg" alt="Image 3">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Modal Popup -->
                        <div class="modal" id="modal">
                            <div class="modal-content">
                                <span class="close-btn" id="close-btn">&times;</span>
                                <img id="modal-image" src="" alt="Modal Image">
                            </div>
                        </div>
                        
                    <!-- Text Section -->
                    <div class="text-content">
                        <h1>THIS IS THEIR PROJECT</h1>
                        <h3>By Rome, Tite, Pepe, Burat, Burnek, Salsalito, Ratbu</h3>
                        <p>
                            The project description goes here. Add details to match the content style of the image.
                        </p>
                        <!-- Buttons Section -->
                        <div class="buttons">
                            <button class="btn btn-exhibits">Other Exhibits</button>
                            <button class="btn btn-see-more">See More</button>
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
                        <h1>THIS IS THEIR PROJECT</h1>
                        <h3>By Rome, Tite, Pepe, Burat, Burnek, Salsalito, Ratbu</h3>
                        <p>
                            The project description goes here. Add relevant details for a professional look.
                        </p>
                        <!-- Buttons Section -->
                        <div class="buttons">
                            <button class="btn btn-exhibits">Other Exhibits</button>
                            <button class="btn btn-see-more">See More</button>
                        </div>
                    </div>
    
                    <!-- Images Layout -->
                    <div class="images">
                        <img src="images\drews.jpg" alt="Image 1" class="side-image left">
                        <img src="images\vics.jpg" alt="Image 2" class="main-image">
                        <img src="images\zads.jpg" alt="Image 3" class="side-image right">
                    </div>
                </div>
            </div>
        </section>
   
        <section class="developersss">
            <h2><center>CUTIES | Developer</h2>
            <div class="developer-list">
                <div class="developersss">
                    <div class="circle">AB</div>
                    <p>Andrew <br>Bautista</p>
                </div>
                <div class="developersss">
                    <div class="circle">MB</div>
                    <p>Michael <br>Bretana</p>
                </div>
                <div class="developersss">
                    <div class="circle">VC</div>
                    <p>Vincent<br>Centeno</p>
                </div>
                <div class="developersss">
                    <div class="circle">ZO</div>
                    <p>Zadkiel<br> Ondevilla</p>
                </div>
                <div class="developersss">
                    <div class="circle">KP</div>
                    <p>Kurt <br>Pantaleon</p>
                </div>
                <div class="developersss">
                    <div class="circle">JV</div>
                    <p>Jade<br> Vicentuan</p>
                </div>
            </div>
        </section>
    </main>
        
    


<script src="javascript/carousel.js"></script>



</body>

</html>