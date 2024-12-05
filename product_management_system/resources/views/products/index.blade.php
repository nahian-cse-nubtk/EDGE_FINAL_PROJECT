<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
    <style>
        th,td{
            border: 5px solid black;
            padding: 12px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif


    <div class="flex flex-col flex-row">
    <h1 class="text-center text-4xl my-5">Product Inventory</h1>

    <table class="mx-auto border-10x">
        <thead class="py-2 bg-blue-500 ">
            <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
            <td>{{ $product->name }}</td>
            <td>${{ $product->price }}</td>
            <td class="space-x-2">
    <!-- Edit Link with styling -->
    <a href="/products/{{ $product->id }}/edit" class="text-blue-500 hover:text-blue-700">Edit</a>
    
            <!-- Delete Form with a styled button -->
            <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

    <br>
    <a href="/products/create" class="bg-blue-500 text-white px-3 py-1 rounded-md inline-block text-center">Add New Product</a>





    </div>
</body>
</html>
