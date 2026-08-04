<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link rel="stylesheet" href="[https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css)">
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
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-amber-200 selection:text-amber-900">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5" onerror="this.src='[https://placehold.co/100x100/ffffff/1e293b?text=SD](https://placehold.co/100x100/ffffff/1e293b?text=SD)'">
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

                <!-- Data Anggota Active (Mode Amber) -->
                <li>
                    <a href="/admin/anggota" class="flex items-center px-4 py-3 bg-amber-600/10 text-amber-500 border border-amber-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-users w-6 text-center mr-2"></i> Data Anggota
                    </a>
                </li>

                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all"><i class="fa-solid fa-school w-6 text-center mr-2"></i> Data Kelas</a></li>
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
                    <span class="text-slate-800">Edit Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Edit Profil Anggota</h2>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6 md:p-8 custom-scrollbar">

            <div class="max-w-6xl mx-auto bg-amber-50 text-amber-800 rounded-lg p-5 shadow-sm border border-amber-200 flex flex-col justify-center mb-6">
                <div class="flex items-center gap-2 mb-1.5">
                    <i class="fa-solid fa-pen-to-square text-xl opacity-90"></i>
                    <h3 class="font-bold text-xl">Ubah Informasi</h3>
                </div>
                <p class="text-sm text-amber-700">Anda sedang mengubah data anggota: <strong>{{ $anggota->nama }}</strong>.</p>
            </div>

            <form action="{{ route('admin.anggota.update', $anggota->id) }}" method="POST" enctype="multipart/form-data" class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="lg:col-span-12 bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error) <li>{{$error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <!-- KOLOM KIRI: Foto Preview -->
                <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden sticky top-0">
                    <div class="bg-amber-50 px-5 py-4 border-b border-amber-100 flex items-center gap-2">
                        <i class="fa-solid fa-image text-amber-600"></i>
                        <h3 class="font-bold text-amber-800 text-sm">Ubah Foto</h3>
                    </div>
                    <div class="p-5 flex flex-col items-center justify-center">
                        <div class="w-full aspect-[3/4] border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center bg-slate-50 hover:bg-amber-50 transition-colors relative overflow-hidden group">
                            <input type="file" id="foto" name="foto" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">

                            @if($anggota->foto)
                                <img src="{{ asset('storage/' . $anggota->foto) }}" class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center text-white z-0">
                                    <i class="fa-solid fa-pen text-xl mb-1"></i> <span class="text-xs">Timpa Foto</span>
                                </div>
                            @else
                                <div class="text-center p-4 text-slate-400 group-hover:text-amber-500">
                                    <i class="fa-solid fa-camera text-3xl mb-3"></i>
                                    <p class="text-xs font-medium">Klik untuk mengubah</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: Form Lengkap -->
                <div class="lg:col-span-9 space-y-6">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2"><i class="fa-solid fa-user-pen text-amber-600"></i><h3 class="font-bold">Data Utama</h3></div>
                        <div class="p-6 md:p-8 space-y-5">

                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600">NISN / NIP <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <input type="text" name="nisn" value="{{ old('nisn', $anggota->nisn) }}" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-4 text-sm font-mono outline-none focus:border-amber-500 shadow-sm">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600">Nama Lengkap <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2">
                                    <input type="text" name="nama" value="{{ old('nama', $anggota->nama) }}" required class="w-full bg-amber-50/30 border-2 border-amber-200 rounded-lg py-2.5 px-4 text-sm font-bold text-slate-800 outline-none focus:border-amber-400 shadow-sm">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600">Kelas <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 relative">
                                    <select name="kelas_id" required class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 pl-4 pr-10 text-sm outline-none focus:border-amber-500 shadow-sm font-medium">
                                        @foreach($data_kelas as$kelas)
                                            <option value="{{ $kelas->id }}" {{ old('kelas_id', $anggota->kelas_id) == $kelas->id ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600">Jenis Kelamin <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-2 flex gap-6">
                                    <label class="text-sm"><input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
                                    <label class="text-sm"><input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex items-center gap-3 pt-4 pb-10">
                        <button type="submit" class="bg-[#ffc107] hover:bg-[#e0a800] text-slate-800 px-6 py-3 rounded-xl font-bold shadow-md"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan</button>
                        <a href="/admin/anggota" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-xl font-bold shadow-sm">Batal</a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
