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
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li>
                    <a href="/admin/dashboard" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman</a></li>
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                        </div>
                        @if($menungguVerifikasi > 0)
                            <span class="bg-rose-500/10 text-rose-400 border border-rose-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">{{ $menungguVerifikasi }}</span>
                        @endif
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER (Top Navbar) -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Dashboard Overview</h2>
                <p class="text-sm text-slate-500 font-medium mt-0.5">Ringkasan aktivitas hari ini.</p>
            </div>

            <div class="flex items-center gap-3 md:gap-4">
                <!-- Tombol Setting -->
                <a href="/admin/pengaturan" class="w-10 h-10 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-600 hover:text-blue-600 flex items-center justify-center transition-all shadow-sm" title="Pengaturan Sistem">
                    <i class="fa-solid fa-gear text-base"></i>
                </a>

                <!-- Tombol Logout -->
                <button type="button" onclick="openLogoutModal()" class="flex items-center gap-2 bg-rose-50 hover:bg-rose-100 border border-rose-200 text-rose-600 px-3.5 py-2 rounded-xl text-xs font-bold transition-all shadow-sm group cursor-pointer" title="Keluar Sistem">
                    <i class="fa-solid fa-right-from-bracket group-hover:scale-110 transition-transform"></i>
                    <span class="hidden sm:inline">Logout</span>
                </button>

                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-3 md:pl-4 border-l border-slate-200 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">ALDI</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar relative">

            <!-- STATISTIC CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                <!-- Card 1: Total Koleksi -->
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
                            <p class="text-2xl font-bold text-slate-800">{{ number_format($totalBuku) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Anggota Terdaftar -->
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
                            <p class="text-2xl font-bold text-slate-800">{{ number_format($totalAnggota) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Sedang Dipinjam -->
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
                            <p class="text-2xl font-bold text-slate-800">{{ number_format($bukuDipinjam) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Menunggu Verifikasi -->
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
                                <p class="text-2xl font-bold text-rose-600">{{ number_format($menungguVerifikasi) }}</p>
                                @if($menungguVerifikasi > 0)
                                    <span class="flex h-2 w-2 relative">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                                    </span>
                                @endif
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
                        <p class="text-xs text-slate-500 mt-1">Daftar transaksi peminjaman terbaru.</p>
                    </div>
                    <a href="/admin/transaksi/pengembalian" class="text-sm text-blue-600 hover:text-blue-800 font-semibold bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-lg transition-colors">
                        Lihat Semua Riwayat
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-100">
                                <th class="px-6 py-4 font-bold">Data Peminjam</th>
                                <th class="px-6 py-4 font-bold">Judul Buku</th>
                                <th class="px-6 py-4 font-bold">Tanggal</th>
                                <th class="px-6 py-4 font-bold">Status Transaksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-700 divide-y divide-slate-100">

                            @forelse($transaksiTerbaru as $trx)
                                @php
                                    $inisial = strtoupper(substr($trx->anggota->nama, 0, 2));
                                    $warnaBg = 'bg-slate-100 text-slate-600'; // Default warna avatar

                                    // Hitung Status
                                    $tglBatas = \Carbon\Carbon::parse($trx->tgl_batas_kembali);
                                    $hariIni = \Carbon\Carbon::now();
                                    $isTelat = $tglBatas->isPast() && !$tglBatas->isToday();

                                    if($trx->status == 'menunggu_verifikasi'){
                                        $warnaBg = 'bg-amber-100 text-amber-600';
                                        $badge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-amber-50 border border-amber-200 text-amber-700 rounded-lg text-[11px] font-bold"><i class="fa-solid fa-circle-exclamation"></i> Menunggu Verifikasi</span>';
                                    } elseif($trx->status == 'dipinjam' && $isTelat) {
                                        $warnaBg = 'bg-rose-100 text-rose-600';
                                        $badge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-rose-50 border border-rose-200 text-rose-700 rounded-lg text-[11px] font-bold"><i class="fa-solid fa-triangle-exclamation"></i> Terlambat</span>';
                                    } elseif($trx->status == 'dipinjam') {
                                        $warnaBg = 'bg-blue-100 text-blue-600';
                                        $badge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-blue-50 border border-blue-200 text-blue-700 rounded-lg text-[11px] font-bold"><i class="fa-solid fa-spinner animate-spin-slow"></i> Sedang Dipinjam</span>';
                                    } else {
                                        $warnaBg = 'bg-emerald-100 text-emerald-600';
                                        $badge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-lg text-[11px] font-bold"><i class="fa-solid fa-check"></i> Dikembalikan</span>';
                                    }
                                @endphp

                                <tr class="hover:bg-slate-50/80 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full {{ $warnaBg }} flex items-center justify-center font-bold text-xs">{{ $inisial }}</div>
                                            <div>
                                                <div class="font-bold text-slate-800 text-sm">{{ $trx->anggota->nama ?? '-' }}</div>
                                                <div class="text-[11px] font-medium text-slate-500 mt-0.5">{{ $trx->anggota->kelas->nama_kelas ?? '-' }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @foreach($trx->detail as $dt)
                                            <div class="font-semibold text-slate-800 text-sm line-clamp-1">{{ $dt->buku->judul ?? '-' }}</div>
                                            <div class="text-[11px] text-slate-500 mt-0.5 font-mono">{{ $dt->buku->kode_buku ?? '-' }}</div>
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-xs text-slate-600"><span class="text-slate-400 w-12 inline-block">Pinjam:</span> {{ \Carbon\Carbon::parse($trx->tgl_pinjam)->format('d M Y') }}</div>
                                        <div class="text-xs {{ $isTelat && $trx->status != 'dikembalikan' ? 'text-rose-600 font-semibold' : 'text-slate-600' }} mt-1"><span class="text-slate-400 w-12 inline-block">Batas:</span> {{ $tglBatas->format('d M Y') }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $badge !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-inbox text-3xl mb-3 opacity-50"></i>
                                        <p>Belum ada transaksi peminjaman.</p>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 text-center text-xs text-slate-400 font-medium">
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
                <h3 class="text-xl font-bold text-slate-800 mb-2">Keluar Aplikasi?</h3>
                <p class="text-sm text-slate-500 mb-8 font-medium leading-relaxed">
                    Apakah Anda yakin ingin mengakhiri sesi ini?
                </p>
                <div class="flex gap-3 w-full">
                    <button type="button" onclick="closeLogoutModal()" class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl transition-colors text-sm">
                        Batalkan
                    </button>
                    <form action="/login" method="GET" class="flex-1">
                        <button type="submit" id="btnConfirmLogout" class="w-full py-3 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-xl transition-all shadow-md shadow-rose-500/20 text-sm flex items-center justify-center gap-2 group">
                            <span>Ya, Keluar</span>
                            <i class="fa-solid fa-right-from-bracket text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT LOGOUT MODAL -->
    <script>
        const logoutModal = document.getElementById('logoutModal');
        const logoutContent = document.getElementById('logoutModalContent');

        function openLogoutModal() {
            logoutModal.classList.remove('opacity-0', 'pointer-events-none');
            logoutContent.classList.remove('scale-95', 'opacity-0');
            logoutContent.classList.add('scale-100', 'opacity-100');
        }

        function closeLogoutModal() {
            logoutModal.classList.add('opacity-0', 'pointer-events-none');
            logoutContent.classList.remove('scale-100', 'opacity-100');
            logoutContent.classList.add('scale-95', 'opacity-0');
        }

        if(logoutModal) {
            logoutModal.addEventListener('click', function(e) {
                if (e.target === logoutModal) closeLogoutModal();
            });
        }
    </script>

</body>
</html>
