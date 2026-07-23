<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sumber Buku - SMARTPERPUS</title>
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
                <!-- Sumber Buku Active -->
                <li>
                    <a href="/admin/sumber-buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-boxes-packing w-6 text-center mr-2"></i> Sumber Buku
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
                        <span class="bg-red-500/10 text-red-400 border border-red-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full">3</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        
        <!-- HEADER / NAVBAR -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Dashboard</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="/admin/sumber-buku" class="hover:text-blue-600 transition-colors">Sumber Buku</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Data Sumber Buku</h2>
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

        <!-- AREA FORMULIR -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-8 custom-scrollbar">
            
            <div class="max-w-[1400px] mx-auto space-y-5">
                
                <!-- Info Banner -->
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de]">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-lg">Informasi</h3>
                    </div>
                    <p class="text-[13px] text-white/90">Silahkan isi formulir <strong>SUMBER BUKU</strong> dengan baik dan benar.</p>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                    
                    <!-- Card Header -->
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-plus text-slate-800 font-bold"></i>
                        <h3 class="font-bold text-slate-800 text-base">Tambah Data</h3>
                    </div>

                    <!-- Form Body -->
                    <form action="#" method="POST" class="flex flex-col">
                        <div class="p-6 md:p-8 space-y-6">
                            
                            <!-- Input Kode Sumber Buku -->
                            <div>
                                <label class="block text-[13px] font-semibold text-slate-500 mb-2">Kode Sumber Buku <span class="text-rose-500">*</span></label>
                                <input type="text" name="kode_sumber" placeholder="Contoh: A1, SB, N1..." class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-4 focus:ring-blue-500/20 focus:border-blue-400 transition-all text-slate-700 shadow-sm uppercase" autofocus required>
                                <p class="text-[11px] text-slate-400 mt-1">Kode digunakan sebagai singkatan untuk pencatatan inventaris.</p>
                            </div>

                            <!-- Input Nama Sumber Buku -->
                            <div>
                                <label class="block text-[13px] font-semibold text-slate-500 mb-2">Nama Sumber Buku <span class="text-rose-500">*</span></label>
                                <input type="text" name="nama_sumber" placeholder="Contoh: Hibah, Sumbangan, Pembelian Dana BOS..." class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:outline-none focus:ring-4 focus:ring-blue-500/20 focus:border-blue-400 transition-all text-slate-700 shadow-sm" required>
                                <p class="text-[11px] text-slate-400 mt-1">Deskripsi lengkap dari asal-usul buku didapatkan.</p>
                            </div>

                        </div>

                        <!-- Action Buttons Area -->
                        <div class="bg-[#f8f9fc] border-t border-slate-200 px-6 py-4 flex items-center gap-2">
                            <button type="submit" class="bg-[#198754] hover:bg-[#157347] text-white px-4 py-2 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan
                            </button>
                            
                            <a href="/admin/sumber-buku" class="bg-[#212529] hover:bg-[#1c1f23] text-white px-4 py-2 rounded shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                <i class="fa-solid fa-arrow-rotate-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
                
                <!-- Footer Text -->
                <div class="pt-4">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; Perpustakaan Online</p>
                </div>

            </div>
        </main>
    </div>
</body>
</html>