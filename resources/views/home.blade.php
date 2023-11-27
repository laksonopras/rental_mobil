<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Posts</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand h1 ms-4" href={{ route('posts.index') }}>
                <img src="/MalangDrift.png">
            </a>
            <div class="container text-center row justify-content-center">
                <div class="col ">
                    <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Home</a>
                    <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Cars</a>
                    <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Location</a>
                    <a class="btn btn-sm btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; --bs-btn-width: .75rem;" href={{ route('posts.create') }}>Your Order</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <img src="/mobil.png" class="col-sm">
            <div class="col align-self-center ">
                <p class="col-sm h1">Where Fast Cars <br> Meet Faster Lives</p>
                <div class="row">
                    <div class="col-sm">
                        <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Choose Your Ride</a>
                        <a class="btn btn-sm btn-dark" href={{ route('posts.create') }}>Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <img src="/step.png" class="col-sm">
        </div>
    </div>

    <div class=" mt-5">
        <div class="row">
            <img src="/Group.png" class="col-sm">
        </div>
    </div>

    <div class=" mt-5">
        <div class="row">
            <img src="/foot.png" class="col-sm">
        </div>
    </div>
</body>

</html>