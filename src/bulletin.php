<?php
session_start();
include("php/functions.php");
include("connection.php");
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin</title>
    <link rel="stylesheet" href="css/bulletin.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="height: 100vh;">

    <?php include "includes/navFunction.php" ?>

    <main>
        <section class="posts">
            <h2>Posts</h2>
            <div class="post-grid">
                <?php
                // Placeholder array for posts
                foreach (getPosts() as $post) {
                ?><div class="post">
                        <h3><?= htmlspecialchars($post->post_title); ?></h3>
                        <p><?= htmlspecialchars($post->post_date) ?></p>
                        <p>By <?= htmlspecialchars($post->post_creator) ?></p>
                        <div class="p-container">
                            <p><?= htmlspecialchars($post->post_description) ?></p>
                        </div>
                    </div>
                <?php
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
                <p id="popup-content">This is the content for the selected post.</p>
            </div>
        </div>


    </main>

    <?php include "includes/footer.php" ?>

    <script src="javascript/script.js"></script>

</body>

</html>