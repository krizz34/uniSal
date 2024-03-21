<!-- resources/views/bookings/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="/unisalFavicon.png" />

    <!-- CSS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/35560a7828.js" crossorigin="anonymous"></script>
    
</body>
    <title>uniSal</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/images/logo.png"  height="50" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link font-weight-bold " href="{{ route('routeTo:createBooking') }}">Book an Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-weight-bold " href="{{ route('routeTo:listBooking') }}">List Bookings</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link font-weight-bold text-dark" href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </li>
        </ul>
    </div>
    </nav>


    <div class="container text-center">
        <h1 class='text-bold mb-5' style=" margin-top: 200px;">Welcome to <img src="/images/logo.png" alt="logo of FilmiHub" class="img-fluid" style=" max-height: 200px; margin-top: -10px;" /></h1>
        <button href="{{ route('routeTo:createBooking') }}" class="btn btn-lg btn-dark" style="background-color: black; margin-top: -30px;">Book your Appointment</button>
    </div>

    
</body>
</html>