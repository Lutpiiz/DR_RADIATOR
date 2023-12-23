function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var passwordToggle = document.querySelector(".toggle-password img");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggle.src = "img/eye.svg";
  } else {
    passwordInput.type = "password";
    passwordToggle.src = "img/eye-off.svg";
  }
}
