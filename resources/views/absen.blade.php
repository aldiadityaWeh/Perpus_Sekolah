<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Pengunjung - SMARTPERPUS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Kustomisasi scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

        /* Animasi garis scanner untuk efek kamera aktif */
        @keyframes scan-line {
            0% { transform: translateY(-100%); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(100%); opacity: 0; }
        }
        .animate-pop-in {
            animation: pop-in 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }
        @keyframes pop-in {
            0% { transform: scale(0.95); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800 overflow-x-hidden selection:bg-blue-500 selection:text-white flex flex-col min-h-screen">

    <nav class="absolute top-0 w-full z-50 px-6 py-4 transition-all duration-300 border-b border-white/10 bg-slate-900/80 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo Kiri -->
            <div class="flex-shrink-0 flex items-center cursor-pointer group">
                <i class="fa-solid fa-book-open-reader text-blue-400 text-3xl mr-3 group-hover:scale-110 transition-transform"></i>
                <span class="font-bold text-xl tracking-wider text-slate-200 group-hover:text-white transition-colors">SMART<span class="text-blue-400">PERPUS</span></span>
            </div>

            <!-- Menu Navigasi (Desktop) -->
            <div class="hidden md:flex items-center gap-2 lg:gap-4">

                <a href="/" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Beranda
                </a>

                <!-- Menu Tentang (Dropdown) -->
                <div class="relative group">
                    <button class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-1.5 focus:outline-none">
                        Tentang <i class="fa-solid fa-chevron-down text-[10px] opacity-70 transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <!-- Isi Dropdown -->
                    <div class="absolute left-0 mt-1 w-52 bg-white rounded-xl shadow-2xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -translate-y-2 group-hover:translate-y-0 z-50">
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium"><i class="fa-solid fa-building-columns w-5 text-slate-400"></i> Profil Perpustakaan</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium"><i class="fa-solid fa-bullseye w-5 text-slate-400"></i> Visi & Misi</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-colors font-medium"><i class="fa-solid fa-scale-balanced w-5 text-slate-400"></i> Tata Tertib</a>
                    </div>
                </div>

                <!-- Menu Absen Pengunjung (Aktif) -->
                <a href="#" class="bg-white/10 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors border border-white/5 shadow-sm">
                    Absen Pengunjung
                </a>

                <a href="#" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    Koleksi Buku
                </a>

                <div class="h-5 w-px bg-white/20 mx-2"></div>
                <a href="/admin/dashboard" class="text-slate-300 hover:text-white hover:bg-white/5 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2 group">
                    <i class="fa-solid fa-right-to-bracket opacity-70 group-hover:translate-x-0.5 transition-transform"></i> Login Admin
                </a>
            </div>
        </div>
    </nav>
    <header class="relative w-full h-[220px] flex items-end overflow-hidden pt-20">
        <!-- Gambar Background Banner -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2000&auto=format&fit=crop" alt="Background Perpustakaan" class="w-full h-full object-cover">
        </div>

        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-slate-900/60 mix-blend-multiply z-10"></div>

        <!-- Teks Banner -->
        <div class="relative z-20 px-8 pb-8 w-full max-w-6xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-md">
                Absen Pengunjung
            </h1>
        </div>
    </header>

    <main class="flex-1 w-full max-w-6xl mx-auto p-4 md:p-6 lg:p-8">

        <!-- Diubah agar langsung bersebelahan di layar medium (md) -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">

            <!-- KOLOM KIRI: Modul Kamera (Ukurannya dikecilkan sedikit) -->
            <div class="md:col-span-5 lg:col-span-4 bg-white border border-slate-200 shadow-sm overflow-hidden flex flex-col rounded-xl">

                <!-- Header Kotak Kamera -->
                <div class="bg-slate-800 text-white px-4 py-3 flex items-center text-sm font-medium tracking-wide">
                    <i class="fa-solid fa-qrcode mr-2 text-slate-300"></i> Scan QR Code Disini
                </div>

                <!-- Area Body Kamera -->
                <div class="p-4 flex flex-col gap-4">

                    <!-- Kotak Video / Viewfinder -->
                    <div id="videoContainer" class="w-full aspect-[4/3] bg-slate-200 border border-slate-300 relative overflow-hidden flex items-center justify-center shadow-inner group">

                        <!-- Latar belakang dummy saat kamera mati -->
                        <div id="cameraOffState" class="flex flex-col items-center justify-center text-slate-400">
                            <i class="fa-solid fa-camera-slash text-4xl mb-2 opacity-50"></i>
                            <span class="text-xs font-semibold uppercase tracking-widest opacity-60">Kamera Nonaktif</span>
                        </div>

                        <!-- Area saat kamera aktif (Simulasi Web Cam) -->
                        <div id="cameraOnState" class="hidden absolute inset-0 bg-slate-900">
                            <!-- Dummy gambar webcam pengunjung -->
                            <img src="https://images.unsplash.com/photo-1577563908411-5077b6dc7624?auto=format&fit=crop&w=800&q=80" alt="Webcam Feed" class="w-full h-full object-cover opacity-80 mix-blend-luminosity">

                            <!-- Frame & Garis Scanner -->
                            <div class="absolute inset-0 z-10 pointer-events-none p-4 flex items-center justify-center">
                                <div class="w-40 h-40 relative">
                                    <div class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-emerald-400"></div>
                                    <div class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-emerald-400"></div>
                                    <div class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-emerald-400"></div>
                                    <div class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-emerald-400"></div>

                                    <!-- Garis Animasi Scanning -->
                                    <div class="absolute left-0 w-full h-[2px] bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)] top-1/2" style="animation: scan-line 2.5s ease-in-out infinite;"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Tombol Aksi Kamera -->
                    <div class="flex justify-center mt-2">
                        <button id="btnToggleCamera" class="flex items-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs font-bold px-4 py-2 rounded-lg transition-colors border border-slate-200 shadow-sm focus:ring-2 focus:ring-blue-500/20">
                            <i id="iconCamera" class="fa-solid fa-video-slash"></i>
                            <span id="textCamera">Kamera: OFF</span>
                        </button>
                    </div>

                    <div class="mt-1 text-center text-[11px] text-slate-500 font-semibold italic">
                        Pastikan QR Code di dalam kotak.
                    </div>
                </div>
            </div>

            <!-- KOLOM KANAN: Data Pengunjung Hari Ini -->
            <div class="md:col-span-7 lg:col-span-8 bg-white border border-slate-200 shadow-sm flex flex-col min-h-[350px] rounded-xl overflow-hidden">

                <!-- Header Tabel -->
                <div class="px-5 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                    <div class="flex items-center gap-2 font-semibold text-slate-700 text-base">
                        <i class="fa-solid fa-user-check text-slate-500"></i> Data Pengunjung Hari Ini
                    </div>
                    <span class="bg-slate-100 text-slate-600 text-xs font-bold px-3 py-1 rounded-full border border-slate-200 shadow-inner" id="totalVisitorCounter">Total: 2</span>
                </div>

                <!-- Isi Tabel -->
                <div class="flex-1 overflow-x-auto p-2">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-slate-500 text-sm border-b border-slate-100 bg-slate-50/50">
                                <th class="px-6 py-4 font-semibold w-16 text-center">No</th>
                                <th class="px-6 py-4 font-semibold">Nama Anggota</th>
                                <th class="px-6 py-4 font-semibold">Kelas</th>
                                <th class="px-6 py-4 font-semibold text-center">Jam Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody id="visitorTableBody" class="text-slate-700 text-sm divide-y divide-slate-100">

                            <!-- Baris Dummy 1 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 text-center text-slate-400 font-medium">1</td>
                                <td class="px-6 py-4 font-medium">Siti Aminah</td>
                                <td class="px-6 py-4 text-slate-500">Kelas 11 IPA 2</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-slate-100 px-2 py-1 rounded text-slate-600 font-mono text-xs">08:15 WIB</span>
                                </td>
                            </tr>

                            <!-- Baris Dummy 2 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 text-center text-slate-400 font-medium">2</td>
                                <td class="px-6 py-4 font-medium">Dimas Anggara</td>
                                <td class="px-6 py-4 text-slate-500">Kelas 10 IPS 1</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-slate-100 px-2 py-1 rounded text-slate-600 font-mono text-xs">07:50 WIB</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <!-- Pesan Tabel Kosong (Disembunyikan) -->
                    <div id="emptyTableMessage" class="hidden flex flex-col items-center justify-center py-12 text-slate-400">
                        <i class="fa-solid fa-users-slash text-4xl mb-3 opacity-50"></i>
                        <p class="text-sm font-medium">Belum ada pengunjung hari ini.</p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <footer class="bg-slate-900 border-t border-slate-800 text-slate-400 py-6 text-center text-sm mt-auto">
        <div class="max-w-7xl mx-auto px-6">
            <p>&copy; 2023 SMARTPERPUS System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Notifikasi Melayang (Tampil Saat Berhasil Scan) -->
    <div id="toastNotification" class="fixed top-24 right-8 transform translate-x-full opacity-0 transition-all duration-300 z-50 pointer-events-none">
        <div class="bg-white border-l-4 border-emerald-500 shadow-xl rounded-lg p-4 flex items-center gap-4 max-w-sm">
            <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                <i class="fa-solid fa-check text-xl"></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-800 text-sm mb-0.5">Berhasil Absen!</h4>
                <p id="toastName" class="text-xs text-slate-500">Selamat datang, <span class="font-bold text-slate-700">Nama Siswa</span></p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnToggleCamera = document.getElementById('btnToggleCamera');
            const iconCamera = document.getElementById('iconCamera');
            const textCamera = document.getElementById('textCamera');
            const cameraOffState = document.getElementById('cameraOffState');
            const cameraOnState = document.getElementById('cameraOnState');
            const visitorTableBody = document.getElementById('visitorTableBody');
            const totalVisitorCounter = document.getElementById('totalVisitorCounter');
            const toastNotification = document.getElementById('toastNotification');
            const toastName = document.getElementById('toastName');

            let scanInterval;
            let visitorCount = 2; // Data dummy awal
            let isCameraOn = false;

            // Dummy Data Anggota untuk simulasi scan
            const dummyMembers = [
                { name: "Reza Rahadian", class: "Kelas 12 Bahasa" },
                { name: "Budi Santoso", class: "Kelas 10 IPA 3" },
                { name: "Nadhira Ayu", class: "Kelas 11 IPS 2" },
                { name: "Bapak Herman", class: "Guru Olahraga" }
            ];

            // 1. Fungsi Toggle Kamera
            btnToggleCamera.addEventListener('click', () => {
                isCameraOn = !isCameraOn;

                if (isCameraOn) {
                    // UI Kamera Nyala
                    cameraOffState.classList.add('hidden');
                    cameraOnState.classList.remove('hidden');

                    // Ubah gaya tombol jadi aktif (Biru)
                    btnToggleCamera.classList.remove('bg-slate-100', 'text-slate-600', 'border-slate-200');
                    btnToggleCamera.classList.add('bg-blue-50', 'text-blue-600', 'border-blue-200');

                    iconCamera.classList.remove('fa-video-slash');
                    iconCamera.classList.add('fa-video');
                    textCamera.textContent = 'Kamera: ON';

                    // Memulai simulasi "Autoscan" (Bakal dapat data pengunjung setiap 4 detik untuk demo)
                    simulateScanning();
                } else {
                    // UI Kamera Mati
                    cameraOnState.classList.add('hidden');
                    cameraOffState.classList.remove('hidden');

                    // Ubah gaya tombol kembali semula (Abu-abu)
                    btnToggleCamera.classList.remove('bg-blue-50', 'text-blue-600', 'border-blue-200');
                    btnToggleCamera.classList.add('bg-slate-100', 'text-slate-600', 'border-slate-200');

                    iconCamera.classList.remove('fa-video');
                    iconCamera.classList.add('fa-video-slash');
                    textCamera.textContent = 'Kamera: OFF';

                    // Hentikan simulasi
                    clearInterval(scanInterval);
                }
            });

            // 3. Simulasi Masuknya Data (Berfungsi agar tampilan terlihat interaktif)
            function simulateScanning() {
                scanInterval = setInterval(() => {
                    // Pilih anggota acak
                    const randomMember = dummyMembers[Math.floor(Math.random() * dummyMembers.length)];

                    // Dapatkan waktu saat ini
                    const now = new Date();
                    const timeString = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')} WIB`;

                    visitorCount++;

                    // Buat baris (row) baru di HTML
                    const newRow = document.createElement('tr');
                    newRow.className = "hover:bg-slate-50 transition-colors bg-emerald-50/30 animate-pop-in";
                    newRow.innerHTML = `
                        <td class="px-6 py-4 text-center text-slate-400 font-medium">${visitorCount}</td>
                        <td class="px-6 py-4 font-bold text-slate-800">${randomMember.name}</td>
                        <td class="px-6 py-4 text-slate-500">${randomMember.class}</td>
                        <td class="px-6 py-4 text-center">
                            <span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded font-mono text-xs font-bold border border-emerald-200">${timeString}</span>
                        </td>
                    `;

                    // Masukkan baris baru ke posisi paling atas di tabel
                    visitorTableBody.insertBefore(newRow, visitorTableBody.firstChild);

                    // Update penghitung
                    totalVisitorCounter.textContent = `Total: ${visitorCount}`;

                    // Hapus baris paling bawah jika lebih dari 10 baris (agar UI rapi)
                    if (visitorTableBody.children.length > 10) {
                        visitorTableBody.removeChild(visitorTableBody.lastChild);
                    }

                    // Tampilkan Notifikasi Melayang (Toast)
                    showToastNotification(randomMember.name);

                    // Hilangkan efek hijau pada baris setelah beberapa saat
                    setTimeout(() => {
                        newRow.classList.remove('bg-emerald-50/30');
                    }, 2000);

                }, 4500); // 4.5 detik sekali simulasi jalan
            }

            // Fungsi menampikan toast
            function showToastNotification(name) {
                toastName.innerHTML = `Selamat datang, <span class="font-bold text-slate-800">${name}</span>`;

                // Animasi masuk
                toastNotification.classList.remove('translate-x-full', 'opacity-0');

                // Hilangkan setelah 3 detik
                setTimeout(() => {
                    toastNotification.classList.add('translate-x-full', 'opacity-0');
                }, 3000);
            }

        });
    </script>
</body>
</html>
