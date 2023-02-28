// Toggle password visibility
function togglePasswordVisibility() {
    const passwordField = document.getElementById("password");
    const toggleButton = document.querySelector(".toggle-password i");
  
    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleButton.textContent = "visibility";
    } else {
      passwordField.type = "password";
      toggleButton.textContent = "visibility_off";
    }
  }
  
