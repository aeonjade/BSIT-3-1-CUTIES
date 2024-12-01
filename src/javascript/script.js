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
document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek', // Week view
        headerToolbar: {
            start: 'prev,next today', // Navigation buttons
            center: 'title',          // Calendar title
            end: 'dayGridMonth,timeGridWeek,timeGridDay' // View buttons
        },
        editable: true,             // Enables drag-and-drop
        selectable: true,           // Enables selection
        eventStartEditable: true,   // Allows event dragging
        eventDurationEditable: true, // Allows resizing
        events: '/api/get-events',  // Fetch events dynamically
        select: function (info) {
            // Create a new event
            const title = prompt("Enter Event Title");
            if (title) {
                calendar.addEvent({
                    title: title,
                    start: info.startStr,
                    end: info.endStr,
                    allDay: info.allDay
                });

                // Optional: Save event to backend
                fetch('/api/create-event', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        title: title,
                        start: info.startStr,
                        end: info.endStr
                    })
                }).then(response => response.json())
                  .then(data => alert('Event saved successfully!'));
            }
        },
        eventClick: function (info) {
            // Delete event
            if (confirm(`Do you want to delete the event '${info.event.title}'?`)) {
                info.event.remove();

                // Optional: Remove event from backend
                fetch(`/api/delete-event/${info.event.id}`, {
                    method: 'DELETE'
                }).then(response => response.json())
                  .then(data => alert('Event deleted successfully!'));
            }
        },
        eventResize: function (info) {
            // Update event duration on resize
            fetch('/api/update-event', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id: info.event.id,
                    start: info.event.start.toISOString(),
                    end: info.event.end.toISOString()
                })
            }).then(response => response.json())
              .then(data => alert('Event updated successfully!'));
        },
        eventDrop: function (info) {
            // Update event position on drag-and-drop
            fetch('/api/update-event', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id: info.event.id,
                    start: info.event.start.toISOString(),
                    end: info.event.end.toISOString()
                })
            }).then(response => response.json())
              .then(data => alert('Event updated successfully!'));
        }
    });

    calendar.render();
});

const express = require('express');
const app = express();
app.use(express.json());

// Mock event data
let events = [
    { id: '1', title: 'Sample Event', start: '2024-12-05', end: '2024-12-07' }
];

// Get events
app.get('/api/get-events', (req, res) => {
    res.json(events);
});

// Create event
app.post('/api/create-event', (req, res) => {
    const newEvent = { id: Date.now().toString(), ...req.body };
    events.push(newEvent);
    res.json(newEvent);
});

// Update event
app.put('/api/update-event', (req, res) => {
    const { id, start, end } = req.body;
    const event = events.find(event => event.id === id);
    if (event) {
        event.start = start;
        event.end = end;
        res.json(event);
    } else {
        res.status(404).send('Event not found');
    }
});

// Delete event
app.delete('/api/delete-event/:id', (req, res) => {
    events = events.filter(event => event.id !== req.params.id);
    res.json({ success: true });
});

app.listen(3000, () => console.log('Server running on port 3000'));
