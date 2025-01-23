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
<!-- Pemesanan Section -->
<section id="pesan" class="container mx-auto py-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-red-theme">Pesan Sekarang</h2>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl mx-auto">
        <form id="orderForm">
            <!-- Nama Pemesan -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 mb-2">Nama Pemesan</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required />
            </div>
            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label for="telepon" class="block text-gray-700 mb-2">Nomor Telepon</label>
                <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor telepon Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required />
            </div>
            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 mb-2">Alamat Pengiriman</label>
                <textarea id="alamat" name="alamat" placeholder="Masukkan alamat pengiriman" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" rows="3" required></textarea>
            </div>
            <!-- Menu yang Dipesan -->
            <div class="mb-4">
                <label for="menu" class="block text-gray-700 mb-2">Menu yang Dipesan</label>
                <select id="menu" name="menu" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required>
                        <option value="" disabled selected>Pilih menu</option>
                        <option value="Rendang">Rendang - Rp 18.000</option>
                        <option value="Sate Padang">Sate Padang - Rp 18.000</option>
                        <option value="Ayam Pop">Ayam Pop - Rp 18.000</option>
                        <option value="Telur Barendo">Telur Barendo - Rp 13.000</option>
                        <option value="Dendeng Balado">Dendeng Balado - Rp 20.000</option>
                        <option value="Gulai Tunjang">Gulai Tunjang - Rp 20.000</option>
                        <option value="Sayur Nangka">Sayur Nangka - Rp 10.000</option>
                        <option value="Soto Padang">Soto Padang - Rp 20.000</option>
                </select>
            </div>
        </form>
    </div>
</section>

</html>