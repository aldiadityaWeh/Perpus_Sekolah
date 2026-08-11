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
    
    <!-- LIBRARY HTML5-QRCODE (Wajib untuk akses kamera & baca barcode) -->
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

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

        /* Menimpa style bawaan html5-qrcode agar rapi */
        #reader video {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            border-radius: 0.75rem; /* rounded-xl */
        }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20 hidden md:flex">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard</a></li>
                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas</a></li>
                
                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                
                <!-- Scan Peminjaman Active -->
                <li>
                    <a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Scan Peminjaman
                    </a>
                </li>
                
                <li><a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between"><div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali</div></a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative bg-[#f4f7f6]">
        
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-slate-500 hover:text-blue-600"><i class="fa-solid fa-bars text-xl"></i></button>
                <div>
                    <div class="hidden md:flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                        <span class="hover:text-blue-600 cursor-pointer transition-colors">Transaksi</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-slate-800">Scan Peminjaman</span>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight leading-none">Sirkulasi Peminjaman</h2>
                </div>
            </div>
            
            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
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
                
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5"><i class="fa-solid fa-circle-info text-xl opacity-90"></i><h3 class="font-bold text-xl">Informasi</h3></div>
                    <p class="text-sm text-white/90">Silahkan scan Barcode Buku (Kode Buku) atau QR Code Kartu Anggota (NISN) secara bergantian pada alat scanner.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                    
                    <!-- LEFT COLUMN: Kamera Scanner Asli -->
                    <div class="lg:col-span-4 bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col h-full">
                        
                        <div class="px-5 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-800 text-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-qrcode text-slate-300"></i>
                                <h3 class="font-bold text-sm">Scanner Kamera</h3>
                            </div>
                            <span id="cameraStatus" class="flex h-3 w-3 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-rose-500"></span>
                            </span>
                        </div>

                        <div class="p-5 flex flex-col items-center gap-4 flex-1">
                            
                            <!-- Area Output Kamera (Akan diisi oleh HTML5-QRCode) -->
                            <div class="w-full aspect-square bg-slate-100 border-2 border-slate-200 shadow-inner rounded-xl relative overflow-hidden flex flex-col items-center justify-center group" id="cameraWrapper">
                                
                                <!-- Pesan Awal (Saat Kamera Mati) -->
                                <div id="cameraOffMessage" class="flex flex-col items-center justify-center text-slate-400 w-full h-full absolute inset-0 z-10 bg-slate-100">
                                    <i class="fa-solid fa-camera-slash text-5xl mb-3 opacity-60"></i>
                                    <span class="text-sm font-semibold tracking-wide">Kamera Nonaktif</span>
                                </div>

                                <!-- Div Tempat Kamera di Render -->
                                <div id="reader" class="w-full h-full absolute inset-0 z-0"></div>

                                <!-- Garis Scanner Merah Animasi (Muncul saat aktif) -->
                                <div id="scannerOverlay" class="hidden absolute inset-0 z-20 pointer-events-none p-6 flex items-center justify-center">
                                    <div class="w-full h-full max-w-[200px] max-h-[200px] relative">
                                        <div class="absolute top-0 left-0 w-8 h-8 border-t-4 border-l-4 border-emerald-400 rounded-tl-lg"></div>
                                        <div class="absolute top-0 right-0 w-8 h-8 border-t-4 border-r-4 border-emerald-400 rounded-tr-lg"></div>
                                        <div class="absolute bottom-0 left-0 w-8 h-8 border-b-4 border-l-4 border-emerald-400 rounded-bl-lg"></div>
                                        <div class="absolute bottom-0 right-0 w-8 h-8 border-b-4 border-r-4 border-emerald-400 rounded-br-lg"></div>
                                        <div class="absolute left-0 w-full h-[2px] bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)] top-1/2" style="animation: scan-line 2.5s ease-in-out infinite;"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol Kontrol Kamera -->
                            <div class="flex flex-col gap-3 w-full mt-2">
                                <button id="btnPlay" class="w-full bg-[#198754] hover:bg-[#157347] text-white py-2.5 rounded-lg flex items-center justify-center gap-2 text-sm shadow-sm transition-colors font-medium">
                                    <i class="fa-solid fa-play"></i> Mulai Scan Kamera
                                </button>
                                <button id="btnStop" class="hidden w-full bg-[#dc3545] hover:bg-[#c82333] text-white py-2.5 rounded-lg flex items-center justify-center gap-2 text-sm shadow-sm transition-colors font-medium">
                                    <i class="fa-solid fa-stop"></i> Matikan Kamera
                                </button>
                            </div>

                            <!-- Kolom Hasil (Simulasi Input / Alat Scanner Tembak) -->
                            <div class="w-full mt-2 pt-4 border-t border-slate-200">
                                <label class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1 block">Hasil Barcode / Manual Input</label>
                                <form action="#" method="POST" id="formScan" class="relative">
                                    @csrf
                                    <i class="fa-solid fa-keyboard absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                                    <input type="text" id="hasilScan" name="kode_scan" placeholder="Hasil akan muncul disini..." class="w-full bg-slate-50 border border-slate-300 rounded py-2.5 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 outline-none shadow-sm font-mono font-bold text-slate-700">
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Data Panel Peminjaman -->
                    <div class="lg:col-span-8 bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col h-full">
                        
                        <div class="px-6 py-4 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between bg-white gap-4">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-clipboard-list text-blue-600 text-lg"></i>
                                <h3 class="font-bold text-slate-800 text-lg">Proses Transaksi Saat Ini</h3>
                            </div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-sm transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan Transaksi
                            </button>
                        </div>

                        <!-- Panel Data Peminjam -->
                        <div class="p-6 bg-slate-50/50 border-b border-slate-100">
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">1. Identitas Peminjam (Anggota)</h4>
                            <div class="flex items-center gap-4 bg-white p-4 rounded-xl border border-slate-200 shadow-sm transition-all duration-300" id="panelAnggota">
                                <!-- Ikon/Foto Profil -->
                                <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 border border-slate-200 shrink-0">
                                    <i class="fa-solid fa-user text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-800 mb-0.5" id="namaAnggotaText">Menunggu Scan KTA...</p>
                                    <p class="text-xs text-slate-500 font-mono" id="nisnAnggotaText">-</p>
                                </div>
                            </div>
                        </div>

                        <!-- Panel Buku yang Dipinjam -->
                        <div class="p-6 flex-1">
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">2. Buku yang Akan Dipinjam</h4>
                            
                            <div class="overflow-x-auto border border-slate-200 rounded-xl">
                                <table class="w-full text-left border-collapse bg-white">
                                    <thead>
                                        <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                            <th class="px-5 py-3 font-bold w-12 text-center">No</th>
                                            <th class="px-5 py-3 font-bold">Kode Buku</th>
                                            <th class="px-5 py-3 font-bold">Judul Buku</th>
                                            <th class="px-5 py-3 font-bold text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-slate-700 text-sm" id="tableBukuPinjam">
                                        <!-- Placeholder Kosong -->
                                        <tr id="rowKosongBuku">
                                            <td colspan="4" class="px-5 py-8 text-center text-slate-400">
                                                <i class="fa-solid fa-barcode text-3xl mb-2 opacity-50"></i>
                                                <p class="text-xs">Scan Barcode Buku untuk menambahkannya ke daftar.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Audio Beep (Suara scanner sukses) -->
    <audio id="beepSound" src="data:audio/wav;base64,UklGRl9vT19XQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YU......" preload="auto"></audio>

    <!-- Import Script Scanner Eksternal -->
    <script src="{{ asset('js/scan-peminjaman.js') }}"></script>
</body>
</html>