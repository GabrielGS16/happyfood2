<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Store</title>
</head>
<body>
    <h1>Create Store</h1>
    <form action="{{ route('stores.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <button type="submit">Create Store</button>
    </form>
    <br>
    <a href="{{ route('stores.index') }}">Back to Stores List</a>
</body>
</html>