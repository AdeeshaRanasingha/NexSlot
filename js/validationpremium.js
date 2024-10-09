function validateForm() {
    const name = document.querySelector('input[name="name"]').value.trim();
    const nic = document.querySelector('input[name="nic"]').value.trim();
    const licence = document.querySelector('input[name="licence"]').value.trim();
    const date = document.querySelector('input[name="date"]').value;
  
   
    if (name === "") {
      alert("Name cannot be empty");
      return false;
    }
  
    
    if (!/^\d{12}$/.test(nic)) {
      alert("NIC must be a 12-digit number");
      return false;
    }
  
   
    if (date === "") {
      alert("Date cannot be empty");
      return false;
    }
  
   
    if (!/^[A-Za-z]\d{7}$/.test(licence)) {
      alert("License must have 1 letter followed by 7 digits");
      return false;
    }
  
    return true; 
  }