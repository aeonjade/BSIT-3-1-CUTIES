// Get DOM Elements
const carousel = document.querySelector('.carousel');
const cards = document.querySelectorAll('.card');
const modal = document.getElementById('modal');
const modalImage = document.getElementById('modal-image');
const closeBtn = document.getElementById('close-btn');

// Initialize carousel index and direction
let currentIndex = 0;
let movingForward = true; // Track the direction of movement
let isTransitioning = false; // To handle smooth transition reset

// Update Carousel to Keep Middle Card in Front
function updateCarouselPosition() {
    const cardWidth = cards[0].offsetWidth + 20; // Width + margin
    carousel.style.transition = isTransitioning ? "transform 0s" : "transform 0.5s ease-in-out"; // No transition during reset
    carousel.style.transform = `translateX(-${(currentIndex - 1) * cardWidth}px)`;

    // Reset the scale and opacity for all cards
    cards.forEach(card => {
        card.style.transform = "scale(1)";
        card.style.opacity = "0.6";
    });

    // Highlight the middle card
    const middleCard = cards[currentIndex];
    middleCard.style.transform = "scale(1.2)";
    middleCard.style.opacity = "1";
}

// Auto-slide function (with reversing direction)
function moveToNextCard() {
    if (movingForward) {
        if (currentIndex >= cards.length - 1) {
            // Reached the last card, reverse direction
            movingForward = false;
        } else {
            currentIndex++;
        }
    } else {
        if (currentIndex <= 0) {
            // Reached the first card, reverse direction
            movingForward = true;
        } else {
            currentIndex--;
        }
    }
    updateCarouselPosition();
}

// Set interval for auto-sliding every 2 seconds
setInterval(moveToNextCard, 2000);

// Add event listener for clicking a card to show the modal
cards.forEach(card => {
    card.addEventListener('click', () => {
        const imgSrc = card.querySelector('img').src;
        modalImage.src = imgSrc;  // Set the image in the modal
        modal.style.display = 'flex'; // Show the modal
    });
});

// Close the modal when the close button is clicked
closeBtn.addEventListener('click', () => {
    modal.style.display = 'none'; // Hide the modal
});

// Close the modal when clicking outside of the modal content
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

// Initial carousel position update
updateCarouselPosition();
