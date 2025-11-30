<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create coupon</title>
</head>
<body>
    <h1>Create Coupon</h1>
    <form action="{{ route('coupons.store') }}" method="POST">
        @csrf
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" required><br><br>
        <label for="discount_amount">Discount Amount:</label>
        <input type="number" step="0.01" id="discount_amount" name="discount_amount" required><br><br>
        <label for="expiry_date">Expiry Date:</label>
        <input type="date" id="expiry_date" name="expiry_date" required><br><br>
        <button type="submit">Create Coupon</button>
    </form>
    <br>
    <a href="{{ route('coupons.index') }}">Back to Coupons List</a>
</body>
</html>