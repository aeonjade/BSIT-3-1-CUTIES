// Function to open the modal and disable scrolling
function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modal.style.display = "flex"; // Make modal visible
    modalImage.src = imageSrc;  // Set the clicked image as the modal image
    
    // Add class to body to disable scrolling
    document.body.classList.add('no-scroll');
}

// Function to close the modal and re-enable scrolling
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = "none"; // Hide the modal
    
    // Remove class from body to re-enable scrolling
    document.body.classList.remove('no-scroll');
}
