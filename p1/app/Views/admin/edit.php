<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500">Edit Menu</h2>
        <form action="<?= base_url('admin/update/' . $menu_item['id']) ?>" method="post" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="name" value="<?= $menu_item['name'] ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <label class="block text-gray-700">Harga:</label>
            <input type="text" name="price" value="<?= $menu_item['price'] ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <label class="block text-gray-700">Deskripsi:</label>
            <input type="text" name="keterangan" value="<?= $menu_item['keterangan'] ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <label class="block text-gray-700">Gambar:</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">

            <p class="text-sm text-gray-500 mt-1 mb-4">*Jika tidak ingin mengganti gambar, biarkan kosong.</p>

            <input type="submit" value="Update" class="bg-red-500 text-white p-2 rounded mt-4 w-full cursor-pointer hover:bg-red-600">
        </form>
    </div>
</body>

</html>