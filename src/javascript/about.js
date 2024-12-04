// Select all the developer cards
const cards = document.querySelectorAll('.developer-card');

// Add click event listener to each card
cards.forEach((card, index) => {
    card.addEventListener('click', () => {
        // Reset all cards to their original state
        cards.forEach(c => c.classList.remove('clicked'));
        
        // Add the 'clicked' class to the clicked card
        card.classList.add('clicked');
    });
});
