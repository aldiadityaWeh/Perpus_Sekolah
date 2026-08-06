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
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20 hidden md:flex">

        <!-- Logo Area -->
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
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
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman</a></li>
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali</div>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota</a></li>

                <!-- Laporan Buku Active -->
                <li>
                    <a href="/admin/laporan/buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku
                    </a>
                </li>

                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative bg-[#f4f7f6]">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-slate-500 hover:text-blue-600"><i class="fa-solid fa-bars text-xl"></i></button>
                <div>
                    <div class="hidden md:flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                        <span class="hover:text-blue-600 cursor-pointer transition-colors">Laporan</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-slate-800">Laporan Buku</span>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight leading-none">Laporan & Katalog Buku</h2>
                </div>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
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
                    <p class="text-sm text-white/90">Berikut ini adalah rekapitulasi data <strong>KATALOG BUKU PERPUSTAKAAN</strong>. Anda dapat mencetak laporan data koleksi maupun mencetak label punggung buku secara massal.</p>
                </div>

                <!-- Grid Cetak Card -->
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

                    <!-- Card 1: Cetak Barcode/Label Buku -->
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-tags text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Label Punggung Buku</h3>
                            </div>
                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Label (PDF)">
                                <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">
                            <form action="#" method="GET">
                                <!-- Dropdown Utama -->
                                <div class="relative w-full mb-4">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Kriteria Cetak Label</label>
                                    <select id="filterKriteriaLabel" name="filter_label" onchange="toggleSubFilterLabel()" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                        <option value="" disabled {{ !request('filter_label') ? 'selected' : '' }}>- Pilih Berdasarkan -</option>
                                        <option value="semua" {{ request('filter_label') == 'semua' ? 'selected' : '' }}>Seluruh Koleksi Buku</option>
                                        <option value="kategori" {{ request('filter_label') == 'kategori' ? 'selected' : '' }}>Pilih Per Kategori Buku</option>
                                        <option value="ddc" {{ request('filter_label') == 'ddc' ? 'selected' : '' }}>Pilih Per Klasifikasi DDC</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Dropdown Sub: Pilih Kategori -->
                                <div id="subFilterKategoriLabel" class="relative w-full mb-4 {{ request('filter_label') == 'kategori' ? '' : 'hidden' }}">
                                    <select name="kategori_label_id" class="w-full bg-emerald-50/50 border border-emerald-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer shadow-sm">
                                        <option value="" disabled selected>- Pilih Kategori -</option>
                                        @foreach($kategoris as $ktg)
                                            <option value="{{ $ktg->id }}" {{ request('kategori_label_id') == $ktg->id ? 'selected' : '' }}>{{ $ktg->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Dropdown Sub: Pilih DDC -->
                                <div id="subFilterDDCLabel" class="relative w-full mb-4 {{ request('filter_label') == 'ddc' ? '' : 'hidden' }}">
                                    <div id="ddcColorIndicatorLabel" class="absolute left-4 top-[14px] w-3.5 h-3.5 rounded-full border border-slate-300 bg-slate-200 pointer-events-none transition-colors duration-300 shadow-sm z-10"></div>
                                    <select name="ddc_label_id" id="ddcSelectLabel" onchange="updateDdcColor('ddcSelectLabel', 'ddcColorIndicatorLabel')" class="w-full bg-slate-50 border border-slate-300 rounded-lg py-2.5 pl-10 pr-10 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm appearance-none">
                                        <option value="" data-color="#e2e8f0" disabled selected>- Pilih Klasifikasi DDC -</option>
                                        @foreach($ddcs as $ddc)
                                            <option value="{{ $ddc->id }}" data-color="{{ $ddc->warna_label }}" {{ request('ddc_label_id') == $ddc->id ? 'selected' : '' }}>
                                                {{ $ddc->kode_ddc }} - {{ $ddc->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400 z-10">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex gap-2 justify-end mt-2">
                                    <button type="submit" class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-print"></i> Generate Label
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Card 2: Cetak Laporan Rekap Buku -->
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-file-lines text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Laporan Inventaris</h3>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">
                            <!-- Form ini menggunakan GET ke controller yang sama, memunculkan parameter di URL untuk query -->
                            <form action="/admin/laporan/buku" method="GET">
                                <!-- Dropdown Utama -->
                                <div class="relative w-full mb-4">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Kriteria Laporan Buku</label>
                                    <select id="filterKriteriaLaporan" name="filter_laporan" onchange="toggleSubFilterLaporan()" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                        <option value="" disabled {{ !request('filter_laporan') ? 'selected' : '' }}>- Pilih Berdasarkan -</option>
                                        <option value="semua" {{ request('filter_laporan') == 'semua' ? 'selected' : '' }}>Semua Inventaris</option>
                                        <option value="kategori" {{ request('filter_laporan') == 'kategori' ? 'selected' : '' }}>Pilih Per Kategori Buku</option>
                                        <option value="ddc" {{ request('filter_laporan') == 'ddc' ? 'selected' : '' }}>Pilih Per Klasifikasi DDC</option>
                                        <option value="sumber" {{ request('filter_laporan') == 'sumber' ? 'selected' : '' }}>Pilih Per Sumber Buku</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Dropdown Sub: Pilih Kategori Laporan -->
                                <div id="subFilterKategoriLaporan" class="relative w-full mb-4 {{ request('filter_laporan') == 'kategori' ? '' : 'hidden' }}">
                                    <select name="kategori_laporan_id" class="w-full bg-emerald-50/50 border border-emerald-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer shadow-sm">
                                        <option value="" disabled selected>- Pilih Kategori -</option>
                                        @foreach($kategoris as $ktg)
                                            <option value="{{ $ktg->id }}" {{ request('kategori_laporan_id') == $ktg->id ? 'selected' : '' }}>{{ $ktg->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Dropdown Sub: Pilih DDC Laporan -->
                                <div id="subFilterDDCLaporan" class="relative w-full mb-4 {{ request('filter_laporan') == 'ddc' ? '' : 'hidden' }}">
                                    <div id="ddcColorIndicatorLaporan" class="absolute left-4 top-[14px] w-3.5 h-3.5 rounded-full border border-slate-300 bg-slate-200 pointer-events-none transition-colors duration-300 shadow-sm z-10"></div>
                                    <select name="ddc_laporan_id" id="ddcSelectLaporan" onchange="updateDdcColor('ddcSelectLaporan', 'ddcColorIndicatorLaporan')" class="w-full bg-slate-50 border border-slate-300 rounded-lg py-2.5 pl-10 pr-10 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm appearance-none">
                                        <option value="" data-color="#e2e8f0" disabled selected>- Pilih Klasifikasi DDC -</option>
                                        @foreach($ddcs as $ddc)
                                            <option value="{{ $ddc->id }}" data-color="{{ $ddc->warna_label }}" {{ request('ddc_laporan_id') == $ddc->id ? 'selected' : '' }}>
                                                {{ $ddc->kode_ddc }} - {{ $ddc->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400 z-10">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Dropdown Sub: Pilih Sumber Buku -->
                                <div id="subFilterSumberLaporan" class="relative w-full mb-4 {{ request('filter_laporan') == 'sumber' ? '' : 'hidden' }}">
                                    <select name="sumber_laporan_id" class="w-full bg-emerald-50/50 border border-emerald-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer shadow-sm">
                                        <option value="" disabled selected>- Pilih Sumber Buku -</option>
                                        @foreach($sumbers as $sumber)
                                            <option value="{{ $sumber->id }}" {{ request('sumber_laporan_id') == $sumber->id ? 'selected' : '' }}>{{ $sumber->nama_sumber }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-2 mt-2 justify-end">
                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-filter"></i> Filter Tabel
                                    </button>
                                    <button type="submit" formaction="#" formtarget="_blank" class="bg-[#dc3545] hover:bg-[#c82333] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-file-pdf"></i> PDF
                                    </button>
                                    <button type="submit" formaction="#" class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-file-excel"></i> Excel
                                    </button>
                                </div>
                            </form>
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
                            <input type="text" id="searchInput" placeholder="Ketik Kode/Judul untuk filter cepat..." class="w-full bg-slate-50 border border-slate-300 rounded-lg py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
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
                                    <th class="px-6 py-4 font-bold">Klasifikasi & Kategori</th>
                                    <th class="px-6 py-4 font-bold text-center">Stok</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100" id="tableBody">

                                @forelse($data_buku as $index => $buku)
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">
                                        {{ ($data_buku->currentPage() - 1) * $data_buku->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-mono text-slate-800 font-bold mb-1 pencarian-data">{{ $buku->kode_buku }}</div>
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data={{ $buku->kode_buku }}" alt="QR Code" class="w-10 h-10 mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 mb-0.5 line-clamp-2 pencarian-data">{{ $buku->judul }}</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Oleh: {{ $buku->pengarang ?? '-' }} | Thn: {{ $buku->tahun_terbit ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="w-3 h-3 rounded-full shadow-sm border border-slate-200 shrink-0" style="background-color: {{ $buku->ddc->warna_label ?? '#ccc' }};"></span>
                                            <span class="font-bold text-slate-700 text-xs">{{ $buku->ddc->kode_ddc ?? '-' }} - {{ $buku->ddc->kategori ?? '-' }}</span>
                                        </div>
                                        <div class="text-[11px] text-slate-500 font-medium">Kat: {{ $buku->kategori->nama_kategori ?? '-' }} | Sumber: {{ $buku->sumber->nama_sumber ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-blue-50 text-blue-600 font-bold px-3 py-1 rounded">{{ $buku->stok }}</span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-book-open text-4xl mb-3 opacity-50"></i>
                                        <p>Tidak ada data buku yang sesuai dengan kriteria.</p>
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div id="noMatchMessage" class="hidden text-center py-8 text-slate-500 font-medium bg-white">
                            <p>Data buku tidak ditemukan.</p>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-slate-100 bg-white">
                        {{ $data_buku->links('pagination::tailwind') }}
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script Interaksi Form Dropdown & Pencarian -->
    <script>
        // Fungsi untuk filter Cetak Label Barcode Buku
        function toggleSubFilterLabel() {
            const kriteria = document.getElementById('filterKriteriaLabel').value;
            const subFilterKategori = document.getElementById('subFilterKategoriLabel');
            const subFilterDDC = document.getElementById('subFilterDDCLabel');

            subFilterKategori.classList.add('hidden');
            subFilterDDC.classList.add('hidden');

            if (kriteria === 'kategori') {
                subFilterKategori.classList.remove('hidden');
            } else if (kriteria === 'ddc') {
                subFilterDDC.classList.remove('hidden');
            }
        }

        // Fungsi untuk filter Cetak Laporan Inventaris Buku
        function toggleSubFilterLaporan() {
            const kriteria = document.getElementById('filterKriteriaLaporan').value;
            const subFilterKategori = document.getElementById('subFilterKategoriLaporan');
            const subFilterDDC = document.getElementById('subFilterDDCLaporan');
            const subFilterSumber = document.getElementById('subFilterSumberLaporan');

            subFilterKategori.classList.add('hidden');
            subFilterDDC.classList.add('hidden');
            if(subFilterSumber) subFilterSumber.classList.add('hidden');

            if (kriteria === 'kategori') {
                subFilterKategori.classList.remove('hidden');
            } else if (kriteria === 'ddc') {
                subFilterDDC.classList.remove('hidden');
            } else if (kriteria === 'sumber' && subFilterSumber) {
                subFilterSumber.classList.remove('hidden');
            }
        }

        // Fungsi untuk mengubah warna bulatan DDC
        function updateDdcColor(selectId, indicatorId) {
            const select = document.getElementById(selectId);
            if (select.selectedIndex >= 0) {
                const color = select.options[select.selectedIndex].getAttribute('data-color');
                if (color) {
                    document.getElementById(indicatorId).style.backgroundColor = color;
                }
            }
        }

        // Jalankan saat load untuk set state awal
        document.addEventListener('DOMContentLoaded', function() {
            toggleSubFilterLabel();
            toggleSubFilterLaporan();
            updateDdcColor('ddcSelectLabel', 'ddcColorIndicatorLabel');
            updateDdcColor('ddcSelectLaporan', 'ddcColorIndicatorLaporan');

            // Pencarian Instan Tabel
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll("#tableBody tr");
            const noMatchMessage = document.getElementById("noMatchMessage");

            if(searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = searchInput.value.toLowerCase();
                    let matchFound = false;

                    tableRows.forEach(row => {
                        if(row.children.length === 1) return; // Abaikan baris "Data Kosong"

                        const searchableCells = row.querySelectorAll(".pencarian-data");
                        let rowHasMatch = false;

                        searchableCells.forEach(cell => {
                            if (cell.textContent.toLowerCase().includes(filterValue)) {
                                rowHasMatch = true;
                            }
                        });

                        if (rowHasMatch) {
                            row.style.display = "";
                            matchFound = true;
                        } else {
                            row.style.display = "none";
                        }
                    });

                    if (!matchFound && filterValue !== "") { noMatchMessage.classList.remove("hidden"); }
                    else { noMatchMessage.classList.add("hidden"); }
                });
            }
        });
    </script>
</body>
</html>
