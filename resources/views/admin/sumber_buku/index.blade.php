<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sumber Buku - SMARTPERPUS</title>
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
<body class="bg-[#f8f9fc] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

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

                <!-- Sumber Buku Active -->
                <li>
                    <a href="/admin/sumber-buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-boxes-packing w-6 text-center mr-2"></i> Sumber Buku
                    </a>
                </li>

                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman</a></li>
                <li><a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between"><div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali</div></a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota</a></li>
                <li><a href="/admin/laporan/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Laporan Buku</a></li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <!-- CONTENT UTAMA -->
    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative bg-[#f4f7f6]">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Sumber Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Manajemen Sumber Buku</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
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

                @if (session('success'))
                    <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded shadow-sm flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-xl"></i>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Berikut ini adalah data <strong>SUMBER BUKU</strong> yang menunjukkan asal-usul koleksi perpustakaan Anda.</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center justify-between bg-white border-b border-slate-100 gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Daftar Sumber Buku</h3>
                        </div>
                        <a href="/admin/sumber-buku/create" class="bg-[#3b5998] hover:bg-[#2d4373] text-white px-4 py-2 rounded flex items-center justify-center transition-colors shadow-sm text-sm font-medium gap-2">
                            <i class="fa-solid fa-plus"></i> Tambah Data
                        </a>
                    </div>

                    <div class="px-6 py-4 bg-slate-50/50 flex justify-end border-b border-slate-100/50">
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" placeholder="Cari kode / nama sumber buku..." class="w-full bg-white border border-slate-300 rounded py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold w-16 text-center">No</th>
                                    <th class="px-6 py-4 font-bold w-48">Kode Sumber Buku</th>
                                    <th class="px-6 py-4 font-bold">Nama Sumber Buku</th>
                                    <th class="px-6 py-4 font-bold w-32 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100" id="tableBody">
                                @forelse ($data_sumber as $index => $item)
                                <tr class="hover:bg-slate-50 transition-colors group table-row-item">
                                    <td class="px-6 py-4 font-medium text-slate-500 text-center">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 font-mono font-bold text-slate-800 pencarian-data">{{ $item->kode_sumber }}</td>
                                    <td class="px-6 py-4 text-slate-700 font-medium pencarian-data">{{ $item->nama_sumber }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-1.5">
                                            <a href="/admin/sumber-buku/{{ $item->id }}/edit" class="w-8 h-8 rounded bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 flex items-center justify-center transition-colors shadow-sm" title="Edit Data">
                                                <i class="fa-solid fa-pen-to-square text-[13px]"></i>
                                            </a>
                                            <button type="button" onclick="openGlobalDeleteModal('/admin/sumber-buku/{{ $item->id }}', '{{ $item->nama_sumber }}')" class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center transition-colors shadow-sm" title="Hapus Data">
                                                <i class="fa-solid fa-trash-can text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-boxes-packing text-4xl mb-3 opacity-50"></i>
                                        <p>Belum ada data sumber buku.</p>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div id="noMatchMessage" class="hidden text-center py-8 text-slate-500 font-medium bg-white">
                            <p>Data sumber buku tidak ditemukan.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>
            </div>
        </main>
    </div>

    <!-- MODAL HAPUS -->
    <div id="globalDeleteModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="globalDeleteModalContent" class="bg-white rounded-2xl shadow-2xl w-full max-w-sm p-6 sm:p-8 transform scale-95 opacity-0 transition-all duration-300 m-4">
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center mb-5 shadow-[0_0_20px_rgba(244,63,94,0.15)] relative">
                    <i class="fa-solid fa-trash-can text-3xl relative z-10"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Hapus Data?</h3>
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

        // Search Input Logic
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const noMatchMessage = document.getElementById("noMatchMessage");

            if (searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = this.value.toLowerCase();
                    let matchFound = false;

                    document.querySelectorAll(".table-row-item").forEach(row => {
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

                    if (noMatchMessage) {
                        if (!matchFound && filterValue !== "") {
                            noMatchMessage.classList.remove("hidden");
                        } else {
                            noMatchMessage.classList.add("hidden");
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>
