<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pembayaran Via QRIS | Tukang Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url('asset/background/background_4.png'); 
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
    <nav class="bg-black p-4 top-0 z-10 shadow-md">
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

<body class="bg-gray-100">
  <div class="min-h-screen flex items-center justify-center py-8">
    <div class="max-w-lg w-full bg-white p-6 rounded-2xl shadow-md space-y-6">
      <h2 class="text-2xl font-bold text-gray-800 text-center">Pembayaran via QRIS</h2>
  
      <div class="flex flex-col items-center space-y-4">
        <img src="{{ asset('asset/Qris.png') }}" class="w-48 h-48 border rounded-lg shadow" alt="QRIS">
        <p class="text-gray-600 text-center">Silakan scan QRIS di atas menggunakan:<br><strong class="text-blue-700">OVO / GoPay / DANA / ShopeePay / dll</strong></p>
  
        <div class="w-full bg-gray-100 p-4 rounded-lg text-center">
          <p class="text-gray-700">Total Pembayaran:</p>
          <p class="text-2xl font-bold text-green-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
      </div>
  
      <form action="{{ route('pembayaran.submit', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
          <label class="block mb-1 font-medium text-gray-700">Nama</label>
          <input type="text" name="name" required class="w-full border rounded-lg p-2 text-gray-700"/>
        </div>
        <div>
          <label class="block mb-1 font-medium text-gray-700">Email</label>
          <input type="email" name="email" required class="w-full border rounded-lg p-2 text-gray-700"/>
        </div>
        <div>
          <label class="block mb-1 font-medium text-gray-700">Nomor HP</label>
          <input type="tel" name="phone" required class="w-full border rounded-lg p-2 text-gray-700"/>
        </div>
        <div>
          <label class="block mb-1 font-medium text-gray-700">Upload Bukti Pembayaran</label>
          <input type="file" name="proof" accept="image/*" required class="w-full p-2 border rounded-lg"/>
        </div>
        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold">
          Konfirmasi Pembayaran
        </button>
      </form>
    </div>
  </div>
  
  @if(session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <strong class="font-bold">Sukses!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
  </div>
@endif



<!-- POP-UP MODAL SUKSES -->
<div id="successModal" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50 flex justify-center items-center">
  <div class="bg-white p-6 rounded-lg max-w-md w-full text-center">
    <h2 class="text-xl font-bold text-green-600 mb-4">Pembayaran Diterima!</h2>
    <p class="text-gray-700 mb-4">
      Pembayaran anda sedang kami proses. Harap tunggu beberapa waktu. Informasi selanjutnya akan dikirim ke email atau no HP anda.
    </p>
    <a href="/" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Kembali</a>
  </div>
</div>


<!-- Script: Handle Form -->
<script>
  function handleSubmit(event) {
    event.preventDefault();
    // Menampilkan modal
    document.getElementById('successModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('successModal').classList.add('hidden');
  }
</script>
<script>
  @if(session('success'))
    document.getElementById('successModal').classList.remove('hidden');
  @endif
</script>

</body>
</html>
