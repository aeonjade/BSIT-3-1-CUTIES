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
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="dashboard">
    <?php include "includes/navFunction.php" ?>
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
                        <h4><?php
                            $startDate = date("F j, Y", strtotime($tasks->task_start_date));
                            $endDate = date("F j, Y", strtotime('-1 day', strtotime($tasks->task_end_date)));

                            if ($startDate == $endDate) {
                                echo $startDate;
                            } else {
                                echo $startDate . ' - ' . $endDate;
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


                <!-- MODAL START -->
                <!-- Trigger/Open The Modal -->
                <button id="myBtn">Add Announcement</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Add Announcement</h1>
                            <span class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <label for="announcement_title">Announcement Title:</label>
                            <input type="text" name="announcement_title" id="announcement_title" class="announcement_title" maxlength="50" placeholder="Enter announcement title...">
                            <label for="announcement_description">Announcement Description:</label>
                            <textarea name="announcement_description" id="announcement_description" class="announcement_description" maxlength="200" placeholder="Enter announcement description..."></textarea>
                        </div>
                        <div class="modal-submit">
                            <button type="button" class="submit-button" onclick="save_announcement()">Add Announcement</button>
                        </div>
                    </div>

                </div>
                <!-- MODAL END -->


            </div>
            <div class="announcements-pane">
                <?php
                foreach (getAnnouncements() as $announcement) {
                ?>
                    <div class="announcements-new">
                        <div class="announcement-title">
                            <h2><?= $announcement->announcement_title; ?></h2>
                            <span class="close-announcement" onclick="deleteAnnouncement(<?= $announcement->announcement_id  ?>)">&times;</span>
                        </div>
                        <div class="announcement-body">
                            <p><?= $announcement->announcement_description; ?></p>
                        </div>
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
    <script src="javascript/modal.js"></script>

</body>

</html>