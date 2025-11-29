<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit delivery driver</title>
</head>
<body>
    <h1>Edit Delivery Driver</h1>
    <form action="{{ route('deliverydrivers.update', $deliveryDriver->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $deliveryDriver->name }}" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $deliveryDriver->phone }}" required>
        <br>
        <label for="vehicle_type">Vehicle Type:</label>
        <input type="text" id="vehicle_type" name="vehicle_type" value="{{ $deliveryDriver->vehicle_type }}" required>
        <br>
        <button type="submit">Update Delivery Driver</button>
    </form>
    <a href="{{ route('deliverydrivers.index') }}">Back to Delivery Drivers List</a>
</body>
</html>