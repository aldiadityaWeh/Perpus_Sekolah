<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku - SMARTPERPUS</title>
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
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

        <!-- Logo Area (Menggunakan Logo SD) -->
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

                <!-- Verifikasi Kembali Active -->
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2"></i> Verifikasi Kembali
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
                <li>
                    <a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Laporan Buku
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
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Transaksi</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Verifikasi Kembali</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Verifikasi Pengembalian</h2>
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
                    <p class="text-sm text-white/90">Silakan cari kode transaksi, nama anggota, atau judul buku untuk melakukan <strong>Verifikasi Pengembalian</strong>. Buku yang terlambat akan dikenakan denda otomatis.</p>
                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">

                    <!-- Card Header & Search -->
                    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center justify-between bg-white border-b border-slate-100 gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-clipboard-list text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Antrean Pengembalian Buku</h3>
                        </div>

                        <!-- Search Box -->
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Cari Anggota / Kode Buku..." class="w-full bg-slate-50 border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="px-6 py-3 bg-slate-50/50 flex gap-2 border-b border-slate-100">
                        <button class="px-4 py-1.5 bg-blue-100 text-blue-700 border border-blue-200 rounded-full text-xs font-bold transition-colors">
                            Semua Data
                        </button>
                        <button class="px-4 py-1.5 bg-white text-slate-500 border border-slate-200 hover:bg-slate-100 rounded-full text-xs font-bold transition-colors flex items-center gap-1.5">
                            Menunggu Verifikasi <span class="bg-slate-200 text-slate-600 px-1.5 rounded-full">3</span>
                        </button>
                        <button class="px-4 py-1.5 bg-white text-slate-500 border border-slate-200 hover:bg-slate-100 rounded-full text-xs font-bold transition-colors">
                            Terlambat (Denda)
                        </button>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold text-center w-12">No</th>
                                    <th class="px-6 py-4 font-bold">Data Peminjam</th>
                                    <th class="px-6 py-4 font-bold">Judul Buku</th>
                                    <th class="px-6 py-4 font-bold">Tgl. Batas</th>
                                    <th class="px-6 py-4 font-bold">Status</th>
                                    <th class="px-6 py-4 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                <!-- Baris 1: Terlambat / Denda -->
                                <tr class="bg-rose-50/30 hover:bg-rose-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">1</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 text-sm mb-0.5">Dimas Anggara</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Kelas 10 IPS 2</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1">Sejarah Nasional Indonesia</div>
                                        <div class="text-[11px] text-slate-400 font-mono">BK-77123</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-rose-600 font-semibold text-sm">24 Jul 2026</div>
                                        <div class="text-[10px] text-rose-500 font-medium mt-0.5">Telat 2 Hari</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-rose-100 border border-rose-200 text-rose-700 rounded text-xs font-bold">
                                            <i class="fa-solid fa-circle-exclamation text-[10px]"></i> Denda Rp 2.000
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="bg-[#198754] hover:bg-[#157347] text-white px-3 py-1.5 rounded shadow-sm text-xs font-semibold transition-colors w-full">
                                            Verifikasi
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 2: Menunggu / Tepat Waktu -->
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">2</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 text-sm mb-0.5">Siti Aminah</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Kelas 11 IPA 1</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1">Matematika Diskrit Lanjut</div>
                                        <div class="text-[11px] text-slate-400 font-mono">BK-99212</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-slate-600 font-semibold text-sm">27 Jul 2026</div>
                                        <div class="text-[10px] text-slate-400 font-medium mt-0.5">Besok</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-amber-50 border border-amber-200 text-amber-700 rounded text-xs font-bold">
                                            <i class="fa-solid fa-clock text-[10px]"></i> Menunggu
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="bg-[#198754] hover:bg-[#157347] text-white px-3 py-1.5 rounded shadow-sm text-xs font-semibold transition-colors w-full">
                                            Verifikasi
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 3: Sedang Dipinjam (Belum dikembalikan) -->
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">3</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 text-sm mb-0.5">Budi Santoso</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Kelas 10 IPS 1</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1">Fisika Dasar I</div>
                                        <div class="text-[11px] text-slate-400 font-mono">BK-44021</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-slate-600 font-semibold text-sm">30 Jul 2026</div>
                                        <div class="text-[10px] text-slate-400 font-medium mt-0.5">Aman</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-blue-50 border border-blue-200 text-blue-700 rounded text-xs font-bold">
                                            <i class="fa-solid fa-book-open-reader text-[10px]"></i> Dipinjam
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="bg-slate-100 text-slate-400 border border-slate-200 px-3 py-1.5 rounded text-xs font-semibold cursor-not-allowed w-full" disabled title="Buku belum diserahkan">
                                            Verifikasi
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Footer Text -->
                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

</body>
</html>
