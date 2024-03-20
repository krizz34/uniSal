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
        <div class="alert alert-danger">
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
        <select id="bookingSlot" name="bookingSlot" required>
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
        <button type="submit">Update</button>
    </form>
</body>
</html>
