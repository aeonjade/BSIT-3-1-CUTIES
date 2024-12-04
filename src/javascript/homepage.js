// script.js

// Function to position images in a circular layout
function positionImages() {
    const carouselImages = document.querySelector('.carousel-images');
    const images = document.querySelectorAll('.carousel-images img');
    const numImages = images.length;
    const angleStep = 360 / numImages;  // Calculate the angle between each image
    
    images.forEach((img, index) => {
        const angle = angleStep * index;
        const radius = 200; // Radius of the circle
        img.style.transform = `rotateY(${angle}deg) translateZ(${radius}px)`; // 3D positioning

        // Add click event listener to each image
        img.addEventListener('click', () => {
            openModal(img.src); // Open modal with clicked image
        });
    });
}

// Open the modal with the clicked image
function openModal(imageSrc) {
    const modal = document.querySelector('.modal');
    const modalContent = document.querySelector('.modal-content');
    const closeButton = document.querySelector('.close-btn');

    modal.style.display = 'flex'; // Show the modal
    modalContent.src = imageSrc; // Set the image source for modal content
}

// Close the modal
function closeModal() {
    const modal = document.querySelector('.modal');
    modal.style.display = 'none'; // Hide the modal
}

// Add event listener to close the modal when clicking on the close button
document.querySelector('.close-btn').addEventListener('click', closeModal);

// Optional: Close the modal if the user clicks outside the modal content
window.addEventListener('click', (e) => {
    const modal = document.querySelector('.modal');
    if (e.target === modal) {
        closeModal();
    }
});

// Call the function on page load to position images in a circle
document.addEventListener('DOMContentLoaded', positionImages);


///;;;;;
