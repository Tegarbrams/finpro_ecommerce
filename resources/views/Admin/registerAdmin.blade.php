<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-2xl rounded-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Registrasi Admin</h1>
                <p class="text-gray-600">Buat akun admin baru</p>
            </div>

            <form role="form text-left" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Name" aria-label="Name" aria-describedby="email-addon" required />
                </div>

                <div class="mb-4">
                    <input type="email" name="email"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Email" aria-label="Email" aria-describedby="email-addon" required />
                </div>

                <div class="mb-4">
                    <input type="password" name="password"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Password" aria-label="Password" aria-describedby="password-addon" required />
                </div>
                <!-- Jika pakai password confirmation -->
                <div class="mb-4">
                    <input type="password" name="password_confirmation"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Confirm Password" aria-label="Confirm Password" required />
                </div>

                <div class="mb-4">
                    <select id="role" name="role" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 text-gray-700 bg-white">
                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>


                <div class="min-h-6 pl-6.92 mb-0.5 block">
                    <input id="terms" name="terms"
                        class="w-4.92 h-4.92 ease-soft -ml-6.92 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                        type="checkbox" value="1" checked />
                    <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                        for="terms">
                        I agree the <a href="javascript:;" class="font-bold text-slate-700">Terms
                            and Conditions</a>
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                        Sign up
                    </button>
                </div>

                <p class="mt-4 mb-0 leading-normal text-sm">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="font-bold text-slate-700">Sign in</a>
                </p>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-6">
                <p class="text-gray-600">
                    Sudah punya akun?
                    <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Masuk di sini</a>
                </p>
            </div>
        </div>

        <!-- Success Message (Hidden by default) -->
        <div id="successMessage"
            class="hidden mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
            <strong>Berhasil!</strong> Akun admin telah berhasil didaftarkan.
        </div>

        <!-- Error Message (Hidden by default) -->
        <div id="errorMessage" class="hidden mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
            <strong>Error!</strong> <span id="errorText"></span>
        </div>
    </div>

    <script>
        // Form validation and submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Hide previous messages
            document.getElementById('successMessage').classList.add('hidden');
            document.getElementById('errorMessage').classList.add('hidden');

            // Basic validation
            if (data.password !== data.confirmPassword) {
                showError('Password dan konfirmasi password tidak cocok!');
                return;
            }

            if (data.password.length < 8) {
                showError('Password harus minimal 8 karakter!');
                return;
            }

            if (!data.terms) {
                showError('Anda harus menyetujui syarat dan ketentuan!');
                return;
            }

            // Simulate registration process
            const button = e.target.querySelector('button[type="submit"]');
            const originalText = button.textContent;
            button.textContent = 'Mendaftarkan...';
            button.disabled = true;

            setTimeout(() => {
                // Simulate successful registration
                showSuccess();
                this.reset();
                button.textContent = originalText;
                button.disabled = false;
            }, 2000);
        });

        function showError(message) {
            document.getElementById('errorText').textContent = message;
            document.getElementById('errorMessage').classList.remove('hidden');
        }

        function showSuccess() {
            document.getElementById('successMessage').classList.remove('hidden');
        }

        // Real-time password confirmation validation
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;

            if (confirmPassword && password !== confirmPassword) {
                this.setCustomValidity('Password tidak cocok');
                this.classList.add('border-red-500');
            } else {
                this.setCustomValidity('');
                this.classList.remove('border-red-500');
            }
        });
    </script>
</body>

</html>
