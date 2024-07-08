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
    <title>Log In</title>
    <style>
        .new-u-container>span::after{
            content: "OR";
            position: absolute;
            left: 46%;
            top: -11px;
            background-color: #180615;
            padding: 0 10px;
        }
        .form-con {
            flex-direction: column;
            gap: 12px;
            position: relative;
        }
        form {
            flex-direction: column;
            gap: 30px;
            display: flex;
            width: 100%;
        }
        input[type="email"],
        input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid white;
            width: 90%;
            padding: 15px;
            caret-color: white;
            border-radius: 10px;
            color: white;
            background-color: transparent;
        }
        .wahmy {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 25px;
            top: 24px;
        }
        input[type="submit"] {
            background-color: transparent;
            padding: 10px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            border: 1px solid white;
        }
        input[type="submit"]:hover {
            background-color: #300c2a;
        }
        input[type="checkbox"] {
            width: 1em;
            height: 1rem;
            accent-color: purple;
            position: relative;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
<section class="new-user flex">
        <div class="new-u-container flex">
            <div class="new-u-logo"><img src="{{ asset('img/images.png') }}" alt=""></div>
            <h1 class="new-u-head">Join the Blog Community</h1>
            <p>This Blog has an unknown community of <span> 1 </span> amazing people like you</p>
            <div class="sign-up-bundle flex">
                    <a href="#" class="sign-up flex">
                        <div class="flex" style="width:100%;">
                            <img src="{{ asset('img/google.png') }}" alt="">
                            <div class="flex"><span>Continue with Google</span></div>
                        </div>
                    </a>
            </div>
                <span style="height: 1px;
                            width: 100%;
                            background-color: white;
                            margin: 50px 0;
                            position: relative;">
                </span>
                <form action="">
                <div class="form-con flex">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" placeholder="Please Type Your email Here" required>
                </div>
                <div class="form-con flex">
                        <label for="password">Password</label>
                        <div class="wahmy">
                        <input type="password" id="password" placeholder="Please Type Your password Here" required>
                        <button type="button" class="toggle-password" onclick="togglePassword()"> <i class="fas fa-eye" id="toggleIcon"></i></button>
                        </div>
                    </div>
                    <div class="form-con flex">
                        <input type="submit" value="Log In" id="submitBtn">
                    </div>
                    <div class="remember-con flex" style="justify-content:space-between;">
                        <div class="form-con flex" style="flex-direction:row; gap:5px; align-items: center;">
                            <input style="" type="checkbox" name="" id="remember">
                            <label style="font-size:18px;" for="remember">Remember Me</label>
                        </div>
                        <div class="form-con flex">
                            <a href="forget-pass" style="color: #4254e3; font-size:18px;">Forgot Password</a>
                        </div>
                    </div>
                    <div id="errorMessage" class="error"></div>
                </form>
                <p>By signing in, you are agreeing to our privacy policy, terms of use and code of conduct.</p>
                <div>New to Blog Community? <a href="sign-up">Create account</a>.</div>
        </div>
    </section>
    <script src="js/smooth.js"></script>
    <script>
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
    </script>
</body>
</html>
