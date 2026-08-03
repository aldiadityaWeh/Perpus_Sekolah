<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota - SMARTPERPUS</title>
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
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">

        <!-- HEADER ATAS -->
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0">
            <div>
                <div class="flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                    <span class="hover:text-blue-600 cursor-pointer transition-colors">Master Data</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <a href="{{ route('admin.anggota.index') }}" class="hover:text-blue-600 cursor-pointer transition-colors">Data Anggota</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Detail Anggota</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Profil Anggota</h2>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-slate-200 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" alt="Admin" class="w-10 h-10 rounded-full ring-2 ring-slate-100 object-cover">
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50/50 p-6 md:p-8 custom-scrollbar">

            <div class="max-w-5xl mx-auto space-y-6">

                <!-- Tombol Kembali -->
                <div>
                    <a href="{{ route('admin.anggota.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-blue-600 transition-colors bg-white border border-slate-200 px-4 py-2 rounded-lg shadow-sm">
                        <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Anggota
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                    <!-- KARTU PROFIL (KIRI) -->
                    <div class="md:col-span-4 lg:col-span-3 space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden text-center p-6 flex flex-col items-center">

                            <!-- Menampilkan Avatar Sesuai Gender -->
                            <div class="w-28 h-28 bg-slate-100 rounded-full mb-4 overflow-hidden border-4 border-white shadow-md relative group">
                                @if($anggota->jenis_kelamin == 'Laki-laki')
                                    <!-- Avatar Laki-laki (Warna Biru) -->
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($anggota->nama) }}&background=3b82f6&color=fff&size=200&bold=true" alt="Avatar Laki-laki" class="w-full h-full object-cover">
                                @else
                                    <!-- Avatar Perempuan (Warna Pink) -->
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($anggota->nama) }}&background=ec4899&color=fff&size=200&bold=true" alt="Avatar Perempuan" class="w-full h-full object-cover">
                                @endif
                            </div>

                            <h3 class="font-bold text-lg text-slate-800 leading-tight mb-1">{{ $anggota->nama }}</h3>
                            <p class="text-sm font-mono font-semibold text-slate-500 bg-slate-100 px-3 py-1 rounded-full">{{ $anggota->nisn }}</p>

                            <div class="mt-5 w-full flex justify-center gap-2">
                                <span class="bg-blue-50 text-blue-600 px-3 py-1.5 rounded-lg text-xs font-bold border border-blue-100 w-full flex flex-col items-center justify-center">
                                    <i class="fa-solid fa-school mb-1"></i>
                                    {{ $anggota->kelas->nama_kelas ?? 'Tanpa Kelas' }}
                                </span>
                            </div>
                        </div>

                        <!-- Barcode Section (Visual only) -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden p-6 text-center">
                            <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">QR Code Kartu</h4>
                            <!-- Menggunakan API pihak ketiga untuk render QR Code -->
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $anggota->nisn }}" alt="QR Code" class="mx-auto w-24 h-24 mix-blend-multiply opacity-90 p-1.5 border border-slate-200 rounded-lg">
                            <p class="text-[10px] font-mono text-slate-400 mt-2">{{ $anggota->nisn }}</p>
                        </div>
                    </div>

                    <!-- RINCIAN DATA (KANAN) -->
                    <div class="md:col-span-8 lg:col-span-9 space-y-6">

                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between bg-white">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-user text-blue-600 text-lg"></i>
                                    <h3 class="font-bold text-slate-800 text-base">Informasi Detail Anggota</h3>
                                </div>
                                <a href="{{ route('admin.anggota.edit', $anggota->id) }}" class="text-xs font-bold text-amber-600 hover:text-amber-700 bg-amber-50 hover:bg-amber-100 px-3 py-1.5 rounded-lg transition-colors border border-amber-200">
                                    <i class="fa-solid fa-pen"></i> Edit Data
                                </a>
                            </div>

                            <div class="p-6 md:p-8 space-y-0">
                                <!-- Tabel Rincian -->
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-slate-100 text-slate-600">
                                        <tr>
                                            <td class="py-3.5 w-1/3 font-semibold text-slate-500">Nomor Induk (NISN/NIP)</td>
                                            <td class="py-3.5 font-bold text-slate-800 font-mono">{{ $anggota->nisn }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3.5 font-semibold text-slate-500">Nama Lengkap</td>
                                            <td class="py-3.5 font-bold text-slate-800">{{ $anggota->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3.5 font-semibold text-slate-500">Rombongan Belajar (Kelas)</td>
                                            <td class="py-3.5 font-bold text-slate-800">{{ $anggota->kelas->nama_kelas ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3.5 font-semibold text-slate-500">Jenis Kelamin</td>
                                            <td class="py-3.5 font-medium text-slate-800">
                                                @if($anggota->jenis_kelamin == 'Laki-laki')
                                                    <i class="fa-solid fa-mars text-blue-500 mr-1"></i> Laki-laki
                                                @else
                                                    <i class="fa-solid fa-venus text-pink-500 mr-1"></i> Perempuan
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3.5 font-semibold text-slate-500">Terdaftar Pada</td>
                                            <td class="py-3.5 font-medium text-slate-800">{{ $anggota->created_at->format('d M Y') ?? '-' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- KOTAK RIWAYAT PEMINJAMAN (Dummy View) -->
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between bg-white">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-clock-rotate-left text-emerald-600 text-lg"></i>
                                    <h3 class="font-bold text-slate-800 text-base">Riwayat Peminjaman Buku</h3>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col items-center justify-center text-slate-400 py-12">
                                <i class="fa-solid fa-box-open text-4xl mb-3 opacity-50"></i>
                                <p class="text-sm font-medium">Belum ada riwayat peminjaman.</p>
                                <p class="text-[11px] mt-1 text-slate-400">(Fitur Transaksi akan ditampilkan di sini nantinya)</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>
