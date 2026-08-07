<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelas - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>

                <!-- Data Kelas Active -->
                <li>
                    <a href="/admin/kelas" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-school w-6 text-center mr-2"></i> Data Kelas
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
                    <a href="/admin/kelas" class="hover:text-blue-600">Data Kelas</a>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-800">Tambah Data</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 tracking-tight leading-none">Tambah Data Kelas</h2>
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
            <div class="max-w-4xl mx-auto space-y-5">

                @if ($errors->any())
                    <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-700 p-4 rounded shadow-sm">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5">
                        <i class="fa-solid fa-circle-info text-xl opacity-90"></i>
                        <h3 class="font-bold text-xl">Informasi</h3>
                    </div>
                    <p class="text-sm text-white/90">Silahkan isi formulir data <strong>KELAS</strong> di bawah ini dengan baik dan benar.</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center gap-2 bg-white">
                        <i class="fa-solid fa-plus text-slate-700 text-lg"></i>
                        <h3 class="font-bold text-slate-800 text-base">Form Data Kelas</h3>
                    </div>

                    <!-- Action form menggunakan route yang terdaftar di Resource Kelas -->
                    <form action="/admin/kelas" method="POST" class="p-6 md:p-8">
                        @csrf
                        <div class="space-y-6 max-w-3xl">
                            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 items-center">
                                <label class="text-sm font-semibold text-slate-600 mb-1 md:mb-0">Nama Kelas <span class="text-rose-500">*</span></label>
                                <div class="md:col-span-3">
                                    <input type="text" name="nama_kelas" value="{{ old('nama_kelas') }}" placeholder="Contoh: Kelas 1 A..." class="w-full bg-slate-50 border border-slate-200 rounded py-2.5 px-4 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-700 shadow-sm" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 pt-8 border-t border-slate-100 mt-8 max-w-3xl">
                            <div class="hidden md:block w-1/4"></div>
                            <div class="w-full flex gap-3">
                                <button type="submit" class="bg-[#198754] hover:bg-[#157347] text-white px-6 py-2.5 rounded shadow-sm font-medium text-sm flex items-center justify-center gap-2"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                                <a href="/admin/kelas" class="bg-[#212529] hover:bg-[#1c1f23] text-white px-6 py-2.5 rounded shadow-sm font-medium text-sm flex items-center justify-center gap-2"><i class="fa-solid fa-xmark"></i> Batal</a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer Text -->
                <div class="pt-4 pb-8">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
