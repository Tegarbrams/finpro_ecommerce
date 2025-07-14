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
      background-image: url('asset/background/background_1.png'); 
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
            <a href="profil" class="block">
  <h1 class="text-xl md:text-2xl font-bold text-white hover:underline">Tukang Akun</h1>
</a>

          </div>
          <ul class="hidden md:flex space-x-6 text-white">
            <li><a href="#" class="hover:text-blue-400">Beranda</a></li>
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

    <!-- Hero Section -->
    <section class="text-center py-6">
      <h1 class="text-5xl font-extrabold drop-shadow-lg tracking-wide">JUAL AKUN GAME ONLINE</h1>
      <p class="text-lg text-gray-300 mt-4">Temukan akun game favoritmu dengan harga terbaik!</p>
      <div id="default-carousel" class="relative w-full max-w-4xl mx-auto" data-carousel="slide">
        <div class="relative h-[400px] md:h-[500px] overflow-hidden rounded-lg">
          <div class="duration-700 ease-in-out" data-carousel-item="active">
            <img src="asset/caraousel/caraus_1.png" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game ML">
          </div>
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/caraousel/caraus_2.png" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game PUBG">
          </div>
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/caraousel/caraus_3.png" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game FF">
          </div>
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="asset/caraousel/caraus_4.png" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Game Valo">
          </div>
        </div>
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
          <button type="button" class="w-3 h-3 rounded-full bg-white" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white" data-carousel-slide-to="3"></button>
        </div>
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
          </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
          </span>
        </button>
      </div>
    </section>

    <!-- Game Categories -->
    <section class="container mx-auto px-4 text-center my-6">
      <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-white">Game Terpopuler</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
        <a href="dataListAkun" class="group">
          <img src="asset/img/image-1.png" alt="MLBB" class="w-full h-32 md:h-40 object-cover rounded-md hover:scale-105 transition-all duration-300">
          <p class="text-white mt-2 group-hover:text-blue-400">Mobile Legends</p>
        </a>
        <a href="dataListAkun" class="group">
          <img src="asset/img/image-2.png" alt="Valorant" class="w-full h-32 md:h-40 object-cover rounded-md hover:scale-105 transition-all duration-300">
          <p class="text-white mt-2 group-hover:text-blue-400">Valorant</p>
        </a>
        <a href="dataListAkun" class="group">
          <img src="asset/img/image-3.png" alt="PUBG" class="w-full h-32 md:h-40 object-cover rounded-md hover:scale-105 transition-all duration-300">
          <p class="text-white mt-2 group-hover:text-blue-400">PUBG</p>
        </a>
        <a href="dataListAkun" class="group">
          <img src="asset/img/image-4.png" alt="Free Fire" class="w-full h-32 md:h-40 object-cover rounded-md hover:scale-105 transition-all duration-300">
          <p class="text-white mt-2 group-hover:text-blue-400">Free Fire</p>
        </a>
      </div>
    </section>

    <!-- Account Listings -->
    <section class="container mx-auto px-8 py-16">
      <h2 class="text-2xl font-semibold mb-6">Akun Terbaru</h2>
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
      
    </div>
  </section>
  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
    document.addEventListener('click', (e) => {
      if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.add('hidden');
      }
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768) {
        mobileMenu.classList.add('hidden');
      }
    });
  </script>
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
