console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});


function validateForm() {
    var isValid = true; // Track if form is valid

    //varGet input fields
    var name = document.getElementById("signup-name").value;
    var email = document.getElementById("signup-email").value;
    var phone = document.getElementById("signup-phone").value;
    var license = document.getElementById("signup-license").value;
    var specialField = document.getElementById("signup-special-field").value;
    var password = document.getElementById("signup-password").value;
    var confirmPassword = document.getElementById("signup-confirm-password").value;

    //var//Get error message spans
    var errorName = document.getElementById("error-name");
    var errorEmail = document.getElementById("error-email");
    var errorPhone = document.getElementById("error-phone");
    var errorLicense = document.getElementById("error-license");
    var errorSpecialField = document.getElementById("error-special-field");
    var errorPassword = document.getElementById("error-password");
    var errorConfirmPassword = document.getElementById("error-confirm-password");

    // Reset previous error messages
    errorName.innerHTML = "";
    errorEmail.innerHTML = "";
    errorPhone.innerHTML = "";
    errorLicense.innerHTML = "";
    errorSpecialField.innerHTML = "";
    errorPassword.innerHTML = "";
    errorConfirmPassword.innerHTML = "";

    // Validate Name
    if (name === "") {
        errorName.innerHTML = "Name is required.";
        isValid = false;
    }

    // Validate Email
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (email === "") {
        errorEmail.innerHTML = "Email is required.";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        errorEmail.innerHTML = "Invalid email format.";
        isValid = false;
    }

    // Validate Phone
    let phonePattern = /^[0-9]{11}$/;
    if (phone === "") {
        errorPhone.innerHTML = "Phone number is required.";
        isValid = false;
    } else if (!phonePattern.test(phone)) {
        errorPhone.innerHTML = "Phone number must be 11 digits.";
        isValid = false;
    }

    // Validate License
    if (license === "") {
        errorLicense.innerHTML = "License is required.";
        isValid = false;
    }

    // Validate Special Field
    if (specialField === "") {
        errorSpecialField.innerHTML = "Special field is required.";
        isValid = false;
    }

    // Validate Password
    if (password === "") {
        errorPassword.innerHTML = "Password is required.";
        isValid = false;
    } else if (password.length < 6) {
        errorPassword.innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    }

    // Validate Confirm Password
    if (confirmPassword === "") {
        errorConfirmPassword.innerHTML = "Confirm Password is required.";
        isValid = false;
    } else if (password !== confirmPassword) {
        errorConfirmPassword.innerHTML = "Passwords do not match.";
        isValid = false;
    }

    return isValid; 
}
