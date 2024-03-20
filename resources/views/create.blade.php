<!-- resources/views/bookings/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
</head>
<body>
    <h1>Book Appointment</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        <label for="bookingDate">Booking Date:</label>
        <input type="date" id="bookingDate" name="bookingDate" required><br><br>
        <label for="bookingSlot">Booking Slot:</label>
        <input type="text" id="bookingSlot" name="bookingSlot" required><br><br>
        <button type="submit">Book Now</button>
    </form>
</body>
</html>
