<?php include "php/functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.css" rel="stylesheet">
</head>

<body class="dashboard">
    <?php include "includes/nav.php" ?>
    <main class="dashboard">
        <div class="left">
            <div class="tasks-header">
                <h1>Tasks</h1>
            </div>
            <div class="tasks-pane">
                <?php
                foreach (getTasks() as $tasks) {
                ?>
                    <div class="task">
                        <h2><?= $tasks->task_title; ?></h2>
                        <h4><?= date("F j, Y", strtotime($tasks->task_date)); ?></h4>
                        <h4><?= date("g A", strtotime($tasks->task_time)); ?></h4>
                        <p><?= $tasks->task_description; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="right">

            <div class="calendar-pane" id="calendar"></div>

            <div class="announcement-header">
                <h1>Announcements</h1>
                <a href="bulletin.php">See posts...</a>
            </div>
            <div class="announcements-pane">
                <?php
                foreach (getAnnouncements() as $announcement) {
                ?>
                    <div class="announcements-new">
                        <h2><?= $announcement->announcement_title; ?></h2>
                        <p><?= $announcement->announcement_description; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js"></script>
    <script src="javascript/calendar.js"></script>

</body>

</html>