<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Buku - SMARTPERPUS</title>
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
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-amber-200 selection:text-amber-900">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>
        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar px-3">
            <ul class="space-y-1.5">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2"></i> Sumber Buku</a></li>
                <!-- Jenis Buku Active (Warna Amber karena mode Edit) -->
                <li>
                    <a href="/admin/jenis-buku" class="flex items-center px-4 py-3 bg-amber-600/10 text-amber-500 border border-amber-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-bookmark w-6 text-center mr-2"></i> Jenis Buku
                    </a>
                </li>
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
                    <span class="hover:text-blue-600 cursor-pointer">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="/admin/jenis-buku" class="hover:text-blue-600">Jenis Buku</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Edit Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Edit Jenis Buku</h2>
            </div>

            <!-- Profil User Kanan Atas -->
            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-amber-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-amber-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-8 custom-scrollbar">
            <div class="max-w-4xl mx-auto space-y-5">

                @if ($errors->any())
                    <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-pen text-amber-500 text-lg"></i>
                        <h3 class="font-bold text-slate-800 text-base">Ubah Data Jenis Buku</h3>
                    </div>

                    <form action="/admin/jenis-buku/{{ $jenis->id }}" method="POST" class="p-6 md:p-8">
                        @csrf @method('PUT')
                        <div class="space-y-6 max-w-3xl">
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Kode Jenis <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-3">
                                    <input type="text" name="kode_jenis" value="{{ old('kode_jenis', $jenis->kode_jenis) }}" class="w-full bg-slate-50 border border-slate-200 rounded py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500 uppercase font-mono" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Nama Jenis <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-3">
                                    <input type="text" name="nama_jenis" value="{{ old('nama_jenis', $jenis->nama_jenis) }}" class="w-full bg-slate-50 border border-slate-200 rounded py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-amber-500" required>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 pt-8 border-t border-slate-100 mt-8 max-w-3xl">
                            <div class="hidden md:block w-1/4"></div>
                            <div class="w-full flex gap-3">
                                <button type="submit" class="bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 px-6 py-2.5 rounded shadow-sm font-bold text-sm flex items-center justify-center gap-2"><i class="fa-solid fa-floppy-disk"></i> Update Data</button>
                                <a href="/admin/jenis-buku" class="bg-[#212529] hover:bg-[#1c1f23] text-white px-6 py-2.5 rounded shadow-sm font-medium text-sm flex items-center justify-center gap-2"><i class="fa-solid fa-xmark"></i> Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
