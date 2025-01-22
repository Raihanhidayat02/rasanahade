<!DOCTYPE html>
<html>
<head>
    <title>Menu List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500">Menu List</h2>
        <a href="/menu/create" class="bg-red-500 text-white p-2 rounded mb-4 inline-block">Add New Menu Item</a>
        <div class="flex flex-wrap -mx-4">
            <?php foreach ($menu_items as $item): ?>
            <div class="bg-white p-6 rounded-lg shadow-lg mx-4 my-4 w-full md:w-1/3 lg:w-1/4">
                <img src="<?= $item['image_url'] ?>" alt="<?= $item['name'] ?>" class="w-full h-48 object-cover rounded-lg mb-4">
                <p class="text-gray-700 mb-2"><?= $item['name'] ?> - Rp <?= $item['price'] ?></p>
                <a href="/menu/edit/<?= $item['id'] ?>" class="bg-blue-500 text-white p-2 rounded mr-2">Edit</a>
                <a href="/menu/delete/<?= $item['id'] ?>" class="bg-red-500 text-white p-2 rounded">Delete</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
