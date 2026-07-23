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
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

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
                <!-- Laporan Anggota -->
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

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER (Konsisten: Judul di kiri, Profil di kanan tanpa notif/logout) -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <!-- Judul dan Breadcrumb menyesuaikan referensi -->
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Dashboard</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Laporan Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">
                    <i class="fa-solid fa-book-open mr-1"></i> Laporan Buku
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
                    <p class="text-[13px] text-white/90">Berikut ini adalah data <strong>LAPORAN BUKU</strong> yang sudah tersimpan dalam database.</p>
                </div>

                <!-- Card Cetak Label -->
                <div class="bg-white rounded border border-slate-200 shadow-sm flex flex-col">
                    <div class="px-5 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-file-lines text-slate-800 text-lg"></i>
                        <h3 class="font-bold text-slate-800">Cetak</h3>
                    </div>
                    <div class="p-5 flex items-center">
                        <button class="bg-[#198754] hover:bg-[#157347] text-white px-4 py-2 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-tags"></i> Cetak Label Buku Keseluruhan
                        </button>
                    </div>
                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded border border-slate-200 overflow-hidden">

                    <div class="px-5 py-4 flex items-center justify-between border-b border-slate-100 bg-white">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Buku</h3>
                        </div>

                        <!-- Search Bar (Sesuai Referensi, di kanan header tabel) -->
                        <div class="relative w-full md:w-64">
                            <input type="text" value="ge" class="w-full bg-white border border-blue-300 rounded py-1.5 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-[0_0_0_2px_rgba(59,130,246,0.1)]">
                        </div>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-y border-slate-300">
                                    <th class="px-5 py-3 font-bold w-12 text-center">No</th>
                                    <th class="px-5 py-3 font-bold text-center">QR<br>Code</th>
                                    <th class="px-5 py-3 font-bold w-1/3">Judul Buku</th>
                                    <th class="px-5 py-3 font-bold">Pengarang</th>
                                    <th class="px-5 py-3 font-bold">Penerbit</th>
                                    <th class="px-5 py-3 font-bold text-center">Tahun</th>
                                    <th class="px-5 py-3 font-bold text-center">Gambar</th>
                                    <th class="px-5 py-3 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                <!-- Baris Data 1 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">20</td>
                                    <td class="px-5 py-3 text-center">
                                        <!-- Dummy QR Code -->
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-2020" alt="QR Code" class="w-10 h-10 mx-auto mix-blend-multiply">
                                    </td>
                                    <td class="px-5 py-3 text-slate-800">
                                        Aplikasi Penginderaan Jauh dan Sistem Informasi Geografis Untuk Pemodelan dan Pemetaan Data Biofisik
                                    </td>
                                    <td class="px-5 py-3 text-slate-600">Wirastuti Widyatmanti, Sigit Heru Murti, Prima Wid</td>
                                    <td class="px-5 py-3 text-slate-600">UGM PRESS</td>
                                    <td class="px-5 py-3 text-center text-slate-600">2020</td>
                                    <td class="px-5 py-3 text-center">
                                        <!-- Thumbnail Buku -->
                                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=150&q=80" alt="Cover" class="w-10 h-14 object-cover mx-auto border border-slate-200 shadow-sm">
                                    </td>
                                    <td class="px-5 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#198754] hover:bg-[#157347] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Cetak Label Buku">
                                            <i class="fa-solid fa-tags text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination (Sesuai Referensi) -->
                    <div class="px-5 py-4 border-t border-slate-100 bg-white flex justify-center">
                        <ul class="flex items-center -space-x-px">
                            <li>
                                <button class="w-8 h-8 flex items-center justify-center bg-white border border-slate-300 text-slate-400 hover:bg-slate-50 transition-colors text-sm">
                                    &laquo;
                                </button>
                            </li>
                            <li>
                                <button class="w-8 h-8 flex items-center justify-center bg-white border border-slate-300 text-slate-500 hover:bg-slate-50 transition-colors text-sm font-medium">
                                    1
                                </button>
                            </li>
                            <li>
                                <!-- Halaman Aktif Biru -->
                                <button class="w-8 h-8 flex items-center justify-center bg-[#3b5998] border border-[#3b5998] text-white text-sm font-medium">
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

</body>
</html>
