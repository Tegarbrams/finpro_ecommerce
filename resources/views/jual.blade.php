<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Jual Akun Game</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center px-4 py-10">
  <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-xl">
    <h2 class="text-2xl font-bold mb-6 text-center">Form Jual Akun Game</h2>
    <form class="space-y-5">
      <div>
        <label class="block text-sm mb-1">Nama Game</label>
        <select class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded" required>
          <option value="">Pilih Game</option>
          <option>Mobile Legends</option>
          <option>Free Fire</option>
          <option>PUBG Mobile</option>
          <option>Valorant</option>
        </select>
      </div>

      <div>
        <label class="block text-sm mb-1">Nama Akun</label>
        <input type="text" placeholder="Contoh: King123" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded" required>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm mb-1">Rank</label>
          <input type="text" placeholder="Contoh: Mythic" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded">
        </div>
        <div>
          <label class="block text-sm mb-1">Jumlah Skin</label>
          <input type="number" placeholder="Contoh: 58" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded">
        </div>
      </div>

      <div>
        <label class="block text-sm mb-1">Deskripsi Akun</label>
        <textarea rows="4" placeholder="Jelaskan akun secara detail..." class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded"></textarea>
      </div>

      <div>
        <label class="block text-sm mb-1">Harga (Rp)</label>
        <input type="number" placeholder="Contoh: 150000" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded" required>
      </div>

      <div>
        <label class="block text-sm mb-1">Upload Gambar Akun</label>
        <input type="file" accept="image/*" multiple class="w-full text-sm text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700" />
      </div>

      <button type="submit" class="w-full bg-green-600 hover:bg-green-700 py-2 rounded font-semibold">
        Jual Sekarang
      </button>
    </form>
  </div>
</body>
</html>
