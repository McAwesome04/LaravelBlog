<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">All Posts</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="mt-5">

        <div class="d-flex justify-content-center align-items-center full-height">
            <div class="card w-75">
                <h5 class="card-header">Post Info</h5>
                <div class="card-body">
                    <h5 class="card-title">Title: {{$post['title']}}</h5>
                    <p class="card-text">Description: {{$post['description']}}</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center full-height mt-2">
            <div class="card w-75">
                <h5 class="card-header">Post Creator Info</h5>
                <div class="card-body">
                    <h5 class="card-title">Name: {{$post['posted_by']}}</h5>
                    <p class="card-text">Email: yaminhany12@gmail.com</p>
                    <p class="card-text">Created at: xx xx xx xx</p>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>