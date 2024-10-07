// Function to set the current date as the default value for the date input field
function registerdDate() {
    // Get the current date
    let today = new Date();
    let day = today.getDate().toString().padStart(2, '0');  // Ensure two-digit day
    let month = (today.getMonth() + 1).toString().padStart(2, '0'); // Months are 0-based, ensure two-digit month
    let year = today.getFullYear();

    // Format the date as yyyy-mm-dd
    let currentDate = `${year}-${month}-${day}`;

    // Set the value of the date input field to the current date
    document.getElementById('date').value = currentDate;
}

// Call the function when the window loads
window.onload = function () {
    registerdDate();
};

// Function to show a success message without redirection
function showSuccessMessage() {
    alert("Vehicle registration successful!");
    // No redirection, just showing the alert
  }

