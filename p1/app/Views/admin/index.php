<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Menu - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500">Create Menu</h2>
        <form action="<?= base_url('admin/store/') ?>" method="post" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="name" placeholder="Masukkan nama menu" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" required>

            <label class="block text-gray-700">Harga:</label>
            <input type="text" name="price" placeholder="Masukkan harga menu" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" required>

            <label class="block text-gray-700">Deskripsi:</label>
            <input type="text" name="keterangan" placeholder="Masukkan deskripsi menu" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" required>

            <label class="block text-gray-700">Gambar:</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" required>

            <input type="submit" value="Create" class="bg-red-500 text-white p-2 rounded mt-4 w-full cursor-pointer hover:bg-red-600">
        </form>
        <div class="flex justify-center mt-4">
            <button onclick="window.location.href='<?= base_url('/dashboard') ?>'" class="bg-red-500 text-white p-2 rounded w-32 cursor-pointer hover:bg-red-600">Back</button>
        </div>
    </div>
</body>

</html>
