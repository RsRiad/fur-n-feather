document.addEventListener("DOMContentLoaded", function () {
    var loginForm = document.querySelector(".login-form");

    loginForm.addEventListener("submit", function (event) {
        var isValid = true;
        var emailInput = document.getElementById("email");
        var passwordInput = document.getElementById("password");
        var emailError = document.getElementById("email-error");
        var passwordError = document.getElementById("password-error");

        
        emailError.textContent = "";
        passwordError.textContent = "";

        // Email Validation
        var emailValue = emailInput.value.trim();
        if (emailValue === "") {
            emailError.textContent = "Email is required.";
            isValid = false;
        } else if (!/^\S+@\S+\.\S+$/.test(emailValue)) {
            emailError.textContent = "Invalid email format.";
            isValid = false;
        }

        // Password Validation
        if (passwordInput.value.trim() === "") {
            passwordError.textContent = "Password is required.";
            isValid = false;
        }

        
        if (!isValid) {
            event.preventDefault();
        }
    });
});
