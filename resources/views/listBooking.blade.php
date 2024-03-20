<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniSal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zI3+hNXF6Q5KsZNoc+omb+O5tcW1yJEMtkk5W7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-C48yZV0DvlMofnD1L5S3BsxUq2ZLTxF8C7fItTx65KAn+JpZ8z2L+oRYmkDsqxk8" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Bookings</h1>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Booking Date</th>
                    <th>Booking Slot</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->bookingDate }}</td>
                        <td>{{ $booking->bookingSlot }}</td>
                        <td>
                            <form action="{{ route('bookings.delete', $booking->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                            <a href="{{ route('bookings.edit', $booking->id) }}"><button>Update</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
