<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - SMARTPERPUS</title>
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
        
        <!-- Header Atas -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Data Anggota</h2>
                <p class="text-sm text-slate-500 mt-1">Kelola data siswa dan riwayat peminjaman perpustakaan.</p>
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

        <!-- MAIN CONTENT (Tabel Area) -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar">
            
            <div class="max-w-7xl mx-auto">
                
                <!-- Toolbar Area -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">
                    <!-- Title Data -->
                    <div class="flex items-center gap-2 bg-white px-4 py-2.5 rounded-lg border border-slate-200 shadow-sm shrink-0">
                        <i class="fa-solid fa-database text-slate-700"></i>
                        <span class="font-bold text-slate-800 text-sm">Data Anggota</span>
                    </div>

                    <!-- Search Bar & Add Button -->
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <div class="relative w-full md:w-64">
                            <input type="text" placeholder="Cari..." class="w-full bg-white border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                        </div>
                        
                        <!-- Tombol Tambah yang mengarah ke create.blade.php -->
                        <a href="/admin/anggota/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg shadow-sm text-sm font-semibold transition-colors flex items-center gap-2 shrink-0">
                            <i class="fa-solid fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>

                <!-- TABLE AREA -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100 text-slate-700 text-sm border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold w-16 text-center">No</th>
                                    <th class="px-6 py-4 font-bold">NISN</th>
                                    <th class="px-6 py-4 font-bold">Nama Anggota</th>
                                    <th class="px-6 py-4 font-bold">Jenis Kelamin</th>
                                    <th class="px-6 py-4 font-bold">Kelas</th>
                                    <th class="px-6 py-4 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-sm">
                                
                                <!-- Baris 1 -->
                                <tr class="hover:bg-slate-50 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-4 text-center text-slate-500 font-medium">1</td>
                                    <td class="px-6 py-4 font-mono text-slate-600">010141414</td>
                                    <td class="px-6 py-4 font-medium text-slate-800">Ahmad Fauzi</td>
                                    <td class="px-6 py-4 text-slate-600">Laki-laki</td>
                                    <td class="px-6 py-4 text-slate-600">Kelas 5 A</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-1.5">
                                            <!-- Tombol Detail (Biru/Cyan) -->
                                            <button class="w-8 h-8 rounded bg-cyan-500 hover:bg-cyan-600 text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Detail Peminjaman">
                                                <i class="fa-solid fa-cloud"></i>
                                            </button>
                                            <!-- Tombol Edit (Kuning/Amber) -->
                                            <button class="w-8 h-8 rounded bg-amber-500 hover:bg-amber-600 text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Edit Data">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </button>
                                            <!-- Tombol Hapus (Merah/Rose) -->
                                            <button class="w-8 h-8 rounded bg-rose-500 hover:bg-rose-600 text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Hapus Data">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 2 -->
                                <tr class="hover:bg-slate-50 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-4 text-center text-slate-500 font-medium">2</td>
                                    <td class="px-6 py-4 font-mono text-slate-600">020252525</td>
                                    <td class="px-6 py-4 font-medium text-slate-800">Siti Aminah</td>
                                    <td class="px-6 py-4 text-slate-600">Perempuan</td>
                                    <td class="px-6 py-4 text-slate-600">Kelas 3 B</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-8 h-8 rounded bg-cyan-500 hover:bg-cyan-600 text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-cloud"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-amber-500 hover:bg-amber-600 text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-rose-500 hover:bg-rose-600 text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 3 (Sesuai dengan referensi gambar) -->
                                <tr class="hover:bg-slate-50 transition-colors border-b border-slate-100">
                                    <td class="px-6 py-4 text-center text-slate-500 font-medium">3</td>
                                    <td class="px-6 py-4 font-mono text-slate-600">141414</td>
                                    <td class="px-6 py-4 font-medium text-slate-800">anitas</td>
                                    <td class="px-6 py-4 text-slate-600">Perempuan</td>
                                    <td class="px-6 py-4 text-slate-600">Kelas 1 A</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-8 h-8 rounded bg-cyan-500 hover:bg-cyan-600 text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-cloud"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-amber-500 hover:bg-amber-600 text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-rose-500 hover:bg-rose-600 text-white flex items-center justify-center transition-colors shadow-sm">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-5 border-t border-slate-100 bg-white flex justify-center">
                        <ul class="flex items-center -space-x-px shadow-sm rounded-md">
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-500 hover:bg-slate-50 transition-colors rounded-l-md font-bold text-lg">
                                    &laquo;
                                </button>
                            </li>
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-600 hover:bg-slate-50 transition-colors font-medium text-sm">
                                    1
                                </button>
                            </li>
                            <li>
                                <!-- Halaman Aktif (Biru) -->
                                <button class="w-9 h-9 flex items-center justify-center border border-blue-600 bg-blue-600 text-white font-medium text-sm z-10 relative">
                                    2
                                </button>
                            </li>
                            <li>
                                <button class="w-9 h-9 flex items-center justify-center border border-slate-300 bg-white text-slate-600 hover:bg-slate-50 transition-colors font-medium text-sm">
                                    3
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

            </div>
        </main>
    </div>

</body>
</html>