<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        select { -webkit-appearance: none; appearance: none; }
        input[type="date"]::-webkit-calendar-picker-indicator { cursor: pointer; opacity: 0.6; transition: 0.2s; }
        input[type="date"]::-webkit-calendar-picker-indicator:hover { opacity: 1; }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR RINGKAS -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>

                <!-- Data Anggota Active -->
                <li>
                    <a href="/admin/anggota" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota
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
                    <a href="/admin/anggota" class="hover:text-blue-600">Data Anggota</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Data Anggota</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 object-cover">
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-slate-700">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-8 custom-scrollbar">

            <form action="{{ route('admin.anggota.store') }}" method="POST" class="max-w-4xl mx-auto space-y-6">
                @csrf

                @if ($errors->any())
                    <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm">
                        <div class="font-bold mb-1">Peringatan: Terdapat kesalahan input!</div>
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center"><i class="fa-solid fa-user"></i></div>
                        <h3 class="font-bold text-slate-800 text-base">Data Diri Anggota</h3>
                    </div>

                    <div class="p-6 md:p-8 space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                            <label class="text-sm font-semibold text-slate-600 mb-1">NISN / NIP <span class="text-rose-500">*</span></label>
                            <div class="md:col-span-2">
                                <input type="text" name="nisn" value="{{ old('nisn') }}" placeholder="Nomor Induk" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm focus:border-blue-500 outline-none shadow-sm font-mono">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                            <label class="text-sm font-semibold text-slate-600 mb-1">Nama Lengkap <span class="text-rose-500">*</span></label>
                            <div class="md:col-span-2">
                                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama siswa/guru" required class="w-full bg-blue-50/30 border-2 border-blue-200 rounded-lg py-2.5 px-4 text-sm focus:border-blue-400 outline-none shadow-sm font-bold text-slate-800">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                            <label class="text-sm font-semibold text-slate-600 mb-1">Kelas <span class="text-rose-500">*</span></label>
                            <div class="md:col-span-2 relative">
                                <select name="kelas_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm focus:border-blue-500 outline-none shadow-sm font-medium">
                                    <option value="" disabled selected>- Pilih Kelas -</option>
                                    @foreach($data_kelas as $kelas)
                                        <option value="{{ $kelas->id }}" {{ old('kelas_id') == $kelas->id ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-slate-400"><i class="fa-solid fa-chevron-down text-xs"></i></div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                            <label class="text-sm font-semibold text-slate-600 mb-1">Jenis Kelamin <span class="text-rose-500">*</span></label>
                            <div class="md:col-span-2 flex items-center gap-6">
                                <label class="flex items-center gap-2 text-sm text-slate-700 font-medium cursor-pointer">
                                    <input type="radio" id="radioLaki" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', 'Laki-laki') == 'Laki-laki' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 cursor-pointer"> Laki-laki
                                </label>
                                <label class="flex items-center gap-2 text-sm text-slate-700 font-medium cursor-pointer">
                                    <input type="radio" id="radioPerempuan" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 cursor-pointer"> Perempuan
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                            <label class="text-sm font-semibold text-slate-600 mb-1">Tempat Tgl Lahir</label>
                            <div class="md:col-span-2 flex flex-col sm:flex-row gap-3">
                                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Kota Lahir" class="w-full sm:w-1/2 bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm outline-none shadow-sm">
                                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" class="w-full sm:w-1/2 bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm outline-none shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3 pt-4 pb-10">
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-xl font-bold shadow-md transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan Data Anggota
                    </button>
                    <a href="/admin/anggota" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-xl font-bold transition-colors">Batal</a>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
