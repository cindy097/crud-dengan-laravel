<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>

        <label for="stock">Stock:</label>
        <input type="text" name="stock" id="stock" value="{{ $product->stock }}" required>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>