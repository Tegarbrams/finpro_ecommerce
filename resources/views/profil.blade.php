<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Website | Tuakng Akun</title>
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
<body class="bg-gray-100">

  <!-- Container -->
  <div class="min-h-screen flex items-center justify-center p-6">
    <div class="max-w-4xl w-full bg-white p-8 rounded-2xl shadow-md space-y-8">

      <!-- Judul -->
      <h1 class="text-3xl font-bold text-center text-blue-600">Profil Kami</h1>

      <!-- Logo & Nama -->
      <div class="flex flex-col items-center space-y-2">
        <img src="asset/logo.png" class="w-20 h-20" alt="Logo GameStore">
        <h2 class="text-xl font-semibold text-gray-800">TukangAkun.ID</h2>
        <p class="text-gray-500">Platform Jual Beli Akun Game Aman & Terpercaya</p>
      </div>

      <!-- Deskripsi Website -->
      <div class="text-gray-700 space-y-3 text-justify">
        <p>
          TukangAkun.ID adalah platform digital yang menyediakan layanan jual beli akun game secara aman, cepat, dan terpercaya. Kami hadir sebagai solusi atas maraknya penipuan dalam transaksi akun game yang sering terjadi di media sosial.
        </p>
        <p>
          Dengan sistem verifikasi, riwayat transaksi, dan metode pembayaran yang aman (termasuk QRIS dan E-Wallet), kami menjembatani antara penjual dan pembeli agar transaksi dapat dilakukan secara profesional dan transparan.
        </p>
        <p>
          Kami mendukung berbagai jenis akun game populer seperti Mobile Legends, Free Fire, PUBG Mobile, dan banyak lagi.
        </p>
      </div>

      <!-- Kontak -->
      <div class="bg-gray-50 p-4 rounded-lg">
        <h3 class="font-semibold text-gray-800 mb-2">Hubungi Kami</h3>
        <ul class="text-gray-700 space-y-1">
          <li><strong>Email:</strong> TukangAkunStore@gmail.com</li>
          <li><strong>WhatsApp:</strong> +62 8953 3596 9591</li>
          <li><strong>Instagram:</strong> tukangakunstore_</li>
        </ul>
      </div>

      <!-- Tim Pembuat -->
      <div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Tim Pengembang Website</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
          <!-- Anggota 1 -->
          <div class="bg-gray-100 rounded-xl p-4 shadow hover:shadow-lg transition">
            <img src="https://i.pravatar.cc/150?img=1" class="w-24 h-24 rounded-full mx-auto mb-2">
            <h4 class="font-semibold text-gray-800">Maulana Darma Susena</h4>
            <p class="text-sm text-gray-500">Frontend Developer & UI/UX</p>
          </div>

          <!-- Anggota 2 -->
          <div class="bg-gray-100 rounded-xl p-4 shadow hover:shadow-lg transition">
            <img src="https://i.pravatar.cc/150?img=2" class="w-24 h-24 rounded-full mx-auto mb-2">
            <h4 class="font-semibold text-gray-800">Ridhwan Ubaid Al Faruq</h4>
            <p class="text-sm text-gray-500">Frontend Developer</p>
          </div>

          <!-- Anggota 3 -->
          <div class="bg-gray-100 rounded-xl p-4 shadow hover:shadow-lg transition">
            <img src="https://i.pravatar.cc/150?img=3" class="w-24 h-24 rounded-full mx-auto mb-2">
            <h4 class="font-semibold text-gray-800">Tegar Bramasta Adi Pradana</h4>
            <p class="text-sm text-gray-500">Backend Developer</p>
          </div>
        </div>
      </div>

      <!-- Tombol ke Beranda -->
      <div class="text-center">
        <a href="index" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition">
          Kembali ke Beranda
        </a>
      </div>

    </div>
  </div>

</body>
</html>
