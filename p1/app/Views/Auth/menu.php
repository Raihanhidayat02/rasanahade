<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasana Hade</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .bg-red-theme {
            background-color: #b22222;
        }

        .text-red-theme {
            color: #b22222;
        }

        .text-yellow-theme {
            color: #ffd700;
        }

        .border-red-theme {
            border-color: #b22222;
        }

        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: #ffd700;
            transform: translateY(-3px);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .logo-hover {
            transition: transform 0.3s ease;
        }

        .logo-hover:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-red-theme p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4 logo-hover">
                <div class="bg-red-theme p-3 rounded-full">
                    <i class="fas fa-utensils text-white text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-yellow-theme">Rasana Hade</h1>
                    <p class="text-sm text-gray-200">Rumah Makan Padang</p>
                </div>
            </div>
            <ul class="flex space-x-4">
                <li><a href="<?= base_url('dashboard') ?>" class="text-white nav-link">Beranda</a></li>
                <li><a href="<?= base_url('menu') ?>" class="text-white nav-link">Menu</a></li>
                <li><a href="<?= base_url('promo') ?>" class="text-white nav-link">Promo</a></li>
                <li><a href="<?= base_url('order') ?>" class="text-white nav-link">Pesan</a></li>
            </ul>
        </div>
    </nav>

</body>
<section id="menu" class="container mx-auto py-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-red-theme">Menu Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu1.jpg" alt="Rendang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Rendang - Rp 17.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu2.jpg" alt="Sate Padang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Sate Padang - Rp 20.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu1.jpg" alt="Sate Padang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Sate Padang - Rp 20.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu1.jpg" alt="Sate Padang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Sate Padang - Rp 20.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu1.jpg" alt="Rendang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Rendang - Rp 17.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu2.jpg" alt="Sate Padang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Sate Padang - Rp 20.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu1.jpg" alt="Sate Padang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Sate Padang - Rp 20.000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="assets/menu1.jpg" alt="Sate Padang" class="w-full h-48 object-cover rounded-lg mb-4" />
            <p class="text-gray-700 mb-2">Sate Padang - Rp 20.000</p>
        </div> -->
        <?php foreach ($menuItems as $item): ?>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="<?= base_url('uploads/' . $item['image']) ?>" alt="<?= esc($item['name']) ?>" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-bold mt-4"><?= esc($item['name']) ?></h3>
                <p class="text-gray-700">Rp <?= number_format($item['price'], 0, ',', '.') ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Footer -->
<footer class="bg-red-700 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Alamat Kami -->
            <div>
                <h3 class="text-xl font-bold mb-4">Alamat Kami</h3>
                <p class="text-gray-200">
                    Jl. Dago No. 123, Bandung<br />
                    Jawa Barat, Indonesia
                </p>
            </div>
            <!-- Hubungi Kami -->
            <div>
                <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="mailto:rasanahade@gmail.com" class="text-gray-200 hover:text-red-500 hover:bg-red-800 py-2 px-4 rounded-lg transition duration-300 ease-in-out"> <i class="fas fa-envelope mr-2"></i>rasanahade@gmail.com </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/rasanahade" class="text-gray-200 hover:text-red-500 hover:bg-red-800 py-2 px-4 rounded-lg transition duration-300 ease-in-out"> <i class="fab fa-instagram mr-2"></i>@rasanahade </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/rasanahade" class="text-gray-200 hover:text-red-500 hover:bg-red-800 py-2 px-4 rounded-lg transition duration-300 ease-in-out"> <i class="fab fa-facebook mr-2"></i>Rasana Hade </a>
                    </li>
                </ul>
            </div>
            <!-- Jam Buka -->
            <div>
                <h3 class="text-xl font-bold mb-4">Jam Buka</h3>
                <p class="text-gray-200">
                    Senin - Minggu<br />
                    09:00 - 21:00 WIB
                </p>
            </div>
        </div>
        <!-- Hak Cipta -->
        <div class="border-t border-gray-600 mt-8 pt-8 text-center">
            <p class="text-gray-200 hover:text-red-500 hover:bg-red-800 py-2 px-4 rounded-lg transition duration-300 ease-in-out">&copy; 2025 Rasana Hade. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>

</html>