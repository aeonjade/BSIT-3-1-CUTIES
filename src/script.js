//array to
function openPopup(index) {
    const posts = [
        {
            title: "Uminom kami by brets",
            date: "December 3, 2023",
            content: "Gusto ko na mamatayyyyy hell yeaaah",
        },
        {
            title: "Another Post Title",
            date: "December 4, 2023",
            content: "This is another placeholder content for the popup.",
        },
        {
            title: "Final Post Title",
            date: "December 5, 2023",
            content: "Here is the final post's detailed description.",
        },
    ];



    // kinukuha ko ung id
    const popupTitle = document.getElementById("popup-title");
    const popupDate = document.getElementById("popup-date");
    const popupContent = document.getElementById("popup-content");

    // dito ung index don sa array na post
    popupTitle.textContent = posts[index].title;
    popupDate.textContent = posts[index].date;
    popupContent.textContent = posts[index].content;

    // Show the popup
    document.getElementById("popup-panel").classList.remove("hidden");
}

// Close Popup
function closePopup() {
    document.getElementById("popup-panel").classList.add("hidden");
}
