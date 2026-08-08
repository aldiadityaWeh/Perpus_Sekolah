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
        @media print {
            body { background: white; margin: 0; padding: 0; }
            aside, header, #btn-kembali, #btn-print { display: none !important; }
            main { padding: 0 !important; margin: 0 !important; }
        }
        .id-card-container { width: 340px; height: 214px; background: white; }
        ::-webkit-scrollbar { width: 5px; }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800 flex h-screen overflow-hidden">

    <!-- SIDEBAR RINGKAS -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20 print:hidden">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6">
            <ul class="space-y-1.5 px-3">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2"></i> Dashboard</a></li>

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
        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0 print:hidden">
            <div class="flex items-center gap-4 md:gap-6">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight leading-none">Kartu Tanda Anggota (KTA)</h2>
                </div>
            </div>

           <div class="flex items-center gap-2 md:gap-3">
                <a href="/admin/anggota" id="btn-kembali" class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-3 md:px-4 py-2 rounded-lg font-bold text-sm transition-colors">Kembali</a>
                <button onclick="window.print()" id="btn-print" class="bg-blue-600 hover:bg-blue-700 text-white px-3 md:px-4 py-2 rounded-lg font-bold text-sm shadow-sm transition-colors flex items-center gap-2"><i class="fa-solid fa-print"></i> <span class="hidden sm:inline">Cetak Kartu</span></button>
            </div>
        </header>

        <!-- Tambahkan pt-12 md:pt-24 agar padding top halaman lebih tinggi -->
      <main class="flex-1 overflow-y-auto p-6 md:p-12 pt-12 md:pt-24 flex justify-center items-start">

            <div class="id-card-container rounded-2xl border border-slate-300 overflow-hidden relative shadow-2xl shrink-0 mt-16 md:mt-20">

                <!-- Kembalikan tinggi background biru ke 65px agar tidak menutupi teks di bawahnya -->
                <div class="absolute top-0 left-0 w-full h-[65px] bg-gradient-to-r from-blue-700 to-blue-500"></div>
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-white rounded-full"></div>
                    <div class="absolute -left-5 top-10 w-20 h-20 bg-white rounded-full"></div>
                </div>

                <!-- Kembalikan ukuran logo dan teks kop seperti semula -->
                <div class="relative z-10 flex items-center px-4 py-2 gap-3 text-white">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center p-0.5 shrink-0 shadow">
                        <img src="{{ asset('images/logo-sd.png') }}" class="w-full h-full object-contain rounded-full" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
                    </div>
                    <div class="leading-tight">
                        <h4 class="font-bold text-[12px] uppercase tracking-wider">Perpustakaan SDN 6</h4>
                        <p class="text-[8px] text-blue-100 uppercase tracking-widest mt-0.5">Kabupaten Purwakarta</p>
                    </div>
                </div>

                <!-- Gunakan margin-top (mt-6) agar tulisan Nama Lengkap punya jarak aman dari area biru -->
                <div class="relative z-10 px-4 mt-6 flex items-start gap-4">

                    <div class="w-[60px] h-[75px] bg-slate-50 border-2 border-white shadow-md shrink-0 flex items-center justify-center overflow-hidden">
                        @if($anggota->foto)
                            <img src="{{ asset('storage/' . $anggota->foto) }}" class="w-full h-full object-cover">
                        @else
                            @if(strtolower($anggota->jenis_kelamin) == 'laki-laki')
                                <!-- Ikon Laki-laki -->
                                <img src="{{ asset('images/avatar-laki.jpg') }}" alt="Pria" class="w-full h-full object-cover opacity-90 p-1" onerror="this.src='https://placehold.co/100x100/eff6ff/3b82f6?text=L'">
                            @else
                                <!-- Ikon Perempuan -->
                                <img src="{{ asset('images/avatar-perempuan.jpg') }}" alt="Wanita" class="w-full h-full object-cover opacity-90 p-1" onerror="this.src='https://placehold.co/100x100/fdf2f8/ec4899?text=P'">
                            @endif
                        @endif
                    </div>

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

                    <!-- Area QR Code yang diperbesar -->
                    <div class="shrink-0 flex flex-col items-center bg-white p-1 rounded border border-slate-200 shadow-sm mt-0.5">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $anggota->nisn }}" alt="QR" class="w-[68px] h-[68px] mix-blend-multiply">
                        <p class="text-[6px] text-center font-bold mt-1 tracking-widest text-slate-600 bg-slate-100 w-full rounded py-0.5">SCAN ME</p>
                    </div>
                </div>

                <div class="absolute bottom-0 w-full bg-slate-100 py-1.5 px-4 text-center border-t border-slate-200">
                    <p class="text-[7px] font-bold text-slate-500">KARTU INI BERLAKU SELAMA MENJADI WARGA SEKOLAH SDN 6 CISEUREUH</p>
                </div>
            </div>

        </main>
    </div>
</body>
</html>
