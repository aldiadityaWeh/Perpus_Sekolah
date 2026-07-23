<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SMARTPERPUS Sekolah Smart</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Animasi kustom untuk logo mengambang */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Kustomisasi scrollbar */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: #475569; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 overflow-x-hidden selection:bg-blue-500 selection:text-white">

    <!-- NAVBAR (Transparan & Absolute di atas gambar) -->
    <nav class="absolute top-0 w-full z-50 px-6 py-4 transition-all duration-300 border-b border-white/10 bg-slate-900/20 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo Kiri -->
            <div class="flex-shrink-0 flex items-center cursor-pointer group">
                <i class="fa-solid fa-book-open-reader text-blue-400 text-3xl mr-3 group-hover:scale-110 transition-transform"></i>
                <span class="font-bold text-xl tracking-wider text-slate-200 group-hover:text-white transition-colors">SMART<span class="text-blue-400">PERPUS</span></span>
            </div>

            <!-- Menu Navigasi (Desktop) -->
            <div class="hidden md:flex items-center gap-2 lg:gap-4">

                <!-- Menu Beranda (Aktif) -->
                <a href="#" class="bg-white/10 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors border border-white/5 shadow-sm">
                    Beranda
                </a>

                <!-- Menu Tentang (Dropdown) -->
                <div class="relative group">
                    <button class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-1.5 focus:outline-none">
                        Tentang <i class="fa-solid fa-chevron-down text-[10px] opacity-70 transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>

                    <!-- Isi Dropdown (Muncul saat hover) -->
                    <div class="absolute left-0 mt-1 w-52 bg-white rounded-xl shadow-2xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -translate-y-2 group-hover:translate-y-0 z-50">
                        <a href="#tentang" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2"><i class="fa-solid fa-building-columns w-4 text-slate-400"></i> Profil Perpustakaan</a>
                        <a href="#tentang" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2"><i class="fa-solid fa-bullseye w-4 text-slate-400"></i> Visi & Misi</a>
                        <a href="#tentang" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2"><i class="fa-solid fa-sitemap w-4 text-slate-400"></i> Struktur Organisasi</a>
                        <a href="#aturan" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2"><i class="fa-solid fa-scale-balanced w-4 text-slate-400"></i> Tata Tertib</a>
                    </div>
                </div>

                <!-- Menu Lainnya -->
                <a href="#absen" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Absen Pengunjung
                </a>
                <a href="#koleksi" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Koleksi Buku
                </a>

                <!-- Garis Pemisah -->
                <div class="h-5 w-px bg-white/20 mx-2"></div>

                <!-- Tombol Login Admin (Desain seragam dengan menu lain) -->
                <a href="/admin/dashboard" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2 group">
                    <i class="fa-solid fa-right-to-bracket opacity-70 group-hover:translate-x-0.5 transition-transform"></i> Login Admin
                </a>
            </div>

            <!-- Tombol Mobile Menu (Hamburger) -->
            <button class="md:hidden text-slate-200 hover:text-white text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- HERO SECTION (Tampilan Layar Penuh dengan Background) -->
    <header class="relative w-full h-screen flex items-center justify-center overflow-hidden">

        <!-- Gambar Background (dari Unsplash - Tema Perpustakaan) -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2000&auto=format&fit=crop" alt="Background Perpustakaan" class="w-full h-full object-cover">
        </div>

        <!-- Overlay Gelap agar teks terbaca -->
        <div class="absolute inset-0 bg-slate-900/75 mix-blend-multiply z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-slate-900/40 z-10"></div>

        <!-- Tombol Slider Kiri -->
        <button class="absolute left-4 md:left-10 z-30 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white flex items-center justify-center backdrop-blur-sm transition-all hover:scale-110">
            <i class="fa-solid fa-chevron-left text-xl"></i>
        </button>

        <!-- Konten Utama Tengah -->
        <div class="relative z-20 text-center px-4 max-w-4xl mx-auto flex flex-col items-center">

            <!-- Logo Bulat Kustom (Mirip Referensi Gambar) -->
            <div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-2 border-blue-400/50 flex flex-col items-center justify-center bg-slate-900/40 backdrop-blur-md mb-8 animate-float shadow-[0_0_30px_rgba(59,130,246,0.3)] relative">
                <!-- Bintang di atas buku -->
                <div class="absolute top-4 md:top-6 flex gap-1 text-amber-400 text-xs md:text-sm">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star transform -translate-y-1"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <!-- Ikon Buku -->
                <i class="fa-solid fa-book-open text-5xl md:text-6xl text-blue-400 mt-2"></i>
                <!-- Ikon Tangan Menopang (Opsional/Pendukung) -->
                <div class="absolute bottom-4 md:bottom-5 flex gap-6 text-blue-300 text-sm md:text-base opacity-80">
                    <i class="fa-solid fa-hand-holding transform scale-x-[-1]"></i>
                    <i class="fa-solid fa-hand-holding"></i>
                </div>
                <!-- Hiasan Daun / Padi di samping -->
                <i class="fa-solid fa-leaf absolute left-2 text-amber-500/80 -rotate-45 text-xs md:text-sm"></i>
                <i class="fa-solid fa-leaf absolute right-2 text-amber-500/80 rotate-45 text-xs md:text-sm"></i>
            </div>

            <!-- Tipografi Utama -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 drop-shadow-lg tracking-tight">
                Selamat Datang
            </h1>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-8 drop-shadow-lg">
                Di SMARTPERPUS Sekolah Smart
            </h2>

            <p class="text-sm md:text-base lg:text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed drop-shadow-md">
                SMARTPERPUS Sekolah Smart merupakan layanan yang diberikan khususnya kepada siswa/i untuk memperoleh informasi seperti buku teks pelajaran, buku bacaan, kamus umum, sampai ensiklopedia.
            </p>

            <a href="#tentang" class="mt-12 animate-bounce w-12 h-12 rounded-full border border-white/30 text-white flex items-center justify-center text-xl hover:bg-white/10 transition-colors">
                <i class="fa-solid fa-arrow-down"></i>
            </a>
        </div>

        <!-- Tombol Slider Kanan -->
        <button class="absolute right-4 md:right-10 z-30 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white flex items-center justify-center backdrop-blur-sm transition-all hover:scale-110">
            <i class="fa-solid fa-chevron-right text-xl"></i>
        </button>
    </header>

    <!-- SECTION: TENTANG SEKOLAH & PERPUSTAKAAN -->
    <section id="tentang" class="py-20 md:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-sm">Tentang Kami</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-4">Profil SMARTPERPUS</h2>
                <div class="w-20 h-1.5 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Kolom Gambar -->
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-600 rounded-2xl transform translate-x-4 translate-y-4 opacity-10"></div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" alt="Fasilitas Perpustakaan" class="relative z-10 rounded-2xl shadow-xl w-full h-[400px] object-cover">

                    <!-- Kotak Statistik Mengambang -->
                    <div class="absolute -bottom-6 -left-6 z-20 bg-white p-6 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4">
                        <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-slate-800">5.000+</p>
                            <p class="text-xs text-slate-500 font-medium">Koleksi Buku</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Teks -->
                <div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Membangun Generasi Cerdas Melalui Literasi</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Perpustakaan kami didesain dengan konsep modern yang mengintegrasikan teknologi digital dan kenyamanan ruang baca konvensional. Kami berkomitmen untuk menyediakan sumber daya literasi terbaik bagi seluruh siswa dan staf pengajar.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 text-xl shadow-sm border border-blue-100">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Fasilitas Digital & Wi-Fi</h4>
                                <p class="text-sm text-slate-500 mt-1">Akses internet cepat dan e-library untuk mendukung riset digital siswa.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 text-xl shadow-sm border border-emerald-100">
                                <i class="fa-solid fa-couch"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Ruang Baca Nyaman</h4>
                                <p class="text-sm text-slate-500 mt-1">Area baca yang tenang, ber-AC, dan dilengkapi kursi sofa yang nyaman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: INFO OPERASIONAL (Warna Gelap) -->
    <section class="py-16 bg-slate-900 text-white relative overflow-hidden">
        <!-- Dekorasi Background -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-emerald-600/20 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-700">

                <div class="p-6">
                    <i class="fa-regular fa-clock text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Jam Operasional</h3>
                    <p class="text-slate-400 text-sm">Senin - Kamis: 07.30 - 15.00 WIB</p>
                    <p class="text-slate-400 text-sm mt-1">Jumat: 07.30 - 11.30 WIB</p>
                    <span class="inline-block mt-3 bg-rose-500/20 text-rose-300 text-[10px] px-2 py-1 rounded border border-rose-500/30 uppercase tracking-wider font-bold">Sabtu & Minggu Tutup</span>
                </div>

                <div class="p-6">
                    <i class="fa-solid fa-id-card-clip text-4xl text-emerald-400 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Syarat Keanggotaan</h3>
                    <p class="text-slate-400 text-sm">Siswa aktif yang terdaftar, membawa kartu pelajar, dan mengisi formulir anggota perpustakaan.</p>
                </div>

                <div class="p-6">
                    <i class="fa-solid fa-book-circle-arrow-right text-4xl text-amber-400 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Aturan Peminjaman</h3>
                    <p class="text-slate-400 text-sm">Maksimal peminjaman 2 buku selama 7 hari kalender. Denda keterlambatan berlaku.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: LOKASI & KONTAK -->
    <section id="kontak" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-4">Lokasi & Kontak Kami</h2>
                <div class="w-20 h-1.5 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">

                <!-- Info Kontak Kiri -->
                <div class="p-8 md:p-12 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-slate-800 mb-6">Sekolah Dasar Negeri Smart 01</h3>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Alamat Lengkap</h4>
                                <p class="text-sm text-slate-500 mt-1">Jl. Pendidikan No. 123, Komplek Pelajar, Kota Jakarta Selatan, DKI Jakarta 12345</p>
                            </div>
                        </li>

                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Telepon / WhatsApp</h4>
                                <p class="text-sm text-slate-500 mt-1">(021) 555-1234 / +62 812-3456-7890</p>
                            </div>
                        </li>

                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Email Resmi</h4>
                                <p class="text-sm text-slate-500 mt-1">perpus@sdnsmart01.sch.id</p>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-10 flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-pink-600 hover:bg-pink-700 text-white flex items-center justify-center transition-colors shadow-md">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-red-600 hover:bg-red-700 text-white flex items-center justify-center transition-colors shadow-md">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom Peta (Iframe Google Maps Dummy) -->
                <div class="h-64 lg:h-auto bg-slate-200 relative w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1m3!1d126917.18565138137!2d106.75877894236962!3d-6.229728035225211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x100c5e82dd4b820!2sJakarta%20Selatan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1699999999999!5m2!1sid!2sid"
                        class="absolute inset-0 w-full h-full border-0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0b1120] border-t border-slate-800 text-slate-400 py-8 text-center text-sm">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p>&copy; 2023 SMARTPERPUS - SD Negeri Smart 01. All rights reserved.</p>
            <div class="flex gap-6 text-xs font-semibold">
                <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition-colors">Syarat Ketentuan</a>
            </div>
        </div>
    </footer>

    <!-- Script Kustom jika diperlukan -->
    <script>
        // Logika untuk mengubah warna navbar transparan saat di-scroll ke bawah
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.remove('bg-slate-900/20', 'border-white/10');
                nav.classList.add('bg-slate-900/90', 'border-slate-800', 'shadow-lg');
            } else {
                nav.classList.add('bg-slate-900/20', 'border-white/10');
                nav.classList.remove('bg-slate-900/90', 'border-slate-800', 'shadow-lg');
            }
        });
    </script>
</body>
</html>
