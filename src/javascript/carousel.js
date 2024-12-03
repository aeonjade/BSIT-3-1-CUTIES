// Function to open the modal and display the clicked image
function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modal.style.display = "flex"; // Make modal visible
    modalImage.src = imageSrc;  // Set the clicked image as the modal image
  }
  
  // Function to close the modal
  function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = "none"; // Hide the modal
  }
  