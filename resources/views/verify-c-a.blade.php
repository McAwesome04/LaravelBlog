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
    <style>
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .popup-content {
            background-image: linear-gradient(90deg, #000000, #300c2a);
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: transparent;
            padding: 10px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            border: 1px solid white;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #300c2a;
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
    </style>
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
    border-radius: 6px;"><a id="popupLink" style="color: rgb(59, 73, 223);
    text-decoration: underline;" href="#">Click Here</a> if you didn't get the email...</div>
       <div id="myPopup" class="popup">
           <div class="popup-content">
               <span class="close">&times;</span>
               <form id="popupForm">
                   <div class="form-con flex" style=" flex-direction: column;
                   gap: 10px;">
                       <label style="font-size: 18px;" for="popupEmail">Email</label>
                       <input type="email" id="popupEmail" placeholder="Please Type Your Email Here" required>
                    </div>
                    <div class="form-con flex">
                        <input type="submit" value="Submit" id="popupSubmitBtn">
                    </div>
                </form>
                <div id="popupMessage" class="message"></div>
            </div>
            <script>
        // Get the popup
        var popup = document.getElementById('myPopup');

        // Get the link that opens the popup
        var link = document.getElementById('popupLink');

        // Get the <span> element that closes the popup
        var span = document.getElementsByClassName('close')[0];

        // When the user clicks the link, open the popup
        link.onclick = function() {
            popup.style.display = 'block';
        }

        // When the user clicks on <span> (x), close the popup
        span.onclick = function() {
            popup.style.display = 'none';
        }

        // When the user clicks anywhere outside of the popup, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = 'none';
            }
        }
    </script>
</body>
</html>
