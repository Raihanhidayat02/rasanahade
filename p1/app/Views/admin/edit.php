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
            <?= csrf_field() ?>

            <!-- Input Nama -->
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="name" value="<?= esc($menu_item['name']) ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" required>

            <!-- Input Harga -->
            <label class="block text-gray-700">Harga:</label>
            <input type="number" name="price" value="<?= esc($menu_item['price']) ?>" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" required>

            <!-- Input Deskripsi -->
            <label class="block text-gray-700">Deskripsi:</label>
            <textarea name="keterangan" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4" rows="3" required><?= esc($menu_item['keterangan']) ?></textarea>

            <!-- Gambar Saat Ini -->
            <label class="block text-gray-700">Gambar Saat Ini:</label>
            <?php if (!empty($menu_item['image'])): ?>
                <img src="<?= base_url('uploads/' . $menu_item['image']) ?>" alt="Gambar Menu" class="w-full h-48 object-cover rounded mt-1 mb-4">
            <?php else: ?>
                <p class="text-gray-500">Tidak ada gambar.</p>
            <?php endif; ?>

            <!-- Input Ganti Gambar -->
            <label class="block text-gray-700">Ganti Gambar:</label>
            <input type="file" name="image" accept="image/*" class="w-full p-2 border border-gray-300 rounded mt-1 mb-4">
            <p class="text-sm text-gray-500 mt-1 mb-4">*Kosongkan jika tidak ingin mengganti gambar.</p>

            <!-- Tombol Submit -->
            <input type="submit" value="Update" class="bg-red-500 text-white p-2 rounded mt-4 w-full cursor-pointer hover:bg-red-600">
        </form>
    </div>
</body>

</html>