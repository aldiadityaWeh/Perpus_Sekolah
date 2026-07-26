<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - SMARTPERPUS</title>
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

        <!-- Logo Area (Logo SD) -->
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <!-- Jika menggunakan Laravel Blade, ganti src menjadi: src="{{ asset('images/logo-sd.png') }}" -->
            <img src="logo-sd.png" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <!-- Menu Navigasi Lengkap -->
        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li>
                    <a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard
                    </a>
                </li>

                <!-- Section: Master Data -->
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

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Data Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Manajemen Data Buku</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
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
                </div>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar relative">

            <div class="max-w-[1400px] mx-auto space-y-6">

                <!-- Info Banner -->
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm flex flex-col justify-center border border-[#3ba0de]">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-lg">Informasi</h3>
                    </div>
                    <p class="text-[13px] text-white/90">Berikut ini adalah data <strong>BUKU</strong> yang sudah tersimpan dalam database. Anda dapat mengelola koleksi perpustakaan, stok, dan melihat QR Code buku.</p>
                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">

                    <!-- Card Header -->
                    <div class="px-6 py-4 flex items-center justify-between bg-white">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Katalog Buku</h3>
                        </div>
                        <a href="/admin/buku/create" class="bg-[#3b5998] hover:bg-[#2d4373] text-white px-4 py-2 rounded flex items-center justify-center transition-colors shadow-sm gap-2 text-sm font-semibold">
                            <i class="fa-solid fa-plus"></i> Tambah Buku Baru
                        </a>
                    </div>

                    <!-- Search Bar Area -->
                    <div class="px-6 py-3 border-t border-b border-slate-100 flex justify-end bg-slate-50/50">
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Cari Judul / Pengarang / Penerbit..." class="w-full bg-white border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                        </div>
                    </div>

                    <!-- Tabel Data -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-b border-slate-300">
                                    <th class="px-5 py-4 font-bold w-12 text-center">No</th>
                                    <th class="px-5 py-4 font-bold text-center">QR Code</th>
                                    <th class="px-5 py-4 font-bold">Judul Buku</th>
                                    <th class="px-5 py-4 font-bold">Pengarang</th>
                                    <th class="px-5 py-4 font-bold">Penerbit</th>
                                    <th class="px-5 py-4 font-bold text-center">Tahun</th>
                                    <th class="px-5 py-4 font-bold text-center">Gambar</th>
                                    <th class="px-5 py-4 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                <!-- Baris 1 -->
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">1</td>
                                    <td class="px-5 py-3 text-center">
                                        <!-- Dummy QR Code -->
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-40012" alt="QR Code" class="w-10 h-10 mx-auto mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-5 py-3 font-semibold text-slate-800">
                                        Buku Siswa Tema 1: Indahnya Kebersamaan
                                    </td>
                                    <td class="px-5 py-3 text-slate-600">Kemendikbud</td>
                                    <td class="px-5 py-3 text-slate-600">Balitbang Kemdikbud</td>
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">2017</td>
                                    <td class="px-5 py-3 text-center">
                                        <!-- Thumbnail Buku -->
                                        <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?auto=format&fit=crop&w=150&q=80" alt="Cover" class="w-9 h-12 object-cover mx-auto border border-slate-200 shadow-sm rounded">
                                    </td>
                                    <td class="px-5 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-8 h-8 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm" title="Detail Buku">
                                                <i class="fa-solid fa-info text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm" title="Edit Buku">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Buku">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 2 -->
                                <tr class="bg-slate-50/50 hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">2</td>
                                    <td class="px-5 py-3 text-center">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-60084" alt="QR Code" class="w-10 h-10 mx-auto mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-5 py-3 font-semibold text-slate-800">
                                        Senang Belajar Matematika SD/MI
                                    </td>
                                    <td class="px-5 py-3 text-slate-600">Puskurbuk</td>
                                    <td class="px-5 py-3 text-slate-600">Kementerian Pendidikan</td>
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">2018</td>
                                    <td class="px-5 py-3 text-center">
                                        <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&w=150&q=80" alt="Cover" class="w-9 h-12 object-cover mx-auto border border-slate-200 shadow-sm rounded">
                                    </td>
                                    <td class="px-5 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-8 h-8 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm" title="Detail Buku">
                                                <i class="fa-solid fa-info text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm" title="Edit Buku">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Buku">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Baris 3 -->
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">3</td>
                                    <td class="px-5 py-3 text-center">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=BK-00192" alt="QR Code" class="w-10 h-10 mx-auto mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-5 py-3 font-semibold text-slate-800">
                                        Kamus Pintar Bergambar (Bilingual)
                                    </td>
                                    <td class="px-5 py-3 text-slate-600">Tim Erlangga</td>
                                    <td class="px-5 py-3 text-slate-600">Penerbit Erlangga</td>
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">2020</td>
                                    <td class="px-5 py-3 text-center">
                                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=150&q=80" alt="Cover" class="w-9 h-12 object-cover mx-auto border border-slate-200 shadow-sm rounded">
                                    </td>
                                    <td class="px-5 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <button class="w-8 h-8 rounded bg-[#0dcaf0] hover:bg-[#0bacce] text-white flex items-center justify-center transition-colors shadow-sm" title="Detail Buku">
                                                <i class="fa-solid fa-info text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm" title="Edit Buku">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Buku">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Paginasi -->
                    <div class="px-6 py-4 border-t border-slate-100 bg-white flex justify-center">
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

            <!-- Footer Text -->
            <div class="mt-6 text-center text-xs text-slate-400 font-medium">
                &copy; 2026 SMARTPERPUS System. All rights reserved.
            </div>

        </main>
    </div>

    <!-- MODAL LOGOUT OVERLAY -->
    <div id="logoutModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="logoutModalContent" class="bg-white rounded-2xl shadow-2xl w-full max-w-sm p-6 sm:p-8 transform scale-95 opacity-0 transition-all duration-300 m-4">
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center mb-5 shadow-[0_0_20px_rgba(244,63,94,0.15)] relative">
                    <div class="absolute inset-0 border-2 border-rose-200 rounded-full animate-ping opacity-20"></div>
                    <i class="fa-solid fa-arrow-right-from-bracket text-3xl ml-1 relative z-10"></i>
                </div>

                <h3 class="text-xl font-bold text-slate-800 mb-2 tracking-tight">Keluar Aplikasi?</h3>
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

    <script>
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
            setTimeout(() => {
                window.location.href = '/';
            }, 800);
        }

        modalOverlay.addEventListener('click', function(e) {
            if (e.target === modalOverlay) closeLogoutModal();
        });
    </script>
</body>
</html>
