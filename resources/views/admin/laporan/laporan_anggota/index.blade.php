<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Anggota - SMARTPERPUS</title>
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
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

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
                <!-- Laporan Anggota Active -->
                <li>
                    <a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-address-card w-6 text-center mr-2"></i> Laporan Anggota
                    </a>
                </li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative bg-[#f4f7f6]">

        <!-- HEADER -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-slate-500 hover:text-blue-600"><i class="fa-solid fa-bars text-xl"></i></button>
                <div>
                    <div class="hidden md:flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                        <span class="hover:text-blue-600 cursor-pointer transition-colors">Laporan</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-slate-800">Laporan Anggota</span>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight leading-none">Laporan & Kartu Anggota</h2>
                </div>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
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

                <!-- Info Banner -->
                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Berikut ini adalah data rekapitulasi <strong>ANGGOTA PERPUSTAKAAN</strong>. Anda dapat mencetak laporan data maupun mencetak desain kartu perpustakaan siswa dari sini secara massal.</p>
                </div>

                <!-- Grid Cetak Card -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <!-- Card 1: Cetak Kartu Anggota -->
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-id-card text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Kartu Anggota</h3>
                            </div>
                            <button class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Kartu">
                                <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">
                            <!-- Form Cetak Kartu (Belum Aktif) -->
                            <form action="#" method="GET">
                                <div class="relative w-full mb-4">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Kriteria Cetak Kartu</label>
                                    <select id="filterKriteriaKartu" onchange="toggleSubFilterKartu()" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                        <option value="" disabled selected>- Pilih Berdasarkan -</option>
                                        <option value="semua">Semua Anggota</option>
                                        <option value="kelas">Pilih Per Kelas</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div id="subFilterKelasKartu" class="relative w-full hidden mb-4">
                                    <select class="w-full bg-blue-50/50 border border-blue-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                        <option value="" disabled selected>- Pilih Kelas -</option>
                                        @foreach($kelas_list as $kls)
                                            <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div class="flex gap-2 justify-end mt-2">
                                    <button type="submit" class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-print"></i> Generate Kartu
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Card 2: Cetak Laporan Anggota -->
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-file-lines text-slate-700 text-lg"></i>
                                <h3 class="font-bold text-slate-800">Cetak Laporan Data Anggota</h3>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">

                            <form action="/admin/laporan/anggota" method="GET">
                                <div class="relative w-full mb-4">
                                    <label class="text-xs font-semibold text-slate-500 mb-1.5 block">Kriteria Laporan</label>
                                    <select id="filterKriteriaLaporan" name="filter_laporan" onchange="toggleSubFilterLaporan()" class="w-full bg-white border border-slate-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                        <option value="" disabled {{ !request('filter_laporan') ? 'selected' : '' }}>- Pilih Berdasarkan -</option>
                                        <option value="semua" {{ request('filter_laporan') == 'semua' ? 'selected' : '' }}>Semua Anggota</option>
                                        <option value="kelas" {{ request('filter_laporan') == 'kelas' ? 'selected' : '' }}>Pilih Per Kelas</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 top-[22px] flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div id="subFilterKelasLaporan" class="relative w-full mb-4 {{ request('filter_laporan') == 'kelas' ? '' : 'hidden' }}">
                                    <select name="kelas_laporan_id" class="w-full bg-blue-50/50 border border-blue-300 rounded-lg py-2.5 px-4 text-sm text-slate-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 cursor-pointer shadow-sm">
                                        <option value="" disabled selected>- Pilih Kelas -</option>
                                        @foreach($kelas_list as $kls)
                                            <option value="{{ $kls->id }}" {{ request('kelas_laporan_id') == $kls->id ? 'selected' : '' }}>{{ $kls->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-2 mt-2 justify-end">
                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-filter"></i> Filter Tabel
                                    </button>
                                    <button type="button" class="bg-[#dc3545] hover:bg-[#c82333] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-file-pdf"></i> PDF
                                    </button>
                                    <button type="button" class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-file-excel"></i> Excel
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

                <!-- MAIN CARD TABEL -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden mt-6">

                    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center justify-between border-b border-slate-100 bg-white gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Rekapitulasi Anggota</h3>
                        </div>

                        <!-- Search Bar -->
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" placeholder="Cari NISN / Nama / Kelas..." class="w-full bg-slate-50 border border-slate-300 rounded-lg py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Area Tabel -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold text-center w-16">No</th>
                                    <th class="px-6 py-4 font-bold">NISN</th>
                                    <th class="px-6 py-4 font-bold">Nama Anggota</th>
                                    <th class="px-6 py-4 font-bold">Jenis Kelamin</th>
                                    <th class="px-6 py-4 font-bold">Kelas</th>
                                    <th class="px-6 py-4 font-bold text-center w-28">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100" id="tableBody">

                                @forelse($data_anggota as $index => $anggota)
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">
                                        {{ ($data_anggota->currentPage() - 1) * $data_anggota->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 font-mono text-slate-600 pencarian-data">{{ $anggota->nisn }}</td>
                                    <td class="px-6 py-4 font-bold text-slate-800 pencarian-data">{{ $anggota->nama }}</td>
                                    <td class="px-6 py-4 text-slate-600">{{ $anggota->jenis_kelamin }}</td>
                                    <td class="px-6 py-4 text-slate-600 pencarian-data">{{ $anggota->kelas->nama_kelas ?? '-' }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('admin.anggota.show', $anggota->id) }}" class="inline-block bg-[#0dcaf0] hover:bg-[#0bacce] text-white w-9 h-8 rounded flex items-center justify-center mx-auto transition-colors shadow-sm" title="Cetak Kartu Member">
                                            <i class="fa-solid fa-id-badge"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-users text-4xl mb-3 opacity-50"></i>
                                        <p>Tidak ada data anggota yang sesuai dengan kriteria.</p>
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
                    <div class="px-6 py-4 border-t border-slate-100 bg-white flex justify-center">
                        {{ $data_anggota->links('pagination::tailwind') }}
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script Interaksi Form Dropdown -->
    <script>
        // Fungsi untuk filter Cetak Kartu Anggota
        function toggleSubFilterKartu() {
            const kriteria = document.getElementById('filterKriteriaKartu').value;
            const subFilterKelas = document.getElementById('subFilterKelasKartu');

            if (kriteria === 'kelas') {
                subFilterKelas.classList.remove('hidden');
            } else {
                subFilterKelas.classList.add('hidden');
            }
        }

        // Fungsi untuk filter Cetak Laporan Anggota
        function toggleSubFilterLaporan() {
            const kriteria = document.getElementById('filterKriteriaLaporan').value;
            const subFilterKelas = document.getElementById('subFilterKelasLaporan');

            if (kriteria === 'kelas') {
                subFilterKelas.classList.remove('hidden');
            } else {
                subFilterKelas.classList.add('hidden');
            }
        }

        // Pencarian Instan Tabel
        document.addEventListener('DOMContentLoaded', function() {
            toggleSubFilterLaporan();

            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll("#tableBody tr");
            const noMatchMessage = document.getElementById("noMatchMessage");

            if(searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = searchInput.value.toLowerCase();
                    let matchFound = false;

                    tableRows.forEach(row => {
                        if(row.children.length === 1) return; // Abaikan baris "Data Kosong"

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
                        } else {
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
