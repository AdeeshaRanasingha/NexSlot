
let bookedSlot = null;



function bookSlot(event) {
    const button = event.target; 

    // Check if the button is already booked
    if (bookedSlot) {
        alert("You can only book one slot at a time!");
    } else if (button.style.backgroundColor === "red") {
        alert("This slot is already booked!"); 
    } else {
        // Book the slot
        bookedSlot = button.innerText; 
        button.style.backgroundColor = "red"; 
        button.disabled = true; 
        alert(`Slot ${button.innerText} booked successfully!`); // Alert for successful booking

    }
}

document.querySelectorAll('.floor-slots button').forEach(button => {
    button.addEventListener('click', bookSlot);
});

function selectSlot(floor, slot){
    document.getElementById('selectedFloor').value = floor;
    document.getElementById('selectedSlot').value = slot;

let bookedSlot = null;

    alert("selected");
};

