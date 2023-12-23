function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var passwordToggle = document.querySelector(".toggle-password img");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggle.src = "assets/images/eye.svg";
  } else {
    passwordInput.type = "password";
    passwordToggle.src = "assets/images/eye-off.svg";
  }
}
