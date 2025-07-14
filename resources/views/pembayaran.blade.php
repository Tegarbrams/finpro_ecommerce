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
        <!-- Gambar QR Code (static sample) -->
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=1234567890&size=200x200" 
             alt="QRIS Code" 
             class="w-48 h-48 border rounded-lg shadow"/>

        <div class="text-center">
          <p class="text-gray-600">Silakan scan QRIS di atas menggunakan:</p>
          <p class="font-semibold text-blue-700">OVO / GoPay / DANA / ShopeePay / dll</p>
        </div>

        <!-- Total Pembayaran -->
        <div class="w-full bg-gray-100 p-4 rounded-lg text-center">
          <p class="text-gray-700">Total Pembayaran:</p>
          <p class="text-2xl font-bold text-green-600">Rp 850.000</p>
        </div>

<form class="space-y-4" onsubmit="handleSubmit(event)">
  <!-- Input Nama -->
  <div>
    <label class="block mb-1 font-medium text-gray-700">Nama</label>
    <input type="text" name="nama" required
           class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg p-2"/>
  </div>

  <!-- Input Email -->
  <div>
    <label class="block mb-1 font-medium text-gray-700">Email</label>
    <input type="email" name="email" required
           class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg p-2"/>
  </div>

  <!-- Input Nomor HP -->
  <div>
    <label class="block mb-1 font-medium text-gray-700">Nomor HP</label>
    <input type="tel" name="nomor_hp" required
           class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg p-2"/>
  </div>

  <!-- Upload Bukti Pembayaran -->
  <div>
    <label class="block mb-1 font-medium text-gray-700">Upload Bukti Pembayaran</label>
    <input type="file" accept="image/*" required
           class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg p-2 file:bg-blue-600 file:text-white file:rounded-lg file:px-4 file:py-2 hover:file:bg-blue-700"/>
  </div>

  <!-- Tombol Konfirmasi -->
  <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl transition">
    Konfirmasi Pembayaran
  </button>
</form>


<!-- POP-UP MODAL SUKSES -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-lg p-6 max-w-sm w-full text-center">
    <h2 class="text-xl font-bold text-green-600 mb-4">Pembayaran Berhasil!</h2>
    <p class="text-gray-700 mb-6">Bukti pembayaran berhasil dikirim. Silakan tunggu konfirmasi dari admin.</p>
    <div class="flex justify-center gap-4">
      <a href="index" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-semibold">Oke Terimakasih</a>
    </div>
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
</body>
</html>
