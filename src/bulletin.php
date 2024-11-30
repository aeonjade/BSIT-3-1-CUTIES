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
        for ($i = 0; $i < 9; $i++) {
            echo '<div class="post">';
            echo '<h3>Post Title ' . ($i + 1) . '</h3>';
            echo '<p>December 3, 2023</p>';
            echo '<p>Content placeholder...</p>';
            echo '</div>';
        }
        ?>
    </div>
</section>

    </main>

<?php include "includes/footer.php" ?>

</body>

</html>
