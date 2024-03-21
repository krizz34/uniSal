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
            <a class="nav-link font-weight-bold" href="{{ route('bookings.createBooking') }}">Book an Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-weight-bold" href="{{ route('thenga') }}">List Bookings</a>
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
        <h1 class='text-bold mb-5'>Update your Appointment</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('exist'))
            <div class="alert alert-danger">
                {{ session('exist') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control" value="{{ $booking->name }}" required><br>
                </div>
                <div class="form-group">
                    <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile Number" class="form-control" value="{{ $booking->mobile }}" required><br>
                </div>
                <div class="form-group">
                    <input type="date" id="bookingDate" name="bookingDate" class="form-control" value="{{ $booking->bookingDate }}" required>
                    <small class="form-text text-muted text-left">Select an Appointment date</small>
                </div>
                <div class="form-group">
                    <select id="bookingSlot" name="bookingSlot" class="form-control" value="{{ $booking->bookingSlot }}" required>
                        <option value="" disabled selected>Select your Preffered Time Slot</option>
                        <option value="09:00 am">09:00 am</option>
                        <option value="10:00 am">10:00 am</option>
                        <option value="11:00 am">11:00 am</option>
                        <option value="12:00 pm">12:00 pm</option>
                        <option value="01:00 pm">01:00 pm</option>
                        <option value="02:00 pm">02:00 pm</option>
                        <option value="03:00 pm">03:00 pm</option>
                        <option value="04:00 pm">04:00 pm</option>
                        <option value="05:00 pm">05:00 pm</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block mt-4">Book Now</button>
                </div>

                
                
            </form>
        </div>
    </div>
    </div>

    
</body>
</html>