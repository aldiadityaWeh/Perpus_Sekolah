<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Anggota - SMARTPERPUS</title>
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
                    <a href="/admin/laporan/bulanan" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-chart-pie w-6 text-center mr-2 group-hover:text-purple-400 transition-colors"></i> Laporan Bulanan
                    </a>
                </li>
                <!-- Laporan Anggota Active -->
                <li>
                    <a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-address-card w-6 text-center mr-2"></i> Laporan Anggota
                    </a>
                </li>
                <li>
                    <a href="/admin/laporan/denda" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Denda
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Laporan Anggota</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Cetak kartu dan laporan data anggota perpustakaan.</p>
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
                    <p class="text-[13px] text-white/90">Berikut ini adalah data <strong>LAPORAN ANGGOTA</strong>. Silahkan pilih bentuk laporan yang anda inginkan.</p>
                </div>

                <!-- Grid Cetak Card -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <!-- Card 1: Cetak Kartu Anggota -->
                    <div class="bg-white rounded border border-slate-200 shadow-sm flex flex-col">
                        <div class="px-5 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-id-card text-slate-800 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Kartu Anggota</h3>
                            </div>
                            <!-- Tombol Cetak Semua di Header -->
                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Kartu">
                                <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-center space-y-3">
                            <!-- Dropdown Utama -->
                            <div class="relative w-full">
                                <select id="filterKriteriaKartu" onchange="toggleSubFilterKartu()" class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                    <option value="" disabled selected>Pilih Berdasarkan</option>
                                    <option value="semua">Semua Anggota</option>
                                    <option value="kelas">Kelas</option>
                                    <option value="angkatan">Angkatan</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Dropdown Sub: Pilih Kelas (Muncul jika 'Kelas' dipilih) -->
                            <div id="subFilterKelasKartu" class="relative w-full hidden">
                                <select class="w-full bg-white border border-blue-300 rounded py-2 px-3 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm ring-2 ring-blue-500/20">
                                    <option value="" disabled selected>Pilih Disini</option>
                                    <option value="semua_kelas">Semua Kelas</option>
                                    <option value="x_ipa_1">X IPA 1</option>
                                    <option value="x_ips_2">X IPS 2</option>
                                    <option value="xi_ips_1">XI IPS 1</option>
                                    <option value="xi_ti_1">XI Teknologi Informasi 1</option>
                                    <option value="xi_to_2">XI Teknik Otomotif 2</option>
                                    <option value="x_ipa_2">X IPA 2</option>
                                    <option value="x_ps_1">X Pariwisata & Seni 1</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#f8f9fc] border-t border-slate-100 px-5 py-3 flex gap-2">
                            <button class="bg-[#dc3545] hover:bg-[#c82333] text-white px-4 py-2 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-file-pdf"></i> PDF
                            </button>
                        </div>
                    </div>

                    <!-- Card 2: Cetak Laporan Anggota -->
                    <div class="bg-white rounded border border-slate-200 shadow-sm flex flex-col">
                        <div class="px-5 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-file-lines text-slate-800 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Laporan Anggota</h3>
                            </div>
                            <!-- Tombol Cetak Semua di Header -->
                            <div class="flex gap-1.5">
                                <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Laporan (PDF)">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </button>
                                <button class="w-8 h-8 rounded bg-[#198754] hover:bg-[#157347] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Laporan (Excel)">
                                    <i class="fa-solid fa-file-excel"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-center space-y-3">
                            <!-- Dropdown Utama -->
                            <div class="relative w-full">
                                <select id="filterKriteriaLaporan" onchange="toggleSubFilterLaporan()" class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                    <option value="" disabled selected>Pilih Berdasarkan</option>
                                    <option value="semua">Semua Anggota</option>
                                    <option value="kelas">Kelas</option>
                                    <option value="angkatan">Angkatan</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Dropdown Sub: Pilih Kelas (Muncul jika 'Kelas' dipilih) -->
                            <div id="subFilterKelasLaporan" class="relative w-full hidden">
                                <select class="w-full bg-white border border-blue-300 rounded py-2 px-3 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm ring-2 ring-blue-500/20">
                                    <option value="" disabled selected>Pilih Disini</option>
                                    <option value="semua_kelas">Semua Kelas</option>
                                    <option value="x_ipa_1">X IPA 1</option>
                                    <option value="x_ips_2">X IPS 2</option>
                                    <option value="xi_ips_1">XI IPS 1</option>
                                    <option value="xi_ti_1">XI Teknologi Informasi 1</option>
                                    <option value="xi_to_2">XI Teknik Otomotif 2</option>
                                    <option value="x_ipa_2">X IPA 2</option>
                                    <option value="x_ps_1">X Pariwisata & Seni 1</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#f8f9fc] border-t border-slate-100 px-5 py-3 flex gap-2">
                            <button class="bg-[#dc3545] hover:bg-[#c82333] text-white px-4 py-2 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-file-pdf"></i> PDF
                            </button>
                            <button class="bg-[#198754] hover:bg-[#157347] text-white px-4 py-2 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-file-excel"></i> Excel
                            </button>
                        </div>
                    </div>

                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded border border-slate-200 overflow-hidden">

                    <div class="px-5 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                        <h3 class="font-bold text-slate-800 text-lg">Data</h3>
                    </div>

                    <!-- Search Bar -->
                    <div class="px-5 py-3 bg-white flex justify-end">
                        <div class="relative w-full md:w-64">
                            <input type="text" placeholder="Cari NISN / Nama / Kelas..." class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-y border-slate-300">
                                    <th class="px-5 py-3 font-bold w-16">No</th>
                                    <th class="px-5 py-3 font-bold">NISN</th>
                                    <th class="px-5 py-3 font-bold">Nama Anggota</th>
                                    <th class="px-5 py-3 font-bold">Jenis Kelamin</th>
                                    <th class="px-5 py-3 font-bold">Kelas</th>
                                    <th class="px-5 py-3 font-bold w-24 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                <!-- Baris 1 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-slate-600 font-medium">1</td>
                                    <td class="px-5 py-3">121212</td>
                                    <td class="px-5 py-3">kasep</td>
                                    <td class="px-5 py-3">Laki-Laki</td>
                                    <td class="px-5 py-3">X IPS 2</td>
                                    <td class="px-5 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Cetak Kartu">
                                            <i class="fa-solid fa-id-badge text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 2 -->
                                <tr class="bg-slate-100/50 hover:bg-slate-100 transition-colors">
                                    <td class="px-5 py-3 text-slate-600 font-medium">2</td>
                                    <td class="px-5 py-3">131313</td>
                                    <td class="px-5 py-3">Rahayu</td>
                                    <td class="px-5 py-3">Perempuan</td>
                                    <td class="px-5 py-3">XI Teknologi Informasi 1</td>
                                    <td class="px-5 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Cetak Kartu">
                                            <i class="fa-solid fa-id-badge text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 3 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-slate-600 font-medium">3</td>
                                    <td class="px-5 py-3">141414</td>
                                    <td class="px-5 py-3">anitas</td>
                                    <td class="px-5 py-3">Perempuan</td>
                                    <td class="px-5 py-3">X Pariwisata & Seni 1</td>
                                    <td class="px-5 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Cetak Kartu">
                                            <i class="fa-solid fa-id-badge text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="pt-2 pb-6">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; Perpustakaan Online</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script Interaksi Form Dropdown -->
    <script>
        // Fungsi untuk form Cetak Kartu Anggota
        function toggleSubFilterKartu() {
            const kriteria = document.getElementById('filterKriteriaKartu').value;
            const subFilterKelas = document.getElementById('subFilterKelasKartu');

            if (kriteria === 'kelas') {
                subFilterKelas.classList.remove('hidden');
            } else {
                subFilterKelas.classList.add('hidden');
            }
        }

        // Fungsi untuk form Cetak Laporan Anggota
        function toggleSubFilterLaporan() {
            const kriteria = document.getElementById('filterKriteriaLaporan').value;
            const subFilterKelas = document.getElementById('subFilterKelasLaporan');

            if (kriteria === 'kelas') {
                subFilterKelas.classList.remove('hidden');
            } else {
                subFilterKelas.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
