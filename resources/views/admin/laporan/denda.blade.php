<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Denda - SMARTPERPUS</title>
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
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-rose-200 selection:text-rose-900">

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
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-chart-pie w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Bulanan
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 bg-rose-600/10 text-rose-400 border border-rose-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2"></i> Laporan Denda
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Laporan Denda Keterlambatan</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Rekapitulasi denda anggota perpustakaan.</p>
            </div>

            <div class="flex items-center gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-rose-200 transition-all object-cover">
                    <div class="hidden sm:block text-right">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-rose-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar relative">

            <!-- Toolbar & Filter Area -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">

                <!-- Search Bar Spesifik Denda -->
                <div class="relative w-full md:w-80">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Cari nama anggota atau kelas..." class="w-full bg-white border border-slate-200 rounded-xl py-2.5 pl-11 pr-4 text-sm focus:ring-2 focus:ring-rose-500/20 focus:border-rose-500 transition-all text-slate-700 outline-none shadow-sm">
                </div>

                <div class="flex items-center gap-3 w-full md:w-auto">
                    <!-- Filter Status -->
                    <div class="relative">
                        <select class="bg-white border border-slate-200 text-slate-700 text-sm font-medium rounded-xl py-2.5 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-rose-500/20 focus:border-rose-500 shadow-sm cursor-pointer min-w-[140px]">
                            <option value="semua">Semua Status</option>
                            <option value="lunas">Sudah Lunas</option>
                            <option value="belum">Belum Bayar</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-500">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>
                    <button class="bg-slate-800 hover:bg-slate-900 text-white px-5 py-2.5 rounded-xl shadow-md text-sm font-semibold transition-colors flex items-center gap-2 w-full md:w-auto justify-center">
                        <i class="fa-solid fa-print"></i> Cetak Rekap
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">

                <!-- Card: Total Kas Masuk -->
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-md p-6 text-white relative overflow-hidden group">
                    <i class="fa-solid fa-vault absolute -right-4 -bottom-4 text-6xl opacity-20 rotate-12"></i>
                    <div class="relative z-10">
                        <p class="text-emerald-100 font-semibold mb-1 text-sm uppercase tracking-wider">Total Kas Denda (Lunas)</p>
                        <h3 class="text-3xl lg:text-4xl font-black mb-2 tracking-tight">Rp 45.000</h3>
                        <p class="text-xs text-emerald-100 font-medium">Bulan berjalan (Juli 2026)</p>
                    </div>
                </div>

                <!-- Card: Belum Lunas -->
                <div class="bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl shadow-md p-6 text-white relative overflow-hidden group">
                    <i class="fa-solid fa-money-bill-transfer absolute -right-4 -bottom-4 text-6xl opacity-20 rotate-12"></i>
                    <div class="relative z-10">
                        <p class="text-rose-100 font-semibold mb-1 text-sm uppercase tracking-wider">Piutang Denda (Belum Bayar)</p>
                        <h3 class="text-3xl lg:text-4xl font-black mb-2 tracking-tight">Rp 12.000</h3>
                        <p class="text-xs text-rose-100 font-medium">Harus ditagihkan ke siswa</p>
                    </div>
                </div>

                <!-- Card: Jumlah Keterlambatan -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 relative overflow-hidden group flex items-center justify-between">
                    <div>
                        <p class="text-slate-500 font-bold mb-1 text-sm">Total Pelanggaran</p>
                        <h3 class="text-3xl font-black text-slate-800">18 <span class="text-base font-bold text-slate-400">Kasus</span></h3>
                        <p class="text-xs text-slate-400 mt-1 font-medium">Transaksi terlambat bulan ini</p>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-amber-50 text-amber-500 border border-amber-100 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center shrink-0">
                    <div>
                        <h3 class="font-bold text-slate-800 text-lg">Rincian Data Denda</h3>
                        <p class="text-xs text-slate-500 font-medium">Tarif denda keterlambatan: Rp 1.000 / hari.</p>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-white text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-100">
                                <th class="px-6 py-4 font-bold text-center">No</th>
                                <th class="px-6 py-4 font-bold">Data Siswa / Kelas</th>
                                <th class="px-6 py-4 font-bold">Buku Terlambat</th>
                                <th class="px-6 py-4 font-bold text-center">Telat (Hari)</th>
                                <th class="px-6 py-4 font-bold text-right">Total Denda</th>
                                <th class="px-6 py-4 font-bold text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-700 divide-y divide-slate-100">

                            <!-- Baris 1: Lunas -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="px-6 py-4 text-center font-medium text-slate-500 text-sm">1</td>
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800 text-sm mb-0.5">Ahmad Fauzi</div>
                                    <div class="text-[11px] text-slate-500 font-medium">Kelas 5 A</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1">Atlas Indonesia & Dunia</div>
                                    <div class="text-[10px] text-slate-400 font-mono">BK-88431</div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-sm font-bold text-rose-600">2 Hari</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="text-sm font-bold text-slate-800">Rp 2.000</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-600 border border-emerald-200 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider">
                                        <i class="fa-solid fa-check"></i> Lunas
                                    </span>
                                </td>
                            </tr>

                            <!-- Baris 2: Belum Bayar -->
                            <tr class="hover:bg-slate-50/80 transition-colors bg-rose-50/20">
                                <td class="px-6 py-4 text-center font-medium text-slate-500 text-sm">2</td>
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800 text-sm mb-0.5">Dimas Anggara</div>
                                    <div class="text-[11px] text-slate-500 font-medium">Kelas 6 B</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1">Buku Siswa Tema 1: Indahnya Kebersamaan</div>
                                    <div class="text-[10px] text-slate-400 font-mono">BK-40012</div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-sm font-bold text-rose-600">3 Hari</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="text-sm font-bold text-rose-600">Rp 3.000</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center gap-1.5 bg-rose-50 text-rose-600 border border-rose-200 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider">
                                        <i class="fa-solid fa-xmark"></i> Belum Bayar
                                    </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- Pagination Placeholder -->
                <div class="px-6 py-4 border-t border-slate-100 bg-white flex items-center justify-between">
                    <p class="text-sm text-slate-500 font-medium">Menampilkan <span class="font-bold text-slate-700">1</span> sampai <span class="font-bold text-slate-700">2</span> dari <span class="font-bold text-slate-700">18</span> data denda</p>
                    <div class="flex gap-2">
                        <button class="px-3 py-1.5 rounded-lg border border-slate-200 text-slate-400 cursor-not-allowed text-sm font-medium">Sebelumnya</button>
                        <button class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 hover:border-slate-300 text-slate-600 transition-colors text-sm font-medium">Selanjutnya</button>
                    </div>
                </div>

            </div>

        </main>
    </div>

</body>
</html>
