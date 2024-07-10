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
    <title>New Post</title>
    <style>
        .new-post{
            padding-top: 75px;
        }
        form {
            flex-direction: column;
            display: flex;
            width: 100%;
        }
        .input{
            font-weight: bold;
            padding: 32px 64px;
            flex-direction: column;
            gap: 25px;
        }
        input[type="text"],
        textarea {
            border: none;
            width: 100%;
            caret-color: white;
            border-radius: 10px;
            color: white;
            background-color: transparent;
            resize: none;
            font-size: 40px;
        }
        textarea {;
            font-size: 25px;
            height: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="container flex">
            <div class="header-wrap flex" style="align-items: center;">
                <a href="#" class="logo"><img src="{{ asset('img/images.png') }}" alt=""></a>
                <h4>Create Post</h4>
            </div>
        </div>
    </header>
    <section class="new-post flex">
        <div class="container">
            <form action="">
                <div class="flex input">
                    <input type="file" id="fileInput" name="fileInput" value="Add a cover image"  accept="image/*">
                    <input minlength="1" maxlength="50" type="text" id="name" placeholder="Title Here..." required>
                </div>
                <div class="flex f-styles">
                    <span></span>
                    <span></span>
                </div>
                    <div class="flex input">
                        <textarea name="" placeholder="Write Your Post Here..."></textarea>
                </div>
                <div class="">
                    <input type="submit" value="Publish" id="submitBtn">
                </div>
            </form>
        </div>
    </section>
    </body>
</html>
