<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods-index</title>
</head>
<body>
    <h1>Foods List </h1>
    <ul>
        @foreach($foods as $food)
            <li>{{ $food->name }} - {{ $food->description }} - ${{ $food->price }} 
                <a href="{{ route('foods.edit', $food->id) }}">Edit</a> 
                <form action="{{ route('foods.destroy', $food->id) }}" method="POST" onsubmit="return confirm('tem certeza que quer excluir isso?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> 
                </form>
            </li>            
        @endforeach
        <a href="{{ route('foods.create') }}">Create New Food</a>
    </ul>
</body>
</html>