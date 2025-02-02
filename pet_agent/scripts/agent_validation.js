document.getElementById('agent-registration-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission until validation passes

    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(error => {
        error.style.display = 'none';
    });

    // Validate Name
    const name = document.getElementById('name').value.trim();
    if (name === '') {
        isValid = false;
        document.getElementById('name-error').textContent = 'Name is required.';
        document.getElementById('name-error').style.display = 'block';
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email === '') {
        isValid = false;
        document.getElementById('email-error').textContent = 'Email is required.';
        document.getElementById('email-error').style.display = 'block';
    } else if (!emailRegex.test(email)) {
        isValid = false;
        document.getElementById('email-error').textContent = 'Invalid email format.';
        document.getElementById('email-error').style.display = 'block';
    }

    // Validate Password
    const password = document.getElementById('password').value.trim();
    if (password === '') {
        isValid = false;
        document.getElementById('password-error').textContent = 'Password is required.';
        document.getElementById('password-error').style.display = 'block';
    }

    // Validate Contact Number
    const contactNumber = document.getElementById('contact_number').value.trim();
    const contactRegex = /^[0-9]{10}$/; // Assuming a 10-digit number for contact number
    if (contactNumber === '') {
        isValid = false;
        document.getElementById('contact-number-error').textContent = 'Contact number is required.';
        document.getElementById('contact-number-error').style.display = 'block';
    } else if (!contactRegex.test(contactNumber)) {
        isValid = false;
        document.getElementById('contact-number-error').textContent = 'Invalid contact number.';
        document.getElementById('contact-number-error').style.display = 'block';
    }

    // If all fields are valid, submit the form
    if (isValid) {
        this.submit();
    }
});
