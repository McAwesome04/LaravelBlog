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
    <title>Forgot Password?</title>
</head>
<style>
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
    input[type="email"] {
        border: none;
        border-bottom: 1px solid white;
        width: 90%;
        padding: 15px;
        caret-color: white;
        border-radius: 10px;
        color: white;
        background-color: transparent;
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
    .new-u-container>p:last-of-type:after {
        height:0;
    }
</style>
<body>
<section class="new-user flex">
    <div class="new-u-container flex">
        <div class="new-u-logo"><img src="{{ asset('img/images.png') }}" alt=""></div>
            <h1 class="new-u-head">Forgot your password?</h1>
            <p style="font-size: 18px;">Enter the email address associated with your account, and we'll send you a link to reset your password.</p>
            <form action="">
                <div class="form-con flex">
                    <label for="Email">Email</label>
                    <input type="email" id="Email" placeholder="Please Type Your email Here" required>
                </div>
                <div class="form-con flex">
                    <input type="submit" value="Send reset link" id="submitBtn">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
