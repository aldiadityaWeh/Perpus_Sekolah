<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota - SMARTPERPUS</title>
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
        
        /* Menghilangkan panah default pada input type date dan select */
        select { -webkit-appearance: none; appearance: none; }
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 0.6;
            transition: 0.2s;
        }
        input[type="date"]::-webkit-calendar-picker-indicator:hover { opacity: 1; }
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
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku
                    </a>
                </li>
                <!-- Data Anggota Active -->
                <li>
                    <a href="#" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota
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
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Data Anggota</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Data Anggota</h2>
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
            
            <form action="#" method="POST" enctype="multipart/form-data" class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                
                <!-- KOLOM KIRI: Foto Anggota -->
                <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden sticky top-0">
                    <div class="bg-slate-50 px-5 py-4 border-b border-slate-100 flex items-center gap-2">
                        <i class="fa-solid fa-image text-slate-500"></i>
                        <h3 class="font-bold text-slate-800 text-sm">Foto Anggota</h3>
                    </div>
                    
                    <div class="p-5 flex flex-col items-center justify-center">
                        <!-- Kotak Upload -->
                        <div class="w-full aspect-[3/4] border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center bg-slate-50 hover:bg-blue-50 hover:border-blue-300 transition-colors cursor-pointer group relative overflow-hidden">
                            
                            <!-- Input File disembunyikan di atas kotak -->
                            <input type="file" id="foto" name="foto" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            
                            <div class="text-center p-4">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-blue-500 mb-3 transition-colors"></i>
                                <p class="text-xs text-slate-500 font-medium leading-relaxed group-hover:text-blue-600">Drag atau drop<br>untuk memilih gambar</p>
                            </div>
                        </div>
                        
                        <p class="text-[11px] font-semibold text-rose-500 mt-4 text-center">Ukuran gambar 3x4 (Maks. 2MB)</p>
                    </div>
                </div>

                <!-- KOLOM KANAN: Form Lengkap -->
                <div class="lg:col-span-9 space-y-6">
                    
                    <!-- BOX 1: Data Anggota (Utama) -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-plus text-blue-600 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Anggota</h3>
                        </div>

                        <div class="p-6 md:p-8 space-y-5">
                            
                            <!-- Row: NISN -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">NISN <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <input type="text" name="nisn" placeholder="Contoh: 010141414" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>
                            </div>

                            <!-- Row: NIK -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">NIK Anggota <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <input type="text" name="nik" placeholder="Contoh: 3302141414141414" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                </div>
                            </div>

                            <!-- Row: Nama -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Nama Anggota <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <!-- Aksen border biru terang menandakan fokus (seperti di referensi) -->
                                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required class="w-full bg-blue-50/30 border-2 border-blue-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/30 focus:border-blue-400 transition-all text-slate-800 font-medium outline-none shadow-sm">
                                </div>
                            </div>

                            <!-- Row: Kelas -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Kelas <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 relative">
                                    <select name="kelas_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled selected>-== Pilih Disini ==-</option>
                                        <!-- Data dummy disesuaikan dengan jenjang SD -->
                                        <option value="1">Kelas 1 A</option>
                                        <option value="2">Kelas 1 B</option>
                                        <option value="3">Kelas 2 A</option>
                                        <option value="4">Kelas 3 A</option>
                                        <option value="5">Kelas 4 A</option>
                                        <option value="6">Kelas 5 A</option>
                                        <option value="7">Kelas 6 A</option>
                                        <option value="8">Kelas 6 B</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Row: Jenis Kelamin -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Jenis Kelamin <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 flex items-center gap-6">
                                    <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-700 font-medium">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" checked class="w-4 h-4 text-blue-600 border-slate-300 focus:ring-blue-500">
                                        Laki-laki
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-700 font-medium">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="w-4 h-4 text-blue-600 border-slate-300 focus:ring-blue-500">
                                        Perempuan
                                    </label>
                                </div>
                            </div>

                            <!-- Row: Tempat & Tgl Lahir -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Tempat Tgl Lahir <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 flex flex-col sm:flex-row gap-3">
                                    <input type="text" name="tempat_lahir" placeholder="ex : Purbalingga" class="w-full sm:w-1/2 bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                    <div class="relative w-full sm:w-1/2">
                                        <input type="date" name="tgl_lahir" value="2026-05-03" class="w-full bg-slate-200/50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm font-medium cursor-pointer">
                                    </div>
                                </div>
                            </div>

                            <!-- Row: Agama -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Agama</label>
                                <div class="md:col-span-2 relative">
                                    <select name="agama" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled selected>-== Pilih Disini ==-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOX 2 & 3: GRID (Alamat & Orang Tua) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Form Alamat -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                                <i class="fa-solid fa-house text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800 text-sm">Alamat</h3>
                            </div>
                            <div class="p-5 space-y-4">
                                
                                <div class="grid grid-cols-3 gap-3 items-start">
                                    <label class="text-sm font-semibold text-slate-600 mt-2">Alamat</label>
                                    <div class="col-span-2">
                                        <textarea name="alamat" rows="2" class="w-full bg-blue-50/30 border-2 border-blue-200 rounded-lg py-2 px-3 text-sm focus:ring-2 focus:ring-blue-500/30 focus:border-blue-400 transition-all text-slate-800 outline-none shadow-sm resize-none"></textarea>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">RT</label>
                                    <div class="col-span-2">
                                        <input type="text" name="rt" placeholder="ex : 03" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">RW</label>
                                    <div class="col-span-2">
                                        <input type="text" name="rw" placeholder="ex : 15" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Dusun</label>
                                    <div class="col-span-2">
                                        <input type="text" name="dusun" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Kelurahan</label>
                                    <div class="col-span-2">
                                        <input type="text" name="kelurahan" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Kecamatan</label>
                                    <div class="col-span-2">
                                        <input type="text" name="kecamatan" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Orang Tua -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden h-fit">
                            <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                                <i class="fa-solid fa-users text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800 text-sm">Orang Tua</h3>
                            </div>
                            <div class="p-5 space-y-4">
                                
                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Nama Ayah</label>
                                    <div class="col-span-2">
                                        <input type="text" name="nama_ayah" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 items-center">
                                    <label class="text-sm font-semibold text-slate-600">Nama Ibu</label>
                                    <div class="col-span-2">
                                        <input type="text" name="nama_ibu" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:border-blue-500 outline-none shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 pt-4 pb-10">
                        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-xl font-bold shadow-md shadow-emerald-500/20 transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan
                        </button>
                        
                        <a href="#" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-xl font-bold shadow-sm transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-arrow-rotate-left"></i> Kembali
                        </a>
                    </div>

                </div>

            </form>
        </main>
    </div>

</body>
</html>