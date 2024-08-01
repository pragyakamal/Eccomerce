// document.getElementById('loginForm').addEventListener('submit', function(event) {
//  // Prevent default form submission

//     // Clear previous error messages
//     clearErrors();

//     // Get form values
//     const email = document.getElementById('email').value.trim();
//     const password = document.getElementById('password').value;

//     console.log('Email:', email); // Debugging
//     console.log('Password:', password); // Debugging

//     // Validate form values
//     let isValid = true;

//     if (!validateEmail(email)) {
//         isValid = false;
//     }

//     if (!validatePassword(password)) {
//         isValid = false;
//     }

//     if (isValid) {
//         console.log('Form data is valid');
//         alert('Login successful'); // Changed message for clarity
//         // Log form data to the console
//         console.log('Form Data:', {
//             email: email,
//             password: password
//         });
//         // You can add code here to submit the form data to the server, e.g., using Fetch API or XMLHttpRequest
//     } else {
//         console.log('Form data is invalid');
//         alert('Invalid Login');
//     }
// });

// function clearErrors() {
//     document.getElementById('emailError').style.display = 'none';
//     document.getElementById('emailError').textContent = '';
//     document.getElementById('passwordError').style.display = 'none';
//     document.getElementById('passwordError').textContent = '';
// }

// function validateEmail(email) {
//     const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!re.test(String(email).toLowerCase())) {
//         showError('emailError', 'Invalid email format.');
//         return false;
//     }
//     return true;
// }

// function validatePassword(password) {
//     if (password.length < 6) {
//         showError('passwordError', 'Password must be at least 6 characters.');
//         return false;
//     }
//     return true;
// }

// function showError(elementId, message) {
//     const errorElement = document.getElementById(elementId);
//     errorElement.textContent = message;
//     errorElement.style.display = 'block';
// }
