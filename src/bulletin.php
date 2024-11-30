<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
   
<?php include "includes/nav.php" ?>

    <main>
        <!-- Announcement Section -->
        <section class="announcement">
            <h2>Announcement</h2>
            <div class="announcement-scroll">
                <div class="box">
                    <p>Bayad kayo</p>
                    <small>may fucking ambagan</small>
                </div>
                <div class="box">
                    <p>Another announcement</p>
                    <small>Placeholder text</small>
                </div>
                <div class="box">
                    <p>More announcements</p>
                    <small>Placeholder text</small>
                </div>
                <div class="box">
                    <p>Final announcement</p>
                    <small>Placeholder text</small>
                </div>
            </div>
        </section>
 <!-- Posts Section -->
 <section class="posts">
            <h2>Posts</h2>
            <div class="post-grid">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo '<div class="post" onclick="openPopup(' . $i . ')">';
                    echo '<h3>Post Title ' . ($i + 1) . '</h3>';
                    echo '<p>December 3, 2023</p>';
                    echo '<p>Gusto ko na mamatayyyyy</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>

        <!-- Popup Panel -->
        <div id="popup-panel" class="popup hidden">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2 id="popup-title">Post Title</h2>
                <p id="popup-date">December 3, 2023</p>
                <p id="popup-content">Gusto ko na mamatayyyyy hell yeaaah</p>
                <div class="popup-images">
                    <div class="popup-image"></div>
                    <div class="popup-image"></div>
                </div>
            </div>
        </div>

    </main>

<?php include "includes/footer.php" ?>

<script src="javascript/script.js"></script>

</body>

</html>
