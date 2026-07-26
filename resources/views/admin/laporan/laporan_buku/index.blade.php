<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Buku - SMARTPERPUS</title>
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

        /* Menghilangkan panah default pada select dropdown */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

        <!-- Logo Area -->
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="logo-sd.png" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
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
                        <span class="bg-rose-500/10 text-rose-400 border border-rose-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">3</span>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>

                <li>
                    <a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota
                    </a>
                </li>

                <!-- Laporan Buku Active -->
                <li>
                    <a href="/admin/laporan/buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku
                    </a>
                </li>

                <li>
                    <a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)
                    </a>
                </li>
                <li>
                    <a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative bg-[#f4f7f6]">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Laporan</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Laporan Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Laporan & Katalog Buku</h2>
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
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Berikut ini adalah data rekapitulasi <strong>KATALOG BUKU PERPUSTAKAAN</strong>. Anda dapat mencetak rekap data koleksi maupun mencetak label/barcode punggung buku secara massal.</p>
                </div>

                <!-- Grid Cetak Card -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <!-- Card 1: Cetak Barcode/Label Buku -->
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-barcode text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Label Barcode Buku</h3>
                            </div>
                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Barcode">
                                <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">
                            <!-- Dropdown Utama -->
                            <div class="relative w-full">
                                <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Kriteria Cetak Label</label>
                                <select id="filterKriteriaLabel" onchange="toggleSubFilterLabel()" class="w-full bg-white border border-slate-300 rounded py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                    <option value="" disabled selected>- Pilih Berdasarkan -</option>
                                    <option value="semua">Seluruh Koleksi Buku</option>
                                    <option value="kategori">Pilih Per Kategori Buku</option>
                                    <option value="ddc">Pilih Per Klasifikasi DDC</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Dropdown Sub: Pilih Kategori -->
                            <div id="subFilterKategoriLabel" class="relative w-full hidden">
                                <select class="w-full bg-emerald-50/50 border border-emerald-300 rounded py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer shadow-sm">
                                    <option value="" disabled selected>- Pilih Kategori -</option>
                                    <option value="umum">Buku Teks Umum</option>
                                    <option value="pelajaran">Buku Pelajaran Pokok</option>
                                    <option value="referensi">Referensi (Kamus, Ensiklopedia)</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-white border-t border-slate-100 flex gap-2 justify-end">
                            <button class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                <i class="fa-solid fa-print"></i> Generate Label
                            </button>
                        </div>
                    </div>

                    <!-- Card 2: Cetak Laporan Rekap Buku -->
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-file-lines text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Laporan Inventaris Buku</h3>
                            </div>
                            <!-- Tombol Cetak Semua di Header -->
                            <div class="flex gap-2">
                                <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Laporan (PDF)">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </button>
                                <button class="w-8 h-8 rounded bg-[#198754] hover:bg-[#157347] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Laporan (Excel)">
                                    <i class="fa-solid fa-file-excel"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">
                            <!-- Dropdown Utama -->
                            <div class="relative w-full">
                                <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Kriteria Laporan Buku</label>
                                <select id="filterKriteriaLaporan" onchange="toggleSubFilterLaporan()" class="w-full bg-white border border-slate-300 rounded py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                    <option value="" disabled selected>- Pilih Berdasarkan -</option>
                                    <option value="semua">Semua Inventaris</option>
                                    <option value="kategori">Pilih Per Kategori Buku</option>
                                    <option value="sumber">Pilih Per Sumber (Asal Buku)</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Dropdown Sub: Pilih Kategori -->
                            <div id="subFilterKategoriLaporan" class="relative w-full hidden">
                                <select class="w-full bg-emerald-50/50 border border-emerald-300 rounded py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer shadow-sm">
                                    <option value="" disabled selected>- Pilih Kategori Laporan -</option>
                                    <option value="umum">Buku Teks Umum</option>
                                    <option value="pelajaran">Buku Pelajaran Pokok</option>
                                    <option value="referensi">Referensi</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-white border-t border-slate-100 flex gap-2 justify-end">
                            <button class="bg-[#dc3545] hover:bg-[#c82333] text-white px-5 py-2 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                <i class="fa-solid fa-file-pdf"></i> Export PDF
                            </button>
                            <button class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                <i class="fa-solid fa-file-excel"></i> Export Excel
                            </button>
                        </div>
                    </div>

                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden mt-6">

                    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center justify-between border-b border-slate-100 bg-white gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Katalog & Inventaris Buku</h3>
                        </div>

                        <!-- Search Bar -->
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Cari Kode / Judul Buku..." class="w-full bg-slate-50 border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold text-center w-16">No</th>
                                    <th class="px-6 py-4 font-bold">Kode / QR</th>
                                    <th class="px-6 py-4 font-bold">Judul Buku</th>
                                    <th class="px-6 py-4 font-bold">Kategori</th>
                                    <th class="px-6 py-4 font-bold text-center">Stok</th>
                                    <th class="px-6 py-4 font-bold text-center w-28">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                <!-- Baris 1 -->
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">1</td>
                                    <td class="px-6 py-4">
                                        <div class="font-mono text-slate-800 font-bold mb-1">BK-40012</div>
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-40012" alt="QR Code" class="w-10 h-10 mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 mb-0.5 line-clamp-1">Buku Siswa Tema 1: Indahnya Kebersamaan</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Pengarang: Kemendikbud | Tahun: 2017</div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">Buku Pelajaran Pokok</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-blue-50 text-blue-600 font-bold px-2 py-1 rounded">35</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="bg-[#198754] hover:bg-[#157347] text-white w-9 h-8 rounded flex items-center justify-center mx-auto transition-colors shadow-sm tooltip" title="Cetak Label Buku">
                                            <i class="fa-solid fa-tags"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 2 -->
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">2</td>
                                    <td class="px-6 py-4">
                                        <div class="font-mono text-slate-800 font-bold mb-1">BK-60084</div>
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-60084" alt="QR Code" class="w-10 h-10 mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 mb-0.5 line-clamp-1">Senang Belajar Matematika SD/MI</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Pengarang: Puskurbuk | Tahun: 2018</div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">Buku Pelajaran Pokok</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-blue-50 text-blue-600 font-bold px-2 py-1 rounded">20</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="bg-[#198754] hover:bg-[#157347] text-white w-9 h-8 rounded flex items-center justify-center mx-auto transition-colors shadow-sm tooltip" title="Cetak Label Buku">
                                            <i class="fa-solid fa-tags"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 3 -->
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">3</td>
                                    <td class="px-6 py-4">
                                        <div class="font-mono text-slate-800 font-bold mb-1">BK-00192</div>
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-00192" alt="QR Code" class="w-10 h-10 mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 mb-0.5 line-clamp-1">Kamus Pintar Bergambar (Bilingual)</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Pengarang: Tim Erlangga | Tahun: 2020</div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">Referensi</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-blue-50 text-blue-600 font-bold px-2 py-1 rounded">5</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="bg-[#198754] hover:bg-[#157347] text-white w-9 h-8 rounded flex items-center justify-center mx-auto transition-colors shadow-sm tooltip" title="Cetak Label Buku">
                                            <i class="fa-solid fa-tags"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-slate-100 bg-white flex justify-center">
                        <ul class="flex items-center -space-x-px shadow-sm rounded-md">
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-500 hover:bg-slate-50 transition-colors rounded-l-md font-bold text-lg">
                                    &laquo;
                                </button>
                            </li>
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-blue-600 bg-blue-600 text-white font-medium text-sm z-10 relative">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-600 hover:bg-slate-50 transition-colors font-medium text-sm">
                                    2
                                </button>
                            </li>
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-500 hover:bg-slate-50 transition-colors rounded-r-md font-bold text-lg">
                                    &raquo;
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script Interaksi Form Dropdown -->
    <script>
        // Fungsi untuk filter Cetak Label Barcode Buku
        function toggleSubFilterLabel() {
            const kriteria = document.getElementById('filterKriteriaLabel').value;
            const subFilterKategori = document.getElementById('subFilterKategoriLabel');

            if (kriteria === 'kategori') {
                subFilterKategori.classList.remove('hidden');
            } else {
                subFilterKategori.classList.add('hidden');
            }
        }

        // Fungsi untuk filter Cetak Laporan Inventaris Buku
        function toggleSubFilterLaporan() {
            const kriteria = document.getElementById('filterKriteriaLaporan').value;
            const subFilterKategori = document.getElementById('subFilterKategoriLaporan');

            if (kriteria === 'kategori') {
                subFilterKategori.classList.remove('hidden');
            } else {
                subFilterKategori.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
