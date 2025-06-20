<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Akun Game</title>
    <link href="https://fonts.googleapis.com/css2?family=Slep+One&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

      <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
        </style>
   </head>
<body class="bg-gray-900 text-white">
  <!-- Navbar -->
  <nav class="bg-blue-900 p-4 sticky top-0 z-10 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center space-x-2">
  <img src="asset/logo.png" alt="Logo Tukang Akun" class="w-12 h-12">
  <h1 class="text-2xl font-bold">Tukang Akun</h1>
</div>

      <ul class="flex space-x-6">
        <li><a href="#" class="hover:text-blue-400">Beranda</a></li>
        <li><a href="#" class="hover:text-blue-400">Game</a></li>
        <li><a href="#" class="hover:text-blue-400">Jual Akun</a></li>
        <li><a href="#" class="hover:text-blue-400">Login</a></li>
      </ul>
    </div>
  </nav>

   <section class="text-center py-8 bg-gray-900 container mx-auto PX-8">
    <h1 class="text-2xl font-extrabold text-white drop-shadow-lg tracking-wide">
    List  Akun Yang Anda Cari
    </h1>
    </section>
    <!-- Grid Card -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
  <!-- CARD 1 -->
  <div class="bg-gray-800 p-4 rounded-lg shadow-md">
    <div id="carousel1" class="relative w-full h-60 rounded overflow-hidden" data-carousel="slide">
      <div class="relative h-60 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akun valo.jpg') }}" class="absolute block w-full h-60 object-cover" alt="Valorant 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akun valo.jpg') }}" class="absolute block w-full h-60 object-cover" alt="Valorant 2">
        </div>
      </div>
      <button type="button" class="absolute top-0 left-0 z-30 h-full px-4" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 h-full px-4" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
      </button>
    </div>
    <h3 class="text-xl font-semibold mt-4">Akun Valorant - Rank Diamond</h3>
    <p class="text-sm text-gray-400">Skin bundle premium + battle pass aktif</p>
    <p class="text-green-400 font-semibold mt-2">Rp 750.000</p>
    <a href="/detailProduk" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
  </div>

  <!-- CARD 2 -->
  <div class="bg-gray-800 p-4 rounded-lg shadow-md">
    <div id="carousel2" class="relative w-full h-60 rounded overflow-hidden" data-carousel="slide">
      <div class="relative h-60 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunMl.jpg') }}" class="absolute block w-full h-60 object-cover" alt="MLBB 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunMl.jpg') }}" class="absolute block w-full h-60 object-cover" alt="MLBB 2">
        </div>
      </div>
      <button type="button" class="absolute top-0 left-0 z-30 h-full px-4" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 h-full px-4" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
      </button>
    </div>
    <h3 class="text-xl font-semibold mt-4">Akun MLBB - Mythic</h3>
    <p class="text-sm text-gray-400">40 Skin Epic + Hero Lengkap</p>
    <p class="text-green-400 font-semibold mt-2">Rp 500.000</p>
    <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
  </div>

  <!-- CARD 3 -->
  <div class="bg-gray-800 p-4 rounded-lg shadow-md">
    <div id="carousel3" class="relative w-full h-60 rounded overflow-hidden" data-carousel="slide">
      <div class="relative h-60 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunPubg.jpg') }}" class="absolute block w-full h-60 object-cover" alt="PUBG 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunPubg.jpg') }}" class="absolute block w-full h-60 object-cover" alt="PUBG 2">
        </div>
      </div>
      <button type="button" class="absolute top-0 left-0 z-30 h-full px-4" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 h-full px-4" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
      </button>
    </div>
    <h3 class="text-xl font-semibold mt-4">Akun PUBG - Level 70</h3>
    <p class="text-sm text-gray-400">Royale Pass max + 5 outfit legendary</p>
    <p class="text-green-400 font-semibold mt-2">Rp 650.000</p>
    <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
  </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
  <!-- CARD 1 -->
  <div class="bg-gray-800 p-4 rounded-lg shadow-md">
    <div id="carousel1" class="relative w-full h-60 rounded overflow-hidden" data-carousel="slide">
      <div class="relative h-60 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akun valo.jpg') }}" class="absolute block w-full h-60 object-cover" alt="Valorant 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akun valo.jpg') }}" class="absolute block w-full h-60 object-cover" alt="Valorant 2">
        </div>
      </div>
      <button type="button" class="absolute top-0 left-0 z-30 h-full px-4" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 h-full px-4" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
      </button>
    </div>
    <h3 class="text-xl font-semibold mt-4">Akun Valorant - Rank Diamond</h3>
    <p class="text-sm text-gray-400">Skin bundle premium + battle pass aktif</p>
    <p class="text-green-400 font-semibold mt-2">Rp 750.000</p>
    <a href="/detailProduk" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
  </div>

  <!-- CARD 2 -->
  <div class="bg-gray-800 p-4 rounded-lg shadow-md">
    <div id="carousel2" class="relative w-full h-60 rounded overflow-hidden" data-carousel="slide">
      <div class="relative h-60 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunMl.jpg') }}" class="absolute block w-full h-60 object-cover" alt="MLBB 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunMl.jpg') }}" class="absolute block w-full h-60 object-cover" alt="MLBB 2">
        </div>
      </div>
      <button type="button" class="absolute top-0 left-0 z-30 h-full px-4" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 h-full px-4" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
      </button>
    </div>
    <h3 class="text-xl font-semibold mt-4">Akun MLBB - Mythic</h3>
    <p class="text-sm text-gray-400">40 Skin Epic + Hero Lengkap</p>
    <p class="text-green-400 font-semibold mt-2">Rp 500.000</p>
    <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
  </div>

  <!-- CARD 3 -->
  <div class="bg-gray-800 p-4 rounded-lg shadow-md">
    <div id="carousel3" class="relative w-full h-60 rounded overflow-hidden" data-carousel="slide">
      <div class="relative h-60 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunPubg.jpg') }}" class="absolute block w-full h-60 object-cover" alt="PUBG 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('asset/akunPubg.jpg') }}" class="absolute block w-full h-60 object-cover" alt="PUBG 2">
        </div>
      </div>
      <button type="button" class="absolute top-0 left-0 z-30 h-full px-4" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 h-full px-4" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 bg-white/30 hover:bg-white/50 rounded-full">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
      </button>
    </div>
    <h3 class="text-xl font-semibold mt-4">Akun PUBG - Level 70</h3>
    <p class="text-sm text-gray-400">Royale Pass max + 5 outfit legendary</p>
    <p class="text-green-400 font-semibold mt-2">Rp 650.000</p>
    <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
  </div>
</div>
 <footer class="mt-20 bg-blue-900 text-center py-6">
    <p class="text-gray-400">&copy; 2025 GameMarket. Semua hak dilindungi.</p>
    <div class="mt-2">
      <a href="#" class="text-gray-400 hover:text-white mr-4">Kebijakan Privasi</a>
      <a href="#" class="text-gray-400 hover:text-white">Kontak</a>
    </div>
  </footer>
</body>
</html>








