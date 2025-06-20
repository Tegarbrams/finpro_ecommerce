<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
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

  <!-- Hero Section -->
  <section class="text-center py-16 bg-gray-900">
    <h1 class="text-5xl font-extrabold text-white drop-shadow-lg tracking-wide">
    JUAL AKUN GAME ONLINE
    </h1>
   <p class="text-lg text-indigo-5- mt-4">
    Temukan akun game favoritmu dengan harga terbaik!
  </p>
  </section>
  

<div id="default-carousel" class="relative w-full mt-4" data-carousel="slide"> <!-- Added margin-top -->
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/game_ml.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game ML">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/game_ml.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game ML">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/game_ml.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game ML">
        </div>
        <!-- Item 4 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/game_ml.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game ML">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white focus:outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white focus:outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


  <!-- Game Categories -->
  <section class="container mx-auto text-center my-10">
  <h2 class="text-3xl font-semibold mb-8 text-white">Game Terpopuler</h2>
  <div class="flex justify-center space-x-6">
    <a href="dataListAkun">
      <img src="{{ asset('asset/image-1.png') }}" alt="MLBB" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
    <a href="dataListAkun">
      <img src="{{ asset('asset/image-2.png') }}" alt="Valorant" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
    <a href="dataListAkun">
      <img src="{{ asset('asset/image-3.png') }}" alt="PUBG" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
    <a href="dataListAkun">
      <img src="{{ asset('asset/image-4.png') }}" alt="Free Fire" class="h-40 rounded-md hover:scale-105 transition duration-300">
    </a>
  </div>
</section>



  <!-- Account Listings -->
  <section class="container mx-auto px-8">
    <h2 class="text-2xl font-semibold mb-6">Akun Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-gray-800  p-4 rounded-lg shadow-md">
        <img src="{{ asset('asset/akun valo.jpg') }}" alt="Akun Valorant" class="w-full h-40 object-cover rounded">
        <h3 class="text-xl font-semibold mt-4">Akun Valorant - Rank Diamond</h3>
        <p class="text-sm text-gray-400">Skin bundle premium + battle pass aktif</p>
        <p class="text-green-400 font-semibold mt-2">Rp 750.000</p>
        <a href="/detailProduk" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">Lihat Detail</a>
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
  <footer class="mt-20 bg-blue-900 text-center py-6">
    <p class="text-gray-400">&copy; 2025 GameMarket. Semua hak dilindungi.</p>
    <div class="mt-2">
      <a href="#" class="text-gray-400 hover:text-white mr-4">Kebijakan Privasi</a>
      <a href="#" class="text-gray-400 hover:text-white">Kontak</a>
    </div>
  </footer>
</body>
</html>
