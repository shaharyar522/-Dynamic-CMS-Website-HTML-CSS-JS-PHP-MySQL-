// Function to update the timer in 12-hour format
function updateTimer() {
    const timeElement = document.getElementById('time');
    const now = new Date();
    
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0'); // Ensure 2 digits
    const seconds = String(now.getSeconds()).padStart(2, '0'); // Ensure 2 digits
    const amPm = hours >= 12 ? 'PM' : 'AM'; // Determine AM or PM

    // Convert hours from 24-hour to 12-hour format
    hours = hours % 12 || 12; // Convert 0 (midnight) and 12 (noon) correctly

    timeElement.textContent = `${hours}:${minutes}:${seconds} ${amPm}`;
}

// Update the timer every second
setInterval(updateTimer, 1000);

// Initialize the timer immediately
updateTimer();
