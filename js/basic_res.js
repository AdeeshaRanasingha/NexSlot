// select for , reset buton and submit button from basic reservation
const reservationForm = document.querySelector(".form");
const resetButton = reservationForm.querySelector('input[type="reset"]');
const submitButton = reservationForm.querySelector('input[type="submit"]');





// Alert message when form is submitted
submitButton.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent default form submission           
  alert("Reservation successfully submitted!");
  reservationForm.submit(); // Submit the form after the alert
});




// Alert confirmation when form is reset
resetButton.addEventListener("click", (event) => {
  const confirmReset = confirm("Are you sure you want to reset the form?");
  if (!confirmReset) {
    event.preventDefault(); // Prevent form reset if user cancels
  }
});
