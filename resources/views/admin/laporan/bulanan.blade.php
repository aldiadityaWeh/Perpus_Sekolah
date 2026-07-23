<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bulanan - SMARTPERPUS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        select { -webkit-appearance: none; appearance: none; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <i class="fa-solid fa-book-open-reader text-blue-400 text-2xl mr-3 drop-shadow-md"></i>
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-chart-pie w-6 text-center mr-2"></i> Laporan Bulanan
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Denda
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Laporan Bulanan</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Statistik sirkulasi perpustakaan per bulan.</p>
            </div>

            <div class="flex items-center gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                    <div class="hidden sm:block text-right">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar relative">

            <!-- Toolbar & Filter Area -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">

                <div class="flex items-center gap-3 w-full md:w-auto">
                    <div class="relative">
                        <select class="bg-white border border-slate-200 text-slate-700 text-sm font-bold rounded-xl py-2.5 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 shadow-sm cursor-pointer min-w-[150px]">
                            <option value="07-2026" selected>Juli 2026</option>
                            <option value="06-2026">Juni 2026</option>
                            <option value="05-2026">Mei 2026</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-500">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>
                    <button class="bg-blue-50 text-blue-600 border border-blue-200 hover:bg-blue-100 px-4 py-2.5 rounded-xl shadow-sm text-sm font-semibold transition-colors">
                        Terapkan
                    </button>
                </div>

                <div class="flex items-center gap-3 w-full md:w-auto">
                    <button class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 px-4 py-2.5 rounded-xl shadow-sm text-sm font-medium transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-file-excel text-emerald-600"></i> Excel
                    </button>
                    <button class="bg-slate-800 hover:bg-slate-900 text-white px-5 py-2.5 rounded-xl shadow-md text-sm font-semibold transition-colors flex items-center gap-2 w-full md:w-auto justify-center">
                        <i class="fa-solid fa-print"></i> Cetak Laporan
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 relative overflow-hidden group">
                    <div class="flex justify-between items-start relative z-10">
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-1">Total Peminjaman</p>
                            <h3 class="text-3xl font-black text-slate-800">428</h3>
                            <p class="text-xs font-bold text-emerald-500 mt-2 flex items-center gap-1"><i class="fa-solid fa-arrow-trend-up"></i> +12% dari Juni</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xl border border-blue-100">
                            <i class="fa-solid fa-hand-holding-hand"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 relative overflow-hidden group">
                    <div class="flex justify-between items-start relative z-10">
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-1">Total Dikembalikan</p>
                            <h3 class="text-3xl font-black text-slate-800">390</h3>
                            <p class="text-xs font-bold text-slate-400 mt-2 flex items-center gap-1">Bulan Juli 2026</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl border border-emerald-100">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 relative overflow-hidden group">
                    <div class="flex justify-between items-start relative z-10">
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-1">Anggota Baru</p>
                            <h3 class="text-3xl font-black text-slate-800">24</h3>
                            <p class="text-xs font-bold text-blue-500 mt-2 flex items-center gap-1">Siswa Terdaftar</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-xl border border-purple-100">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 relative overflow-hidden group">
                    <div class="flex justify-between items-start relative z-10">
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-1">Buku Rusak / Hilang</p>
                            <h3 class="text-3xl font-black text-rose-600">3</h3>
                            <p class="text-xs font-bold text-rose-500 mt-2 flex items-center gap-1"><i class="fa-solid fa-triangle-exclamation"></i> Perlu Tindakan</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center text-xl border border-rose-100">
                            <i class="fa-solid fa-book-skull"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Grafik Sederhana (Menggunakan CSS Murni) -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
                    <h3 class="font-bold text-slate-800 text-lg mb-6">Tren Sirkulasi Mingguan (Juli 2026)</h3>

                    <div class="h-64 flex items-end justify-between gap-2 px-2 relative">
                        <!-- Garis Background (Grid) -->
                        <div class="absolute inset-0 flex flex-col justify-between border-b border-slate-200 pb-8 z-0">
                            <div class="border-t border-slate-100 w-full h-0"></div>
                            <div class="border-t border-slate-100 w-full h-0"></div>
                            <div class="border-t border-slate-100 w-full h-0"></div>
                            <div class="border-t border-slate-100 w-full h-0"></div>
                        </div>

                        <!-- Bar Chart CSS Sederhana (Minggu 1 - 4) -->
                        <div class="relative z-10 w-full flex justify-around items-end h-56 pb-2">
                            <!-- Minggu 1 -->
                            <div class="flex gap-2 items-end h-full">
                                <div class="w-8 md:w-12 bg-blue-500 rounded-t-sm h-[40%] hover:opacity-80 transition-opacity" title="Pinjam: 40"></div>
                                <div class="w-8 md:w-12 bg-emerald-400 rounded-t-sm h-[30%] hover:opacity-80 transition-opacity" title="Kembali: 30"></div>
                            </div>
                            <!-- Minggu 2 -->
                            <div class="flex gap-2 items-end h-full">
                                <div class="w-8 md:w-12 bg-blue-500 rounded-t-sm h-[65%] hover:opacity-80 transition-opacity" title="Pinjam: 65"></div>
                                <div class="w-8 md:w-12 bg-emerald-400 rounded-t-sm h-[50%] hover:opacity-80 transition-opacity" title="Kembali: 50"></div>
                            </div>
                            <!-- Minggu 3 -->
                            <div class="flex gap-2 items-end h-full">
                                <div class="w-8 md:w-12 bg-blue-500 rounded-t-sm h-[90%] hover:opacity-80 transition-opacity" title="Pinjam: 90"></div>
                                <div class="w-8 md:w-12 bg-emerald-400 rounded-t-sm h-[85%] hover:opacity-80 transition-opacity" title="Kembali: 85"></div>
                            </div>
                            <!-- Minggu 4 -->
                            <div class="flex gap-2 items-end h-full">
                                <div class="w-8 md:w-12 bg-blue-500 rounded-t-sm h-[50%] hover:opacity-80 transition-opacity" title="Pinjam: 50"></div>
                                <div class="w-8 md:w-12 bg-emerald-400 rounded-t-sm h-[60%] hover:opacity-80 transition-opacity" title="Kembali: 60"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Label Bawah -->
                    <div class="flex justify-around text-xs font-semibold text-slate-500 mt-2">
                        <span>Minggu 1</span>
                        <span>Minggu 2</span>
                        <span>Minggu 3</span>
                        <span>Minggu 4</span>
                    </div>

                    <!-- Legenda -->
                    <div class="flex justify-center gap-6 mt-6 pt-4 border-t border-slate-100">
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-blue-500"></span><span class="text-xs text-slate-600 font-medium">Buku Dipinjam</span></div>
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-emerald-400"></span><span class="text-xs text-slate-600 font-medium">Buku Dikembalikan</span></div>
                    </div>
                </div>

                <!-- Buku Terpopuler (Top 5) -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 flex flex-col">
                    <h3 class="font-bold text-slate-800 text-lg mb-4">Buku Terpopuler (Top 5)</h3>

                    <div class="space-y-4 flex-1">
                        <!-- Top 1 -->
                        <div class="flex items-center justify-between p-3 bg-amber-50/50 border border-amber-100 rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-black text-sm">1</div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm line-clamp-1">Dongeng Si Kancil</h4>
                                    <p class="text-[10px] text-slate-500 font-mono">BK-10045</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded">45x Dipinjam</span>
                        </div>

                        <!-- Top 2 -->
                        <div class="flex items-center justify-between p-3 border border-slate-100 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center font-bold text-sm">2</div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm line-clamp-1">Atlas Indonesia</h4>
                                    <p class="text-[10px] text-slate-500 font-mono">BK-88431</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-slate-500">32x</span>
                        </div>

                        <!-- Top 3 -->
                        <div class="flex items-center justify-between p-3 border border-slate-100 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center font-bold text-sm">3</div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm line-clamp-1">Tema 1: Kelas 4</h4>
                                    <p class="text-[10px] text-slate-500 font-mono">BK-40012</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-slate-500">28x</span>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>
