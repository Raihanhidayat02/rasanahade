<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Rasana Hade - Rumah Makan Padang" />
    <meta name="keywords" content="Rasana Hade, Rumah Makan, Padang, Makanan" />
    <title>Rasana Hade</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <style>
      /* Custom CSS untuk warna merah */
      .bg-red-theme {
        background-color: #b22222;
      }
      .text-red-theme {
        color: #b22222;
      }
      .border-red-theme {
        border-color: #b22222;
      }
      /* Efek hover untuk navbar */
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
        color: #ffd700; /* Warna emas saat hover */
        transform: translateY(-3px);
      }
      .nav-link:hover::after {
        width: 100%;
      }
      /* Efek hover untuk logo */
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
        <!-- Logo Rasana Hade -->
        <div class="flex items-center space-x-4 logo-hover">
          <!-- Ikon Makanan -->
          <div class="bg-red-theme p-3 rounded-full">
            <i class="fas fa-utensils text-white text-2xl"></i>
          </div>
          <!-- Teks Logo -->
          <div>
            <h1 class="text-2xl font-bold text-white">Rasana Hade</h1>
            <p class="text-sm text-gray-200">Rumah Makan Padang</p>
          </div>
        </div>
        <!-- Menu Navigasi -->
        <ul class="flex space-x-4">
          <li><a href="#beranda" class="text-white nav-link">Beranda</a></li>
          <li><a href="#menu" class="text-white nav-link">Menu</a></li>
          <li><a href="#promo" class="text-white nav-link">Promo</a></li>
          <li><a href="#login" class="text-white nav-link">Pesan</a></li>
        </ul>
      </div>
    </nav>

    <!-- Beranda -->
    <section id="beranda" class="bg-cover bg-center h-96" style="background-image: url('/assets/image1.webp')">
      <div class="container mx-auto h-full flex items-center justify-center">
        <div class="text-center">
          <h1 class="text-5xl font-bold text-black">Selamat Datang di Rasana Hade</h1>
          <p class="text-xl text-black mt-4">Nikmati kelezatan masakan Padang asli di sini!</p>
        </div>
      </div>
    </section>

    <!-- Login Form -->
    <section id="login" class="container mx-auto py-12">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6 text-red-theme">Login</h2>
        <form id="loginForm">
          <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required />
          </div>
          <div class="mb-6">
            <label for="password" class="block text-gray-700 mb-2">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required />
          </div>
          <button type="submit" class="w-full bg-red-theme text-white py-2 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-theme">Masuk</button>
        </form>
        <p class="text-center mt-4 text-gray-600">
          Belum punya akun?
          <a href="#signup" class="text-red-theme hover:underline">Daftar di sini</a>
        </p>
      </div>
    </section>

    <!-- Signup Form -->
    <section id="signup" class="container mx-auto py-12">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6 text-red-theme">Daftar</h2>
        <form id="signupForm">
          <div class="mb-4">
            <label for="signupEmail" class="block text-gray-700 mb-2">Email</label>
            <input type="email" id="signupEmail" name="signupEmail" placeholder="Masukkan email Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required />
          </div>
          <div class="mb-6">
            <label for="signupPassword" class="block text-gray-700 mb-2">Password</label>
            <input type="password" id="signupPassword" name="signupPassword" placeholder="Masukkan password Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required />
          </div>
          <button type="submit" class="w-full bg-red-theme text-white py-2 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-theme">Daftar</button>
        </form>
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
  </body>
</html>