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
    <title>Bulletin</title>
    <link rel="stylesheet" href="css/bulletin.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="main-bg">

    <?php include "includes/navFunction.php" ?>

    <main>
        <section class="posts">
            <h2>Posts</h2>
            <div class="post-grid">
                <?php
                // Placeholder array for posts
                $posts = [
                    [
                        "title" => "Post Title 1",
                        "date" => "December 3, 2023",
                        "content" => "This is the content for post 1."
                    ],
                    [
                        "title" => "Post Title 2",
                        "date" => "December 4, 2023",
                        "content" => "This is the content for post 2."
                    ],
                    [
                        "title" => "Post Title 3",
                        "date" => "December 5, 2023",
                        "content" => "This is the content for post 3."
                    ],
                    [
                        "title" => "Post Title 4",
                        "date" => "December 6, 2023",
                        "content" => "This is the content for post 4."
                    ],
                    [
                        "title" => "Post Title 5",
                        "date" => "December 7, 2023",
                        "content" => "This is the content for post 5."
                    ],
                    [
                        "title" => "Post Title 6",
                        "date" => "December 8, 2023",
                        "content" => "This is the content for post 6."
                    ],
                    [
                        "title" => "Post Title 6",
                        "date" => "December 8, 2023",
                        "content" => "This is the content for post 6."
                    ],
                    [
                        "title" => "Post Title 6",
                        "date" => "December 8, 2023",
                        "content" => "This is the content for post 6."
                    ],
                    [
                        "title" => "Post Title 6",
                        "date" => "December 8, 2023",
                        "content" => "This is the content for post 6."
                    ]

                ];

                // Generate posts dynamically
                foreach ($posts as $index => $post) {
                    echo '<div class="post" onclick="openPopup(' . $index . ')">';
                    echo '<h3>' . htmlspecialchars($post["title"]) . '</h3>';
                    echo '<p>' . htmlspecialchars($post["date"]) . '</p>';
                    echo '<p>' . htmlspecialchars($post["content"]) . '</p>';
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
                <p id="popup-content">This is the content for the selected post.</p>
            </div>
        </div>


    </main>

    <?php include "includes/footer.php" ?>

    <script src="javascript/script.js"></script>

</body>

</html>