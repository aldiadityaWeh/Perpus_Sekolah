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
        
        /* Menghilangkan panah default pada select dan mengatur kalender */
        select { -webkit-appearance: none; appearance: none; }
        input[type="date"]::-webkit-calendar-picker-indicator { cursor: pointer; opacity: 0.6; transition: 0.2s; }
        input[type="date"]::-webkit-calendar-picker-indicator:hover { opacity: 1; }
        
        /* Menghilangkan spinner pada input type number */
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
        input[type=number] { -moz-appearance: textfield; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
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
                <!-- Data Buku Active -->
                <li>
                    <a href="#" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku
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
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                        </div>
                        <span class="bg-red-500/10 text-red-400 border border-red-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full">3</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        
        <!-- Header Atas (Top Navbar) -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Dashboard</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Buku</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Data Buku</h2>
            </div>
            
            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
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

        <!-- MAIN CONTENT (Form Area) -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6 md:p-8 custom-scrollbar">
            
            <!-- Info Banner (Sesuai Referensi Gambar) -->
            <div class="max-w-6xl mx-auto mb-6">
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Silahkan isi formulir <strong>BUKU</strong> dengan baik dan benar.</p>
                </div>
            </div>

            <!-- Form Utama -->
            <form action="#" method="POST" enctype="multipart/form-data" class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                
                <!-- KOLOM KIRI: Foto/Cover Buku -->
                <div class="lg:col-span-3 bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden sticky top-0">
                    <div class="bg-slate-50 px-5 py-4 border-b border-slate-100 flex items-center gap-2">
                        <i class="fa-solid fa-image text-slate-700 text-lg"></i>
                        <h3 class="font-bold text-slate-800 text-sm">Gambar Buku</h3>
                    </div>
                    
                    <div class="p-5 flex flex-col items-center justify-center">
                        <!-- Kotak Upload (Aspect Ratio disesuaikan dengan cover buku) -->
                        <div class="w-full aspect-[3/4] border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center bg-slate-50 hover:bg-blue-50 hover:border-blue-300 transition-colors cursor-pointer group relative overflow-hidden">
                            
                            <!-- Input File disembunyikan di atas kotak -->
                            <input type="file" id="cover" name="cover" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            
                            <!-- Tampilan Placeholder -->
                            <div class="text-center p-4">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-blue-500 mb-3 transition-colors"></i>
                                <p class="text-xs text-slate-500 font-medium leading-relaxed group-hover:text-blue-600">Drag atau drop<br>untuk memilih gambar</p>
                            </div>
                        </div>
                        
                        <!-- Peringatan Ukuran (Seperti di referensi) -->
                        <p class="text-[11px] font-semibold text-rose-500 mt-4 text-center">Ukuran gambar 3x4</p>
                    </div>
                </div>

                <!-- KOLOM KANAN: Form Input Detail Buku -->
                <div class="lg:col-span-9 space-y-6">
                    
                    <!-- BOX 1: Index Buku -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-plus text-slate-700 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-base">Index Buku <span class="text-rose-500">(*)</span></h3>
                        </div>

                        <div class="p-6 md:p-8 space-y-4">
                            
                            <!-- ID Buku -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">ID Buku</label>
                                <div class="md:col-span-3">
                                    <input type="text" name="id_buku" value="B00020" class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm font-medium">
                                </div>
                            </div>

                            <!-- Judul Buku -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Judul Buku</label>
                                <div class="md:col-span-3">
                                    <input type="text" name="judul_buku" placeholder="Masukkan judul buku..." class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm">
                                </div>
                            </div>

                            <!-- Penerbit -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Penerbit</label>
                                <div class="md:col-span-3">
                                    <input type="text" name="penerbit" placeholder="Nama penerbit..." class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm">
                                </div>
                            </div>

                            <!-- Pengarang -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Pengarang</label>
                                <div class="md:col-span-3">
                                    <input type="text" name="pengarang" placeholder="Nama pengarang..." class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm">
                                </div>
                            </div>

                            <!-- Tahun Terbit -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Tahun Terbit</label>
                                <div class="md:col-span-3">
                                    <input type="number" name="tahun_terbit" placeholder="Contoh: 2023" class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm">
                                </div>
                            </div>

                            <!-- Klasifikasi DDC -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Klasifikasi DDC</label>
                                <div class="md:col-span-3 relative">
                                    <select name="klasifikasi_ddc" class="w-full bg-slate-50 border border-slate-200 rounded py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                        <option value="">-== Pilih Klasifikasi ==-</option>
                                        <option value="000">000 - Karya Umum, Informatika & Komputer</option>
                                        <option value="100">100 - Filsafat dan Psikologi</option>
                                        <option value="200">200 - Agama</option>
                                        <option value="300">300 - Ilmu Sosial</option>
                                        <option value="400">400 - Bahasa</option>
                                        <option value="500">500 - Ilmu Murni (Sains & Matematika)</option>
                                        <option value="600">600 - Ilmu Terapan & Teknologi</option>
                                        <option value="700">700 - Kesenian & Olahraga</option>
                                        <option value="800">800 - Kesusastraan</option>
                                        <option value="900">900 - Sejarah & Geografi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Eksemplar -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Jumlah Eksemplar</label>
                                <div class="md:col-span-3 flex shadow-sm rounded">
                                    <input type="number" name="jumlah_eksemplar" class="w-full bg-slate-50 border border-slate-200 rounded-l py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 z-10">
                                    <span class="inline-flex items-center px-4 rounded-r border border-l-0 border-slate-200 bg-slate-100 text-slate-500 text-sm font-medium shrink-0">
                                        Eksemplar
                                    </span>
                                </div>
                            </div>

                            <!-- Tanggal Penerimaan -->
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Tanggal Penerimaan</label>
                                <div class="md:col-span-3">
                                    <input type="date" name="tgl_penerimaan" class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                </div>
                            </div>

                            <p class="text-[11px] font-semibold text-slate-500 mt-2"><span class="text-rose-500">(*)</span> Wajib Diisi</p>
                        </div>
                    </div>

                    <!-- BOX 2: Spesifikasi Buku -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-plus text-slate-700 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-base">Spesifikasi Buku</h3>
                        </div>
                        
                        <div class="p-6 md:p-8 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                            
                            <!-- KOLOM KIRI (Spesifikasi) -->
                            <div class="space-y-4">
                                
                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Jenis Buku</label>
                                    <div class="col-span-2 relative">
                                        <select name="jenis_buku" class="w-full bg-slate-50 border border-slate-200 rounded py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                            <option value="">-== Pilih ==-</option>
                                            <option value="fiksi">Buku Fiksi (Cerita, Dongeng)</option>
                                            <option value="nonfiksi">Buku Nonfiksi & Ilmu Pengetahuan</option>
                                            <option value="referensi">Buku Referensi (Kamus, Ensiklopedia)</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-slate-400">
                                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Kategori Buku</label>
                                    <div class="col-span-2 relative">
                                        <select name="kategori_buku" class="w-full bg-slate-50 border border-slate-200 rounded py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                            <option value="">-== Pilih ==-</option>
                                            <option value="Buku Teks">Buku Teks Pelajaran</option>
                                            <option value="Buku Pengayaan">Buku Pengayaan</option>
                                            <option value="Sejarah">Sejarah dan Geografi</option>
                                            <option value="Agama">Agama</option>
                                            <option value="Sains">Sains / Matematika</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-slate-400">
                                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Sumber Buku</label>
                                    <div class="col-span-2 relative">
                                        <select name="sumber_buku" class="w-full bg-slate-50 border border-slate-200 rounded py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                            <option value="Pembelian">Pembelian (BOS)</option>
                                            <option value="Sumbangan">Sumbangan</option>
                                            <option value="Dinas">Droping Dinas</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-slate-400">
                                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Buku Kelas</label>
                                    <div class="col-span-2 relative">
                                        <select name="buku_kelas" class="w-full bg-slate-50 border border-slate-200 rounded py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm cursor-pointer">
                                            <option value="Umum">Umum (Semua Kelas)</option>
                                            <option value="Kelas 1">Kelas 1</option>
                                            <option value="Kelas 2">Kelas 2</option>
                                            <option value="Kelas 3">Kelas 3</option>
                                            <option value="Kelas 4">Kelas 4</option>
                                            <option value="Kelas 5">Kelas 5</option>
                                            <option value="Kelas 6">Kelas 6</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-slate-400">
                                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- KOLOM KANAN (Spesifikasi) -->
                            <div class="space-y-4">
                                
                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">ISBN</label>
                                    <div class="col-span-2">
                                        <input type="text" name="isbn" placeholder="Opsional..." class="w-full bg-slate-50 border border-slate-200 rounded py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Jml Halaman</label>
                                    <div class="col-span-2 flex shadow-sm rounded">
                                        <input type="number" name="jumlah_halaman" class="w-full bg-slate-50 border border-slate-200 rounded-l py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 z-10">
                                        <span class="inline-flex items-center px-3 rounded-r border border-l-0 border-slate-200 bg-slate-100 text-slate-500 text-[13px] font-medium shrink-0">Halaman</span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Tinggi Buku</label>
                                    <div class="col-span-2 flex shadow-sm rounded">
                                        <input type="number" name="tinggi_buku" class="w-full bg-slate-50 border border-slate-200 rounded-l py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 z-10">
                                        <span class="inline-flex items-center px-4 rounded-r border border-l-0 border-slate-200 bg-slate-100 text-slate-500 text-[13px] font-medium shrink-0">cm</span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Rak Buku</label>
                                    <div class="col-span-2 flex shadow-sm rounded">
                                        <span class="inline-flex items-center px-3 rounded-l border border-r-0 border-slate-200 bg-slate-100 text-slate-500 text-[13px] font-medium shrink-0">Rak ke-</span>
                                        <input type="text" name="rak_buku" class="w-full bg-slate-50 border border-slate-200 rounded-r py-2 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 z-10">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-center md:justify-start gap-3 pt-4 pb-10">
                        <button type="submit" class="bg-[#198754] hover:bg-[#157347] text-white px-6 py-2.5 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan
                        </button>
                        
                        <a href="/admin/buku" class="bg-[#212529] hover:bg-[#1c1f23] text-white px-6 py-2.5 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                            <i class="fa-solid fa-arrow-rotate-left"></i> Kembali
                        </a>
                    </div>

                </div>

            </form>
        </main>
    </div>

</body>
</html>