// Posts array from PHP (dynamically passed into the script)
const posts = [
  {
    title: "Post Title 1",
    date: "December 3, 2023",
    content: "This is the content for post 1.",
  },
  {
    title: "Post Title 2",
    date: "December 4, 2023",
    content: "This is the content for post 2.",
  },
  {
    title: "Post Title 3",
    date: "December 5, 2023",
    content: "This is the content for post 3.",
  },
  {
    title: "Post Title 4",
    date: "December 6, 2023",
    content: "This is the content for post 4.",
  },
  {
    title: "Post Title 5",
    date: "December 7, 2023",
    content: "This is the content for post 5.",
  },
  {
    title: "Post Title 6",
    date: "December 8, 2023",
    content: "This is the content for post 6.",
  },
];

// Function to open the popup
function openPopup(index) {
  // Validate index
  if (index < 0 || index >= posts.length) {
    console.error("Invalid post index");
    return;
  }

  // Get the selected post data
  const post = posts[index];

  // Update popup content
  document.getElementById("popup-title").textContent = post.title;
  document.getElementById("popup-date").textContent = post.date;
  document.getElementById("popup-content").textContent = post.content;

  // Show the popup
  const popup = document.getElementById("popup-panel");
  popup.classList.remove("hidden");

  // Disable background scrolling
  document.body.classList.add("no-scroll");
}

// Function to close the popup
function closePopup() {
  // Hide the popup
  const popup = document.getElementById("popup-panel");
  popup.classList.add("hidden");

  // Re-enable background scrolling
  document.body.classList.remove("no-scroll");
}

document.getElementById("menu-toggle").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  if (sidebar.style.left === "0px") {
    sidebar.style.left = "-100%"; // Hide the sidebar
  } else {
    sidebar.style.left = "0px"; // Show the sidebar
  }
});

// Initialize the FullCalendar instance
document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");
  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth", // Week view
    headerToolbar: {
      start: "prev", // Navigation buttons
      center: "title", // Calendar title
      end: "today next", // View buttons
    },
    editable: true, // Enables drag-and-drop
    selectable: true, // Enables selection
    eventStartEditable: true, // Allows event dragging
    eventDurationEditable: true, // Allows resizing
    events: "./php/display_events.php", // Fetch events dynamically
    select: function (info) {
      // Create a new event
      const title = prompt("Enter Task Title");
      const time = prompt("Enter Task Time");
      const desc = prompt("Enter Task Description");
      const startDate = info.startStr;
      const endDate = info.endStr;
      if (title) {
        calendar.addEvent({
          title: title,
          start: info.startStr,
          end: info.endStr,
        });

        // Optional: Save event to backend
        $.ajax({
          url: "./php/save_events.php",
          type: "POST",
          dataType: "json",
          data: { title, time, desc, startDate, endDate },
          success: function (response) {
            if (response.status == true) {
              alert(response.msg);
              location.reload();
            } else {
              alert(response.msg);
            }
          },
        });
      }
    },
    eventClick: function (info) {
      // Delete event
      if (confirm(`Do you want to delete the event '${info.event.title}'?`)) {
        const id = info.event.id;
        info.event.remove();

        // Optional: Remove event from backend
        $.ajax({
          url: "./php/remove_events.php",
          type: "POST",
          dataType: "json",
          data: { id },
          success: function (response) {
            if (response.status == true) {
              alert(response.msg);
              location.reload();
            } else {
              alert(response.msg);
            }
          },
        });
      }
    },
    eventResize: function (info) {
      // Update event duration on resize
      const id = info.event.id;
      const start = info.event.startStr;
      const end = info.event.endStr;
      $.ajax({
        url: "./php/update_events.php",
        type: "POST",
        dataType: "json",
        data: { id, start, end },
        success: function (response) {
          if (response.status == true) {
            alert(response.msg);
            location.reload();
          } else {
            alert(response.msg);
          }
        },
      });
    },
    eventDrop: function (info) {
      // Update event position on drag-and-drop
      const id = info.event.id;
      const start = info.event.startStr;
      const end = info.event.endStr;
      $.ajax({
        url: "./php/update_events.php",
        type: "POST",
        dataType: "json",
        data: { id, start, end },
        success: function (response) {
          if (response.status == true) {
            alert(response.msg);
            location.reload();
          } else {
            alert(response.msg);
          }
        },
      });
    },
  });
  calendar.render();
});
