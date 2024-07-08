<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Create Email</title>
</head>
<body>
<section class="new-user flex">
        <div class="new-u-container email flex">
            <div class="sign-up-bundle s-email flex">
                <h3>Create your account</h3>
                <form class="flex" action="verify-c-a" method="post" id="myform">
                    <div class="form-con flex">
                        <label for="fileInput">Profile image</label>
                        <input type="file" id="fileInput" name="fileInput" accept="image/*">
                    </div>
                    <div class="form-con flex">
                        <div class="req">
                        <label for="name">Name</label>
                        <span>*</span>
                        </div>
                        <input type="text" id="name" placeholder="Please Type Your Name Here" required>
                    </div>
                    <div class="form-con flex">
                        <div class="req">
                        <label for="Username">Username</label>
                        <span>*</span>
                        </div>
                        <input type="text" id="Username" placeholder="Please Type Your Username Here" required>
                    </div>
                    <div class="form-con flex">
                        <div class="req">
                        <label for="Email">Email</label>
                        <span>*</span>
                        </div>
                        <input type="email" id="Email" placeholder="Please Type Your email Here" required>
                    </div>
                    <div class="form-con flex">
                        <div class="req">
                        <label for="password">Password</label>
                        <span>*</span>
                        </div>
                        <div class="wahmy">
                        <input type="password" id="password" placeholder="Please Type Your password Here" required>
                        <button type="button" class="toggle-password" onclick="togglePassword()"> <i class="fas fa-eye" id="toggleIcon"></i></button>
                        </div>
                    </div>
                    <div class="form-con flex">
                        <div class="req">
                        <label for="password-confirmation">Password Confirmation</label>
                        <span>*</span>
                        </div>
                        <input type="password" id="password-confirmation" placeholder="Please Type Your password again Here" required>
                    </div>
                    <div class="form-con flex">
                        <input type="submit" value="Sign Up" id="submitBtn">
                    </div>
                    <div id="errorMessage" class="error"></div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/smooth.js"></script>
    <script>
                document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform');
            const errorMessage = document.getElementById('errorMessage');

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('password-confirmation').value;
                // Password validation regex: At least 8 characters, one capital letter, one number
                const passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

                if (!passwordRegex.test(password)) {
                    errorMessage.textContent = 'Password must be at least 8 characters long, contain at least one capital letter, and one number.';
                    return;
                }
                // Check if passwords match
                if (password !== confirmPassword) {
                    errorMessage.textContent = 'Password do not match. Please try again.';
                    return;
                } else {
                    errorMessage.textContent = '';
                }
                // Submit the form after validation
                form.submit();
            });

            // Remove warning message on input change
            form.querySelectorAll('input').forEach(function (input) {
                input.addEventListener('input', function () {
                    const parent = input.parentElement;
                    const warningMessage = parent.querySelector('.warning-message');

                    if (input.value.trim() !== '' && input.hasAttribute('required') && warningMessage) {
                        parent.removeChild(warningMessage);
                    }
                });
            });
        });
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
//         document.getElementById('myform').addEventListener('submit', function(event) {
//             event.preventDefault();

//             const password = document.getElementById('password').value;
//             const confirmPassword = document.getElementById('password-confirmation').value;
//             const errorMessage = document.getElementById('errorMessage');

//             if (password !== confirmPassword) {
//                 errorMessage.textContent = 'Passwords do not match. Please try again.';
//                 return;
//             } else {
//                 errorMessage.textContent = '';
//             }
//             // Display image preview
//             const fileInput = document.getElementById('fileInput').files[0];
//             if (fileInput) {
//                 const reader = new FileReader();
//                 reader.onload = function(e) {
//                     const img = document.createElement('img');
//                     img.src = e.target.result;
//                     const imagePreview = document.getElementById('imagePreview');
//                     imagePreview.innerHTML = '';
//                     imagePreview.appendChild(img);
//                 };
//                 reader.readAsDataURL(fileInput);
//             }

//             // Submit the form after validation
//             this.submit();
//         });
//         document.addEventListener("DOMContentLoaded", function () {
//         const form = document.getElementById('myform');
//         const submitBtn = document.getElementById('submitBtn');
//         submitBtn.addEventListener('click', function (event) {
//         event.preventDefault();
//         const inputs = form.querySelectorAll('input');
//         let isFilled = true;
//         inputs.forEach(function (input) {
//             const parent = input.parentElement;
//             const warningMessage = parent.querySelector('.warning-message');

//             if (input.value.trim() === '' && input.hasAttribute('required')) {
//                 isFilled = false;
//                 if (!warningMessage) {
//                     const newWarningMessage = document.createElement('div');
//                     newWarningMessage.className = 'warning-message';
//                     newWarningMessage.textContent = 'This field is required.';
//                     parent.appendChild(newWarningMessage);
//                 }
//             } else {
//                 if (warningMessage) {
//                     parent.removeChild(warningMessage);
//                 }
//             }
//         });
//         if (!isFilled) {
//             return;
//         }
//         form.submit();
//     });
//     form.querySelectorAll('input').forEach(function (input) {
//         input.addEventListener('input', function () {
//             const parent = input.parentElement;
//             const warningMessage = parent.querySelector('.warning-message');

//             if (input.value.trim() !== '' && input.hasAttribute('required') && warningMessage) {
//                 parent.removeChild(warningMessage);
//             }
//         });
//     });
// });
    </script>
</body>
</html>
