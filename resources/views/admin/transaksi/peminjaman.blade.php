<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman - SMARTPERPUS</title>
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
        
        /* Animasi garis scanner untuk efek kamera aktif */
        @keyframes scan-line {
            0% { transform: translateY(-100%); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(100%); opacity: 0; }
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
                <!-- Scan Peminjaman Active -->
                <li>
                    <a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Peminjaman
                    </a>
                </li>
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                        </div>
                        <span class="bg-red-500/10 text-red-400 border border-red-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">3</span>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-chart-pie w-6 text-center mr-2 group-hover:text-purple-400 transition-colors"></i> Laporan Bulanan
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Denda
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        
        <!-- HEADER (Top Navbar Konsisten dengan Buku) -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Sirkulasi Peminjaman</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Scan kartu anggota dan buku untuk memproses peminjaman.</p>
            </div>
            
            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile (Tanpa Notifikasi & Logout) -->
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
                <div class="bg-[#4eb4f5] text-white rounded-lg p-4 shadow-sm border border-[#3ba0de]">
                    <div class="flex items-center gap-2 mb-1">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-lg">Informasi</h3>
                    </div>
                    <p class="text-[13px] text-white/90">Silahkan scan barcode kartu anggota pada menu <strong>PEMINJAMAN</strong> dengan posisi yang baik dan benar.</p>
                </div>

                <!-- TOP SECTION: Scan QR & Data Table -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                    
                    <!-- LEFT COLUMN: Scan QR Code -->
                    <div class="lg:col-span-4 bg-[#f8f9fc] rounded-lg shadow-sm border border-slate-200 overflow-hidden">
                        
                        <div class="px-5 py-3 border-b border-slate-200 flex items-center gap-2 bg-[#f8f9fc]">
                            <i class="fa-solid fa-qrcode text-slate-700"></i>
                            <h3 class="font-bold text-slate-800 text-sm">Scan QR Code Anggota</h3>
                        </div>

                        <div class="p-5 flex flex-col items-center gap-4 bg-white">
                            
                            <!-- Camera View Box -->
                            <div id="videoContainer" class="w-full aspect-square bg-white border border-slate-200 shadow-sm relative overflow-hidden flex flex-col items-center justify-center group">
                                
                                <!-- State: Off -->
                                <div id="cameraOffState" class="flex flex-col items-center justify-center text-slate-300 w-full h-full">
                                    <div class="w-full h-full bg-slate-50 flex items-center justify-center">
                                       <span class="text-xs text-slate-400">Area Kamera</span>
                                    </div>
                                </div>

                                <!-- State: On -->
                                <div id="cameraOnState" class="hidden absolute inset-0 bg-slate-900">
                                    <img src="https://images.unsplash.com/photo-1577563908411-5077b6dc7624?auto=format&fit=crop&w=400&q=80" alt="Webcam Feed" class="w-full h-full object-cover opacity-80 mix-blend-luminosity">
                                    
                                    <!-- Frame & Scanner Line -->
                                    <div class="absolute inset-0 z-10 pointer-events-none p-4 flex items-center justify-center">
                                        <div class="w-3/4 h-3/4 relative">
                                            <div class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-emerald-400"></div>
                                            <div class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-emerald-400"></div>
                                            <div class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-emerald-400"></div>
                                            <div class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-emerald-400"></div>
                                            <div class="absolute left-0 w-full h-[2px] bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)] top-1/2" style="animation: scan-line 2.5s ease-in-out infinite;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Camera Action Buttons -->
                            <div class="flex flex-col gap-2 w-full">
                                <button id="btnPlay" class="w-full bg-[#198754] hover:bg-[#157347] text-white py-2 rounded flex items-center justify-center gap-2 text-sm shadow-sm transition-colors border border-[#146c43]">
                                    <i class="fa-regular fa-circle-play"></i> Play Camera
                                </button>
                                <button id="btnStop" class="w-full bg-[#dc3545] hover:bg-[#c82333] text-white py-2 rounded flex items-center justify-center gap-2 text-sm shadow-sm transition-colors border border-[#bd2130]">
                                    <i class="fa-regular fa-circle-stop"></i> Stop Camera
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Recent Scans Data -->
                    <div class="lg:col-span-8 bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col h-full">
                        
                        <div class="px-5 py-3 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data</h3>
                        </div>

                        <!-- Search Bar -->
                        <div class="px-5 py-4 bg-white flex justify-end">
                            <div class="relative w-full md:w-64">
                                <input type="text" placeholder="Cari Data Peminjaman..." class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-y border-slate-300">
                                        <th class="px-5 py-3 font-bold w-12 text-center">No</th>
                                        <th class="px-5 py-3 font-bold">Tgl Pinjam</th>
                                        <th class="px-5 py-3 font-bold">Nama Anggota</th>
                                        <th class="px-5 py-3 font-bold">Kelas</th>
                                        <th class="px-5 py-3 font-bold w-24 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">
                                    
                                    <!-- Row 1 -->
                                    <tr class="bg-white hover:bg-slate-50 transition-colors border-b border-slate-100">
                                        <td class="px-5 py-3 text-center text-slate-600">1</td>
                                        <td class="px-5 py-3">27 April 2026</td>
                                        <td class="px-5 py-3">Rahayu</td>
                                        <td class="px-5 py-3 text-slate-600">XI Teknologi Informasi 1</td>
                                        <td class="px-5 py-3">
                                            <div class="flex flex-col gap-1 items-center">
                                                <button class="w-8 h-7 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm">
                                                    <i class="fa-solid fa-book-open text-[11px]"></i>
                                                </button>
                                                <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm">
                                                    <i class="fa-solid fa-trash-can text-[11px]"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Row 2 -->
                                    <tr class="bg-slate-100/50 hover:bg-slate-100 transition-colors border-b border-slate-100">
                                        <td class="px-5 py-3 text-center text-slate-600">2</td>
                                        <td class="px-5 py-3">26 April 2026</td>
                                        <td class="px-5 py-3">kasep</td>
                                        <td class="px-5 py-3 text-slate-600">X IPS 2</td>
                                        <td class="px-5 py-3">
                                            <div class="flex flex-col gap-1 items-center">
                                                <button class="w-8 h-7 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm">
                                                    <i class="fa-solid fa-book-open text-[11px]"></i>
                                                </button>
                                                <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm">
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

                <!-- BOTTOM SECTION: Manual Member Search -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
                    
                    <!-- Blue Header -->
                    <div class="bg-[#3b5998] px-5 py-3 flex items-center gap-2 text-white">
                        <i class="fa-solid fa-plus font-bold"></i>
                        <h3 class="font-bold text-sm">Pinjam Data Anggota Secara Manual</h3>
                    </div>

                    <div class="p-5">
                        <div class="flex justify-end mb-4">
                            <div class="relative w-full md:w-72">
                                <input type="text" placeholder="Cari Anggota Manual..." class="w-full bg-white border border-slate-300 rounded py-2 px-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                            </div>
                        </div>

                        <div class="overflow-x-auto border border-slate-200 rounded">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-b border-slate-300">
                                        <th class="px-5 py-3 font-bold w-12 text-center">No</th>
                                        <th class="px-5 py-3 font-bold">NISN</th>
                                        <th class="px-5 py-3 font-bold">Nama Anggota</th>
                                        <th class="px-5 py-3 font-bold">Jenis Kelamin</th>
                                        <th class="px-5 py-3 font-bold">Kelas</th>
                                        <th class="px-5 py-3 font-bold w-24 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-700 text-[13px]">
                                    
                                    <tr class="bg-white hover:bg-slate-50 transition-colors border-b border-slate-100">
                                        <td class="px-5 py-3 text-center text-slate-600">1</td>
                                        <td class="px-5 py-3">121212</td>
                                        <td class="px-5 py-3">kasep</td>
                                        <td class="px-5 py-3">Laki-Laki</td>
                                        <td class="px-5 py-3">X IPS 2</td>
                                        <td class="px-5 py-3 text-center">
                                            <button class="w-8 h-7 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center mx-auto transition-colors shadow-sm">
                                                <i class="fa-solid fa-lock-open text-[11px]"></i>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="pt-2 pb-6">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; Perpustakaan Online</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script untuk Toggle Kamera -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnPlay = document.getElementById('btnPlay');
            const btnStop = document.getElementById('btnStop');
            const cameraOffState = document.getElementById('cameraOffState');
            const cameraOnState = document.getElementById('cameraOnState');

            btnPlay.addEventListener('click', function() {
                cameraOffState.classList.add('hidden');
                cameraOnState.classList.remove('hidden');
            });

            btnStop.addEventListener('click', function() {
                cameraOnState.classList.add('hidden');
                cameraOffState.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>