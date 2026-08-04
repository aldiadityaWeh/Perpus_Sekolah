<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        select { -webkit-appearance: none; appearance: none; }
        @keyframes scan-line {
            0% { transform: translateY(-100%); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(100%); opacity: 0; }
        }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-emerald-200 selection:text-emerald-900">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
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

                <!-- Peminjaman Active -->
                <li>
                    <a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 bg-emerald-600/10 text-emerald-400 border border-emerald-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2"></i> Scan Peminjaman
                    </a>
                </li>

                <li><a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all flex justify-between"><div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2"></i> Verifikasi Kembali</div></a></li>

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
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Sirkulasi Peminjaman</h2>
                <p class="text-sm text-slate-500 mt-1 font-medium">Catat peminjaman buku anggota secara cepat.</p>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" class="w-10 h-10 rounded-full ring-2 ring-slate-100 object-cover">
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6 custom-scrollbar">
            <div class="max-w-[1400px] mx-auto space-y-6">

                @if (session('success'))
                    <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded shadow-sm flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-xl"></i> <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm flex items-center gap-3">
                        <i class="fa-solid fa-circle-exclamation text-xl"></i>
                        <span class="font-medium">{{ $errors->first() }}</span>
                    </div>
                @endif

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

                    <!-- KIRI: Scanner & Form -->
                    <div class="lg:col-span-5 space-y-6">

                        <!-- Box Scanner -->
                        <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
                            <div class="px-5 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                                <i class="fa-solid fa-qrcode text-slate-700"></i>
                                <h3 class="font-bold text-slate-800 text-sm">Pemindai Barcode (Simulasi)</h3>
                            </div>
                            <div class="p-5 flex flex-col items-center">
                                <div class="w-full aspect-[4/3] max-w-sm bg-slate-900 border-2 border-slate-300 rounded-xl relative overflow-hidden flex items-center justify-center">
                                    <i class="fa-solid fa-camera text-slate-600 text-4xl opacity-50 absolute"></i>
                                    <div class="absolute inset-0 z-10 pointer-events-none p-6 flex items-center justify-center">
                                        <div class="w-full h-full max-w-[150px] max-h-[150px] relative">
                                            <div class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-emerald-400"></div>
                                            <div class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-emerald-400"></div>
                                            <div class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-emerald-400"></div>
                                            <div class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-emerald-400"></div>
                                            <div class="absolute left-0 w-full h-[2px] bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)] top-1/2" style="animation: scan-line 2.5s ease-in-out infinite;"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-500 mt-4 text-center">Arahkan scanner ke Kartu Anggota lalu ke Barcode Buku.</p>
                            </div>
                        </div>

                        <!-- Form Input Peminjaman -->
                        <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
                            <div class="bg-blue-600 px-5 py-4 flex items-center gap-2 text-white">
                                <i class="fa-solid fa-keyboard text-blue-200"></i>
                                <h3 class="font-bold text-sm">Formulir Peminjaman Buku</h3>
                            </div>

                            <form action="/admin/transaksi/peminjaman" method="POST" class="p-5 space-y-4">
                                @csrf
                                <div>
                                    <label class="text-xs font-bold text-slate-600 uppercase tracking-wider block mb-1">Pilih Anggota</label>
                                    <div class="relative">
                                        <select name="anggota_id" required class="w-full bg-slate-50 border border-slate-300 text-slate-800 rounded-lg py-2.5 pl-3 pr-8 focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none text-sm font-medium">
                                            <option value="" disabled selected>-- Pilih Anggota Peminjam --</option>
                                            @foreach ($data_anggota as $anggota)
                                                <option value="{{ $anggota->id }}">{{ $anggota->nisn }} - {{ $anggota->nama }}</option>
                                            @endforeach
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400"><i class="fa-solid fa-chevron-down text-xs"></i></div>
                                    </div>
                                </div>

                                <div>
                                    <label class="text-xs font-bold text-slate-600 uppercase tracking-wider block mb-1">Pilih Buku</label>
                                    <div class="relative">
                                        <select name="buku_id" required class="w-full bg-slate-50 border border-slate-300 text-slate-800 rounded-lg py-2.5 pl-3 pr-8 focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none text-sm font-medium">
                                            <option value="" disabled selected>-- Pilih Buku Tersedia --</option>
                                            @foreach ($data_buku as $buku)
                                                <option value="{{ $buku->id }}">{{ $buku->kode_buku }} - {{ $buku->judul }} (Stok: {{ $buku->stok }})</option>
                                            @endforeach
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400"><i class="fa-solid fa-chevron-down text-xs"></i></div>
                                    </div>
                                </div>

                                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 rounded-lg shadow-md transition-colors mt-2 flex justify-center items-center gap-2">
                                    <i class="fa-solid fa-check"></i> Proses Peminjaman
                                </button>
                            </form>
                        </div>

                    </div>

                    <!-- KANAN: Tabel Riwayat -->
                    <div class="lg:col-span-7 bg-white rounded-lg shadow-sm border border-slate-200 flex flex-col h-full min-h-[500px]">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-clock-rotate-left text-slate-600 text-lg"></i>
                                <h3 class="font-bold text-slate-800 text-base">Riwayat Peminjaman Terbaru</h3>
                            </div>
                        </div>

                        <div class="overflow-x-auto flex-1 p-2">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                        <th class="px-4 py-3 font-bold">Anggota</th>
                                        <th class="px-4 py-3 font-bold">Buku</th>
                                        <th class="px-4 py-3 font-bold">Tgl Batas</th>
                                        <th class="px-4 py-3 font-bold text-center">Status</th>
                                        <th class="px-4 py-3 font-bold text-center">Batal</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">
                                    @forelse ($data_peminjaman as $trx)
                                        <tr class="hover:bg-slate-50 transition-colors">
                                            <td class="px-4 py-3">
                                                <div class="font-bold text-slate-800">{{ $trx->anggota->nama ?? '-' }}</div>
                                                <div class="text-[10px] text-slate-500">{{ $trx->anggota->kelas->nama_kelas ?? '-' }}</div>
                                            </td>
                                            <td class="px-4 py-3">
                                                @if($trx->detail)
                                                    @foreach ($trx->detail as $dt)
                                                        <div class="font-semibold text-slate-700 line-clamp-1">{{ $dt->buku->judul ?? '-' }}</div>
                                                        <div class="text-[10px] font-mono text-slate-400">{{ $dt->buku->kode_buku ?? '-' }}</div>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td class="px-4 py-3 text-slate-600 font-medium">
                                                {{ \Carbon\Carbon::parse($trx->tgl_batas_kembali)->format('d M Y') }}
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                <span class="bg-blue-50 text-blue-600 border border-blue-200 px-2 py-1 rounded text-[10px] font-bold uppercase">Dipinjam</span>
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                <form action="/admin/transaksi/peminjaman/{{ $trx->id }}" method="POST" onsubmit="return confirm('Batalkan transaksi ini? Stok buku akan dikembalikan.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="w-7 h-7 rounded bg-rose-100 hover:bg-rose-500 hover:text-white text-rose-500 transition-colors" title="Batalkan">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="py-12 text-center text-slate-400">
                                                <i class="fa-solid fa-receipt text-3xl mb-2 opacity-50"></i>
                                                <p>Belum ada transaksi peminjaman.</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</body>
</html>
