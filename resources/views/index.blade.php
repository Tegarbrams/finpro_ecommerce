<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game Account Marketplace</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-900 text-white">
  <!-- Navbar -->
  <nav class="bg-gray-800 p-4 sticky top-0 z-10 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">GameMarket</h1>
      <ul class="flex space-x-6">
        <li><a href="#" class="hover:text-blue-400">Beranda</a></li>
        <li><a href="#" class="hover:text-blue-400">Game</a></li>
        <li><a href="#" class="hover:text-blue-400">Jual Akun</a></li>
        <li><a href="#" class="hover:text-blue-400">Login</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-16 bg-gray-900">
    <h1 class="text-4xl font-bold mb-4">Jual & Beli Akun Game Online</h1>
    <p class="text-lg mb-6">Platform aman dan terpercaya untuk semua gamer!</p>
    <a href="#" class="bg-blue-500 hover:bg-blue-600 px-6 py-2 rounded text-white font-semibold">Mulai Sekarang</a>
  </section>

  <!-- Game Categories -->
  <section class="container mx-auto text-center my-10">
    <h2 class="text-2xl font-semibold mb-6">Game Populer</h2>
    <div class="flex justify-center space-x-6">
      <img src="../asset/iconml.jpg" alt="MLBB" class="h-12">
      <img src="../asset/iconpubg.png" alt="PUBG" class="h-12">
      <img src="../asset/iconvalo.png" alt="Valorant" class="h-12">
      <img src="../asset/iconff.jpg" alt="Free Fire" class="h-12">
    </div>
  </section>

  <!-- Account Listings -->
  <section class="container mx-auto px-4">
    <h2 class="text-2xl font-semibold mb-6">Akun Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <img src="https://cdn.donmai.us/sample/98/51/__valorant_sample-98513553621bf97ef6b5b6f4c9c01b6b.jpg" alt="Akun Valorant" class="w-full h-40 object-cover rounded">
        <h3 class="text-xl font-semibold mt-4">Akun Valorant - Rank Diamond</h3>
        <p class="text-sm text-gray-400">Skin bundle premium + battle pass aktif</p>
        <p class="text-green-400 font-semibold mt-2">Rp 750.000</p>
        <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <img src="https://cdn1.codashop.com/S/content/common/images/mno/mobilelegends_new.png" alt="Akun MLBB" class="w-full h-40 object-cover rounded">
        <h3 class="text-xl font-semibold mt-4">Akun MLBB - Mythic</h3>
        <p class="text-sm text-gray-400">40 Skin Epic + Hero Lengkap</p>
        <p class="text-green-400 font-semibold mt-2">Rp 500.000</p>
        <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <img src="https://staticg.sportskeeda.com/editor/2022/02/21b11-16443316033401-1920.jpg" alt="Akun PUBG" class="w-full h-40 object-cover rounded">
        <h3 class="text-xl font-semibold mt-4">Akun PUBG - Level 70</h3>
        <p class="text-sm text-gray-400">Royale Pass max + 5 outfit legendary</p>
        <p class="text-green-400 font-semibold mt-2">Rp 650.000</p>
        <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-20 bg-gray-800 text-center py-6">
    <p class="text-gray-400">&copy; 2025 GameMarket. Semua hak dilindungi.</p>
    <div class="mt-2">
      <a href="#" class="text-gray-400 hover:text-white mr-4">Kebijakan Privasi</a>
      <a href="#" class="text-gray-400 hover:text-white">Kontak</a>
    </div>
  </footer>
</body>
</html>
