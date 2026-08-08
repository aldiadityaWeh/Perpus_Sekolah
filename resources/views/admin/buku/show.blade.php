<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - SMARTPERPUS</title>
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

    <!-- SIDEBAR RINGKAS -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <i class="fa-solid fa-book-open-reader text-blue-400 text-2xl mr-3 drop-shadow-md"></i>
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>
       <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar px-3">
            <ul class="space-y-1.5">
                <!-- Ganti route() dengan URL langsung /admin/dashboard -->
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard</a></li>
                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <!-- Data Buku Active -->
                <li>
                    <a href="{{ route('admin.buku.index') }}" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book w-6 text-center mr-2"></i> Data Buku
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="{{ route('admin.buku.index') }}" class="hover:text-blue-600 cursor-pointer">Data Buku</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Detail Buku</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Detail Koleksi Buku</h2>
            </div>
            <div class="flex items-center gap-4 md:gap-6">
                <a href="{{ route('admin.buku.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-lg font-bold text-sm transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-8 custom-scrollbar bg-slate-50">
            <div class="max-w-5xl mx-auto">

                <!-- HEADER DETAIL (Cover & Info Utama) -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-6 flex flex-col md:flex-row">

                    <!-- Cover Buku Area -->
                    <div class="md:w-1/3 lg:w-1/4 bg-slate-100 p-6 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-slate-200">
                        @if($buku->cover)
                            <img src="{{ asset('storage/' . $buku->cover) }}" class="w-full max-w-[200px] rounded shadow-md object-cover aspect-[3/4] border border-slate-200">
                        @else
                            <div class="w-full max-w-[200px] aspect-[3/4] bg-slate-200 rounded shadow-md border border-slate-300 flex flex-col items-center justify-center text-slate-400">
                                <i class="fa-solid fa-image text-5xl mb-2"></i>
                                <span class="text-xs font-semibold">Tidak ada cover</span>
                            </div>
                        @endif

                        <div class="mt-6 flex flex-col items-center">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $buku->kode_buku }}" alt="QR Code" class="w-24 h-24 bg-white p-1.5 border border-slate-300 rounded-lg shadow-sm mix-blend-multiply">
                            <p class="text-[10px] font-mono font-bold mt-2 text-slate-500 tracking-widest">{{ $buku->kode_buku }}</p>
                        </div>
                    </div>

                    <!-- Detail Buku Area -->
                    <div class="flex-1 p-6 md:p-8">
                        <div class="flex justify-between items-start gap-4 mb-4">
                            <div>
                                <h1 class="text-2xl md:text-3xl font-black text-slate-800 leading-tight mb-2">{{ $buku->judul }}</h1>
                                <p class="text-slate-500 font-medium"><i class="fa-solid fa-pen-nib w-5 text-slate-400"></i> Oleh: <span class="text-slate-700 font-bold">{{ $buku->pengarang }}</span></p>
                            </div>
                            <div class="shrink-0 text-center bg-blue-50 border border-blue-100 px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-blue-500 font-bold uppercase tracking-wider mb-0.5">Sisa Stok</p>
                                <p class="text-2xl font-black text-blue-700 leading-none">{{ $buku->stok }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 mt-8">
                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wider mb-1">Penerbit & Tahun</p>
                                <p class="text-sm font-semibold text-slate-700">{{ $buku->penerbit }} ({{ $buku->tahun_terbit }})</p>
                            </div>

                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm shrink-0" style="background-color: {{ $buku->ddc->warna_label ?? '#ccc' }};"></div>
                                <div>
                                    <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wider mb-0.5">Klasifikasi DDC</p>
                                    <p class="text-sm font-bold text-slate-700">{{ $buku->ddc->kode_ddc ?? '-' }} - {{ $buku->ddc->kategori ?? '-' }}</p>
                                </div>
                            </div>

                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wider mb-1">Kategori Buku</p>
                                <p class="text-sm font-semibold text-slate-700"><i class="fa-solid fa-tag text-emerald-500 mr-1"></i> {{ $buku->kategori->nama_kategori ?? '-' }}</p>
                            </div>

                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wider mb-1">Jenis & Sumber</p>
                                <p class="text-sm font-semibold text-slate-700">{{ $buku->jenis->nama_jenis ?? '-' }} / {{ $buku->sumber->nama_sumber ?? '-' }}</p>
                            </div>

                            <div class="bg-amber-50 p-3 rounded-lg border border-amber-100 md:col-span-2">
                                <p class="text-[11px] text-amber-600 font-bold uppercase tracking-wider mb-1"><i class="fa-solid fa-location-dot"></i> Lokasi Rak Penyimpanan</p>
                                <p class="text-sm font-bold text-amber-800">{{ $buku->rak ? $buku->rak : 'Belum ditentukan lokasinya' }}</p>
                            </div>
                        </div>

                        <!-- Action Edit -->
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('admin.buku.edit', $buku->id) }}" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-bold px-6 py-2.5 rounded-lg shadow-sm transition-colors text-sm">
                                <i class="fa-solid fa-pen-to-square"></i> Edit Data Ini
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SINOPSIS BOX -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-10">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-align-left text-slate-400"></i>
                        <h3 class="font-bold text-slate-800">Sinopsis / Deskripsi</h3>
                    </div>
                    <div class="p-6 md:p-8">
                        @if($buku->sinopsis)
                            <p class="text-slate-600 text-sm leading-relaxed whitespace-pre-line">{{ $buku->sinopsis }}</p>
                        @else
                            <p class="text-slate-400 text-sm italic text-center py-6">Tidak ada sinopsis atau deskripsi untuk buku ini.</p>
                        @endif
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
