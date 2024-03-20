<!-- resources/views/editBooking.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
</head>
<body>
    <h1>Edit Booking</h1>
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
        <div class="alert alert-success">
            {{ session('exist') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $booking->name }}" required><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="{{ $booking->mobile }}" required><br><br>
        <label for="bookingDate">Booking Date:</label>
        <input type="date" id="bookingDate" name="bookingDate" value="{{ $booking->bookingDate }}" required><br><br>
        <label for="bookingSlot">Booking Slot:</label>
        <input type="text" id="bookingSlot" name="bookingSlot" value="{{ $booking->bookingSlot }}" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
