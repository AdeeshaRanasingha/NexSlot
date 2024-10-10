// current date as the default value for the date input field
function registerdDate() {
    
    let today = new Date();
    let day = today.getDate().toString().padStart(2, '0');  // two-digit day
    let month = (today.getMonth() + 1).toString().padStart(2, '0'); // two-digit month
    let year = today.getFullYear();

    // formatting date
    let currentDate = `${year}-${month}-${day}`;

    document.getElementById('date').value = currentDate;
}


window.onload = function () {
    registerdDate();
};


function showSuccessMessage() {
    alert("Vehicle registration successful!");
    
  };

//validation

document.addEventListener("DOMContentLoaded", function () {//if all loaded
    const form = document.querySelector('form');
    const vehicleType = document.getElementById('vehicleType');
    const vehicleBrand = document.getElementById('vehicleBrand');
    const vehicleModel = document.querySelector('input[name="model"]');
    const vehicleNumber = document.getElementById('vehicleNumber');
    const dateField = document.getElementById('date');

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

function validateForm() {
        let isValid = true;

        
        if (vehicleType.value === "") {
            alert("Please select a vehicle type.");
            isValid = false;
        }

        
        if (vehicleBrand.value === "") {
            alert("Please select a vehicle brand.");
            isValid = false;
        }

        
        if (vehicleModel.value.trim() === "") {
            alert("Please enter a vehicle model.");
            isValid = false;
        }

        
        const vehicleNumberPattern = /^[A-Za-z0-9\s\-]+$/; // Allows letters, numbers, spaces, and hyphens
        if (!vehicleNumberPattern.test(vehicleNumber.value)) {
            alert("Please enter a valid vehicle number (letters, numbers, spaces, or hyphens only).");
            isValid = false;
        }

        
        const currentDate = new Date();
        const selectedDate = new Date(dateField.value);
        if (selectedDate > currentDate) {
            alert("Please select a valid date. The date cannot be in the future.");
            isValid = false;
        }

        return isValid;
    }
});




