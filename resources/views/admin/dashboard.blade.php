<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

        <!-- Logo Area (Diperbarui menggunakan Logo SD) -->
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="logo-sd.png" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <!-- Menu Navigasi Lengkap -->
        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <!-- Dashboard Active -->
                <li>
                    <a href="/admin/dashboard" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard
                    </a>
                </li>

                <!-- Section: Master Data -->
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

                <!-- Section: Transaksi -->
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

                <!-- Section: Laporan -->
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

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER (Top Navbar) -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Dashboard Overview</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Ringkasan aktivitas sirkulasi hari ini.</p>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- Search Bar -->
                <div class="hidden md:flex relative text-slate-400 focus-within:text-blue-500">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2"></i>
                    <input type="text" placeholder="Cari buku, anggota..." class="bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 text-sm w-64 focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all text-slate-700 outline-none">
                </div>

                <!-- Notification Bell -->
                <button class="relative text-slate-400 hover:text-blue-500 transition-colors">
                    <i class="fa-solid fa-bell text-xl"></i>
                    <span class="absolute top-0 -right-0.5 flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-rose-500 border-2 border-white"></span>
                    </span>
                </button>

                <!-- Tombol Logout -->
                <button onclick="openLogoutModal()" class="flex items-center gap-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 px-3 py-1.5 rounded-lg transition-all text-sm font-semibold group" title="Keluar dari sistem">
                    <i class="fa-solid fa-power-off text-lg group-hover:scale-110 transition-transform"></i>
                    <span class="hidden md:inline">Logout</span>
                </button>

                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                    <i class="fa-solid fa-chevron-down text-slate-400 text-xs ml-1 group-hover:text-blue-500 transition-colors hidden sm:block"></i>
                </div>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar relative">

            <!-- STATISTIC CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:-translate-y-1 hover:shadow-md transition-all duration-300 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 text-blue-50/50 group-hover:text-blue-50 transition-colors z-0">
                        <i class="fa-solid fa-book text-8xl rotate-12"></i>
                    </div>
                    <div class="relative z-10 flex items-center">
                        <div class="p-3.5 rounded-xl bg-blue-50 text-blue-600 mr-4 border border-blue-100 shadow-inner group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-book w-6 h-6 flex items-center justify-center text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-0.5">Total Koleksi Buku</p>
                            <div class="flex items-baseline gap-2">
                                <p class="text-2xl font-bold text-slate-800">1,248</p>
                                <span class="text-xs font-bold text-emerald-500 bg-emerald-50 px-1.5 py-0.5 rounded border border-emerald-100">+12 br ini</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:-translate-y-1 hover:shadow-md transition-all duration-300 relative overflow-hidden group">
                     <div class="absolute -right-6 -top-6 text-emerald-50/50 group-hover:text-emerald-50 transition-colors z-0">
                        <i class="fa-solid fa-users text-8xl rotate-12"></i>
                    </div>
                    <div class="relative z-10 flex items-center">
                        <div class="p-3.5 rounded-xl bg-emerald-50 text-emerald-600 mr-4 border border-emerald-100 shadow-inner group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-users w-6 h-6 flex items-center justify-center text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-0.5">Anggota Aktif</p>
                            <p class="text-2xl font-bold text-slate-800">854</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:-translate-y-1 hover:shadow-md transition-all duration-300 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 text-amber-50/50 group-hover:text-amber-50 transition-colors z-0">
                        <i class="fa-solid fa-hand-holding-hand text-8xl rotate-12"></i>
                    </div>
                    <div class="relative z-10 flex items-center">
                        <div class="p-3.5 rounded-xl bg-amber-50 text-amber-600 mr-4 border border-amber-100 shadow-inner group-hover:bg-amber-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-hand-holding-hand w-6 h-6 flex items-center justify-center text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-0.5">Buku Dipinjam</p>
                            <p class="text-2xl font-bold text-slate-800">142</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:-translate-y-1 hover:shadow-md transition-all duration-300 relative overflow-hidden group border-b-4 border-b-rose-500">
                     <div class="absolute -right-6 -top-6 text-rose-50/50 group-hover:text-rose-50 transition-colors z-0">
                        <i class="fa-solid fa-clipboard-check text-8xl rotate-12"></i>
                    </div>
                    <div class="relative z-10 flex items-center">
                        <div class="p-3.5 rounded-xl bg-rose-50 text-rose-600 mr-4 border border-rose-100 shadow-inner group-hover:bg-rose-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-clipboard-check w-6 h-6 flex items-center justify-center text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium mb-0.5">Perlu Verifikasi</p>
                            <div class="flex items-center gap-2">
                                <p class="text-2xl font-bold text-rose-600">3</p>
                                <span class="flex h-2 w-2 relative">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-4 mb-6">
                <a href="/admin/transaksi/peminjaman" class="bg-slate-900 hover:bg-slate-800 text-white font-medium py-2.5 px-5 rounded-xl shadow-sm transition-colors text-sm flex items-center gap-2">
                    <i class="fa-solid fa-barcode text-emerald-400"></i> Scan Peminjaman Baru
                </a>
                <a href="/admin/buku/create" class="bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 text-slate-700 font-medium py-2.5 px-5 rounded-xl shadow-sm transition-colors text-sm flex items-center gap-2">
                    <i class="fa-solid fa-plus text-blue-500"></i> Tambah Koleksi Buku
                </a>
            </div>

            <!-- TABEL TRANSAKSI TERBARU -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">

                <div class="px-6 py-5 border-b border-slate-100 flex justify-between items-center bg-white">
                    <div>
                        <h3 class="font-bold text-slate-800 text-lg tracking-tight">Antrean Pengembalian & Transaksi</h3>
                        <p class="text-xs text-slate-500 mt-1">Daftar transaksi peminjaman terbaru yang memerlukan tindakan.</p>
                    </div>
                    <button class="text-sm text-blue-600 hover:text-blue-800 font-semibold bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-lg transition-colors">
                        Lihat Semua Riwayat
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-100">
                                <th class="px-6 py-4 font-bold">Data Peminjam</th>
                                <th class="px-6 py-4 font-bold">Judul Buku</th>
                                <th class="px-6 py-4 font-bold">Tanggal</th>
                                <th class="px-6 py-4 font-bold">Status Transaksi</th>
                                <th class="px-6 py-4 font-bold text-right">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-700 divide-y divide-slate-100">
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">AB</div>
                                        <div>
                                            <div class="font-bold text-slate-800 text-sm">Ahmad Budi</div>
                                            <div class="text-[11px] font-medium text-slate-500 mt-0.5">MBR-001 • Kelas 6A</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-slate-800 text-sm line-clamp-1">Matematika Diskrit</div>
                                    <div class="text-[11px] text-slate-500 mt-0.5 font-mono">BK-99212</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-xs text-slate-600"><span class="text-slate-400 w-12 inline-block">Pinjam:</span> 12 Jul 2026</div>
                                    <div class="text-xs text-rose-600 font-semibold mt-1"><span class="text-rose-400 w-12 inline-block">Batas:</span> 19 Jul 2026 <span class="bg-rose-100 text-rose-700 px-1.5 py-0.5 rounded text-[10px] ml-1">Telat</span></div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-amber-50 border border-amber-200 text-amber-700 rounded-lg text-xs font-bold">
                                        <i class="fa-solid fa-circle-exclamation text-[10px]"></i> Menunggu Verifikasi
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="/admin/transaksi/pengembalian" class="inline-block bg-slate-900 hover:bg-slate-800 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors border border-transparent">
                                        Verifikasi
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs">SA</div>
                                        <div>
                                            <div class="font-bold text-slate-800 text-sm">Siti Aminah</div>
                                            <div class="text-[11px] font-medium text-slate-500 mt-0.5">MBR-042 • Kelas 3B</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-slate-800 text-sm line-clamp-1">Dongeng Kancil</div>
                                    <div class="text-[11px] text-slate-500 mt-0.5 font-mono">BK-88321</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-xs text-slate-600"><span class="text-slate-400 w-12 inline-block">Pinjam:</span> 20 Jul 2026</div>
                                    <div class="text-xs text-emerald-600 font-semibold mt-1"><span class="text-emerald-400 w-12 inline-block">Batas:</span> 27 Jul 2026</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-blue-50 border border-blue-200 text-blue-700 rounded-lg text-xs font-bold">
                                        <i class="fa-solid fa-spinner animate-spin-slow text-[10px]"></i> Sedang Dipinjam
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="bg-slate-100 text-slate-400 cursor-not-allowed text-xs font-semibold px-4 py-2 rounded-lg border border-slate-200" disabled>
                                        Verifikasi
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 text-center text-xs text-slate-400 font-medium">
                &copy; 2026 SMARTPERPUS System. All rights reserved.
            </div>

        </main>
    </div>

    <!-- WIDGET ASISTEN SMART AI -->
    <button onclick="toggleAiChat()" class="fixed bottom-8 right-8 bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-4 rounded-full shadow-[0_10px_25px_rgba(79,70,229,0.4)] hover:-translate-y-1 transition-all duration-300 z-40 group">
        <i class="fa-solid fa-sparkles text-xl group-hover:animate-spin"></i>
    </button>

    <div id="aiChatPanel" class="fixed bottom-28 right-8 w-[22rem] md:w-[26rem] h-[32rem] bg-white rounded-2xl shadow-2xl border border-slate-100 flex flex-col z-40 opacity-0 pointer-events-none transform translate-y-4 transition-all duration-300 overflow-hidden">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-4 flex items-center justify-between shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white backdrop-blur-sm">
                    <i class="fa-solid fa-robot text-lg"></i>
                </div>
                <div>
                    <h3 class="font-bold text-white text-sm">SMART AI Assistant</h3>
                    <p class="text-blue-100 text-[11px]">Didukung oleh Gemini AI</p>
                </div>
            </div>
            <button onclick="toggleAiChat()" class="text-white/70 hover:text-white transition-colors">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>
        <div id="chatMessages" class="flex-1 overflow-y-auto p-4 bg-slate-50 space-y-4 custom-scrollbar">
            <div class="flex gap-3">
                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-robot text-sm"></i>
                </div>
                <div class="bg-white p-3 rounded-2xl rounded-tl-none shadow-sm border border-slate-100 text-sm text-slate-700">
                    Halo, Admin! Saya SMART AI. Ada yang bisa saya bantu hari ini?
                </div>
            </div>
        </div>
        <div class="p-3 bg-white border-t border-slate-100 shrink-0">
            <div class="relative">
                <input type="text" id="aiInput" placeholder="Tanya sesuatu ke AI..." class="w-full bg-slate-100 border-none rounded-xl py-3 pl-4 pr-12 text-sm focus:ring-2 focus:ring-blue-500/20 focus:bg-white transition-all outline-none" onkeypress="handleEnter(event)">
                <button onclick="sendAiMessage()" id="btnSendAi" class="absolute right-1 top-1 bottom-1 px-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors flex items-center justify-center">
                    <i class="fa-solid fa-paper-plane text-xs"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- MODAL LOGOUT OVERLAY -->
    <div id="logoutModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="logoutModalContent" class="bg-white rounded-2xl shadow-2xl w-full max-w-sm p-6 sm:p-8 transform scale-95 opacity-0 transition-all duration-300 m-4">
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center mb-5 shadow-[0_0_20px_rgba(244,63,94,0.15)] relative">
                    <div class="absolute inset-0 border-2 border-rose-200 rounded-full animate-ping opacity-20"></div>
                    <i class="fa-solid fa-arrow-right-from-bracket text-3xl ml-1 relative z-10"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Keluar Aplikasi?</h3>
                <p class="text-sm text-slate-500 mb-8 font-medium leading-relaxed">
                    Apakah Anda yakin ingin mengakhiri sesi ini?
                </p>
                <div class="flex gap-3 w-full">
                    <button onclick="closeLogoutModal()" class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl transition-colors text-sm">
                        Batalkan
                    </button>
                    <button onclick="simulateLogout()" id="btnConfirmLogout" class="flex-1 py-3 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-xl transition-all shadow-md shadow-rose-500/20 text-sm flex items-center justify-center gap-2 group">
                        <span>Ya, Keluar</span>
                        <i class="fa-solid fa-right-from-bracket text-[10px] group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // --- LOGOUT MODAL SCRIPTS ---
        const modalOverlay = document.getElementById('logoutModal');
        const modalContent = document.getElementById('logoutModalContent');
        const btnConfirm = document.getElementById('btnConfirmLogout');

        function openLogoutModal() {
            modalOverlay.classList.remove('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }

        function closeLogoutModal() {
            modalOverlay.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
        }

        function simulateLogout() {
            btnConfirm.innerHTML = '<i class="fa-solid fa-circle-notch animate-spin"></i> Proses...';
            btnConfirm.classList.add('opacity-80', 'cursor-not-allowed');
            setTimeout(() => { window.location.href = '/'; }, 800);
        }

        modalOverlay.addEventListener('click', function(e) {
            if (e.target === modalOverlay) closeLogoutModal();
        });

        // --- AI CHAT WIDGET SCRIPTS ---
        const aiChatPanel = document.getElementById('aiChatPanel');
        const aiInput = document.getElementById('aiInput');
        const chatMessages = document.getElementById('chatMessages');
        let isChatOpen = false;

        function toggleAiChat() {
            isChatOpen = !isChatOpen;
            if (isChatOpen) {
                aiChatPanel.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                aiInput.focus();
            } else {
                aiChatPanel.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
            }
        }

        function handleEnter(e) { if (e.key === 'Enter') sendAiMessage(); }

        async function sendAiMessage() {
            const message = aiInput.value.trim();
            if (!message) return;

            appendMessage('admin', message);
            aiInput.value = '';
            const loadingId = appendLoading();

            try {
                // Biarkan string API key kosong untuk injeksi otomatis environment di framework
                const apiKey = "";
                const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-3-flash-preview:generateContent?key=${apiKey}`;

                const payload = {
                    contents: [{ parts: [{ text: message }] }],
                    systemInstruction: { parts: [{ text: "Kamu adalah SMART AI, asisten virtual untuk admin perpustakaan. Jawab singkat, ramah, gunakan bahasa Indonesia. Gunakan tag HTML untuk formatting." }] }
                };

                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });

                const result = await response.json();
                document.getElementById(loadingId).remove();

                if (result.candidates && result.candidates[0].content.parts[0].text) {
                    let aiResponse = result.candidates[0].content.parts[0].text;
                    aiResponse = aiResponse.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>');
                    aiResponse = aiResponse.replace(/\n/g, '<br>');
                    appendMessage('ai', aiResponse);
                } else {
                    appendMessage('ai', 'Maaf, saya tidak dapat memproses permintaan tersebut saat ini.');
                }
            } catch (error) {
                document.getElementById(loadingId).remove();
                appendMessage('ai', '<span class="text-rose-500"><i class="fa-solid fa-triangle-exclamation"></i> Terjadi kesalahan koneksi.</span>');
            }
        }

        function appendMessage(sender, text) {
            const msgDiv = document.createElement('div');
            msgDiv.className = sender === 'admin' ? 'flex gap-3 flex-row-reverse' : 'flex gap-3';

            const avatar = sender === 'admin'
                ? `<div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center shrink-0"><i class="fa-solid fa-user text-slate-500 text-sm"></i></div>`
                : `<div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-sm"></i></div>`;

            const bubbleBg = sender === 'admin'
                ? 'bg-blue-600 text-white rounded-tr-none shadow-sm'
                : 'bg-white text-slate-700 rounded-tl-none border border-slate-100 shadow-sm';

            msgDiv.innerHTML = `${avatar}<div class="p-3 rounded-2xl ${bubbleBg} text-sm max-w-[80%] leading-relaxed">${text}</div>`;
            chatMessages.appendChild(msgDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function appendLoading() {
            const id = 'loading-' + Date.now();
            const msgDiv = document.createElement('div');
            msgDiv.id = id;
            msgDiv.className = 'flex gap-3';
            msgDiv.innerHTML = `
                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-robot text-sm"></i>
                </div>
                <div class="bg-white p-4 rounded-2xl rounded-tl-none border border-slate-100 shadow-sm flex items-center gap-1 w-16">
                    <div class="w-2 h-2 bg-slate-300 rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-slate-300 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                    <div class="w-2 h-2 bg-slate-300 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                </div>
            `;
            chatMessages.appendChild(msgDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
            return id;
        }
    </script>
</body>
</html>
