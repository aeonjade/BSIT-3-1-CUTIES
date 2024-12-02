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

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
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
        alert(response.msg);
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
