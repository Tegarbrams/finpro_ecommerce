<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $product->name }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url('{{ asset('asset/background/background_3.png') }}'); 
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
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-2">
          <img src="{{ asset('asset/logo.png') }}" alt="Logo Tukang Akun" class="w-10 h-10 md:w-12 md:h-12">
          <h1 class="text-xl md:text-2xl font-bold text-white">Tukang Akun</h1>
        </div>
        <ul class="hidden md:flex space-x-6 text-white">
          <li><a href="/" class="hover:text-blue-400">Beranda</a></li>
          <li><a href="/dataListAkun" class="hover:text-blue-400">Game</a></li>
          <li><a href="#" class="hover:text-blue-400">Jual Akun</a></li>
          <li><a href="/login" class="hover:text-blue-400">Login</a></li>
        </ul>
      </div>
    </nav>

    <!-- Detail Produk -->
    <section class="container mx-auto px-4 py-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- Thumbnail utama -->
        <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Thumbnail" class="w-full h-auto rounded-lg shadow-md">

        <!-- Detail akun -->
        <div>
          <h2 class="text-3xl font-bold mb-2">{{ $product->name }}</h2>
          <p class="text-gray-400 mb-4">Game: {{ $product->game->name }}</p>
          <p class="mb-4">{{ $product->description }}</p>

          <p class="text-2xl font-bold text-green-400 mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

          <a href="{{ route('pembayaran.form', $product->id) }}" class="bg-green-600 text-white px-4 py-2 rounded">Beli Sekarang</a>
        </div>
      </div>

      <!-- Galeri Screenshot -->
      @if(is_array($product->screenshots) && count($product->screenshots) > 0)
  <div class="mt-8">
    <h3 class="text-2xl font-semibold mb-4">Galeri Skin Akun</h3>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      @foreach($product->screenshots as $screenshot)
        <img src="{{ asset('storage/' . str_replace('\\', '/', $screenshot)) }}" class="rounded-lg shadow-md" alt="Screenshot">
      @endforeach
    </div>
  </div>
@endif

    </section>

    <!-- Footer -->
    <footer class="mt-36 bg-black text-center py-6">
      <p class="text-gray-400">&copy; 2025 GameMarket. Semua hak dilindungi.</p>
      <div class="mt-2">
        <a href="#" class="text-gray-400 hover:text-white mr-4">Kebijakan Privasi</a>
        <a href="#" class="text-gray-400 hover:text-white">Kontak</a>
      </div>
    </footer>
  </div>
</body>
</html>
