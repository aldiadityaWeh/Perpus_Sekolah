<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengunjung - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }

        /* Menghilangkan panah default pada select & date picker */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        input[type="month"]::-webkit-calendar-picker-indicator,
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 0.6;
            transition: 0.2s;
        }
        input[type="month"]::-webkit-calendar-picker-indicator:hover,
        input[type="date"]::-webkit-calendar-picker-indicator:hover {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <i class="fa-solid fa-book-open-reader text-blue-400 text-2xl mr-3 drop-shadow-md"></i>
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li>
                    <a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li>
                    <a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku
                    </a>
                </li>
                <li>
                    <a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC
                    </a>
                </li>
                <li>
                    <a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku
                    </a>
                </li>
                <li>
                    <a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku
                    </a>
                </li>
                <li>
                    <a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku
                    </a>
                </li>
                <li>
                    <a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota
                    </a>
                </li>
                <li>
                    <a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li>
                    <a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman
                    </a>
                </li>
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                        </div>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li>
                    <a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota
                    </a>
                </li>
                <li>
                    <a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Buku
                    </a>
                </li>
                <li>
                    <a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas
                    </a>
                </li>
                <!-- Laporan Pengunjung (Aktif) -->
                <li>
                    <a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users-viewfinder w-6 text-center mr-2"></i> Laporan Pengunjung
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Dashboard</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Laporan Pengunjung</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">
                    <i class="fa-solid fa-users-viewfinder mr-1"></i> Laporan Pengunjung
                </h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block text-left">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6 custom-scrollbar">

            <div class="max-w-[1400px] mx-auto space-y-6">

                <!-- Info Banner -->
                <div class="bg-[#4eb4f5] text-white rounded p-4 shadow-sm border border-[#3ba0de]">
                    <div class="flex items-center gap-2 mb-1">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-lg">Informasi</h3>
                    </div>
                    <p class="text-[13px] text-white/90">Berikut ini adalah data <strong>LAPORAN PENGUNJUNG</strong> perpustakaan yang sudah terekam melalui sistem absen digital.</p>
                </div>

                <!-- FORM CETAK LAPORAN (Dinamis) -->
                <div class="bg-white rounded border border-slate-200 shadow-sm flex flex-col">
                    <div class="px-5 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-file-lines text-slate-800 text-lg"></i>
                        <h3 class="font-bold text-slate-800">Cetak Laporan Kunjungan</h3>
                    </div>

                    <div class="p-5">
                        <form action="#" method="GET" class="flex flex-col md:flex-row items-start md:items-center gap-4">

                            <!-- Dropdown Utama: Rentang Waktu -->
                            <div class="relative w-full md:w-64">
                                <select id="rentangWaktu" onchange="toggleFilterInputs()" class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                    <option value="" selected>-== Pilih Rentang Waktu ==-</option>
                                    <option value="bulanan">Bulanan</option>
                                    <option value="tahunan">Tahunan</option>
                                    <option value="custom">Custom (Berdasarkan Tanggal)</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Filter Input Container (Dinamis disembunyikan/dimunculkan oleh JS) -->
                            <div id="dynamicFilterContainer" class="flex flex-col md:flex-row items-center gap-3 w-full md:w-auto hidden">

                                <!-- Input Bulanan (Tipe Month) -->
                                <div id="filterBulanan" class="w-full md:w-64 hidden">
                                    <input type="month" name="bulan" class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                </div>

                                <!-- Input Tahunan (Tipe Select Tahun) -->
                                <div id="filterTahunan" class="w-full md:w-64 hidden relative">
                                    <select name="tahun" class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                        <option value="" disabled selected>Pilih Tahun</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Input Custom (Rentang Tanggal Awal - Akhir) -->
                                <div id="filterCustom" class="w-full md:w-auto flex items-center gap-2 hidden">
                                    <input type="date" name="tgl_awal" class="w-full md:w-40 bg-white border border-blue-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-[0_0_0_2px_rgba(59,130,246,0.1)]">
                                    <span class="text-slate-500 text-sm font-medium">s/d</span>
                                    <input type="date" name="tgl_akhir" class="w-full md:w-40 bg-white border border-blue-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-[0_0_0_2px_rgba(59,130,246,0.1)]">
                                </div>

                            </div>

                            <!-- Tombol Cetak PDF & Excel -->
                            <div class="flex gap-2 ml-auto md:ml-0 mt-2 md:mt-0">
                                <button type="submit" class="bg-[#dc3545] hover:bg-[#c82333] text-white px-4 py-2 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
                                    <i class="fa-solid fa-file-pdf"></i> PDF
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- MAIN CARD TABEL DATA -->
                <div class="bg-white rounded border border-slate-200 overflow-hidden">

                    <div class="px-5 py-4 flex items-center gap-2 border-b border-slate-100 bg-white">
                        <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                        <h3 class="font-bold text-slate-800 text-lg">Buku Tamu / Pengunjung</h3>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-y border-slate-300">
                                    <th class="px-5 py-3 font-bold w-12 text-center">No</th>
                                    <th class="px-5 py-3 font-bold">Tanggal</th>
                                    <th class="px-5 py-3 font-bold">Nama Pengunjung</th>
                                    <th class="px-5 py-3 font-bold">Kategori / Kelas</th>
                                    <th class="px-5 py-3 font-bold text-center">Jam Masuk</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                <!-- Baris Data 1 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">1</td>
                                    <td class="px-5 py-3 text-slate-800">23 Juli 2026</td>
                                    <td class="px-5 py-3 font-bold text-slate-700">Dimas Anggara</td>
                                    <td class="px-5 py-3 text-slate-600">X IPS 2</td>
                                    <td class="px-5 py-3 text-center">
                                        <span class="bg-slate-100 text-slate-600 px-2 py-1 rounded text-xs font-mono font-semibold border border-slate-200">08:15 WIB</span>
                                    </td>
                                </tr>

                                <!-- Baris Data 2 -->
                                <tr class="bg-slate-50/50 hover:bg-slate-100 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">2</td>
                                    <td class="px-5 py-3 text-slate-800">23 Juli 2026</td>
                                    <td class="px-5 py-3 font-bold text-slate-700">Siti Aminah</td>
                                    <td class="px-5 py-3 text-slate-600">XI Teknologi Informasi 1</td>
                                    <td class="px-5 py-3 text-center">
                                        <span class="bg-slate-100 text-slate-600 px-2 py-1 rounded text-xs font-mono font-semibold border border-slate-200">09:30 WIB</span>
                                    </td>
                                </tr>

                                <!-- Baris Data 3 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">3</td>
                                    <td class="px-5 py-3 text-slate-800">23 Juli 2026</td>
                                    <td class="px-5 py-3 font-bold text-slate-700">Bapak Herman, S.Pd</td>
                                    <td class="px-5 py-3 text-slate-600">Guru / Staff</td>
                                    <td class="px-5 py-3 text-center">
                                        <span class="bg-slate-100 text-slate-600 px-2 py-1 rounded text-xs font-mono font-semibold border border-slate-200">10:45 WIB</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-5 py-4 border-t border-slate-100 bg-white flex justify-center">
                        <ul class="flex items-center -space-x-px">
                            <li>
                                <button class="w-8 h-8 flex items-center justify-center bg-white border border-slate-300 text-slate-400 hover:bg-slate-50 transition-colors text-sm">
                                    &laquo;
                                </button>
                            </li>
                            <li>
                                <button class="w-8 h-8 flex items-center justify-center bg-[#3b5998] border border-[#3b5998] text-white text-sm font-medium">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="w-8 h-8 flex items-center justify-center bg-white border border-slate-300 text-slate-500 hover:bg-slate-50 transition-colors text-sm font-medium">
                                    2
                                </button>
                            </li>
                            <li>
                                <button class="w-8 h-8 flex items-center justify-center bg-white border border-slate-300 text-slate-400 hover:bg-slate-50 transition-colors text-sm">
                                    &raquo;
                                </button>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="pt-2 pb-6">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; Perpustakaan Online</p>
                </div>

            </div>
        </main>
    </div>

    <!-- SCRIPT LOGIKA FORM DINAMIS -->
    <script>
        function toggleFilterInputs() {
            const rentang = document.getElementById('rentangWaktu').value;
            const container = document.getElementById('dynamicFilterContainer');

            const filterBulanan = document.getElementById('filterBulanan');
            const filterTahunan = document.getElementById('filterTahunan');
            const filterCustom = document.getElementById('filterCustom');

            // Sembunyikan semua terlebih dahulu
            filterBulanan.classList.add('hidden');
            filterTahunan.classList.add('hidden');
            filterCustom.classList.add('hidden');

            if (rentang === "") {
                container.classList.add('hidden');
            } else {
                container.classList.remove('hidden');

                // Munculkan sesuai pilihan
                if (rentang === 'bulanan') {
                    filterBulanan.classList.remove('hidden');
                } else if (rentang === 'tahunan') {
                    filterTahunan.classList.remove('hidden');
                } else if (rentang === 'custom') {
                    filterCustom.classList.remove('hidden');
                }
            }
        }
    </script>
</body>
</html>
