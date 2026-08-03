<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - SMARTPERPUS</title>
    <!-- Menghilangkan favicon default -->
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
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR LENGKAP -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>

                <li>
                    <a href="{{ route('admin.buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.ddc.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.sumber_buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.jenis_buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kategori_buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku
                    </a>
                </li>
                <!-- Data Anggota Active -->
                <li>
                    <a href="{{ route('admin.anggota.index') }}" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kelas.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
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

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER ATAS -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Data Anggota</h2>
                <p class="text-sm text-slate-500 mt-1">Kelola data siswa dan riwayat peminjaman perpustakaan.</p>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
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

            <div class="max-w-7xl mx-auto">

                <!-- Notifikasi Pesan Sukses -->
                @if (session('success'))
                    <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded shadow-sm flex items-center gap-3 mb-6">
                        <i class="fa-solid fa-circle-check text-xl"></i>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Toolbar Area -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">
                    <div class="flex items-center gap-2 bg-white px-4 py-2.5 rounded-lg border border-slate-200 shadow-sm shrink-0">
                        <i class="fa-solid fa-database text-slate-700"></i>
                        <span class="font-bold text-slate-800 text-sm">Daftar Anggota</span>
                    </div>

                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <div class="relative w-full md:w-64">
                            <!-- Input Search -->
                            <input type="text" id="searchInput" placeholder="Cari NISN atau Nama..." class="w-full bg-white border border-slate-200 rounded-lg py-2.5 px-4 pl-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        </div>

                        <!-- Tombol Tambah Data -->
                        <a href="{{ route('admin.anggota.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg shadow-sm text-sm font-semibold transition-colors flex items-center gap-2 shrink-0">
                            <i class="fa-solid fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>

                <!-- TABLE AREA -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100 text-slate-700 text-sm border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold w-16 text-center">No</th>
                                    <th class="px-6 py-4 font-bold">NISN / NIP</th>
                                    <th class="px-6 py-4 font-bold">Nama Anggota</th>
                                    <th class="px-6 py-4 font-bold">Jenis Kelamin</th>
                                    <th class="px-6 py-4 font-bold">Kelas</th>
                                    <th class="px-6 py-4 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody" class="text-slate-700 text-sm">

                                @forelse ($data_anggota as $index => $anggota)
                                <tr class="hover:bg-slate-50 transition-colors border-b border-slate-100 table-row-item">
                                    <td class="px-6 py-4 text-center text-slate-500 font-medium">{{ $index + 1 }}</td>

                                    <!-- Class pencarian-data digunakan oleh Javascript -->
                                    <td class="px-6 py-4 font-mono text-slate-600 font-semibold pencarian-data">{{ $anggota->nisn }}</td>
                                    <td class="px-6 py-4 font-bold text-slate-800 pencarian-data">{{ $anggota->nama }}</td>

                                    <td class="px-6 py-4 text-slate-600">{{ $anggota->jenis_kelamin }}</td>

                                    <td class="px-6 py-4 text-slate-600">
                                        <span class="bg-blue-50 text-blue-600 px-2 py-1 rounded text-xs font-semibold border border-blue-100">
                                            {{ $anggota->kelas->nama_kelas ?? 'Tanpa Kelas' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-1.5">

                                            <!-- Tombol Lihat Detail (Biru - Ikon Mata) -->
                                            <a href="{{ route('admin.anggota.show', $anggota->id) }}" class="w-8 h-8 rounded bg-cyan-500 hover:bg-cyan-600 text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Lihat Detail">
                                                <i class="fa-solid fa-eye text-[13px]"></i>
                                            </a>

                                            <!-- Tombol Edit (Kuning - Ikon Pensil) -->
                                            <a href="{{ route('admin.anggota.edit', $anggota->id) }}" class="w-8 h-8 rounded bg-amber-500 hover:bg-amber-600 text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Edit Data">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </a>

                                            <!-- Tombol Hapus (Merah - Memicu Modal Kustom) -->
                                            <button type="button" onclick="openGlobalDeleteModal('{{ route('admin.anggota.destroy', $anggota->id) }}', '{{ $anggota->nama }}')" class="w-8 h-8 rounded bg-rose-500 hover:bg-rose-600 text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Hapus Data">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center justify-center text-slate-400">
                                            <i class="fa-solid fa-users-slash text-4xl mb-3"></i>
                                            <p class="font-medium text-slate-500">Belum ada data anggota yang terdaftar.</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>

                        <!-- Pesan Jika Search Tidak Ketemu -->
                        <div id="noMatchMessage" class="hidden text-center py-12 text-slate-500 font-medium bg-white">
                            <i class="fa-solid fa-user-xmark text-4xl mb-3 text-slate-300"></i>
                            <p>Data anggota tidak ditemukan.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4 pb-8 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- MODAL HAPUS KUSTOM (YES/NO POP-UP) -->
    <div id="globalDeleteModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="globalDeleteModalContent" class="bg-white rounded-2xl shadow-2xl w-full max-w-sm p-6 sm:p-8 transform scale-95 opacity-0 transition-all duration-300 m-4">
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center mb-5 shadow-[0_0_20px_rgba(244,63,94,0.15)] relative">
                    <div class="absolute inset-0 border-2 border-rose-200 rounded-full animate-ping opacity-20"></div>
                    <i class="fa-solid fa-trash-can text-3xl relative z-10"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Hapus Data Anggota?</h3>
                <p class="text-sm text-slate-500 mb-8 font-medium leading-relaxed">
                    Apakah Anda yakin ingin menghapus <strong id="globalDeleteName" class="text-slate-800"></strong>? Data ini akan dihapus permanen.
                </p>
                <div class="flex gap-3 w-full">
                    <button type="button" onclick="closeGlobalDeleteModal()" class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl transition-colors text-sm">
                        Batal
                    </button>
                    <!-- Form eksekusi delete akan disuntik URL-nya lewat JS -->
                    <form id="globalDeleteForm" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="btnConfirmGlobalDelete" class="w-full py-3 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-xl transition-all shadow-md shadow-rose-500/20 text-sm flex items-center justify-center gap-2 group">
                            Ya, Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT UNTUK MODAL HAPUS & PENCARIAN DATA -->
    <script>
        // --- 1. SCRIPT MODAL HAPUS ---
        const deleteModal = document.getElementById('globalDeleteModal');
        const deleteContent = document.getElementById('globalDeleteModalContent');
        const deleteForm = document.getElementById('globalDeleteForm');
        const deleteNameLabel = document.getElementById('globalDeleteName');
        const btnConfirmDelete = document.getElementById('btnConfirmGlobalDelete');

        function openGlobalDeleteModal(actionUrl, itemName) {
            deleteForm.action = actionUrl;
            deleteNameLabel.textContent = itemName;
            deleteModal.classList.remove('opacity-0', 'pointer-events-none');
            deleteContent.classList.remove('scale-95', 'opacity-0');
            deleteContent.classList.add('scale-100', 'opacity-100');
        }

        function closeGlobalDeleteModal() {
            deleteModal.classList.add('opacity-0', 'pointer-events-none');
            deleteContent.classList.remove('scale-100', 'opacity-100');
            deleteContent.classList.add('scale-95', 'opacity-0');
        }

        deleteModal.addEventListener('click', function(e) {
            if (e.target === deleteModal) closeGlobalDeleteModal();
        });

        deleteForm.addEventListener('submit', function() {
            btnConfirmDelete.innerHTML = '<i class="fa-solid fa-circle-notch animate-spin"></i> Menghapus...';
            btnConfirmDelete.classList.add('opacity-80', 'cursor-not-allowed');
        });

        // --- 2. SCRIPT PENCARIAN DATA INSTAN ---
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll(".table-row-item");
            const noMatchMessage = document.getElementById("noMatchMessage");

            if(searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = searchInput.value.toLowerCase();
                    let matchFound = false;

                    tableRows.forEach(row => {
                        // Ambil kolom NISN dan Nama
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

                    if (!matchFound && filterValue !== "") {
                        noMatchMessage.classList.remove("hidden");
                    } else {
                        noMatchMessage.classList.add("hidden");
                    }
                });
            }
        });
    </script>
</body>
</html>
