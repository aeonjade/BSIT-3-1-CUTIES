// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

function save_announcement(params) {
  var announcement_title = $("#announcement_title").val();
  var announcement_description = $("#announcement_description").val();
  if (announcement_title == "" || announcement_description == "") {
    alert("Please enter all details to make an announcement.");
    return false;
  }
  $.ajax({
    url: "./php/save_announcements.php",
    type: "POST",
    dataType: "json",
    data: { announcement_title, announcement_description },
    success: function (response) {
      modal.style.display = "none";
      if (response.status == true) {
        //place popup here
        location.reload();
      } else {
        alert(response.msg);
      }
    },
    error: function (xhr, status) {
      console.log("ajax error = " + xhr.statusText);
      alert(response.msg);
    },
  });
  return false;
}

var deleteAnnouncementModal = document.getElementById(
  "delete-confirmation-modal"
);

var current_id;

function deleteAnnouncement(
  announcement_id,
  announcement_title,
  announcement_description
) {
  document.getElementById("remove-announcement-modal-title").innerHTML =
    announcement_title;
  document.getElementById("remove-announcement-modal-description").innerHTML =
    announcement_description;
  deleteAnnouncementModal.style.display = "block";
  current_id = announcement_id;
}

function deleteAnnouncementConfirm() {
  $.ajax({
    url: "./php/remove_announcements.php",
    type: "POST",
    dataType: "json",
    data: { current_id },
    success: function (response) {
      modal.style.display = "none";
      if (response.status == true) {
        location.reload();
      } else {
        alert(response.msg);
      }
    },
    error: function (xhr, status) {
      console.log("ajax error = " + xhr.statusText);
      alert(response.msg);
    },
  });
  return false;
}

var announcementModal = document.getElementById("announcement-modal");
var announcementSpan = document.getElementById("close-announcement-modal");

function clickAnnouncement(announcement_title, announcement_description) {
  document.getElementById("announcement-modal-title").innerHTML =
    announcement_title;
  document.getElementById("announcement-modal-description").innerHTML =
    announcement_description;
  announcementModal.style.display = "block";
}

announcementSpan.onclick = function () {
  announcementModal.style.display = "none";
};

var removeAnnouncementSpan = document.getElementById(
  "remove-announcement-modal"
);

removeAnnouncementSpan.onclick = function () {
  deleteAnnouncementModal.style.display = "none";
};
