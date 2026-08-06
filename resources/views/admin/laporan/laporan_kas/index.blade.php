<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kas Denda - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
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
        select { -webkit-appearance: none; appearance: none; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-rose-200 selection:text-rose-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20 hidden md:flex">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Scan Peminjaman</a></li>
                <li><a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between"><div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2"></i> Verifikasi Kembali</div></a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku</a></li>

                <!-- Laporan Kas Active (Tema Rose) -->
                <li>
                    <a href="/admin/laporan/kas" class="flex items-center px-4 py-3 bg-rose-600/10 text-rose-400 border border-rose-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2"></i> Laporan Kas (Denda)
                    </a>
                </li>

                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0 w-full">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-slate-500 hover:text-rose-600"><i class="fa-solid fa-bars text-xl"></i></button>
                <div>
                    <div class="hidden md:flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                        <span class="hover:text-rose-600 cursor-pointer transition-colors">Laporan</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-slate-800">Laporan Kas</span>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight">Laporan Kas & Denda</h2>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-rose-200 transition-all object-cover">
                    </div>
                    <div class="hidden sm:block text-right">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-rose-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-4 md:p-6 lg:p-8 custom-scrollbar w-full relative">

            <div class="max-w-[1400px] mx-auto">

                <!-- Grid Ringkasan Kas -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 w-full">
                    <!-- Kas Masuk Bulan Ini -->
                    <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-md p-6 text-white relative overflow-hidden group">
                        <i class="fa-solid fa-vault absolute -right-4 -bottom-4 text-6xl opacity-20 rotate-12"></i>
                        <div class="relative z-10">
                            <p class="text-emerald-100 font-semibold mb-1 text-sm uppercase tracking-wider">Kas Masuk Bulan Ini</p>
                            <h3 class="text-3xl lg:text-4xl font-black mb-2 tracking-tight">Rp {{ number_format($kasBulanIni, 0, ',', '.') }}</h3>
                            <p class="text-xs text-emerald-100 font-medium">Bulan berjalan ({{ \Carbon\Carbon::now()->translatedFormat('F Y') }})</p>
                        </div>
                    </div>

                    <!-- Total Transaksi -->
                    <div class="bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl shadow-md p-6 text-white relative overflow-hidden group">
                        <i class="fa-solid fa-money-bill-transfer absolute -right-4 -bottom-4 text-6xl opacity-20 rotate-12"></i>
                        <div class="relative z-10">
                            <p class="text-rose-100 font-semibold mb-1 text-sm uppercase tracking-wider">Total Kas Tahun Ini</p>
                            <h3 class="text-3xl lg:text-4xl font-black mb-2 tracking-tight">Rp {{ number_format($kasTahunIni, 0, ',', '.') }}</h3>
                            <p class="text-xs text-rose-100 font-medium">Tahun berjalan ({{ \Carbon\Carbon::now()->year }})</p>
                        </div>
                    </div>

                    <!-- Jumlah Pelanggaran -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 relative overflow-hidden group flex items-center justify-between">
                        <div>
                            <p class="text-slate-500 font-bold mb-1 text-sm">Total Pelanggaran</p>
                            <h3 class="text-3xl font-black text-slate-800">{{ $totalTransaksi }} <span class="text-base font-bold text-slate-400">Kasus</span></h3>
                            <p class="text-xs text-slate-400 mt-1 font-medium">Siswa terkena denda keterlambatan</p>
                        </div>
                        <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-amber-50 text-amber-500 border border-amber-100 flex items-center justify-center text-xl md:text-2xl shrink-0">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                    </div>
                </div>

                <!-- Form Filter Cetak -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col mb-6">
                    <div class="p-4 bg-slate-50/50 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <h3 class="font-bold text-slate-800 flex items-center gap-2"><i class="fa-solid fa-print text-slate-400"></i> Cetak Rekapitulasi</h3>
                        <div class="flex gap-2 w-full sm:w-auto">
                            <!-- Input Search Tabel -->
                            <div class="relative flex-1 sm:w-64">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                                <input type="text" id="searchInput" placeholder="Cari nama anggota..." class="w-full bg-white border border-slate-200 rounded-lg py-2 pl-9 pr-3 text-sm outline-none shadow-sm focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition-all">
                            </div>
                            <button class="bg-[#198754] hover:bg-[#157347] text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-sm transition-colors flex items-center gap-2 shrink-0">
                                <i class="fa-solid fa-file-excel"></i> Excel
                            </button>
                        </div>
                    </div>
                </div>

                <!-- TABEL DATA DENDA -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden w-full">
                    <div class="px-6 py-4 border-b border-slate-100 bg-white">
                        <h3 class="font-bold text-slate-800 text-lg">Rincian Riwayat Pembayaran Denda</h3>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">Seluruh daftar denda di bawah ini diasumsikan Lunas saat buku dikembalikan.</p>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse min-w-[700px]">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-100">
                                    <th class="px-6 py-4 font-bold text-center w-12">No</th>
                                    <th class="px-6 py-4 font-bold">Tgl Bayar</th>
                                    <th class="px-6 py-4 font-bold">Data Siswa / Anggota</th>
                                    <th class="px-6 py-4 font-bold">Keterangan Buku</th>
                                    <th class="px-6 py-4 font-bold text-right">Nominal Denda</th>
                                    <th class="px-6 py-4 font-bold text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 divide-y divide-slate-100" id="tableBody">

                                @forelse ($data_kas as $index => $kas)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500 text-sm">
                                        {{ ($data_kas->currentPage() - 1) * $data_kas->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium">
                                        {{ \Carbon\Carbon::parse($kas->created_at)->translatedFormat('d M Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 text-sm mb-0.5 pencarian-data">{{ $kas->peminjaman->anggota->nama ?? '-' }}</div>
                                        <div class="text-[11px] text-slate-500 font-medium pencarian-data">{{ $kas->peminjaman->anggota->kelas->nama_kelas ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($kas->peminjaman && $kas->peminjaman->detail)
                                            @foreach($kas->peminjaman->detail as $detail)
                                                <div class="font-semibold text-slate-700 text-sm mb-0.5 line-clamp-1 pencarian-data">{{ $detail->buku->judul ?? '-' }}</div>
                                                <div class="text-[10px] text-slate-400 font-mono">{{ $detail->buku->kode_buku ?? '-' }}</div>
                                            @endforeach
                                        @else
                                            <span class="text-slate-400 italic">Data buku terhapus</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="text-sm font-bold text-slate-800 whitespace-nowrap">Rp {{ number_format($kas->jumlah_denda, 0, ',', '.') }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-600 border border-emerald-200 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider whitespace-nowrap">
                                            <i class="fa-solid fa-check"></i> Lunas
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-vault text-4xl mb-3 opacity-50"></i>
                                        <p>Belum ada data denda / kas masuk.</p>
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div id="noMatchMessage" class="hidden text-center py-8 text-slate-500 font-medium bg-white">
                            <p>Data anggota tidak ditemukan.</p>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-slate-100 bg-white">
                        {{ $data_kas->links('pagination::tailwind') }}
                    </div>

                </div>

            </div>
        </main>
    </div>

    <!-- SCRIPT PENCARIAN -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll("#tableBody tr");
            const noMatchMessage = document.getElementById("noMatchMessage");

            if(searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = searchInput.value.toLowerCase();
                    let matchFound = false;

                    tableRows.forEach(row => {
                        // Abaikan baris "Data kosong"
                        if(row.children.length === 1) return;

                        const searchableCells = row.querySelectorAll(".pencarian-data");
                        let rowHasMatch = false;

                        searchableCells.forEach(cell => {
                            if (cell.textContent.toLowerCase().includes(filterValue)) {
                                rowHasMatch = true;
                            }
                        });

                        if (rowHasMatch) {
                            row.style.display = "";
                            matchFound = true;
                        }
                        else {
                            row.style.display = "none";
                        }
                    });

                    if (!matchFound && filterValue !== "") { noMatchMessage.classList.remove("hidden"); }
                    else { noMatchMessage.classList.add("hidden"); }
                });
            }
        });
    </script>
</body>
</html>
