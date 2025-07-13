<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Akun Mobile Legends</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url('asset/background_3.png'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
</head>

<body class="text-white">
  <div class="bg-black bg-opacity-60 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-black-900 p-4 top-0 z-10 shadow-md">
      <div class="container mx-auto">
        <div class="flex justify-between items-center">
          <div class="flex items-center space-x-2">
            <img src="asset/logo.png" alt="Logo Tukang Akun" class="w-10 h-10 md:w-12 md:h-12">
            <h1 class="text-xl md:text-2xl font-bold text-white">Tukang Akun</h1>
          </div>
          <ul class="hidden md:flex space-x-6 text-white">
            <li><a href="#" class="hover:text-blue-400">Beranda</a></li>
            <li><a href="#" class="hover:text-blue-400">Game</a></li>
            <li><a href="#" class="hover:text-blue-400">Jual Akun</a></li>
            <li><a href="#" class="hover:text-blue-400">Login</a></li>
          </ul>
          <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
    </nav>

  <!-- Detail Akun MLBB -->
  <section class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
      <!-- Foto utama -->
      <img src="asset/skin_ml.png" alt="MLBB Account" class="w-full h-auto rounded-lg shadow-md">

      <!-- Detail akun -->
      <div>
        <h2 class="text-3xl font-bold mb-2">Akun Mobile Legends - Mythic Glory</h2>
        <p class="text-gray-400 mb-4">Kode Akun: MLBB987654</p>
        <p class="mb-4">Akun elit dengan koleksi skin lengkap, hero maksimal, emblem full level, dan riwayat rank stabil. Tidak terkait akun sosial lain dan bisa langsung bind.</p>

        <ul class="mb-4 space-y-2">
          <li><strong>Rank Saat Ini:</strong> Mythic Glory</li>
          <li><strong>Skin Total:</strong> 132 Skin (20 Epic, 8 Legend, 3 Collector)</li>
          <li><strong>Hero:</strong> Semua Hero Terbuka</li>
          <li><strong>Emblem:</strong> Max Level</li>
          <li><strong>Email:</strong> Bisa Diganti / Bindable</li>
        </ul>

        <p class="text-2xl font-bold text-green-400 mb-4">Rp 850.000</p>

       <a href="pembayaran" class="bg-blue-500 hover:bg-blue-600 px-6 py-2 rounded text-white font-semibold inline-block">
  Beli Sekarang
</a>

      </div>
    </div>

    <!-- Album Foto Akun -->
    <div class="mt-8">
      <h3 class="text-2xl font-semibold mb-4">Galeri Skin Akun</h3>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <img src="asset/skin_1.png" alt="Skin 1" class="rounded-lg shadow-md">
        <img src="asset/skin_2.png" alt="Skin 2" class="rounded-lg shadow-md">
        <img src="asset/skin_3.png" alt="Skin 3" class="rounded-lg shadow-md">
        <img src="asset/skin_4.png" alt="Skin 4" class="rounded-lg shadow-md">
      </div>
    </div>
  </section>

  <!-- Footer -->
 <footer class="mt-20 bg-black text-center py-6">
      <p class="text-gray-400">&copy; 2025 GameMarket. Semua hak dilindungi.</p>
      <div class="mt-2">
        <a href="#" class="text-gray-400 hover:text-white mr-4">Kebijakan Privasi</a>
        <a href="#" class="text-gray-400 hover:text-white">Kontak</a>
      </div>
    </footer>
</body>
</html>