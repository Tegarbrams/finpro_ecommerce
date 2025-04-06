<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - GameMarket</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-gray-800 p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">Registrasi</h2>
    <form id="registerForm" class="space-y-4">
      <div>
        <label class="block mb-1 text-sm">Username</label>
        <input id="username" type="text" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
      </div>
      <div>
        <label class="block mb-1 text-sm">Email</label>
        <input id="email" type="email" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
      </div>
      <div>
        <label class="block mb-1 text-sm">Nomor HP</label>
        <input id="phone" type="tel" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
      </div>
      <div>
        <label class="block mb-1 text-sm">Password</label>
        <input id="password" type="password" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
      </div>
      <button type="submit" class="w-full bg-green-600 hover:bg-green-700 py-2 rounded font-semibold">Daftar</button>
      <p id="registerMessage" class="text-center text-sm mt-3"></p>
    </form>
  </div>

  <script>
    const registerForm = document.getElementById("registerForm");
    const registerMessage = document.getElementById("registerMessage");

    registerForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const username = document.getElementById("username").value;
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const password = document.getElementById("password").value;

      if (username && email && phone && password) {
        registerMessage.textContent = "Registrasi berhasil!";
        registerMessage.className = "text-green-400 text-center text-sm mt-3";
      } else {
        registerMessage.textContent = "Semua field wajib diisi.";
        registerMessage.className = "text-red-500 text-center text-sm mt-3";
      }
    });
  </script>
</body>
</html>
