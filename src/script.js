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
