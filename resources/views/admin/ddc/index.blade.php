<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi DDC - SMARTPERPUS</title>
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
    </style>
</head>
<body class="bg-[#f8f9fc] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

        <!-- Logo Area (Logo SD) -->
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
                <!-- Data DDC Active -->
                <li>
                    <a href="/admin/ddc" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-list-ol w-6 text-center mr-2"></i> Klasifikasi DDC
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

        <!-- Header Atas (Sesuai dengan UI Data Buku) -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Manajemen Klasifikasi DDC</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Kelola data kategori dan klasifikasi buku perpustakaan.</p>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6 custom-scrollbar">

            <div class="max-w-[1400px] mx-auto space-y-5">

                <!-- Info Banner (Sesuai Referensi) -->
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de]">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-lg">Informasi</h3>
                    </div>
                    <p class="text-[13px] text-white/90">Berikut ini adalah data <strong>KLASIFIKASI DDC</strong> yang sudah tersimpan dalam database.</p>
                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">

                    <!-- Card Header (Sesuai Gambar) -->
                    <div class="px-6 py-4 flex items-center justify-between bg-white border-b border-slate-100">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data</h3>
                        </div>
                        <!-- Tombol Tambah (+) Biru Solid -->
                        <a href="/admin/ddc/create" class="bg-[#3b5998] hover:bg-[#2d4373] text-white w-8 h-8 rounded flex items-center justify-center transition-colors shadow-sm text-sm">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>

                    <!-- Search Bar Area (Sesuai Gambar: Kanan Atas Tabel) -->
                    <div class="px-6 py-4 bg-white flex justify-end">
                        <div class="relative w-full md:w-72">
                            <input type="text" placeholder="Cari kode DDC / kategori..." class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Area Tabel Striped (Belang-belang abu-abu) -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-y border-slate-300">
                                    <th class="px-6 py-3.5 font-bold w-16">No</th>
                                    <th class="px-6 py-3.5 font-bold w-32">Kode DDC</th>
                                    <th class="px-6 py-3.5 font-bold">Kategori</th>
                                    <th class="px-6 py-3.5 font-bold w-32 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px]">

                                <!-- Baris 1 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-3 font-medium text-slate-500">1</td>
                                    <td class="px-6 py-3">000</td>
                                    <td class="px-6 py-3 text-slate-600">Komputer, Informasi, & Karya Umum</td>
                                    <td class="px-6 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <!-- Tombol Kuning (Edit) -->
                                            <button class="w-7 h-7 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm" title="Edit Data">
                                                <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <!-- Tombol Merah (Hapus) -->
                                            <button class="w-7 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Data">
                                                <i class="fa-solid fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 2 (Gaya Striped Abu-abu) -->
                                <tr class="bg-slate-100/50 hover:bg-slate-100 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-3 font-medium text-slate-500">2</td>
                                    <td class="px-6 py-3">111</td>
                                    <td class="px-6 py-3 text-slate-600">Fiksi</td>
                                    <td class="px-6 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-7 h-7 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <button class="w-7 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 3 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-3 font-medium text-slate-500">3</td>
                                    <td class="px-6 py-3">500</td>
                                    <td class="px-6 py-3 text-slate-600">Sains & Matematika</td>
                                    <td class="px-6 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-7 h-7 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <button class="w-7 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 4 (Gaya Striped Abu-abu) -->
                                <tr class="bg-slate-100/50 hover:bg-slate-100 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-3 font-medium text-slate-500">4</td>
                                    <td class="px-6 py-3">100</td>
                                    <td class="px-6 py-3 text-slate-600">Filsafat dan Psikologi</td>
                                    <td class="px-6 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-7 h-7 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <button class="w-7 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 5 -->
                                <tr class="bg-white hover:bg-slate-50 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-3 font-medium text-slate-500">5</td>
                                    <td class="px-6 py-3">200</td>
                                    <td class="px-6 py-3 text-slate-600">Agama</td>
                                    <td class="px-6 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-7 h-7 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <button class="w-7 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>
