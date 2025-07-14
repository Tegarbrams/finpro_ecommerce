<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>list Akun Game</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url('asset/background/background_2.png'); 
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
            <li><a href="index" class="hover:text-blue-400">Beranda</a></li>
            <li><a href="#" class="hover:text-blue-400">Game</a></li>
            <li><a href="#" class="hover:text-blue-400">Jual Akun</a></li>
            <li><a href="login" class="hover:text-blue-400">Login</a></li>
          </ul>
          <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
    </nav>

  <!-- Hero -->
  <section class="text-center py-8 bg-gradient-to-r from-black-900 to-indigo-900 shadow-inner">
    <h2 class="text-4xl font-bold tracking-wide">🎯 Pilih Akun Game Terbaikmu</h2>
    <p class="text-gray-300 mt-2">Tersedia berbagai pilihan akun ML, PUBG, Valorant, dan lainnya</p>
  </section>

  <!-- List Produk -->
  <section class="max-w-7xl mx-auto px-6 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      
      <!-- Card ML -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_ml.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-blue-600 px-2 py-1 rounded-full mb-2">MLBB</span>
          <h3 class="font-bold text-lg">Akun Mobile Legends - Mythic</h3>
          <p class="text-sm text-gray-400 mb-1">Hero lengkap + 100 Skin Epic</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 850.000</span>
            <a href="detailProduk" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>

      <!-- Card Valorant -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_valo.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-purple-600 px-2 py-1 rounded-full mb-2">Valorant</span>
          <h3 class="font-bold text-lg">Akun Valorant - Diamond</h3>
          <p class="text-sm text-gray-400 mb-1">Reaver + Prime bundle aktif</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 750.000</span>
            <a href="#" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>

      <!-- Card PUBG -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_pubg.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-yellow-600 px-2 py-1 rounded-full mb-2">PUBG</span>
          <h3 class="font-bold text-lg">PUBG Mobile - Max Outfit</h3>
          <p class="text-sm text-gray-400 mb-1">Outfit Mythic + Skin senjata</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 690.000</span>
            <a href="#" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>

      <!-- Card Free Fire -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_ff.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-green-600 px-2 py-1 rounded-full mb-2">Free fire</span>
          <h3 class="font-bold text-lg">Garena Free Fire - Full Skin</h3>
          <p class="text-sm text-gray-400 mb-1">Elite Master + Full Bandle</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 350.000</span>
            <a href="#" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>
      <!-- Card ML -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_ml.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-blue-600 px-2 py-1 rounded-full mb-2">MLBB</span>
          <h3 class="font-bold text-lg">Akun Mobile Legends - Mythic</h3>
          <p class="text-sm text-gray-400 mb-1">Hero lengkap + 100 Skin Epic</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 850.000</span>
            <a href="detailProduk" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>

      <!-- Card Valorant -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_valo.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-purple-600 px-2 py-1 rounded-full mb-2">Valorant</span>
          <h3 class="font-bold text-lg">Akun Valorant - Diamond</h3>
          <p class="text-sm text-gray-400 mb-1">Reaver + Prime bundle aktif</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 750.000</span>
            <a href="#" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>

      <!-- Card PUBG -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_pubg.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-yellow-600 px-2 py-1 rounded-full mb-2">PUBG</span>
          <h3 class="font-bold text-lg">PUBG Mobile - Max Outfit</h3>
          <p class="text-sm text-gray-400 mb-1">Outfit Mythic + Skin senjata</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 690.000</span>
            <a href="#" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>

      <!-- Card Free Fire -->
      <div class="bg-gray-800/40 p-4 rounded-lg shadow-md">
        <img src="asset/akun_ff.png" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <span class="inline-block text-xs bg-green-600 px-2 py-1 rounded-full mb-2">Free fire</span>
          <h3 class="font-bold text-lg">Garena Free Fire - Full Skin</h3>
          <p class="text-sm text-gray-400 mb-1">Elite Master + Full Bandle</p>
          <div class="flex justify-between items-center">
            <span class="text-green-400 font-bold">Rp 350.000</span>
            <a href="#" class="text-sm bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">Detail</a>
          </div>
        </div>
      </div>
      
    </div>
  </section>

 <footer class="mt-20 bg-black text-center py-6">
      <p class="text-gray-400">&copy; 2025 GameMarket. Semua hak dilindungi.</p>
      <div class="mt-2">
        <a href="#" class="text-gray-400 hover:text-white mr-4">Kebijakan Privasi</a>
        <a href="#" class="text-gray-400 hover:text-white">Kontak</a>
      </div>
    </footer>
  </div>
</body>
</html>
