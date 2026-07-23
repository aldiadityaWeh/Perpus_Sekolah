<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku - SMARTPERPUS</title>
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

        /* Hilangkan panah default pada select */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 overflow-x-hidden selection:bg-blue-500 selection:text-white flex flex-col min-h-screen">

    <!-- Navbar (Solid Background) -->
    <nav class="w-full z-50 px-6 py-4 bg-[#0f172a] shadow-md shrink-0">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center cursor-pointer group">
                <i class="fa-solid fa-book-open-reader text-blue-400 text-3xl mr-3 group-hover:scale-110 transition-transform"></i>
                <span class="font-bold text-xl tracking-wider text-slate-200 group-hover:text-white transition-colors">SMART<span class="text-blue-400">PERPUS</span></span>
            </div>

            <!-- Menu Navigasi (Desktop) -->
            <div class="hidden md:flex items-center gap-2 lg:gap-4">

                <a href="/" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Beranda
                </a>

                <!-- Menu Tentang (Dropdown) -->
                <div class="relative group">
                    <button class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-1.5 focus:outline-none">
                        Tentang <i class="fa-solid fa-chevron-down text-[10px] opacity-70 transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <!-- Isi Dropdown -->
                    <div class="absolute left-0 mt-1 w-52 bg-white rounded-xl shadow-2xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -translate-y-2 group-hover:translate-y-0 z-50">
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium"><i class="fa-solid fa-building-columns w-5 text-slate-400"></i> Profil Perpustakaan</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium"><i class="fa-solid fa-bullseye w-5 text-slate-400"></i> Visi & Misi</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium"><i class="fa-solid fa-scale-balanced w-5 text-slate-400"></i> Tata Tertib</a>
                    </div>
                </div>

                <a href="/absen" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Absen Pengunjung
                </a>

                <!-- Koleksi Buku (Aktif) -->
                <a href="/koleksi" class="bg-white/10 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors border border-white/5 shadow-sm">
                    Koleksi Buku
                </a>

                <div class="h-5 w-px bg-white/20 mx-2"></div>
                <a href="/admin/dashboard" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2 group">
                    <i class="fa-solid fa-right-to-bracket opacity-70 group-hover:translate-x-0.5 transition-transform"></i> Login Admin
                </a>
            </div>

            <button class="md:hidden text-slate-200 hover:text-white text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">

        <!-- Kotak Pencarian -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 md:p-8 mb-8">
            <h2 class="text-xl md:text-2xl font-bold text-slate-800 mb-6">Cari buku apa? yuk bisa cari langsung disini ...</h2>

            <div class="flex flex-col md:flex-row gap-4">
                <!-- Dropdown Filter -->
                <div class="relative w-full md:w-64 shrink-0">
                    <select class="w-full bg-white border border-slate-300 rounded-lg py-3.5 pl-4 pr-10 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 appearance-none shadow-sm cursor-pointer">
                        <option value="semua">Cari Buku Berdasarkan</option>
                        <option value="judul">Judul Buku</option>
                        <option value="penulis">Penulis</option>
                        <option value="penerbit">Penerbit</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-500">
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </div>
                </div>

                <!-- Input Search & Button -->
                <div class="flex-1 flex border border-blue-600 rounded-lg overflow-hidden shadow-sm focus-within:ring-4 focus-within:ring-blue-500/20 transition-shadow">
                    <div class="flex items-center justify-center pl-4 pr-2 bg-white text-slate-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="text" value="matematika" placeholder="Ketikkan kata kunci disini ..." class="w-full py-3.5 px-2 bg-white outline-none text-slate-700 text-sm placeholder:text-slate-400">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 md:px-8 py-3.5 transition-colors text-sm shrink-0">
                        Cari
                    </button>
                </div>
            </div>
        </div>

        <!-- Grid Kategori Box -->
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-4 mb-12">

            <!-- Kategori 1 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-red-50 text-red-500 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-book"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Buku Teks<br>Umum</span>
            </a>

            <!-- Kategori 2 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Buku Pelajaran<br>Pokok</span>
            </a>

            <!-- Kategori 3 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Buku Filsafat<br>dan Psikologi</span>
            </a>

            <!-- Kategori 4 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-teal-50 text-teal-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-book-quran"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Buku Agama<br>&nbsp;</span>
            </a>

            <!-- Kategori 5 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-users"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Buku<br>Sosial</span>
            </a>

            <!-- Kategori 6 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group ring-2 ring-blue-500/20">
                <div class="w-14 h-14 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-square-root-variable"></i>
                </div>
                <span class="text-[11px] font-bold text-blue-600 leading-tight">Buku Sains<br>Matematika</span>
            </a>

            <!-- Kategori 7 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-stone-100 text-stone-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-earth-asia"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Buku Sejarah<br>Buku Geografi</span>
            </a>

            <!-- Kategori 8 -->
            <a href="#" class="bg-white p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col items-center justify-center text-center gap-3 hover:-translate-y-1 hover:shadow-md transition-all group">
                <div class="w-14 h-14 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <span class="text-[11px] font-semibold text-slate-600 leading-tight">Metode<br>Penelitian</span>
            </a>

        </div>

        <!-- Teks Hasil Pencarian -->
        <div class="text-center mb-10">
            <p class="text-lg md:text-xl text-slate-600 mb-1">Kata kunci pencarian kamu adalah :</p>
            <h1 class="text-3xl md:text-4xl font-bold text-slate-800">matematika</h1>
        </div>

        <!-- Grid Daftar Buku (Hasil Pencarian) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">

            <!-- Buku 1 -->
            <div class="bg-slate-500 rounded-xl p-3 md:p-4 relative group cursor-pointer hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden">
                <!-- Tombol Info Biru (Kiri Atas) -->
                <button class="absolute top-4 left-4 w-6 h-6 bg-blue-600 hover:bg-blue-700 text-white rounded-[4px] flex items-center justify-center text-[10px] z-10 transition-colors shadow-sm">
                    <i class="fa-solid fa-info"></i>
                </button>
                <!-- Cover Buku -->
                <div class="w-full aspect-[3/4] bg-slate-300 rounded overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?q=80&w=400&auto=format&fit=crop" alt="Matematika SMA" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="mt-3 text-center">
                    <p class="text-white text-xs font-semibold truncate px-1">Kupas Rumus Matematika SMA</p>
                </div>
            </div>

            <!-- Buku 2 -->
            <div class="bg-slate-500 rounded-xl p-3 md:p-4 relative group cursor-pointer hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden">
                <button class="absolute top-4 left-4 w-6 h-6 bg-blue-600 hover:bg-blue-700 text-white rounded-[4px] flex items-center justify-center text-[10px] z-10 transition-colors shadow-sm">
                    <i class="fa-solid fa-info"></i>
                </button>
                <div class="w-full aspect-[3/4] bg-slate-300 rounded overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?q=80&w=400&auto=format&fit=crop" alt="Matematika SMP" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="mt-3 text-center">
                    <p class="text-white text-xs font-semibold truncate px-1">Matematika SMP K13</p>
                </div>
            </div>

            <!-- Buku 3 -->
            <div class="bg-slate-500 rounded-xl p-3 md:p-4 relative group cursor-pointer hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden">
                <button class="absolute top-4 left-4 w-6 h-6 bg-blue-600 hover:bg-blue-700 text-white rounded-[4px] flex items-center justify-center text-[10px] z-10 transition-colors shadow-sm">
                    <i class="fa-solid fa-info"></i>
                </button>
                <div class="w-full aspect-[3/4] bg-slate-300 rounded overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1509228468518-180dd4864904?q=80&w=400&auto=format&fit=crop" alt="Pintar Matematika" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="mt-3 text-center">
                    <p class="text-white text-xs font-semibold truncate px-1">Semua Bisa Pintar Matematika</p>
                </div>
            </div>

            <!-- Buku 4 -->
            <div class="bg-slate-500 rounded-xl p-3 md:p-4 relative group cursor-pointer hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden">
                <button class="absolute top-4 left-4 w-6 h-6 bg-blue-600 hover:bg-blue-700 text-white rounded-[4px] flex items-center justify-center text-[10px] z-10 transition-colors shadow-sm">
                    <i class="fa-solid fa-info"></i>
                </button>
                <div class="w-full aspect-[3/4] bg-slate-300 rounded overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1518133910546-b6c2fb7d79e3?q=80&w=400&auto=format&fit=crop" alt="Matematika Fisika" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="mt-3 text-center">
                    <p class="text-white text-xs font-semibold truncate px-1">Top Rank Matematika Fisika</p>
                </div>
            </div>

            <!-- Buku 5 -->
            <div class="bg-slate-500 rounded-xl p-3 md:p-4 relative group cursor-pointer hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden">
                <button class="absolute top-4 left-4 w-6 h-6 bg-blue-600 hover:bg-blue-700 text-white rounded-[4px] flex items-center justify-center text-[10px] z-10 transition-colors shadow-sm">
                    <i class="fa-solid fa-info"></i>
                </button>
                <div class="w-full aspect-[3/4] bg-slate-300 rounded overflow-hidden shadow-md relative">
                    <!-- Label Habis Dipinjam -->
                    <div class="absolute inset-0 bg-slate-900/60 flex items-center justify-center z-10 backdrop-blur-[1px]">
                        <span class="bg-rose-500 text-white text-[10px] font-bold px-2 py-1 rounded">Dipinjam</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?q=80&w=400&auto=format&fit=crop" alt="Kalkulus" class="w-full h-full object-cover">
                </div>
                <div class="mt-3 text-center opacity-70">
                    <p class="text-white text-xs font-semibold truncate px-1">Matematika Dasar & Kalkulus</p>
                </div>
            </div>

        </div>

    </main>

    <footer class="bg-[#0b1120] border-t border-slate-800 text-slate-400 py-6 text-center text-sm mt-auto">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p>&copy; 2023 SMARTPERPUS System. All rights reserved.</p>
            <div class="flex gap-4 text-xs">
                <a href="#" class="hover:text-white transition-colors">Bantuan</a>
                <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>

</body>
</html>
