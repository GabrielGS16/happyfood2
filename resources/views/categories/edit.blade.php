<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $category->description }}</textarea>
        <br>
        <button type="submit">Update Category</button>
    </form>
    <a href="{{ route('categories.index') }}">Back to Categories List</a>
</body>
</html>