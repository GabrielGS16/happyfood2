<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Store</title>
</head>
<body>
    <h1>Edit Store</h1>
    <form action="{{ route('stores.update', $store->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $store->name }}" required><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $store->address }}" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $store->phone }}" required><br><br>
        
        <button type="submit">Update Store</button>
    </form>
    <br>
    <a href="{{ route('stores.index') }}">Back to Stores List</a>
</body>
</html>