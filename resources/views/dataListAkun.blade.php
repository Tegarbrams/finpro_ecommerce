<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Akun Game</title>
    <link href="https://fonts.googleapis.com/css2?family=Slep+One&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
      <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
        </style>
   </head>
   <body class="bg-gray-900 text-white">
  <!-- Navbar -->
    <nav class="bg-gray-800 p-8 sticky top-0 z-10 shadow-md">
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

   <section class="text-center py-6 bg-gray-900 container mx-auto px-8">
    <h1 class="text-5xl font-extrabold text-white drop-shadow-lg tracking-wide mb-6">
    List  Akun Yang Anda Cari
    </h1>
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

</body>
</html>








