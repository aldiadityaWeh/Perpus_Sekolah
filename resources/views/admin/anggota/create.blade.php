<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota - SMARTPERPUS</title>
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

        /* Menghilangkan panah default pada input type date dan select */
        select { -webkit-appearance: none; appearance: none; }
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 0.6;
            transition: 0.2s;
        }
        input[type="date"]::-webkit-calendar-picker-indicator:hover { opacity: 1; }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">

        <!-- Logo Area -->
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

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li>
                    <a href="{{ route('admin.transaksi.peminjaman') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.transaksi.pengembalian') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali
                        </div>
                        <span class="bg-rose-500/10 text-rose-400 border border-rose-500/20 text-[10px] font-bold px-2 py-0.5 rounded-full animate-pulse">3</span>
                    </a>
                </li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li>
                    <a href="{{ route('laporan.anggota.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota
                    </a>
                </li>
                <li>
                    <a href="{{ route('laporan.buku.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-book-open w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Laporan Buku
                    </a>
                </li>
                <li>
                    <a href="{{ route('laporan.kas.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)
                    </a>
                </li>
                <li>
                    <a href="{{ route('laporan.pengunjung.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="{{ route('admin.anggota.index') }}" class="hover:text-blue-600 cursor-pointer transition-colors">Data Anggota</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Data Anggota</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6 md:p-8 custom-scrollbar">

            <!-- Notifikasi Error Validasi -->
            @if ($errors->any())
                <div class="max-w-6xl mx-auto mb-6 bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm">
                    <div class="font-bold mb-1">Peringatan: Terdapat kesalahan input!</div>
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.anggota.store') }}" method="POST" enctype="multipart/form-data" class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                @csrf

                <!-- KOLOM KIRI: Foto Anggota -->
                <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden sticky top-0">
                    <div class="bg-slate-50 px-5 py-4 border-b border-slate-100 flex items-center gap-2">
                        <i class="fa-solid fa-image text-slate-500"></i>
                        <h3 class="font-bold text-slate-800 text-sm">Foto Anggota</h3>
                    </div>

                    <div class="p-5 flex flex-col items-center justify-center">
                        <div class="w-full aspect-[3/4] border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center bg-slate-50 hover:bg-blue-50 hover:border-blue-300 transition-colors cursor-pointer group relative overflow-hidden">
                            <input type="file" id="foto" name="foto" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">

                            <div class="text-center p-4">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-blue-500 mb-3 transition-colors"></i>
                                <p class="text-xs text-slate-500 font-medium leading-relaxed group-hover:text-blue-600">Drag atau drop<br>untuk memilih gambar</p>
                            </div>
                        </div>
                        <p class="text-[11px] font-semibold text-rose-500 mt-4 text-center">Ukuran gambar 3x4 (Maks. 2MB)</p>
                    </div>
                </div>

                <!-- KOLOM KANAN: Form Lengkap -->
                <div class="lg:col-span-9 space-y-6">

                    <!-- BOX 1: Data Anggota (Utama) -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-plus text-blue-600 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Diri Anggota</h3>
                        </div>

                        <div class="p-6 md:p-8 space-y-5">

                            <!-- Row: NISN -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">NISN / NIP <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <input type="text" name="nisn" value="{{ old('nisn') }}" placeholder="Contoh: 010141414" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm font-mono">
                                </div>
                            </div>

                            <!-- Row: Nama -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Nama Lengkap <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap" required class="w-full bg-blue-50/30 border-2 border-blue-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/30 focus:border-blue-400 transition-all text-slate-800 font-medium outline-none shadow-sm">
                                </div>
                            </div>

                            <!-- Row: Kelas -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Kelas / Kategori <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 relative">
                                    <!-- Jika database Anda sudah memiliki tabel kelas, Anda bisa melakukan perulangan dari controller seperti pada DDC -->
                                    <select name="kelas_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                        <option value="" disabled {{ old('kelas_id') ? '' : 'selected' }}>-== Pilih Disini ==-</option>
                                        <option value="1" {{ old('kelas_id') == '1' ? 'selected' : '' }}>Kelas 1 A</option>
                                        <option value="2" {{ old('kelas_id') == '2' ? 'selected' : '' }}>Kelas 1 B</option>
                                        <option value="3" {{ old('kelas_id') == '3' ? 'selected' : '' }}>Kelas 2 A</option>
                                        <option value="4" {{ old('kelas_id') == '4' ? 'selected' : '' }}>Kelas 3 A</option>
                                        <option value="5" {{ old('kelas_id') == '5' ? 'selected' : '' }}>Kelas 4 A</option>
                                        <option value="6" {{ old('kelas_id') == '6' ? 'selected' : '' }}>Kelas 5 A</option>
                                        <option value="7" {{ old('kelas_id') == '7' ? 'selected' : '' }}>Kelas 6 A</option>
                                        <option value="8" {{ old('kelas_id') == '8' ? 'selected' : '' }}>Kelas 6 B</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Row: Jenis Kelamin -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Jenis Kelamin <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 flex items-center gap-6">
                                    <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-700 font-medium">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', 'Laki-laki') == 'Laki-laki' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 border-slate-300 focus:ring-blue-500">
                                        Laki-laki
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-700 font-medium">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 border-slate-300 focus:ring-blue-500">
                                        Perempuan
                                    </label>
                                </div>
                            </div>

                            <!-- Row: Tempat & Tgl Lahir (Opsional bergantung struktur database) -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Tempat Tgl Lahir</label>
                                <div class="md:col-span-2 flex flex-col sm:flex-row gap-3">
                                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Contoh: Purwakarta" class="w-full sm:w-1/2 bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm">
                                    <div class="relative w-full sm:w-1/2">
                                        <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- BOX 2: GRID (Alamat) -->
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                            <i class="fa-solid fa-house text-slate-700 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-sm">Alamat & Kontak</h3>
                        </div>
                        <div class="p-6 md:p-8 space-y-5">

                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-start">
                                <label class="text-sm font-semibold text-slate-600 mt-2">Alamat Tinggal</label>
                                <div class="md:col-span-2">
                                    <textarea name="alamat" rows="2" placeholder="Nama Jalan, Perumahan, atau Desa..." class="w-full bg-blue-50/30 border-2 border-blue-200 rounded-lg py-2 px-3 text-sm focus:ring-2 focus:ring-blue-500/30 focus:border-blue-400 transition-all text-slate-800 outline-none shadow-sm resize-none">{{ old('alamat') }}</textarea>
                                </div>
                            </div>

                            <!-- Nomor Telepon (Untuk Integrasi Pengingat WA jika ada) -->
                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">No. HP / WA</label>
                                <div class="md:col-span-2">
                                    <input type="text" name="no_telp" value="{{ old('no_telp') }}" placeholder="Contoh: 081234567890" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-slate-700 outline-none shadow-sm font-mono">
                                    <p class="text-[11px] text-slate-500 mt-1">Nomor ini dapat digunakan untuk mengirim tagihan denda keterlambatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 pt-2 pb-10">
                        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-xl font-bold shadow-md shadow-emerald-500/20 transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan Data Anggota
                        </button>

                        <a href="{{ route('admin.anggota.index') }}" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-xl font-bold shadow-sm transition-colors flex items-center gap-2">
                            <i class="fa-solid fa-arrow-rotate-left"></i> Batal / Kembali
                        </a>
                    </div>

                </div>

            </form>
        </main>
    </div>

</body>
</html>
```eof
