<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas - SMARTPERPUS SD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Custom Scrollbar for better UI */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        
        <!-- Logo Area -->
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <i class="fa-solid fa-book-open-reader text-blue-400 text-2xl mr-3 drop-shadow-md"></i>
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <!-- Menu Navigasi -->
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
                <li>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota
                    </a>
                </li>
                <!-- Data Kelas Active -->
                <li>
                    <a href="#" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-school w-6 text-center mr-2"></i> Data Kelas
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
                        <span class="bg-red-500/10 text-red-400 border border-red-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">3</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Manajemen Data Kelas</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Kelola rombongan belajar (rombel) tingkat SD.</p>
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

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar">
            
            <div class="max-w-7xl mx-auto space-y-6">

                <!-- Info Banner (Sesuai Referensi) -->
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Berikut ini adalah data <strong>KELAS</strong> yang sudah tersimpan dalam database.</p>
                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
                    
                    <!-- Card Header -->
                    <div class="px-6 py-4 flex items-center justify-between bg-white">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data</h3>
                        </div>
                        <a href="/admin/kelas/create" class="bg-[#4a5fc1] hover:bg-[#3d4ea6] text-white w-9 h-9 rounded flex items-center justify-center transition-colors shadow-sm">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>

                    <!-- Search Bar Area -->
                    <div class="px-6 py-3 border-t border-b border-slate-100 flex justify-end bg-white">
                        <div class="relative w-full md:w-80">
                            <input type="text" placeholder="Cari Nama Kelas..." class="w-full bg-white border border-slate-200 rounded py-2 px-3 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/60 text-slate-800 text-sm border-b border-slate-300">
                                    <th class="px-6 py-4 font-bold w-16 text-center">No</th>
                                    <th class="px-6 py-4 font-bold">Nama Kelas</th>
                                    <th class="px-6 py-4 font-bold w-32 text-center">Akses</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-sm divide-y divide-slate-200">
                                
                                <!-- Baris 1 -->
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-3 text-center text-slate-600 font-medium">1</td>
                                    <td class="px-6 py-3 font-medium text-slate-800">Kelas 1 A</td>
                                    <td class="px-6 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Hapus Data">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 2 -->
                                <tr class="bg-slate-50/50 hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-3 text-center text-slate-600 font-medium">2</td>
                                    <td class="px-6 py-3 font-medium text-slate-800">Kelas 1 B</td>
                                    <td class="px-6 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Hapus Data">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 3 -->
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-3 text-center text-slate-600 font-medium">3</td>
                                    <td class="px-6 py-3 font-medium text-slate-800">Kelas 2 A</td>
                                    <td class="px-6 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Hapus Data">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 4 -->
                                <tr class="bg-slate-50/50 hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-3 text-center text-slate-600 font-medium">4</td>
                                    <td class="px-6 py-3 font-medium text-slate-800">Kelas 2 B</td>
                                    <td class="px-6 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Hapus Data">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 5 -->
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-3 text-center text-slate-600 font-medium">5</td>
                                    <td class="px-6 py-3 font-medium text-slate-800">Kelas 3 A</td>
                                    <td class="px-6 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Hapus Data">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Baris 6 -->
                                <tr class="bg-slate-50/50 hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-3 text-center text-slate-600 font-medium">6</td>
                                    <td class="px-6 py-3 font-medium text-slate-800">Kelas 6 A</td>
                                    <td class="px-6 py-3 text-center">
                                        <button class="w-8 h-7 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center mx-auto transition-colors shadow-sm" title="Hapus Data">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>

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