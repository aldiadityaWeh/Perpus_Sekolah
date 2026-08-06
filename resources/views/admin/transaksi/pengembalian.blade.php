<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Pengembalian - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20 hidden md:flex">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar px-3">
            <ul class="space-y-1.5">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard</a></li>
                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-list-ol w-6 text-center mr-2"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-bookmark w-6 text-center mr-2"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-tags w-6 text-center mr-2"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-school w-6 text-center mr-2"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Scan Peminjaman</a></li>

                <!-- Pengembalian Active -->
                <li>
                    <a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all flex justify-between">
                        <div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2"></i> Verifikasi Kembali</div>
                        <span class="bg-rose-500/10 text-rose-400 border border-rose-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">{{ $data_peminjaman->count() }}</span>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-address-card w-6 text-center mr-2"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2"></i> Laporan Kas</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Verifikasi Pengembalian</h2>
                <p class="text-sm text-slate-500 mt-1 font-medium">Terima buku kembali dan proses denda otomatis.</p>
            </div>
            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" class="w-10 h-10 rounded-full ring-2 ring-slate-100 object-cover">
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6 custom-scrollbar w-full">

            <div class="max-w-[1400px] mx-auto space-y-6">

                @if (session('success'))
                    <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded shadow-sm flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-xl"></i> <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Silakan klik tombol <strong>Verifikasi</strong> untuk menyelesaikan transaksi peminjaman. Buku yang melewati batas kembali akan otomatis dihitung denda keterlambatannya (Rp 1.000/hari).</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden w-full">

                    <div class="px-6 py-4 flex items-center justify-between bg-white border-b border-slate-100">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-clipboard-list text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Antrean Pengembalian Buku</h3>
                        </div>
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" placeholder="Cari Anggota / Buku..." class="w-full bg-slate-50 border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                        </div>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse min-w-[800px]">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold text-center w-12">No</th>
                                    <th class="px-6 py-4 font-bold">Data Peminjam</th>
                                    <th class="px-6 py-4 font-bold">Judul Buku</th>
                                    <th class="px-6 py-4 font-bold">Tgl. Batas</th>
                                    <th class="px-6 py-4 font-bold">Status & Denda</th>
                                    <th class="px-6 py-4 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody" class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                @forelse ($data_peminjaman as $index => $trx)
                                    @php
                                        // Logika Perhitungan Hari & Status
                                        $tglBatas = \Carbon\Carbon::parse($trx->tgl_batas_kembali);
                                        $hariIni = \Carbon\Carbon::now();
                                        $selisih = $tglBatas->diffInDays($hariIni, false); // false agar bisa dapet minus (belum telat)

                                        // Penentuan Warna Row
                                        if ($selisih > 0) {
                                            $rowColor = 'bg-rose-50/30 hover:bg-rose-50'; // Telat = Merah
                                            $statusBadge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-rose-100 border border-rose-200 text-rose-700 rounded text-xs font-bold whitespace-nowrap"><i class="fa-solid fa-circle-exclamation text-[10px]"></i> Denda Rp ' . number_format(ceil($selisih) * 1000, 0, ',', '.') . '</span>';
                                            $tglTeks = '<div class="text-rose-600 font-semibold text-sm">'. $tglBatas->format('d M Y') .'</div><div class="text-[10px] text-rose-500 font-medium mt-0.5">Telat '. ceil($selisih) .' Hari</div>';
                                        } else if ($selisih == 0) {
                                            $rowColor = 'bg-amber-50/30 hover:bg-amber-50'; // Hari ini = Kuning
                                            $statusBadge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-amber-100 border border-amber-200 text-amber-700 rounded text-xs font-bold whitespace-nowrap"><i class="fa-solid fa-clock text-[10px]"></i> Hari Ini Terakhir</span>';
                                            $tglTeks = '<div class="text-amber-600 font-semibold text-sm">'. $tglBatas->format('d M Y') .'</div><div class="text-[10px] text-amber-600 font-bold mt-0.5">Harus Kembali Hari Ini</div>';
                                        } else {
                                            $rowColor = 'hover:bg-slate-50'; // Masih Aman = Normal
                                            $statusBadge = '<span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-blue-50 border border-blue-200 text-blue-700 rounded text-xs font-bold whitespace-nowrap"><i class="fa-solid fa-book-open-reader text-[10px]"></i> Dipinjam</span>';
                                            $tglTeks = '<div class="text-slate-600 font-semibold text-sm">'. $tglBatas->format('d M Y') .'</div><div class="text-[10px] text-slate-400 font-medium mt-0.5">Aman ('. abs(floor($selisih)) .' hari lagi)</div>';
                                        }
                                    @endphp

                                <tr class="{{ $rowColor }} transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 text-sm mb-0.5 search-target">{{ $trx->anggota->nama ?? '-' }}</div>
                                        <div class="text-[11px] text-slate-500 font-medium search-target">{{ $trx->anggota->kelas->nama_kelas ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @foreach ($trx->detail as $dt)
                                            <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1 search-target">{{ $dt->buku->judul ?? '-' }}</div>
                                            <div class="text-[11px] text-slate-400 font-mono">{{ $dt->buku->kode_buku ?? '-' }}</div>
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $tglTeks !!}
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $statusBadge !!}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="/admin/transaksi/pengembalian/{{ $trx->id }}" method="POST" onsubmit="return confirm('Verifikasi pengembalian buku ini?');">
                                            @csrf
                                            <button type="submit" class="bg-[#198754] hover:bg-[#157347] text-white px-4 py-1.5 rounded shadow-sm text-xs font-semibold transition-colors w-full whitespace-nowrap">
                                                <i class="fa-solid fa-check"></i> Verifikasi
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-box-open text-3xl mb-3 opacity-50"></i>
                                        <p>Tidak ada buku yang sedang dipinjam saat ini.</p>
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left w-full">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script Search Instan -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll("tbody tr");

            if(searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = this.value.toLowerCase();

                    tableRows.forEach(row => {
                        // Jika baris adalah pesan "Tidak ada buku", abaikan
                        if(row.children.length === 1) return;

                        const searchableCells = row.querySelectorAll(".search-target");
                        let rowHasMatch = false;

                        searchableCells.forEach(cell => {
                            if (cell.textContent.toLowerCase().includes(filterValue)) {
                                rowHasMatch = true;
                            }
                        });

                        if (rowHasMatch) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>
