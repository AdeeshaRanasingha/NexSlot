 
 function generateRandomNumbers() {

   
    const floorNumber = Math.floor(Math.random() * 5) + 1;   //  floor number between 1 and 5

    
    const slotNumber = Math.floor(Math.random() * 11) + 1;   // Generate a random slot number between 1 and 11

    // Set the generated numbers to the respective input fields
    document.getElementById('selectedFloor').value = floorNumber;
    document.getElementById('selectedSlot').value = slotNumber;
}


window.onload = function() {    // this for prevent from work above func without page loaded
    generateRandomNumbers();
};