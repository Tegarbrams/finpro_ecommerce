<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - GameMarket</title>
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
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <form id="loginForm" class="space-y-4">
      <div>
        <label class="block mb-1 text-sm">Email</label>
        <input id="loginEmail" type="email" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>
      <div>
        <label class="block mb-1 text-sm">Password</label>
        <input id="loginPassword" type="password" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>
      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 py-2 rounded font-semibold">Login</button>
      <p id="loginMessage" class="text-center text-sm mt-3"></p>
    </form>
  </div>

  <script>
    const loginForm = document.getElementById("loginForm");
    const loginMessage = document.getElementById("loginMessage");

    loginForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const email = document.getElementById("loginEmail").value;
      const password = document.getElementById("loginPassword").value;

      // Simulasi login sederhana
      if (email === "user@example.com" && password === "123456") {
        loginMessage.textContent = "Login berhasil!";
        loginMessage.className = "text-green-400 text-center text-sm mt-3";
      } else {
        loginMessage.textContent = "Email atau password salah.";
        loginMessage.className = "text-red-500 text-center text-sm mt-3";
      }
    });
  </script>
</body>
</html>
