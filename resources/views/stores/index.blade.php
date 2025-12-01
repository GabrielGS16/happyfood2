<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stores List</h1>
    <ul>
        @foreach($stores as $store)
            <li>{{ $store->name }} - {{ $store->address }} - {{ $store->phone }} 
                <a href="{{ route('stores.edit', $store->id) }}">Edit</a> 
                <form action="{{ route('stores.destroy', $store->id) }}" method="POST" onsubmit="return confirm('tem certeza que quer excluir isso?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> 
                </form>
            </li>            
        @endforeach
    </ul>
    <a href="{{ route('stores.create') }}">Create New Store</a>
    <br>
    <a href="{{ route('categories.index') }}">Back to Categories List</a>
    <br>
    <a href="{{ route('deliverydrivers.index') }}">Back to Delivery Drivers List</a>    
    <br>
    <a href="{{ route('foods.index') }}">Back to Foods List</a>
    <br>
    <a href="{{ route('coupons.index') }}">Back to Coupons List</a>
    <br>
</body>
</html>