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
    <title>Confirm Email</title>
</head>
<body style="height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap:120px">
<section class="new-user flex" style="text-align: center;">
        <div class="new-u-container flex" style="width: fit-content;">
            <div class="sign-up-bundle flex">
                <i class="fa-solid fa-envelope-circle-check" style="font-size: 55px;"></i>
                <h1>Great! Now confirm your email address.</h1>
                <p style="font-size: 18px;">We've sent an email to <span></span> Click the button inside to <br>confirm your email.</p>
            </div>
        </div>
    </section>
    <div style="padding: 10px 20px;
    background-color: #ab030391;
    border-radius: 6px;"><a style="color: rgb(59, 73, 223);
    text-decoration: underline;" href="#">Click Here</a> if you didn't get the email...</div>
</body>
</html>
