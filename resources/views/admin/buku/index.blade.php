<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - SMARTPERPUS</title>
    <!-- Menghilangkan favicon default -->
    <link rel="icon" href="data:,">
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

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar px-3">
            <ul class="space-y-1.5">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>

                <!-- Data Buku Active -->
                <li>
                    <a href="/admin/buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku
                    </a>
                </li>

                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Scan Peminjaman</a></li>
                <li><a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between"><div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2"></i> Verifikasi Kembali</div><span class="bg-rose-500/10 text-rose-400 border border-rose-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">3</span></a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Data Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Manajemen Data Buku</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
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

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar relative">
<!-- ... existing code ... -->

            <div class="max-w-[1400px] mx-auto space-y-6">

                @if (session('success'))
                    <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded shadow-sm flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-xl"></i>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

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

                    <div class="px-6 py-4 flex flex-col sm:flex-row items-center justify-between bg-white gap-4">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Katalog Buku</h3>
                        </div>
                        <a href="{{ route('admin.buku.create') }}" class="w-full sm:w-auto bg-[#3b5998] hover:bg-[#2d4373] text-white px-4 py-2 rounded flex items-center justify-center transition-colors shadow-sm gap-2 text-sm font-semibold">
                            <i class="fa-solid fa-plus"></i> Tambah Buku Baru
                        </a>
                    </div>

                    <div class="px-6 py-3 border-t border-b border-slate-100 flex flex-col md:flex-row justify-between items-center bg-slate-50/50 gap-4">
                        <div class="text-sm font-semibold text-slate-500 hidden md:block">
                            Gunakan kolom pencarian untuk memfilter data tabel secara instan.
                        </div>
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" placeholder="Cari Judul / Pengarang / Penerbit..." class="w-full bg-white border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Tabel Data -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-200/80 text-slate-800 text-[13px] border-b border-slate-300">
                                    <th class="px-5 py-4 font-bold w-12 text-center">No</th>
                                    <th class="px-5 py-4 font-bold text-center">Cover</th>
                                    <th class="px-5 py-4 font-bold">Judul Buku</th>
                                    <th class="px-5 py-4 font-bold">Pengarang</th>
                                    <th class="px-5 py-4 font-bold">Penerbit</th>
                                    <th class="px-5 py-4 font-bold text-center">Stok</th>
                                    <th class="px-5 py-4 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody" class="text-slate-700 text-[13px] divide-y divide-slate-100">

                                @forelse ($data_buku as $index => $buku)
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">{{ $index + 1 }}</td>
                                    <td class="px-5 py-3 text-center">
                                        <!-- Menampilkan Cover Buku jika ada, jika tidak, tampilkan placeholder/icon -->
                                        @if($buku->cover)
                                            <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover Buku" class="w-10 h-14 object-cover mx-auto rounded shadow-sm border border-slate-200">
                                        @else
                                            <div class="w-10 h-14 bg-slate-100 border border-slate-200 rounded mx-auto flex items-center justify-center text-slate-400 shadow-sm">
                                                <i class="fa-solid fa-image"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-5 py-3">
                                        <div class="font-bold text-slate-800 mb-0.5">{{ $buku->judul }}</div>
                                        <div class="font-mono text-[10px] text-slate-500 uppercase tracking-widest"><i class="fa-solid fa-barcode text-[9px] mr-1"></i> {{ $buku->kode_buku }}</div>
                                    </td>
                                    <td class="px-5 py-3 text-slate-600 font-medium">{{ $buku->pengarang ?? '-' }}</td>
                                    <td class="px-5 py-3 text-slate-600 font-medium">{{ $buku->penerbit ?? '-' }}</td>
                                    <td class="px-5 py-3 text-center text-slate-600 font-medium">
                                        <span class="bg-blue-50 text-blue-600 font-bold px-2 py-1 rounded">{{ $buku->stok }}</span>
                                    </td>
                                    <td class="px-5 py-3">
                                        <div class="flex justify-center gap-1.5">
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('admin.buku.edit', $buku->id) }}" class="w-8 h-8 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm tooltip" title="Edit Buku">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </a>
                                            <!-- Tombol Hapus Panggil Modal -->
                                            <button type="button" onclick="openGlobalDeleteModal('{{ route('admin.buku.destroy', $buku->id) }}', '{{ $buku->judul }}')" class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm tooltip" title="Hapus Buku">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-book-open text-4xl mb-3 opacity-50"></i>
                                        <p>Belum ada data koleksi buku.</p>
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>

                        <!-- Pesan jika data tidak ditemukan -->
                        <div id="noMatchMessage" class="hidden text-center py-12 text-slate-500 font-medium bg-white">
                            <i class="fa-solid fa-box-open text-3xl mb-3 text-slate-300"></i>
                            <p>Data buku tidak ditemukan.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Text -->
            <div class="mt-6 text-center text-xs text-slate-400 font-medium">
                &copy; 2026 SMARTPERPUS System. All rights reserved.
            </div>

        </main>
    </div>

    <!-- MODAL HAPUS (KUSTOM) -->
    <div id="globalDeleteModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="globalDeleteModalContent" class="bg-white rounded-2xl shadow-2xl w-full max-w-sm p-6 sm:p-8 transform scale-95 opacity-0 transition-all duration-300 m-4">
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center mb-5 shadow-[0_0_20px_rgba(244,63,94,0.15)] relative">
                    <i class="fa-solid fa-trash-can text-3xl relative z-10"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Hapus Data Buku?</h3>
                <p class="text-sm text-slate-500 mb-8 font-medium">Apakah Anda yakin menghapus <strong id="globalDeleteName" class="text-slate-800"></strong>?</p>
                <div class="flex gap-3 w-full">
                    <button type="button" onclick="closeGlobalDeleteModal()" class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl text-sm transition-colors">Batal</button>
                    <form id="globalDeleteForm" method="POST" class="flex-1">
                        @csrf @method('DELETE')
                        <button type="submit" class="w-full py-3 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-xl shadow-md text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const deleteModal = document.getElementById('globalDeleteModal');
        const deleteContent = document.getElementById('globalDeleteModalContent');
        const deleteForm = document.getElementById('globalDeleteForm');
        const deleteNameLabel = document.getElementById('globalDeleteName');

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
    </script>
    <!-- Panggil File Eksternal JS Search -->
    <script src="{{ asset('js/search-buku.js') }}"></script>
</body>
</html>
