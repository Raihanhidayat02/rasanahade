<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu Item</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500">Edit Menu Item</h2>
        <form action="/menu/update/<?= $menu_item['id'] ?>" method="post" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
            <input type="hidden" name="id" value="<?= $menu_item['id'] ?>">
            <label class="block text-gray-700">Name:</label>
            <input type="text" name="name" value="<?= $menu_item['name'] ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">
            
            <label class="block text-gray-700">Price:</label>
            <input type="text" name="price" value="<?= $menu_item['price'] ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">
            
            <label class="block text-gray-700">Image URL:</label>
            <input type="text" name="image_url" value="<?= $menu_item['image_url'] ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">
            
            <input type="submit" value="Update" class="bg-red-500 text-white p-2 rounded mt-4 w-full cursor-pointer hover:bg-red-600">
        </form>
    </div>
</body>
</html>
