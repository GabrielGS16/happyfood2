<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delivery drivers-index</title>
</head>
<body>
    <h1>Delivery Drivers List</h1>
    <ul>
        @foreach($deliveryDrivers as $driver)
            <li>{{ $driver->name }} - {{ $driver->phone }} - {{ $driver->vehicle_type }} 
                <a href="{{ route('deliverydrivers.edit', $driver->id) }}">Edit</a> 
                <form action="{{ route('deliverydrivers.destroy', $driver->id) }}" method="POST" onsubmit="return confirm('tem certeza que quer excluir isso?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> 
                </form>
            </li>            
        @endforeach
    </ul>
    <a href="{{ route('deliverydrivers.create') }}">Create New Delivery Driver</a>
</body>
</html>