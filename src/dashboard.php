<?php include "php/functions.php";
header("Access-Control-Allow-Origin: *");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="dashboard">
    <?php include "includes/nav.php" ?>
    <main class="dashboard">
        <div class="left">
            <div class="tasks-header">
                <h1>Tasks</h1>
                <h4 class="hint">Click a date on the calendar to add.</h4>
            </div>
            <div class="tasks-pane">
                <?php
                foreach (getTasks() as $tasks) {
                ?>
                    <div class="task">
                        <h2><?= $tasks->task_title; ?></h2>
                        <h4><?php if ((date("F j, Y", strtotime($tasks->task_start_date))) == (date("F j, Y", strtotime('-1 day', strtotime($tasks->task_end_date))))) {
                                echo date("F j, Y", strtotime($tasks->task_start_date));
                            } else {
                                echo date("F j, Y", strtotime($tasks->task_start_date)) . ' - ' . date("F j, Y", strtotime($tasks->task_end_date));
                            }
                            ?></h4>
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

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script src="javascript/script.js"></script>

</body>

</html>