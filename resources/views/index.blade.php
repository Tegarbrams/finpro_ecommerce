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
      <h1 class="text-2xl font-bold">Tukang Akun</h1>
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
    <h1 class="text-5xl font-extrabold text-white drop-shadow-lg tracking-wide">
    JUAL AKUN GAME ONLINE
    </h1>
   <p class="text-lg text-indigo-5- mt-4">
    Temukan akun game favoritmu dengan harga terbaik!
  </p>
    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded mt-24">
    Mulai Sekarang
    </button>
  </section>

  <!-- Game Categories -->
  <section class="container mx-auto text-center my-10">
  <h2 class="text-3xl font-semibold mb-8 text-white">Game Terpopuler</h2>
  <div class="flex justify-center space-x-6">
    <a href="dataListAkun">
      <img src="{{ asset('asset/image-1.png') }}" alt="MLBB" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
    <a href="/game/valorant">
      <img src="{{ asset('asset/image-2.png') }}" alt="Valorant" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
    <a href="/game/pubg">
      <img src="{{ asset('asset/image-3.png') }}" alt="PUBG" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
    <a href="/game/freefire">
      <img src="{{ asset('asset/image-4.png') }}" alt="Free Fire" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
  </div>
</section>



  <!-- Account Listings -->
  <section class="container mx-auto px-4">
    <h2 class="text-2xl font-semibold mb-6">Akun Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <img src="{{ asset('asset/akun valo.jpg') }}" alt="Akun Valorant" class="w-full h-40 object-cover rounded">
        <h3 class="text-xl font-semibold mt-4">Akun Valorant - Rank Diamond</h3>
        <p class="text-sm text-gray-400">Skin bundle premium + battle pass aktif</p>
        <p class="text-green-400 font-semibold mt-2">Rp 750.000</p>
        <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <img src="{{ asset('asset/akunMl.jpg') }}" alt="Akun MLBB" class="w-full h-40 object-cover rounded">
        <h3 class="text-xl font-semibold mt-4">Akun MLBB - Mythic</h3>
        <p class="text-sm text-gray-400">40 Skin Epic + Hero Lengkap</p>
        <p class="text-green-400 font-semibold mt-2">Rp 500.000</p>
        <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <img src="{{ asset('asset/akunPubg.jpg') }}" alt="Akun PUBG" class="w-full h-40 object-cover rounded">
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
