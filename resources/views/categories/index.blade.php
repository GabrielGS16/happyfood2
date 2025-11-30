<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories-index</title>
</head>
<body>
    <h1>Categories List</h1>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }} - {{ $category->description }} <a href="{{ route('categories.edit', $category->id) }}">Edit</a> <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('tem certeza que quer excluir isso?');">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button> 
                
            </form></li>            
        @endforeach
    </ul>
    <a href="{{ route('categories.create') }}">Create New Category</a>
    <br>
    <a href="{{ route('deliverydrivers.index') }}">Back to Delivery Drivers List</a>
    <br>
    <a href="{{ route('delivery.index') }}">Back to Deliveries List</a>
</body>
</html>