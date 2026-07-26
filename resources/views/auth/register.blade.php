<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .input-group:focus-within i { color: #2563eb; }
    </style>
</head>
<body class="bg-slate-900 font-sans antialiased text-slate-800 selection:bg-blue-200 selection:text-blue-900 min-h-screen flex flex-col justify-center items-center relative overflow-x-hidden px-4 py-12">

    <!-- Background Gambar Buku (Samar / Blur) -->
    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2000&auto=format&fit=crop" alt="Library Background" class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">

    <!-- Overlay Gelap & Blur effect -->
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm z-0"></div>

    <!-- Tombol Kembali ke Beranda (Pojok Kanan Atas) -->
    <a href="/" class="absolute top-6 right-6 text-slate-300 hover:text-white transition-colors flex items-center gap-2 text-sm font-semibold group z-10 bg-black/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10">
        <i class="fa-solid fa-arrow-left-long group-hover:-translate-x-1 transition-transform"></i> Beranda
    </a>

    <!-- Container Utama Center -->
    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8 md:p-10 relative z-10 animate-fade-in-up border border-slate-100 my-auto">

        <!-- Logo & Header -->
        <div class="text-center mb-6">
            <div class="w-16 h-16 rounded-2xl bg-slate-900 flex items-center justify-center mx-auto mb-3 shadow-lg shadow-slate-900/20 relative overflow-hidden">
                <div class="absolute inset-0 bg-blue-500/20 blur-xl"></div>
                <!-- Ikon User Plus untuk Register -->
                <i class="fa-solid fa-user-plus text-blue-400 text-2xl relative z-10"></i>
            </div>
            <h1 class="font-bold text-2xl tracking-wider text-slate-900 mb-1">SMART<span class="text-blue-600">PERPUS</span></h1>
            <p class="text-slate-500 text-sm font-medium">Lengkapi data untuk mendaftarkan akun admin baru</p>
        </div>

        <!-- Notifikasi Berhasil (Disembunyikan default) -->
        <div id="successAlert" class="hidden bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r-lg mb-4 text-sm font-medium flex items-center gap-3 shadow-sm">
            <i class="fa-solid fa-circle-check text-lg"></i>
            <span>Akun berhasil didaftarkan! Mengalihkan ke login...</span>
        </div>

        <!-- Form Register -->
        <!-- Action diarahkan ke halaman login sebagai simulasi alur pendaftaran -->
        <form id="registerForm" action="/login" method="GET" class="space-y-4">

            <!-- Input Nama Lengkap -->
            <div class="space-y-1.5">
                <label for="name" class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Nama Lengkap</label>
                <div class="relative input-group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-user text-slate-400 transition-colors"></i>
                    </div>
                    <!-- Tambahkan name="name" untuk Laravel -->
                    <input type="text" id="name" name="name" placeholder="Budi Santoso, S.Pd" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-11 pr-4 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all shadow-sm" required autofocus>
                </div>
            </div>

            <!-- Input Email -->
            <div class="space-y-1.5">
                <label for="email" class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Alamat Email</label>
                <div class="relative input-group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-at text-slate-400 transition-colors"></i>
                    </div>
                    <!-- Tambahkan name="email" untuk Laravel -->
                    <input type="email" id="email" name="email" placeholder="admin@sdn6ciseureuh.sch.id" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-11 pr-4 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all shadow-sm" required>
                </div>
            </div>

            <!-- Input Password -->
            <div class="space-y-1.5">
                <label for="password" class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Kata Sandi</label>
                <div class="relative input-group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-lock text-slate-400 transition-colors"></i>
                    </div>
                    <!-- Tambahkan name="password" untuk Laravel -->
                    <input type="password" id="password" name="password" placeholder="Min. 8 karakter" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-11 pr-12 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all shadow-sm font-medium tracking-wider" required>

                    <!-- Toggle Show/Hide Password -->
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors focus:outline-none">
                        <i class="fa-solid fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Input Konfirmasi Password -->
            <div class="space-y-1.5">
                <label for="password_confirmation" class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Konfirmasi Kata Sandi</label>
                <div class="relative input-group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-lock-open text-slate-400 transition-colors"></i>
                    </div>
                    <!-- Tambahkan name="password_confirmation" untuk Laravel -->
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi kata sandi" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-11 pr-4 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all shadow-sm font-medium tracking-wider" required>
                </div>
            </div>

            <!-- Button Submit -->
            <button type="submit" id="btnSubmit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-600/30 transition-all flex items-center justify-center gap-2 transform hover:-translate-y-0.5 active:translate-y-0 relative overflow-hidden group mt-2">
                <span id="btnText">Daftarkan Akun</span>
                <i id="btnIcon" class="fa-solid fa-user-check text-sm group-hover:translate-x-1 transition-transform"></i>

                <!-- Loading Spinner (Muncul saat di klik) -->
                <div id="btnSpinner" class="hidden absolute inset-0 bg-blue-700 flex items-center justify-center">
                    <i class="fa-solid fa-circle-notch animate-spin text-xl"></i>
                </div>
            </button>

        </form>

        <!-- Tautan Login di Bawah -->
        <div class="mt-5 text-center">
            <p class="text-sm text-slate-500 font-medium">
                Sudah punya akun admin?
                <!-- Arahkan ke halaman login -->
                <a href="/login" class="text-blue-600 font-bold hover:underline transition-colors">Login di sini</a>
            </p>
        </div>

        <div class="mt-5 text-center border-t border-slate-100 pt-4">
            <p class="text-xs text-slate-400 font-medium">&copy; 2026 SMARTPERPUS System.</p>
        </div>

    </div>

    <!-- SCRIPT INTERAKSI FORM -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const passwordConfirmInput = document.getElementById('password_confirmation');
            const eyeIcon = document.getElementById('eyeIcon');
            const registerForm = document.getElementById('registerForm');
            const btnSubmit = document.getElementById('btnSubmit');
            const btnText = document.getElementById('btnText');
            const btnIcon = document.getElementById('btnIcon');
            const btnSpinner = document.getElementById('btnSpinner');
            const successAlert = document.getElementById('successAlert');

            // 1. Fitur Toggle Mata (Lihat Kata Sandi) - Hanya untuk field password utama
            togglePassword.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });

            // 2. Validasi Konfirmasi Password & Simulasi Loading
            // CATATAN: Hapus kode event listener ini jika Anda sudah mengimplementasikan Auth Laravel yang asli.
            registerForm.addEventListener('submit', (e) => {
                const pass = passwordInput.value;
                const passConfirm = passwordConfirmInput.value;

                // Cek apakah password dan konfirmasi cocok
                if(pass !== passConfirm) {
                    e.preventDefault(); // Mencegah form disubmit
                    alert("Pendaftaran Gagal: Kata sandi dan konfirmasi kata sandi tidak cocok!");
                    passwordConfirmInput.focus();
                    return;
                }

                // Jika cocok, lanjutkan dengan simulasi loading (jangan cegah default agar pindah ke /login)
                // btnText.classList.add('invisible');
                // btnIcon.classList.add('invisible');
                // btnSpinner.classList.remove('hidden');
                // btnSubmit.classList.add('cursor-not-allowed', 'opacity-90');
                // btnSubmit.disabled = true;

                // successAlert.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
