<!DOCTYPE html>
<html>
<head>
    <title>Add New Menu Item</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500">Add New Menu Item</h2>
        <form action="/menu/store" method="post" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
            <label class="block text-gray-700">Name:</label>
            <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <label class="block text-gray-700">Price:</label>
            <input type="text" name="price" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <label class="block text-gray-700">Image URL:</label>
            <input type="text" name="image_url" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <input type="submit" value="Add" class="bg-red-500 text-white p-2 rounded mt-4 w-full cursor-pointer hover:bg-red-600">
        </form>
    </div>
</body>
</html>
