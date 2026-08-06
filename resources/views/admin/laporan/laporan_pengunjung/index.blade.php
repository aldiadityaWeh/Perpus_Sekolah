<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengunjung - SMARTPERPUS</title>
    <!-- Menghilangkan favicon default -->
    <link rel="icon" href="data:,">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Kustomisasi scrollbar */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }

        /* Menghilangkan panah default pada select dan input date */
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
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-amber-200 selection:text-amber-900">

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
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="{{ route('admin.buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku</a></li>
                <li><a href="{{ route('admin.ddc.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC</a></li>
                <li><a href="{{ route('admin.sumber_buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku</a></li>
                <li><a href="{{ route('admin.jenis_buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku</a></li>
                <li><a href="{{ route('admin.kategori_buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku</a></li>
                <li><a href="{{ route('admin.anggota.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota</a></li>
                <li><a href="{{ route('admin.kelas.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman</a></li>
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                        </div>
                        <span class="bg-rose-500/10 text-rose-400 border border-rose-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">3</span>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)</a></li>

                <!-- Laporan Pengunjung Active (Tema Amber) -->
                <li>
                    <a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 bg-amber-600/10 text-amber-500 border border-amber-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users-viewfinder w-6 text-center mr-2"></i> Laporan Pengunjung
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-slate-500 hover:text-amber-600 transition-colors"><i class="fa-solid fa-bars text-xl"></i></button>
                <div>
                    <div class="hidden md:flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                        <span class="hover:text-amber-600 cursor-pointer transition-colors">Laporan</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-slate-800">Laporan Pengunjung</span>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight leading-none">Laporan Kunjungan</h2>
                </div>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-amber-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block text-left">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-amber-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6 custom-scrollbar">

            <div class="max-w-[1400px] mx-auto space-y-6">

                <!-- Info Banner (Tema Amber) -->
                <div class="bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-lg p-5 shadow-sm border border-amber-400 flex flex-col justify-center relative overflow-hidden">
                    <i class="fa-solid fa-users-viewfinder absolute -right-4 -bottom-4 text-7xl opacity-20 rotate-12"></i>
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-1.5">
                            <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                            <h3 class="font-bold text-xl">Buku Tamu / Pengunjung</h3>
                        </div>
                        <p class="text-sm text-white/90">Halaman ini menampilkan riwayat <strong>Pengunjung Perpustakaan</strong> yang tercatat melalui absen digital (Kiosk Scanner). Anda dapat memfilter dan mencetak laporan sesuai kebutuhan.</p>
                    </div>
                </div>

                <!-- FORM CETAK LAPORAN -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between bg-white">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-filter text-slate-700 text-lg"></i>
                            <h3 class="font-bold text-slate-800">Filter & Cetak Laporan</h3>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-50/30">
                        <!-- Form dikirim dengan method GET untuk apply filter ke data -->
                        <form action="" method="GET" class="flex flex-col xl:flex-row items-end gap-4">

                            <!-- Dropdown Utama: Rentang Waktu -->
                            <div class="relative w-full xl:w-64 shrink-0">
                                <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Periode Laporan</label>
                                <select id="rentangWaktu" name="rentang" onchange="toggleFilterInputs()" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500 cursor-pointer shadow-sm">
                                    <option value="" {{ request('rentang') == '' ? 'selected' : '' }}>Semua Data (Bulan Ini)</option>
                                    <option value="harian" {{ request('rentang') == 'harian' ? 'selected' : '' }}>Harian</option>
                                    <option value="bulanan" {{ request('rentang') == 'bulanan' ? 'selected' : '' }}>Bulanan</option>
                                    <option value="tahunan" {{ request('rentang') == 'tahunan' ? 'selected' : '' }}>Tahunan</option>
                                    <option value="custom" {{ request('rentang') == 'custom' ? 'selected' : '' }}>Custom (Rentang Tanggal)</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Filter Input Container (Dinamis disembunyikan/dimunculkan) -->
                            <div id="dynamicFilterContainer" class="flex-1 w-full flex flex-col md:flex-row gap-4 {{ request('rentang') ? '' : 'hidden' }}">

                                <!-- Input Harian -->
                                <div id="filterHarian" class="relative w-full md:w-64 {{ request('rentang') == 'harian' ? '' : 'hidden' }}">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Pilih Tanggal</label>
                                    <input type="date" name="tanggal" value="{{ request('tanggal') }}" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                </div>

                                <!-- Input Bulanan (Tipe Month) -->
                                <div id="filterBulanan" class="relative w-full md:w-64 {{ request('rentang') == 'bulanan' ? '' : 'hidden' }}">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Pilih Bulan & Tahun</label>
                                    <input type="month" name="bulan" value="{{ request('bulan') }}" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                </div>

                                <!-- Input Tahunan -->
                                <div id="filterTahunan" class="relative w-full md:w-64 {{ request('rentang') == 'tahunan' ? '' : 'hidden' }}">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Pilih Tahun</label>
                                    <select name="tahun" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                        <option value="" disabled selected>Pilih Tahun</option>
                                        @php $currentYear = date('Y'); @endphp
                                        @for ($i = $currentYear; $i >= 2020; $i--)
                                            <option value="{{ $i }}" {{ request('tahun') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Input Custom (Rentang Tanggal) -->
                                <div id="filterCustom" class="w-full md:w-auto flex flex-col sm:flex-row items-end gap-3 {{ request('rentang') == 'custom' ? '' : 'hidden' }}">
                                    <div class="w-full sm:w-auto">
                                        <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Tanggal Mulai</label>
                                        <input type="date" name="tgl_awal" value="{{ request('tgl_awal') }}" class="w-full sm:w-44 bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500 transition-all text-slate-700 shadow-sm">
                                    </div>
                                    <div class="hidden sm:flex h-[42px] items-center justify-center text-slate-400 pb-1">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                    <div class="w-full sm:w-auto mt-2 sm:mt-0">
                                        <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Tanggal Akhir</label>
                                        <input type="date" name="tgl_akhir" value="{{ request('tgl_akhir') }}" class="w-full sm:w-44 bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500 transition-all text-slate-700 shadow-sm">
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol Eksekusi -->
                            <div class="flex gap-2 w-full xl:w-auto mt-4 xl:mt-0 xl:ml-auto shrink-0">
                                <!-- Tombol Filter Data (Apply ke Tabel) -->
                                <button type="submit" class="bg-slate-800 hover:bg-slate-900 text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm flex-1 md:flex-none">
                                    <i class="fa-solid fa-magnifying-glass"></i> Terapkan
                                </button>

                                <!-- Tombol Export PDF (Bisa dipisah dengan atribut formaction di Laravel) -->
                                <button type="submit" formaction="#" formtarget="_blank" class="bg-[#dc3545] hover:bg-[#c82333] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm flex-1 md:flex-none">
                                    <i class="fa-solid fa-file-pdf"></i> PDF
                                </button>

                                <!-- Tombol Export Excel -->
                                <button type="submit" formaction="#" class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm flex-1 md:flex-none hidden sm:flex">
                                    <i class="fa-solid fa-file-excel"></i> Excel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden mt-6">

                    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center justify-between border-b border-slate-100 bg-white gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-clipboard-list text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Riwayat Kehadiran Pengunjung</h3>
                        </div>

                        <!-- Search Bar Khusus Tabel (Opsional) -->
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Cari Nama / Kelas..." class="w-full bg-slate-50 border border-slate-300 rounded-lg py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-amber-500 focus:border-amber-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold text-center w-16">No</th>
                                    <th class="px-6 py-4 font-bold">Tanggal</th>
                                    <th class="px-6 py-4 font-bold">Nama Pengunjung</th>
                                    <th class="px-6 py-4 font-bold">Kategori / Kelas</th>
                                    <th class="px-6 py-4 font-bold text-center">Jam Masuk</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                @if(isset($data_pengunjung) && $data_pengunjung->count() > 0)
                                    @foreach($data_pengunjung as $index => $kunjungan)
                                    <tr class="hover:bg-slate-50 transition-colors group">
                                        <td class="px-6 py-4 text-center font-medium text-slate-500">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="px-6 py-4 text-slate-700 font-medium">
                                            {{ \Carbon\Carbon::parse($kunjungan->waktu_kunjungan)->translatedFormat('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-slate-800 text-sm mb-0.5">{{ $kunjungan->anggota->nama }}</div>
                                            <div class="text-[11px] font-mono text-slate-400">{{ $kunjungan->anggota->nisn }}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center bg-slate-100 border border-slate-200 px-2 py-1 rounded text-xs font-semibold text-slate-600">
                                                {{ $kunjungan->anggota->kelas->nama_kelas ?? 'Umum/Guru' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span class="font-bold text-amber-600 font-mono text-xs">
                                                {{ \Carbon\Carbon::parse($kunjungan->waktu_kunjungan)->format('H:i') }} WIB
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <!-- Dummy Data untuk tampilan visualisasi jika $data_pengunjung kosong/tidak ada -->
                                    <tr class="hover:bg-slate-50 transition-colors group">
                                        <td class="px-6 py-4 text-center font-medium text-slate-500">1</td>
                                        <td class="px-6 py-4 text-slate-700 font-medium">05 Agu 2026</td>
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-slate-800 text-sm mb-0.5">Dimas Anggara</div>
                                            <div class="text-[11px] font-mono text-slate-400">010141414</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center bg-slate-100 border border-slate-200 px-2 py-1 rounded text-xs font-semibold text-slate-600">Kelas 6 B</span>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span class="font-bold text-amber-600 font-mono text-xs">08:15 WIB</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-slate-50/20 hover:bg-slate-50 transition-colors group">
                                        <td class="px-6 py-4 text-center font-medium text-slate-500">2</td>
                                        <td class="px-6 py-4 text-slate-700 font-medium">05 Agu 2026</td>
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-slate-800 text-sm mb-0.5">Siti Aminah</div>
                                            <div class="text-[11px] font-mono text-slate-400">020252525</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center bg-slate-100 border border-slate-200 px-2 py-1 rounded text-xs font-semibold text-slate-600">Kelas 3 A</span>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span class="font-bold text-amber-600 font-mono text-xs">09:30 WIB</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition-colors group">
                                        <td class="px-6 py-4 text-center font-medium text-slate-500">3</td>
                                        <td class="px-6 py-4 text-slate-700 font-medium">05 Agu 2026</td>
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-slate-800 text-sm mb-0.5">Bapak Herman</div>
                                            <div class="text-[11px] font-mono text-slate-400">NIP. 19800101</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center bg-amber-50 border border-amber-200 text-amber-700 px-2 py-1 rounded text-xs font-semibold">Guru / Staff</span>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span class="font-bold text-amber-600 font-mono text-xs">11:05 WIB</span>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-slate-100 bg-white flex justify-center sm:justify-end">
                        <!-- Jika menggunakan controller Laravel: {{-- $data_pengunjung->links() --}} -->
                        <ul class="flex items-center -space-x-px shadow-sm rounded-md">
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-500 hover:bg-slate-50 transition-colors rounded-l-md font-bold text-lg">
                                    &laquo;
                                </button>
                            </li>
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-amber-600 bg-amber-600 text-white font-medium text-sm z-10 relative">
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
        function toggleFilterInputs() {
            const rentang = document.getElementById('rentangWaktu').value;
            const container = document.getElementById('dynamicFilterContainer');

            const filterHarian = document.getElementById('filterHarian');
            const filterBulanan = document.getElementById('filterBulanan');
            const filterTahunan = document.getElementById('filterTahunan');
            const filterCustom = document.getElementById('filterCustom');

            // Sembunyikan semua field terlebih dahulu
            filterHarian.classList.add('hidden');
            filterBulanan.classList.add('hidden');
            filterTahunan.classList.add('hidden');
            filterCustom.classList.add('hidden');

            if (rentang === "") {
                // Jika pilih 'Semua Data'
                container.classList.add('hidden');
            } else {
                container.classList.remove('hidden');

                // Tampilkan field yang sesuai dengan pilihan dropdown
                if (rentang === 'harian') {
                    filterHarian.classList.remove('hidden');
                } else if (rentang === 'bulanan') {
                    filterBulanan.classList.remove('hidden');
                } else if (rentang === 'tahunan') {
                    filterTahunan.classList.remove('hidden');
                } else if (rentang === 'custom') {
                    filterCustom.classList.remove('hidden');
                }
            }
        }

        // Panggil fungsi saat halaman pertama dimuat untuk mengecek status dropdown saat ini (jika ada nilai 'old')
        document.addEventListener('DOMContentLoaded', function() {
            toggleFilterInputs();
        });
    </script>
</body>
</html>
