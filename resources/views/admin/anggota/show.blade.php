<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Anggota - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Kertas Print */
        @media print {
            body { background: white; margin: 0; padding: 0; }
            aside, header, #btn-kembali, #btn-print { display: none !important; }
            main { padding: 0 !important; margin: 0 !important; }
        }

        .id-card-container { width: 340px; height: 214px; background: white; }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800 flex h-screen overflow-hidden">

    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 z-20 print:hidden">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>
        <nav class="flex-1 overflow-y-auto py-6 px-3">
            <ul class="space-y-1.5">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all">Dashboard</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold">Data Anggota</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-8 z-10 shrink-0 print:hidden">
            <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Kartu Tanda Anggota (KTA)</h2>
            <div class="flex items-center gap-3">
                <a href="/admin/anggota" id="btn-kembali" class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-lg font-bold text-sm transition-colors">Kembali</a>
                <button onclick="window.print()" id="btn-print" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-bold text-sm shadow-sm transition-colors flex items-center gap-2"><i class="fa-solid fa-print"></i> Cetak Kartu</button>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-6 md:p-12 flex justify-center items-start">

            <div class="id-card-container rounded-2xl border border-slate-300 overflow-hidden relative shadow-2xl shrink-0 mt-8">

                <!-- Header Kartu -->
                <div class="absolute top-0 left-0 w-full h-[65px] bg-gradient-to-r from-blue-700 to-blue-500"></div>
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-white rounded-full"></div>
                    <div class="absolute -left-5 top-10 w-20 h-20 bg-white rounded-full"></div>
                </div>

                <!-- Kop Kartu -->
                <div class="relative z-10 flex items-center px-4 py-2 gap-3 text-white">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center p-0.5 shrink-0 shadow">
                        <img src="{{ asset('images/logo-sd.png') }}" class="w-full h-full object-contain rounded-full">
                    </div>
                    <div class="leading-tight">
                        <h4 class="font-bold text-[12px] uppercase tracking-wider">Perpustakaan SDN 6</h4>
                        <p class="text-[8px] text-blue-100 uppercase tracking-widest mt-0.5">Kabupaten Purwakarta</p>
                    </div>
                </div>

                <!-- Body Kartu -->
                <div class="relative z-10 px-4 mt-4 flex items-start gap-4">

                    <!-- Foto Pengguna -->
                    <div class="w-[60px] h-[75px] bg-slate-200 border-2 border-white shadow-md shrink-0">
                        @if($anggota->foto)
                            <img src="{{ asset('storage/' . $anggota->foto) }}" class="w-full h-full object-cover">
                        @else
                            @php $bgColor = $anggota->jenis_kelamin == 'Laki-laki' ? '3b82f6' : 'ec4899'; @endphp
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($anggota->nama) }}&background={{ $bgColor }}&color=fff&size=150&bold=true" class="w-full h-full object-cover">
                        @endif
                    </div>

                    <!-- Biodata -->
                    <div class="flex-1 -mt-1">
                        <div class="mb-1.5">
                            <p class="text-[8px] text-slate-500 font-bold uppercase">Nama Lengkap</p>
                            <p class="text-[13px] font-bold text-slate-800 leading-none truncate max-w-[130px]" title="{{ $anggota->nama }}">{{ strtoupper($anggota->nama) }}</p>
                        </div>
                        <div class="mb-1.5">
                            <p class="text-[8px] text-slate-500 font-bold uppercase">NISN / NIP</p>
                            <p class="text-[11px] font-mono font-bold text-slate-800 leading-none">{{ $anggota->nisn }}</p>
                        </div>
                        <div>
                            <p class="text-[8px] text-slate-500 font-bold uppercase">Klasifikasi / Kelas</p>
                            <p class="text-[10px] font-bold text-blue-600 leading-none">{{ $anggota->kelas->nama_kelas ?? 'Tanpa Kelas' }}</p>
                        </div>
                    </div>

                    <!-- Generate QR Code Langsung dari Internet -->
                    <div class="shrink-0 flex flex-col items-center mt-2 bg-white p-1 rounded border border-slate-200 shadow-sm">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ $anggota->nisn }}" alt="QR" class="w-14 h-14 mix-blend-multiply">
                        <p class="text-[6px] text-center font-bold mt-1 tracking-widest text-slate-600 bg-slate-100 w-full rounded">SCAN ME</p>
                    </div>
                </div>

                <!-- Footer Kartu -->
                <div class="absolute bottom-0 w-full bg-slate-100 py-1.5 px-4 text-center border-t border-slate-200">
                    <p class="text-[7px] font-bold text-slate-500">KARTU INI BERLAKU SELAMA MENJADI WARGA SEKOLAH SDN 6 CISEUREUH</p>
                </div>
            </div>

        </main>
    </div>
</body>
</html>
