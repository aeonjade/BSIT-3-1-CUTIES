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
        <div class="left-group">
            <div class="left">

                <!-- The Modal -->
                <div id="delete-task-modal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Remove Task?</h1>
                            <span id="close-remove-task-modal" class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <h2 class="expanded-title-task" id="remove-task-modal-title"></h2>
                            <h4>Are you sure you want to remove this task?</h4>
                            <div class="modal-buttons">
                                <button class="no" id="no-option">No</button>
                                <button class="yes" id="yes-option">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div id="add-task-modal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Add Task</h1>
                            <span id="close-add-task-modal" class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <label for="task_title">Task Title:</label>
                            <input type="text" name="task_title" id="task_title" class="announcement_title" maxlength="50" placeholder="Enter task title...">
                            <label for="task_time">Task Time:</label>
                            <input type="time" name="task_time" id="task_time" class="announcement_title">
                            <label for="task_description">Announcement Description:</label>
                            <textarea name="task_description" id="task_description" class="announcement_description" maxlength="300" placeholder="Enter task description..."></textarea>
                        </div>
                        <div class="modal-submit">
                            <button type="button" id="save_task" class="submit-button">Add Task</button>
                        </div>
                    </div>

                </div>
                <!-- MODAL END -->
                <div class="tasks-header">
                    <h1>Tasks</h1>
                </div>
                <div class="tasks-pane">
                    <?php
                    foreach (getTasks() as $tasks) {
                    ?>
                        <div class="task">
                            <h2><?= htmlspecialchars($tasks->task_title); ?></h2>
                            <h4><?php
                                $startDate = date("F j, Y", strtotime($tasks->task_start_date));
                                $endDate = date("F j, Y", strtotime('-1 day', strtotime($tasks->task_end_date)));

                                if ($startDate == $endDate) {
                                    echo $startDate;
                                } else {
                                    echo $startDate . ' - ' . $endDate;
                                }
                                ?></h4>
                            <h4><?= date("g:i A", strtotime($tasks->task_time)); ?></h4>
                            <p><?= htmlspecialchars($tasks->task_description); ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="tasks-footer">
                <h4 class="hint">Click a date on the calendar to <span style="color: green;">add</span> a task.
                    <br>Click a task to <span style="color: red;">remove</span> it from the list.
                    <br>You can also drag and resize tasks!
                </h4>
            </div>
        </div>
        <div class="right">

            <div class="calendar-pane" id="calendar"></div>

            <div class="announcement-header">
                <h1>Announcements</h1>


                <!-- MODAL START -->
                <!-- Trigger/Open The Modal -->
                <button id="myBtn">Add</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Add Announcement</h1>
                            <span id="close-add-announcement" class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <label for="announcement_title">Announcement Title:</label>
                            <input type="text" name="announcement_title" id="announcement_title" class="announcement_title" maxlength="50" placeholder="Enter announcement title...">
                            <label for="announcement_description">Announcement Description:</label>
                            <textarea name="announcement_description" id="announcement_description" class="announcement_description" maxlength="700" placeholder="Enter announcement description..."></textarea>
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
                    <!-- The Modal -->
                    <div id="announcement-modal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1>ANNOUNCEMENT</h1>
                                <span id="close-announcement-modal" class="close">&times;</span>
                            </div>
                            <div class="modal-body">
                                <h2 class="expanded-title" id="announcement-modal-title"></h2>
                                <h3 class="expanded-description" id="announcement-modal-description"></h3>
                            </div>
                        </div>
                    </div>

                    <!-- The Modal -->
                    <div id="delete-confirmation-modal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1>Remove Announcement?</h1>
                                <span onclick="removeAnnouncementModal()" class="close">&times;</span>
                            </div>
                            <div class="modal-body">
                                <h2 class="expanded-title" id="remove-announcement-modal-title"><?= $announcement->announcement_title  ?></h2>
                                <h3 class="expanded-description" id="remove-announcement-modal-description"><?= $announcement->announcement_description  ?></h3>
                                <h4>Are you sure you want to remove this announcement?</h4>
                                <div class="modal-buttons">
                                    <button class="no" onclick="removeAnnouncementModal()">No</button>
                                    <button class="yes" onclick="deleteAnnouncementConfirm()">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="announcements-new">
                        <div class="announcement-title">
                            <h2 onclick="clickAnnouncement('<?= htmlspecialchars($announcement->announcement_title)  ?>', '<?= htmlspecialchars($announcement->announcement_description)  ?>')"><?= htmlspecialchars($announcement->announcement_title); ?></h2>
                            <span class="delete-announcement" onclick="deleteAnnouncement('<?= $announcement->announcement_id  ?>', '<?= htmlspecialchars($announcement->announcement_title)  ?>', '<?= htmlspecialchars($announcement->announcement_description)  ?>')">&times;</span>
                        </div>
                        <div onclick="clickAnnouncement('<?= htmlspecialchars($announcement->announcement_title)  ?>', '<?= htmlspecialchars($announcement->announcement_description)  ?>')" class="announcement-body">
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