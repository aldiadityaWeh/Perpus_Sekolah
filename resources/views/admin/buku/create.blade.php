<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku - SMARTPERPUS</title>
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

        select { -webkit-appearance: none; appearance: none; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

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

                <!-- Data Buku Active -->
                <li>
                    <a href="/admin/buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku
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

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="/admin/buku" class="hover:text-blue-600 cursor-pointer transition-colors">Data Buku</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Koleksi Buku</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
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

        <!-- MAIN CONTENT (Form Area) -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar">

            <form action="#" method="POST" enctype="multipart/form-data" class="max-w-[1400px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

                <!-- KOLOM KIRI: Foto Cover Buku -->
                <div class="lg:col-span-3 space-y-6 sticky top-0">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="bg-slate-50 px-5 py-4 border-b border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-image text-slate-500"></i>
                            <h3 class="font-bold text-slate-800 text-sm">Cover Buku</h3>
                        </div>

                        <div class="p-5 flex flex-col items-center justify-center">
                            <!-- Kotak Upload -->
                            <div class="w-full aspect-[3/4] border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center bg-slate-50 hover:bg-blue-50 hover:border-blue-300 transition-colors cursor-pointer group relative overflow-hidden">
                                <input type="file" id="cover" name="cover" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">

                                <div class="text-center p-4">
                                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-blue-500 mb-3 transition-colors"></i>
                                    <p class="text-xs text-slate-500 font-medium leading-relaxed group-hover:text-blue-600">Pilih atau letakkan<br>gambar cover disini</p>
                                </div>
                            </div>
                            <p class="text-[11px] font-semibold text-slate-400 mt-4 text-center">Format: JPG, PNG (Maks 2MB).<br>Rekomendasi rasio 3:4.</p>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: Form Input Data -->
                <div class="lg:col-span-9 space-y-6">

                    <!-- Box 1: Informasi Utama -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                                <i class="fa-solid fa-book-bookmark"></i>
                            </div>
                            <h3 class="font-bold text-slate-800 text-base">Informasi Utama Buku</h3>
                        </div>

                        <div class="p-6 md:p-8 space-y-5">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <!-- Kode Buku -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Kode Buku / Barcode <span class="text-rose-500">*</span></label>
                                    <input type="text" name="kode_buku" placeholder="Contoh: BK-40012" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm uppercase font-mono">
                                </div>

                                <!-- ISBN / ISSN -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">ISBN / ISSN</label>
                                    <input type="text" name="isbn" placeholder="Contoh: 978-602-8519-93-9" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm font-mono">
                                </div>
                            </div>

                            <!-- Judul Buku -->
                            <div>
                                <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Judul Buku <span class="text-rose-500">*</span></label>
                                <input type="text" name="judul" placeholder="Masukkan judul buku lengkap" required class="w-full bg-blue-50/30 border-2 border-blue-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/30 focus:border-blue-400 transition-all text-slate-800 font-medium outline-none shadow-sm">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <!-- Pengarang -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Pengarang / Penulis <span class="text-rose-500">*</span></label>
                                    <input type="text" name="pengarang" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>

                                <!-- Penerbit -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Penerbit <span class="text-rose-500">*</span></label>
                                    <input type="text" name="penerbit" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>

                                <!-- Tahun Terbit -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Tahun Terbit <span class="text-rose-500">*</span></label>
                                    <input type="number" name="tahun_terbit" placeholder="YYYY" min="1900" max="2099" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Box 2: Inventarisasi & Klasifikasi -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                            <h3 class="font-bold text-slate-800 text-base">Inventaris & Klasifikasi</h3>
                        </div>

                        <div class="p-6 md:p-8 space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                                <!-- Klasifikasi DDC -->
                                <div class="relative">
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Klasifikasi DDC</label>
                                    <select name="ddc_id" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled selected>- Pilih DDC -</option>
                                        <option value="1">000 - Komputer & Informasi</option>
                                        <option value="2">500 - Sains & Matematika</option>
                                        <option value="3">800 - Sastra</option>
                                        <option value="4">900 - Sejarah & Geografi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-6 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Kategori Buku -->
                                <div class="relative">
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Kategori Buku <span class="text-rose-500">*</span></label>
                                    <select name="kategori_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled selected>- Pilih Kategori -</option>
                                        <option value="1">Buku Teks Umum</option>
                                        <option value="2">Buku Pelajaran Pokok</option>
                                        <option value="3">Referensi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-6 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Jenis Buku -->
                                <div class="relative">
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Jenis Buku <span class="text-rose-500">*</span></label>
                                    <select name="jenis_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled selected>- Pilih Jenis -</option>
                                        <option value="1">Buku Fiksi</option>
                                        <option value="2">Buku Non-Fiksi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-6 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Sumber Buku -->
                                <div class="relative">
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Sumber Buku</label>
                                    <select name="sumber_id" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled selected>- Pilih Sumber -</option>
                                        <option value="1">Dana BOS</option>
                                        <option value="2">Hibah Pemerintah</option>
                                        <option value="3">Sumbangan Alumni</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-6 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Jumlah Stok -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Jumlah Eksemplar / Stok <span class="text-rose-500">*</span></label>
                                    <input type="number" name="stok" placeholder="0" min="0" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>

                                <!-- Rak Lokasi -->
                                <div>
                                    <label class="text-[13px] font-semibold text-slate-600 mb-1.5 block">Lokasi Rak</label>
                                    <input type="text" name="rak" placeholder="Contoh: Rak A1, Laci 2" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Box 3: Sinopsis -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center">
                                <i class="fa-solid fa-align-left"></i>
                            </div>
                            <h3 class="font-bold text-slate-800 text-base">Sinopsis / Keterangan</h3>
                        </div>

                        <div class="p-6 md:p-8">
                            <textarea name="sinopsis" rows="4" placeholder="Tuliskan sinopsis singkat atau keterangan tambahan tentang buku ini..." class="w-full bg-slate-50 border border-slate-200 rounded-lg py-3 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm resize-y"></textarea>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 pt-2 pb-10">
                        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-xl font-bold shadow-md shadow-emerald-500/20 transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan Katalog
                        </button>

                        <a href="/admin/buku" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-xl font-bold shadow-sm transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-arrow-rotate-left"></i> Batal
                        </a>
                    </div>

                </div>

            </form>
        </main>
    </div>

</body>
</html>
