<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Food</title>
</head>
<body>
    <h1>Edit Food</h1>
    <form action="{{ route('foods.update', $food->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $food->name }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $food->description }}</textarea>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ $food->price }}" required>
        <br>
        <button type="submit">Update Food</button>
    </form>
    <a href="{{ route('foods.index') }}">Back to Foods List</a>
</body>
</html>