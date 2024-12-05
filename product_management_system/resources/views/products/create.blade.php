<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Product</title>
</head>
<body>
    <h1 class="text-center text-5xl my-10">Create a New Product</h1>
    

    <form action="/products" method="POST" class="w-1/2 mx-auto py-4 space-y-3">
        @csrf
        <label for="name"  class="p-2 text-xl">Product Name:</label>
        <input type="text" id="name" name="name" required class="w-full border border-blue-700 p-2 rounded-md">
        <br><br>

        <label for="price" class="p-2 text-xl">Product Price:</label>
        <input type="number" id="price" name="price" required min="0" step="0.01" class="w-full border border-blue-700 p-2 rounded-md">
        <br><br>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Create Product</button>
        <br><br>

        <a href="/products" class="w-full bg-blue-500 text-white p-2 rounded-md ">Back to Product List</a>
    </form>

    
    
</body>
</html>
