// Variable to keep track of the booked slot
let bookedSlot = null;

// Function to handle slot booking
function bookSlot(event) {
    const button = event.target; // The clicked button

    // Check if the button is already booked
    if (bookedSlot) {
        alert("You can only book one slot at a time!"); // Alert for already booked slots
    } else if (button.style.backgroundColor === "red") {
        alert("This slot is already booked!"); // Alert for already booked slots
    } else {
        // Book the slot
        bookedSlot = button.innerText; // Store the booked slot
        button.style.backgroundColor = "red"; // Change the button color to indicate it's booked
        button.disabled = true; // Disable the button to prevent future clicks
        alert(`Slot ${button.innerText} booked successfully!`); // Alert for successful booking
    }
}

// Attach event listeners to each slot button
document.querySelectorAll('.floor-slots button').forEach(button => {
    button.addEventListener('click', bookSlot);
});


function selectSlot(floor, slot){
    document.getElementById('selectedFloor').value = floor;
    document.getElementById('selectedSlot').value = slot;
// Variable to keep track of the booked slot
let bookedSlot = null;

    alert("selected");
}

