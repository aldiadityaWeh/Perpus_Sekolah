<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Kustomisasi scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 overflow-x-hidden selection:bg-blue-500 selection:text-white flex flex-col min-h-screen">

    <!-- NAVBAR (Solid Background Gelap agar rapi) -->
    <nav class="w-full z-50 px-6 py-4 bg-[#0f172a] shadow-md shrink-0">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo Kiri -->
            <a href="/" class="flex-shrink-0 flex items-center cursor-pointer group">
                <i class="fa-solid fa-book-open-reader text-blue-400 text-3xl mr-3 group-hover:scale-110 transition-transform"></i>
                <span class="font-bold text-xl tracking-wider text-slate-200 group-hover:text-white transition-colors">SMART<span class="text-blue-400">PERPUS</span></span>
            </a>

            <!-- Menu Navigasi (Desktop) -->
            <div class="hidden md:flex items-center gap-2 lg:gap-4">

                <a href="/" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Beranda
                </a>

                <!-- Menu Tentang (Dropdown Aktif) -->
                <div class="relative group">
                    <button class="bg-white/10 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors border border-white/5 shadow-sm flex items-center gap-1.5 focus:outline-none">
                        Tentang <i class="fa-solid fa-chevron-down text-[10px] opacity-70 transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>

                    <!-- Isi Dropdown (Scroll ke Section) -->
                    <div class="absolute left-0 mt-1 w-52 bg-white rounded-xl shadow-2xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -translate-y-2 group-hover:translate-y-0 z-50">
                        <a href="#profil" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2">
                            <i class="fa-solid fa-building-columns w-4 text-slate-400"></i> Profil Perpustakaan
                        </a>
                        <a href="#visi-misi" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2">
                            <i class="fa-solid fa-bullseye w-4 text-slate-400"></i> Visi & Misi
                        </a>
                        <a href="#tata-tertib" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium flex items-center gap-2">
                            <i class="fa-solid fa-scale-balanced w-4 text-slate-400"></i> Tata Tertib
                        </a>
                    </div>
                </div>

                <a href="/absen" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Absen Pengunjung
                </a>
                <a href="/koleksi" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Koleksi Buku
                </a>

                <div class="h-5 w-px bg-white/20 mx-2"></div>

                <a href="/login" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2 group">
                    <i class="fa-solid fa-right-to-bracket opacity-70 group-hover:translate-x-0.5 transition-transform"></i> Login Admin
                </a>
            </div>

            <button class="md:hidden text-slate-200 hover:text-white text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- HEADER BANNER (Layar Setengah) -->
    <header class="relative w-full h-[250px] md:h-[300px] flex items-center overflow-hidden pt-10">
        <!-- Gambar Background -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2000&auto=format&fit=crop" alt="Banner Tentang" class="w-full h-full object-cover">
        </div>

        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-slate-900/75 mix-blend-multiply z-10"></div>

        <!-- Teks Banner -->
        <div class="relative z-20 px-6 md:px-12 w-full max-w-7xl mx-auto text-center md:text-left flex flex-col md:flex-row items-center justify-between">
            <div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white drop-shadow-md mb-2">
                    Tentang Perpustakaan
                </h1>
                <p class="text-slate-300 text-sm md:text-base max-w-lg">
                    Kenali lebih dekat profil, visi misi, serta aturan dan tata tertib yang berlaku di lingkungan SMARTPERPUS.
                </p>
            </div>
            <div class="hidden md:flex gap-3 mt-4 md:mt-0 opacity-80">
                <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white/70"><i class="fa-solid fa-book-open"></i></div>
                <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white/70"><i class="fa-solid fa-graduation-cap"></i></div>
            </div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 w-full max-w-7xl mx-auto px-6 py-12 md:py-16 space-y-20">

        <!-- SECTION 1: PROFIL -->
        <section id="profil" class="scroll-mt-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Kolom Teks -->
                <div>
                    <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100">
                        <i class="fa-solid fa-building-columns"></i> Profil Kami
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Jendela Dunia di Lingkungan Sekolah</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-justify">
                        SMARTPERPUS didirikan untuk menjadi pusat literasi dan sumber belajar utama bagi seluruh warga sekolah. Dengan konsep ruang baca yang nyaman dan pengintegrasian teknologi perpustakaan digital, kami berupaya menciptakan ekosistem belajar yang menyenangkan.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-8 text-justify">
                        Sistem manajemen sirkulasi kami kini telah menggunakan pemindai *barcode* canggih, memudahkan proses absensi pengunjung dan rekapitulasi data peminjaman buku secara *real-time*.
                    </p>

                    <div class="flex gap-8 border-t border-slate-200 pt-6">
                        <div>
                            <p class="text-3xl font-black text-blue-600 mb-1">5K+</p>
                            <p class="text-xs font-bold text-slate-500 uppercase">Koleksi Buku</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-emerald-600 mb-1">800+</p>
                            <p class="text-xs font-bold text-slate-500 uppercase">Anggota Aktif</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Gambar -->
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-600 rounded-2xl transform translate-x-4 translate-y-4 opacity-10"></div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" alt="Suasana Perpustakaan" class="relative z-10 rounded-2xl shadow-xl w-full h-[400px] object-cover">
                </div>
            </div>
        </section>

        <!-- SECTION 2: VISI & MISI -->
        <section id="visi-misi" class="scroll-mt-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Box Visi (Gelap) -->
                <div class="bg-slate-900 text-white rounded-3xl p-8 md:p-10 shadow-xl relative overflow-hidden flex flex-col justify-center">
                    <!-- Dekorasi -->
                    <div class="absolute -right-10 -bottom-10 text-slate-800 text-9xl pointer-events-none">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <div class="relative z-10">
                        <div class="w-12 h-12 rounded-xl bg-blue-500/20 text-blue-400 border border-blue-500/30 flex items-center justify-center text-xl mb-6 shadow-inner">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 tracking-wide">Visi Perpustakaan</h3>
                        <p class="text-slate-300 text-lg leading-relaxed italic border-l-4 border-blue-500 pl-4">
                            "Menjadi pusat layanan informasi dan literasi yang modern, inspiratif, dan unggul dalam mencetak generasi penerus bangsa yang cerdas berkarakter."
                        </p>
                    </div>
                </div>

                <!-- Box Misi (Terang) -->
                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl mb-6 shadow-inner border border-emerald-100">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-6">Misi Perpustakaan</h3>
                    <ul class="space-y-4 text-slate-600 text-sm">
                        <li class="flex items-start gap-4 p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <i class="fa-solid fa-1 text-emerald-500 mt-1"></i>
                            <span class="leading-relaxed">Menyediakan dan memperkaya koleksi literatur cetak maupun digital yang mendukung kurikulum pendidikan secara berkesinambungan.</span>
                        </li>
                        <li class="flex items-start gap-4 p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <i class="fa-solid fa-2 text-emerald-500 mt-1"></i>
                            <span class="leading-relaxed">Memberikan pelayanan prima kepada pengunjung dengan memanfaatkan kemajuan Teknologi Informasi dan Komunikasi.</span>
                        </li>
                        <li class="flex items-start gap-4 p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <i class="fa-solid fa-3 text-emerald-500 mt-1"></i>
                            <span class="leading-relaxed">Menumbuhkembangkan minat baca serta budaya literasi di kalangan warga sekolah melalui program-program inovatif.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SECTION 3: TATA TERTIB -->
        <section id="tata-tertib" class="scroll-mt-24 bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-slate-200">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-amber-50 text-amber-600 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 border border-amber-100">
                    <i class="fa-solid fa-scale-balanced"></i> Aturan & Etika
                </div>
                <h2 class="text-3xl font-bold text-slate-800 mb-2">Tata Tertib Pengunjung</h2>
                <p class="text-slate-500 text-sm">Ketentuan ini dibuat demi kenyamanan bersama dan menjaga keutuhan koleksi.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Aturan 1 -->
                <div class="bg-slate-50 hover:bg-white p-6 rounded-2xl border border-slate-100 hover:border-slate-200 hover:shadow-md transition-all text-center group cursor-default">
                    <div class="w-14 h-14 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-2xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-id-card-clip"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 text-sm">Wajib Absen</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Pengunjung diwajibkan untuk mengisi absensi melalui scan *barcode* di pintu masuk.</p>
                </div>

                <!-- Aturan 2 -->
                <div class="bg-slate-50 hover:bg-white p-6 rounded-2xl border border-slate-100 hover:border-slate-200 hover:shadow-md transition-all text-center group cursor-default">
                    <div class="w-14 h-14 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-2xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-volume-xmark"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 text-sm">Jaga Ketenangan</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Dilarang membuat keributan, bercanda berlebihan, atau memutar musik dengan *speaker* luar.</p>
                </div>

                <!-- Aturan 3 -->
                <div class="bg-slate-50 hover:bg-white p-6 rounded-2xl border border-slate-100 hover:border-slate-200 hover:shadow-md transition-all text-center group cursor-default">
                    <div class="w-14 h-14 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-2xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 text-sm">Dilarang Makan</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Untuk menghindari kerusakan buku dan menjaga kebersihan, makan dan minum tidak diperbolehkan.</p>
                </div>

                <!-- Aturan 4 -->
                <div class="bg-slate-50 hover:bg-white p-6 rounded-2xl border border-slate-100 hover:border-slate-200 hover:shadow-md transition-all text-center group cursor-default">
                    <div class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-book-medical"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 text-sm">Simpan Pada Tempatnya</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Buku yang selesai dibaca mohon diletakkan di meja *return* atau kembalikan ke rak semula.</p>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#0b1120] border-t border-slate-800 text-slate-400 py-6 text-center text-sm mt-auto shrink-0">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p>&copy; 2023 SMARTPERPUS System. All rights reserved.</p>
            <div class="flex gap-4 text-xs font-semibold">
                <a href="/" class="hover:text-white transition-colors">Beranda</a>
                <a href="/koleksi" class="hover:text-white transition-colors">Koleksi Buku</a>
            </div>
        </div>
    </footer>

    <!-- Script Kustom -->
    <script>
        // Smooth scrolling untuk link anchor (misal: href="#profil")
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
