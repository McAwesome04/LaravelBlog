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
    <title>Create Account</title>
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
                            <div class="flex"><span>Sign Up with Google</span></div>
                        </div>
                    </a>
                    <a href="sign-up-email" class="sign-up flex">
                        <div class="flex" style="width:100%;">
                            <img src="{{ asset('img/envelope.png') }}" alt="">
                            <div class="flex"><span>Sign Up with Email</span></div>
                        </div>
                    </a>
            </div>
            <p>By signing up, you are agreeing to our privacy policy, terms of use and code of conduct.</p>
            <div>Already have an account? <a href="log-in">Log in</a>.</div>
        </div>
    </section>
    <script src="js/smooth.js"></script>
</body>
</html>
