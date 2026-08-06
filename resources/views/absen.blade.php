<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Pengunjung - SMARTPERPUS</title>
    <link rel="icon" href="data:,">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        @keyframes scan-line {
            0% { transform: translateY(-100%); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(100%); opacity: 0; }
        }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800 overflow-x-hidden flex flex-col min-h-screen">

    <nav class="absolute top-0 w-full z-50 px-4 md:px-6 py-4 border-b border-white/10 bg-slate-900/80 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="flex-shrink-0 flex items-center cursor-pointer group">
                <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-10 w-auto mr-3 bg-white rounded-full p-1" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
                <div class="flex flex-col hidden sm:flex">
                    <span class="font-bold text-lg tracking-wide text-white leading-tight">PERPUS <span class="text-blue-400">SDN 6</span></span>
                    <span class="text-[10px] text-slate-400 font-medium tracking-widest uppercase">Ciseureuh - Purwakarta</span>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-2 lg:gap-4">
                <a href="/" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">Beranda</a>
                <a href="/koleksi" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">Koleksi Buku</a>
                <a href="/absen" class="bg-white/10 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors border border-white/5 shadow-sm">Absen Pengunjung</a>
                <div class="h-5 w-px bg-white/20 mx-2"></div>
                <a href="/admin/dashboard" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2 group">
                    <i class="fa-solid fa-right-to-bracket opacity-70 group-hover:translate-x-0.5 transition-transform"></i> Login Admin
                </a>
            </div>
        </div>
    </nav>

    <header class="relative w-full h-[220px] flex items-end overflow-hidden pt-20">
        <div class="absolute inset-0 z-0 bg-slate-800">
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-50">
        </div>
        <div class="absolute inset-0 bg-slate-900/60 mix-blend-multiply z-10"></div>
        <div class="relative z-20 px-4 md:px-8 pb-8 w-full max-w-6xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-md">Kiosk Pengunjung</h1>
            <p class="text-slate-300 mt-2">Silakan scan Kartu Anggota Anda pada kamera di bawah ini.</p>
        </div>
    </header>

    <main class="flex-1 w-full max-w-6xl mx-auto p-4 md:p-6 lg:p-8">

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-6 py-4 rounded-xl shadow-sm flex items-center gap-4 animate-bounce">
                <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center shrink-0"><i class="fa-solid fa-check text-xl"></i></div>
                <div>
                    <h4 class="font-bold">Berhasil Absen!</h4>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="mb-6 bg-rose-50 border border-rose-200 text-rose-700 px-6 py-4 rounded-xl shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center shrink-0"><i class="fa-solid fa-xmark text-xl"></i></div>
                <div>
                    <h4 class="font-bold">Gagal Absen!</h4>
                    <p class="text-sm">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">

            <!-- KOLOM KIRI: Modul Scanner -->
            <div class="md:col-span-5 lg:col-span-4 bg-white border border-slate-200 shadow-sm overflow-hidden flex flex-col rounded-xl w-full">
                <div class="bg-slate-800 text-white px-4 py-3 flex items-center text-sm font-medium tracking-wide">
                    <i class="fa-solid fa-qrcode mr-2 text-slate-300"></i> Scan QR Code / NISN
                </div>

                <div class="p-4 flex flex-col gap-4">

                    <!-- Simulasi Web Cam -->
                    <div class="w-full aspect-[4/3] bg-slate-900 border border-slate-300 relative overflow-hidden flex items-center justify-center shadow-inner rounded-lg">
                        <img src="https://images.unsplash.com/photo-1577563908411-5077b6dc7624?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover opacity-60 mix-blend-luminosity">
                        <!-- Garis Scanner -->
                        <div class="absolute inset-0 z-10 pointer-events-none p-4 flex items-center justify-center">
                            <div class="w-32 h-32 md:w-40 md:h-40 relative">
                                <div class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-emerald-400"></div>
                                <div class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-emerald-400"></div>
                                <div class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-emerald-400"></div>
                                <div class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-emerald-400"></div>
                                <div class="absolute left-0 w-full h-[2px] bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)] top-1/2" style="animation: scan-line 2.5s ease-in-out infinite;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Input Form (Auto Submit saat di-scan) -->
                    <form action="{{ route('absen.store') }}" method="POST" class="w-full mt-2 relative">
                        @csrf
                        <div class="relative flex items-center">
                            <i class="fa-solid fa-keyboard absolute left-3 text-slate-400"></i>
                            <input type="text" name="nisn" id="nisnInput" placeholder="Ketik NISN lalu Enter..." class="w-full bg-slate-50 border-2 border-slate-200 rounded-lg py-3 px-4 pl-10 text-sm focus:outline-none focus:border-blue-500 focus:bg-blue-50 transition-colors font-mono font-bold text-center" autofocus autocomplete="off" required>
                        </div>
                        <button type="submit" class="hidden">Kirim</button>
                    </form>

                    <div class="text-center text-[11px] text-slate-500 font-semibold italic mt-1">
                        *Arahkan kursor ke dalam kotak di atas. Alat Scanner akan otomatis mengetik dan mengirim kode.
                    </div>
                </div>
            </div>

            <!-- KOLOM KANAN: Data Pengunjung Hari Ini -->
            <div class="md:col-span-7 lg:col-span-8 bg-white border border-slate-200 shadow-sm flex flex-col min-h-[350px] rounded-xl overflow-hidden w-full">

                <div class="px-4 md:px-5 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                    <div class="flex items-center gap-2 font-semibold text-slate-700">
                        <i class="fa-solid fa-user-check text-slate-500"></i> Data Pengunjung Hari Ini
                    </div>
                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full border border-blue-200">Total: {{ $data_pengunjung->count() }}</span>
                </div>

                <div class="flex-1 w-full overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[500px]">
                        <thead>
                            <tr class="text-slate-500 text-xs border-b border-slate-100 bg-white uppercase tracking-widest">
                                <th class="px-4 md:px-6 py-3 font-semibold w-12 text-center">No</th>
                                <th class="px-4 md:px-6 py-3 font-semibold">Nama Anggota</th>
                                <th class="px-4 md:px-6 py-3 font-semibold">Kelas</th>
                                <th class="px-4 md:px-6 py-3 font-semibold text-center">Jam Masuk</th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100">

                            @forelse ($data_pengunjung as $index => $kunjungan)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 md:px-6 py-3 text-center text-slate-400 font-medium">{{ $index + 1 }}</td>
                                <td class="px-4 md:px-6 py-3 font-bold text-slate-800">{{ $kunjungan->anggota->nama }}</td>
                                <td class="px-4 md:px-6 py-3 text-slate-500">{{ $kunjungan->anggota->kelas->nama_kelas ?? '-' }}</td>
                                <td class="px-4 md:px-6 py-3 text-center">
                                    <span class="bg-slate-100 px-2.5 py-1 rounded text-slate-600 font-mono text-[11px] font-bold border border-slate-200">
                                        {{ \Carbon\Carbon::parse($kunjungan->waktu_kunjungan)->format('H:i') }} WIB
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">
                                    <div class="flex flex-col items-center justify-center py-12 text-slate-400">
                                        <i class="fa-solid fa-users-slash text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm font-medium">Belum ada pengunjung hari ini.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <!-- Script Autofocus agar siap di-scan kapan saja -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Memastikan kursor selalu berada di input field agar scanner langsung berfungsi
            const inputField = document.getElementById('nisnInput');
            if(inputField) {
                inputField.focus();

                // Jika user klik di luar kotak, kembalikan fokus ke kotak dalam 3 detik
                document.body.addEventListener('click', function() {
                    setTimeout(() => {
                        inputField.focus();
                    }, 3000);
                });
            }
        });
    </script>
</body>
</html>
