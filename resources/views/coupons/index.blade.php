<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coupon-index</title>
</head>
<body>
    <h1>Coupons List</h1>
    <ul>
        @foreach($coupons as $coupon)
            <li>{{ $coupon->code }} - {{ $coupon->discount_amount }} - {{ $coupon->expiry_date }} <a href="{{ route('coupons.edit', $coupon->id) }}">Edit</a> <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" onsubmit="return confirm('tem certeza que quer excluir isso?');">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button> 
                
            </form></li>            
        @endforeach
    </ul>
    <a href="{{ route('coupons.create') }}">Create New Coupon</a>
    <br>
    <a href="{{ route('deliverydrivers.index') }}">Back to Delivery Drivers List</a>
    <br>
    <a href="{{ route('foods.index') }}">Back to Deliveries List</a>
    <br>
    <a href="{{ route('categories.index') }}">Back to Categories List</a>
</body>
</html>