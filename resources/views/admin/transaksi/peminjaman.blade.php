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

                <!-- Scan Peminjaman Active -->
                <li>
                    <a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Scan Peminjaman
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

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Transaksi</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Scan Peminjaman</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Sirkulasi Peminjaman</h2>
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
                    <p class="text-sm text-white/90">Silahkan scan barcode kartu anggota pada menu <strong>PEMINJAMAN</strong> dengan posisi yang baik dan benar.</p>
                </div>

                <!-- TOP SECTION: Scan QR & Data Table -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

                    <!-- LEFT COLUMN: Scan QR Code -->
                    <div class="lg:col-span-4 bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">

                        <div class="px-5 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-qrcode text-slate-700"></i>
                            <h3 class="font-bold text-slate-800 text-sm">Scan QR Code Anggota</h3>
                        </div>

                        <div class="p-6 flex flex-col items-center gap-4">

                            <!-- Camera View Box -->
                            <div id="videoContainer" class="w-full aspect-square bg-slate-100 border-2 border-slate-200 shadow-inner rounded-xl relative overflow-hidden flex flex-col items-center justify-center group">

                                <!-- State: Off -->
                                <div id="cameraOffState" class="flex flex-col items-center justify-center text-slate-400 w-full h-full transition-all">
                                    <i class="fa-solid fa-camera-slash text-5xl mb-3 opacity-60"></i>
                                    <span class="text-sm font-semibold tracking-wide">Kamera Nonaktif</span>
                                </div>

                                <!-- State: On -->
                                <div id="cameraOnState" class="hidden absolute inset-0 bg-slate-900">
                                    <img src="https://images.unsplash.com/photo-1577563908411-5077b6dc7624?auto=format&fit=crop&w=400&q=80" alt="Webcam Feed" class="w-full h-full object-cover opacity-80 mix-blend-luminosity">

                                    <!-- Frame & Scanner Line -->
                                    <div class="absolute inset-0 z-10 pointer-events-none p-6 flex items-center justify-center">
                                        <div class="w-full h-full max-w-[200px] max-h-[200px] relative">
                                            <div class="absolute top-0 left-0 w-8 h-8 border-t-4 border-l-4 border-emerald-400 rounded-tl-lg"></div>
                                            <div class="absolute top-0 right-0 w-8 h-8 border-t-4 border-r-4 border-emerald-400 rounded-tr-lg"></div>
                                            <div class="absolute bottom-0 left-0 w-8 h-8 border-b-4 border-l-4 border-emerald-400 rounded-bl-lg"></div>
                                            <div class="absolute bottom-0 right-0 w-8 h-8 border-b-4 border-r-4 border-emerald-400 rounded-br-lg"></div>

                                            <!-- Scanner Line -->
                                            <div class="absolute left-0 w-full h-[2px] bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)] top-1/2" style="animation: scan-line 2.5s ease-in-out infinite;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Camera Action Buttons -->
                            <div class="flex flex-col gap-3 w-full mt-2">
                                <button id="btnPlay" class="w-full bg-[#198754] hover:bg-[#157347] text-white py-2.5 rounded-lg flex items-center justify-center gap-2 text-sm shadow-sm transition-colors border border-[#146c43] font-medium">
                                    <i class="fa-solid fa-play"></i> Nyalakan Kamera
                                </button>
                                <button id="btnStop" class="w-full bg-[#dc3545] hover:bg-[#c82333] text-white py-2.5 rounded-lg flex items-center justify-center gap-2 text-sm shadow-sm transition-colors border border-[#bd2130] font-medium">
                                    <i class="fa-solid fa-stop"></i> Matikan Kamera
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Recent Scans Data -->
                    <div class="lg:col-span-8 bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col h-full">

                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Peminjaman</h3>
                        </div>

                        <!-- Search Bar -->
                        <div class="px-6 py-4 bg-slate-50/50 flex justify-end border-b border-slate-100">
                            <div class="relative w-full md:w-72">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                                <input type="text" placeholder="Cari Data Peminjaman..." class="w-full bg-white border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-b border-slate-300">
                                        <th class="px-6 py-3.5 font-bold w-16 text-center">No</th>
                                        <th class="px-6 py-3.5 font-bold">Tgl Pinjam</th>
                                        <th class="px-6 py-3.5 font-bold">Nama Anggota</th>
                                        <th class="px-6 py-3.5 font-bold">Kelas</th>
                                        <th class="px-6 py-3.5 font-bold w-24 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                    <!-- Row 1 -->
                                    <tr class="hover:bg-slate-50 transition-colors border-b border-slate-100">
                                        <td class="px-6 py-3 text-center text-slate-500 font-medium">1</td>
                                        <td class="px-6 py-3 font-semibold text-slate-800">27 Juli 2026</td>
                                        <td class="px-6 py-3">Rahayu</td>
                                        <td class="px-6 py-3 text-slate-600">XI Teknologi Informasi 1</td>
                                        <td class="px-6 py-3">
                                            <div class="flex flex-col gap-1.5 items-center">
                                                <button class="w-8 h-8 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm" title="Detail Peminjaman">
                                                    <i class="fa-solid fa-book-open text-[13px]"></i>
                                                </button>
                                                <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Data">
                                                    <i class="fa-solid fa-trash-can text-[13px]"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Row 2 -->
                                    <tr class="bg-slate-50/50 hover:bg-slate-50 transition-colors border-b border-slate-100">
                                        <td class="px-6 py-3 text-center text-slate-500 font-medium">2</td>
                                        <td class="px-6 py-3 font-semibold text-slate-800">26 Juli 2026</td>
                                        <td class="px-6 py-3">Budi Santoso</td>
                                        <td class="px-6 py-3 text-slate-600">X IPS 2</td>
                                        <td class="px-6 py-3">
                                            <div class="flex flex-col gap-1.5 items-center">
                                                <button class="w-8 h-8 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm" title="Detail Peminjaman">
                                                    <i class="fa-solid fa-book-open text-[13px]"></i>
                                                </button>
                                                <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Data">
                                                    <i class="fa-solid fa-trash-can text-[13px]"></i>
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
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden mt-6">

                    <!-- Blue Header -->
                    <div class="bg-[#3b5998] px-6 py-4 flex items-center gap-2 text-white">
                        <i class="fa-solid fa-plus font-bold"></i>
                        <h3 class="font-bold text-sm">Pinjam Data Anggota Secara Manual</h3>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-end mb-4">
                            <div class="relative w-full md:w-80">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                                <input type="text" placeholder="Cari Anggota Manual (NISN/Nama)..." class="w-full bg-white border border-slate-300 rounded py-2.5 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                            </div>
                        </div>

                        <div class="overflow-x-auto border border-slate-200 rounded-lg">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-100/80 text-slate-800 text-[13px] border-b border-slate-300">
                                        <th class="px-6 py-3.5 font-bold w-16 text-center">No</th>
                                        <th class="px-6 py-3.5 font-bold">NISN</th>
                                        <th class="px-6 py-3.5 font-bold">Nama Anggota</th>
                                        <th class="px-6 py-3.5 font-bold">Jenis Kelamin</th>
                                        <th class="px-6 py-3.5 font-bold">Kelas</th>
                                        <th class="px-6 py-3.5 font-bold w-32 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-700 text-[13px]">

                                    <tr class="bg-white hover:bg-slate-50 transition-colors border-b border-slate-100">
                                        <td class="px-6 py-3 text-center text-slate-500 font-medium">1</td>
                                        <td class="px-6 py-3 font-mono text-slate-600">121212</td>
                                        <td class="px-6 py-3 font-semibold text-slate-800">Ahmad Fauzi</td>
                                        <td class="px-6 py-3 text-slate-600">Laki-Laki</td>
                                        <td class="px-6 py-3 text-slate-600">Kelas 5 A</td>
                                        <td class="px-6 py-3 text-center">
                                            <button class="bg-[#0dcaf0] hover:bg-[#0bacce] text-white px-4 py-1.5 rounded flex items-center justify-center mx-auto transition-colors shadow-sm gap-2 text-xs font-semibold" title="Pilih Anggota">
                                                <i class="fa-solid fa-lock-open"></i> Pilih
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Footer Text -->
                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
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
