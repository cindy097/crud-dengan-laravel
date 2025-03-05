<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="price">Price :</label>
        <input type="number" name="price" id="price"><br><br>

        <label for="stock">Stock :</label>
        <input type="number" name="stock" id="stock"><br><br>

        <button type="submit">Create Product</button>
    </form>
</body>
</html>