document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector(".login-form");

    loginForm.addEventListener("submit", function (event) {
        let isValid = true;
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");
        const emailError = document.getElementById("email-error");
        const passwordError = document.getElementById("password-error");

        // Reset previous error messages
        emailError.textContent = "";
        passwordError.textContent = "";

        // Email Validation
        const emailValue = emailInput.value.trim();
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

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });
});
