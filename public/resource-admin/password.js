var passwordInput1 = document.getElementById("password1");
var eyeIcon1 = document.getElementById("eyeIcon1");

document.getElementById("button-addon1").addEventListener("click", function () {
  if (passwordInput1.type === "password") {
    passwordInput1.type = "text";
    eyeIcon1.classList.remove("fa-eye");
    eyeIcon1.classList.add("fa-eye-slash");
  } else {
    passwordInput1.type = "password";
    eyeIcon1.classList.remove("fa-eye-slash");
    eyeIcon1.classList.add("fa-eye");
  }
});

var passwordInput2 = document.getElementById("password2");
var eyeIcon2 = document.getElementById("eyeIcon2");

document.getElementById("button-addon2").addEventListener("click", function () {
  if (passwordInput2.type === "password") {
    passwordInput2.type = "text";
    eyeIcon2.classList.remove("fa-eye");
    eyeIcon2.classList.add("fa-eye-slash");
  } else {
    passwordInput2.type = "password";
    eyeIcon2.classList.remove("fa-eye-slash");
    eyeIcon2.classList.add("fa-eye");
  }
});

var passwordInput3 = document.getElementById("password3");
var eyeIcon3 = document.getElementById("eyeIcon3");

document.getElementById("button-addon3").addEventListener("click", function() {
    if (passwordInput3.type === "password") {
        passwordInput3.type = "text";
        eyeIcon3.classList.remove("fa-eye");
        eyeIcon3.classList.add("fa-eye-slash");
    } else {
        passwordInput3.type = "password";
        eyeIcon3.classList.remove("fa-eye-slash");
        eyeIcon3.classList.add("fa-eye");
    }
});