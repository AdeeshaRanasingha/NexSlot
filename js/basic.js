 //  generate random floor and slot numbers
 function generateRandomNumbers() {

    //  floor number between 1 and 10
    const floorNumber = Math.floor(Math.random() * 5) + 1;

    // Generate a random slot number between 1 and 50
    const slotNumber = Math.floor(Math.random() * 11) + 1;

    // Set the generated numbers to the respective input fields
    document.getElementById('selectedFloor').value = floorNumber;
    document.getElementById('selectedSlot').value = slotNumber;
}

// Optionally, generate the floor and slot numbers automatically when the page loads
window.onload = function() {
    generateRandomNumbers();
};