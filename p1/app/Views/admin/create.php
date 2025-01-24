<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Rasana Hade</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500">Daftar Menu</h2>
        <a href="<?= base_url('/admin') ?>" class="bg-red-500 text-white p-2 rounded mb-4 inline-block">Tambah Menu Baru</a>
        <div class="flex flex-wrap -mx-4">
            <?php foreach ($menu_items as $item): ?>
                <div class="bg-white p-6 rounded-lg shadow-lg mx-4 my-4 w-full md:w-1/4 lg:w-1/5">
                    <?php if (!empty($item['image'])): ?>
                        <img src="<?= base_url('uploads/' . $item['image']) ?>" alt="<?= $item['name'] ?>" class="w-full h-40 object-cover rounded mb-4">
                    <?php else: ?>
                        <div class="w-full h-40 bg-gray-200 rounded mb-4 flex items-center justify-center">
                            <span class="text-gray-500">Tidak ada gambar</span>
                        </div>
                    <?php endif; ?>
                    <p class="text-gray-700 mb-2"><?= $item['name'] ?> - Rp <?= $item['price'] ?></p>
                    <p class="text-gray-700 mb-2">Deskripsi: <?= $item['keterangan'] ?></p>
                    <p class="text-gray-700 mb-2"><?= $item['name'] ?> - <?= $item['porsi'] ?></p>
                    <a href="<?= base_url('admin/edit/' . $item['id']) ?>" class="bg-blue-500 text-white p-2 rounded mr-2">Edit</a>
                    <a href="<?= base_url('admin/delete/' . $item['id']) ?>" class="bg-red-500 text-white p-2 rounded">Hapus</a>
                </div>
            <?php endforeach; ?>
        </div>
        <button onclick="window.location.href='<?= base_url('/admin') ?>'" class="bg-red-500 text-white p-3 rounded mt-4 w-full cursor-pointer hover:bg-red-600 text-lg">Back</button>
    </div>
</body>

</html>
