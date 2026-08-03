<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota - SMARTPERPUS</title>
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
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-amber-200 selection:text-amber-900">

    <!-- SIDEBAR -->
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
                <!-- Data Anggota Active (Style Edit Amber) -->
                <li>
                    <a href="{{ route('admin.anggota.index') }}" class="flex items-center px-4 py-3 bg-amber-600/10 text-amber-500 border border-amber-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kelas.index') }}" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group">
                        <i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="{{ route('admin.anggota.index') }}" class="hover:text-blue-600 cursor-pointer transition-colors">Data Anggota</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Edit Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Edit Data Anggota</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" class="w-10 h-10 rounded-full ring-2 ring-slate-100 object-cover">
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6 md:p-8 custom-scrollbar">

            <div class="max-w-5xl mx-auto space-y-6">

                <!-- Info Peringatan jika ada Error Validasi -->
                @if ($errors->any())
                    <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm">
                        <div class="font-bold mb-1">Peringatan: Terdapat kesalahan input!</div>
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-amber-50 text-amber-800 rounded-lg p-5 shadow-sm border border-amber-200 flex flex-col justify-center mb-6">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-pen-to-square text-xl opacity-90"></i>
                        <h3 class="font-bold text-xl">Ubah Informasi</h3>
                    </div>
                    <p class="text-sm text-amber-700">Anda sedang mengubah data anggota: <strong>{{ $anggota->nama }}</strong> ({{ $anggota->nisn }}).</p>
                </div>

                <!-- Hapus enctype="multipart/form-data" dan ubah grid -->
                <form action="{{ route('admin.anggota.update', $anggota->id) }}" method="POST" class="max-w-4xl mx-auto space-y-6 items-start">
                    <!-- Wajib untuk Update Data di Laravel -->
                    @csrf
                    @method('PUT')

                    <!-- Form Lengkap (Sekarang Full Width Tanpa Foto) -->
                    <div class="space-y-6">

                        <!-- Data Anggota -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                                <i class="fa-solid fa-user-pen text-amber-600 text-lg"></i>
                                <h3 class="font-bold text-slate-800 text-lg">Data Diri Anggota</h3>
                            </div>

                            <div class="p-6 md:p-8 space-y-5">

                                <!-- Row: NISN -->
                                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                    <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">NISN / NIP <span class="text-rose-500">*</span></label>
                                    <div class="md:col-span-2">
                                        <!-- old() untuk error, atau pakai data asli $anggota -->
                                        <input type="text" name="nisn" value="{{ old('nisn', $anggota->nisn) }}" placeholder="Contoh: 010141414" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-amber-500/20 focus:border-amber-500 transition-all text-slate-700 outline-none shadow-sm font-mono">
                                    </div>
                                </div>

                                <!-- Row: Nama -->
                                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                    <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Nama Lengkap <span class="text-rose-500">*</span></label>
                                    <div class="md:col-span-2">
                                        <input type="text" name="nama" value="{{ old('nama', $anggota->nama) }}" placeholder="Masukkan nama lengkap" required class="w-full bg-amber-50/30 border-2 border-amber-200 rounded-lg py-2.5 px-4 text-sm focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-all text-slate-800 font-medium outline-none shadow-sm">
                                    </div>
                                </div>

                                <!-- Row: Kelas -->
                                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                    <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Kelas <span class="text-rose-500">*</span></label>
                                    <div class="md:col-span-2 relative">

                                        <select name="kelas_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:ring-2 focus:ring-amber-500/20 focus:border-amber-500 transition-all text-slate-700 outline-none shadow-sm cursor-pointer">
                                            @if(isset($data_kelas) && $data_kelas->count() > 0)
                                                @foreach($data_kelas as $kelas)
                                                    <!-- Cek mana yang cocok dengan id kelas sebelumnya -->
                                                    <option value="{{ $kelas->id }}" {{ old('kelas_id', $anggota->kelas_id) == $kelas->id ? 'selected' : '' }}>
                                                        {{ $kelas->nama_kelas }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value="" disabled selected>⚠️ Belum ada Data Kelas!</option>
                                            @endif
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
                                            <input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Laki-laki' ? 'checked' : '' }} class="w-4 h-4 text-amber-600 border-slate-300 focus:ring-amber-500">
                                            Laki-laki
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-700 font-medium">
                                            <input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }} class="w-4 h-4 text-amber-600 border-slate-300 focus:ring-amber-500">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center gap-3 pt-2 pb-10">
                            <button type="submit" class="bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 px-6 py-3 rounded-xl font-bold shadow-md shadow-amber-500/20 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Update Data
                            </button>

                            <!-- Batal bisa diarahkan kembali ke halaman show detail atau halaman index -->
                            <a href="{{ route('admin.anggota.index') }}" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-xl font-bold shadow-sm transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-xmark"></i> Batal
                            </a>
                        </div>

                    </div>

                </form>
            </div>
        </main>
    </div>

</body>
</html>
