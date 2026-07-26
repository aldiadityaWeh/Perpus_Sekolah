<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Animasi muncul dari bawah */
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        /* Efek fokus pada ikon input */
        .input-group:focus-within i { color: #2563eb; }
    </style>
</head>
<body class="bg-slate-900 font-sans antialiased text-slate-800 selection:bg-blue-200 selection:text-blue-900 min-h-screen flex flex-col justify-center items-center relative overflow-hidden px-4">

    <!-- Background Gambar Buku (Samar / Blur) -->
    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2000&auto=format&fit=crop" alt="Library Background" class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">

    <!-- Overlay Gelap & Blur effect -->
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm z-0"></div>

    <!-- Tombol Kembali ke Beranda (Pojok Kanan Atas) -->
    <a href="/" class="absolute top-6 right-6 text-slate-300 hover:text-white transition-colors flex items-center gap-2 text-sm font-semibold group z-10 bg-black/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10">
        <i class="fa-solid fa-arrow-left-long group-hover:-translate-x-1 transition-transform"></i> Beranda
    </a>

    <!-- Container Utama Center -->
    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8 md:p-10 relative z-10 animate-fade-in-up border border-slate-100">

        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-slate-900 flex items-center justify-center mx-auto mb-4 shadow-lg shadow-slate-900/20 relative overflow-hidden">
                <div class="absolute inset-0 bg-blue-500/20 blur-xl"></div>
                <!-- Jika ada logo SD, Anda bisa mengganti tag <i> ini dengan tag <img> -->
                <i class="fa-solid fa-book-open-reader text-blue-400 text-2xl relative z-10"></i>
            </div>
            <h1 class="font-bold text-2xl tracking-wider text-slate-900 mb-1">SMART<span class="text-blue-600">PERPUS</span></h1>
            <p class="text-slate-500 text-sm font-medium">Silakan masuk ke akun panel admin Anda</p>
        </div>

        <!-- Notifikasi Error (Disembunyikan default) -->
        <div id="errorAlert" class="hidden bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r-lg mb-6 text-sm font-medium flex items-center gap-3 shadow-sm">
            <i class="fa-solid fa-circle-exclamation text-lg"></i>
            <span>Email atau kata sandi tidak valid.</span>
        </div>

        <!-- Form Login -->
        <form id="loginForm" action="/admin/dashboard" method="GET" class="space-y-5">

            <!-- Input Email/Username -->
            <div class="space-y-2">
                <label for="email" class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Email Admin</label>
                <div class="relative input-group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-at text-slate-400 transition-colors"></i>
                    </div>
                    <!-- Di Laravel: tambahkan name="email" -->
                    <input type="email" id="email" name="email" placeholder="admin@sdn6ciseureuh.sch.id" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-11 pr-4 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all shadow-sm" required autofocus>
                </div>
            </div>

            <!-- Input Password -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label for="password" class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Kata Sandi</label>
                    <a href="#" class="text-xs font-semibold text-blue-600 hover:text-blue-700 hover:underline">Lupa sandi?</a>
                </div>
                <div class="relative input-group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-lock text-slate-400 transition-colors"></i>
                    </div>
                    <!-- Di Laravel: tambahkan name="password" -->
                    <input type="password" id="password" name="password" placeholder="••••••••" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-11 pr-12 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all shadow-sm font-medium tracking-wider" required>

                    <!-- Toggle Show/Hide Password -->
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors focus:outline-none">
                        <i class="fa-solid fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <!-- Di Laravel: tambahkan name="remember" -->
                <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-blue-600 bg-slate-100 border-slate-300 rounded focus:ring-blue-500 cursor-pointer">
                <label for="remember" class="ml-2 text-sm font-medium text-slate-600 cursor-pointer select-none">Ingat saya di perangkat ini</label>
            </div>

            <!-- Button Submit -->
            <button type="submit" id="btnSubmit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-600/30 transition-all flex items-center justify-center gap-2 transform hover:-translate-y-0.5 active:translate-y-0 relative overflow-hidden group">
                <span id="btnText">Masuk ke Sistem</span>
                <i id="btnIcon" class="fa-solid fa-arrow-right-to-bracket text-sm group-hover:translate-x-1 transition-transform"></i>

                <!-- Loading Spinner (Muncul saat di klik) -->
                <div id="btnSpinner" class="hidden absolute inset-0 bg-blue-700 flex items-center justify-center">
                    <i class="fa-solid fa-circle-notch animate-spin text-xl"></i>
                </div>
            </button>

        </form>

        <div class="mt-8 text-center border-t border-slate-100 pt-5">
            <p class="text-xs text-slate-400 font-medium">&copy; 2026 SMARTPERPUS System.</p>
        </div>

    </div>

    <!-- SCRIPT INTERAKSI FORM -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const loginForm = document.getElementById('loginForm');
            const btnSubmit = document.getElementById('btnSubmit');
            const btnText = document.getElementById('btnText');
            const btnIcon = document.getElementById('btnIcon');
            const btnSpinner = document.getElementById('btnSpinner');

            // 1. Fitur Toggle Mata (Lihat Kata Sandi)
            togglePassword.addEventListener('click', () => {
                // Cek tipe saat ini, jika password ubah ke text, jika text ubah ke password
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Ubah ikon Font Awesome
                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });

            // 2. Simulasi Loading saat Tombol Submit di klik
            // CATATAN: Hapus kode event listener ini jika Anda sudah mengimplementasikan Auth Laravel yang asli (karena form akan otomatis memproses request ke server).
            loginForm.addEventListener('submit', (e) => {
                // e.preventDefault(); // Jangan cegah default agar form bisa berpindah ke /admin/dashboard

                // Sembunyikan text dan ikon pada tombol
                btnText.classList.add('invisible');
                btnIcon.classList.add('invisible');

                // Tampilkan ikon loading berputar
                btnSpinner.classList.remove('hidden');

                // Nonaktifkan tombol agar tidak diklik dua kali
                btnSubmit.classList.add('cursor-not-allowed', 'opacity-90');
                btnSubmit.disabled = true;
            });
        });
    </script>
</body>
</html>
