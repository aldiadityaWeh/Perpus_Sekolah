<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Buku - SMARTPERPUS</title>
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

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</head>
<body class="bg-[#f4f7f6] font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-blue-200 selection:text-blue-900">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-2xl shrink-0 transition-all duration-300 z-20 hidden md:flex">
        <div class="h-20 flex items-center px-6 border-b border-slate-700/50 bg-[#0f172a] shrink-0">
            <img src="{{ asset('images/logo-sd.png') }}" alt="Logo SD" class="h-8 w-8 object-contain mr-3 bg-white rounded-full p-0.5 shadow-sm" onerror="this.src='https://placehold.co/100x100/ffffff/1e293b?text=SD'">
            <span class="font-bold text-lg tracking-wider text-white">SMART<span class="text-blue-400">PERPUS</span></span>
        </div>

        <nav class="flex-1 overflow-y-auto py-6 custom-scrollbar">
            <ul class="space-y-1.5 px-3">
                <li><a href="/admin/dashboard" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-gauge-high w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Dashboard</a></li>
                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Master Data</li>
                <li><a href="/admin/buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-book w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Buku</a></li>
                <li><a href="/admin/ddc" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-list-ol w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Klasifikasi DDC</a></li>
                <li><a href="/admin/sumber-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-boxes-packing w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Sumber Buku</a></li>
                <li><a href="/admin/jenis-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-bookmark w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Jenis Buku</a></li>
                <li><a href="/admin/kategori-buku" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-tags w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Kategori Buku</a></li>
                <li><a href="/admin/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Anggota</a></li>
                <li><a href="/admin/kelas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-school w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Data Kelas</a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Transaksi</li>
                <li><a href="/admin/transaksi/peminjaman" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-barcode w-6 text-center mr-2 group-hover:text-emerald-400 transition-colors"></i> Scan Peminjaman</a></li>
                <li><a href="/admin/transaksi/pengembalian" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group flex justify-between"><div class="flex items-center"><i class="fa-solid fa-clipboard-check w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Verifikasi Kembali</div></a></li>

                <li class="pt-5 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Laporan</li>
                <li><a href="/admin/laporan/anggota" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-address-card w-6 text-center mr-2 group-hover:text-blue-400 transition-colors"></i> Laporan Anggota</a></li>
                <li>
                    <a href="/admin/laporan/buku" class="flex items-center px-4 py-3 bg-blue-600/10 text-blue-400 border border-blue-500/20 rounded-xl font-semibold shadow-inner transition-all">
                        <i class="fa-solid fa-book-open w-6 text-center mr-2"></i> Laporan Buku
                    </a>
                </li>
                <li><a href="/admin/laporan/kas" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-file-invoice-dollar w-6 text-center mr-2 group-hover:text-rose-400 transition-colors"></i> Laporan Kas (Denda)</a></li>
                <li><a href="/admin/laporan/pengunjung" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition-all group"><i class="fa-solid fa-users-viewfinder w-6 text-center mr-2 group-hover:text-amber-400 transition-colors"></i> Laporan Pengunjung</a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative bg-[#f4f7f6]">

        <header class="h-20 bg-white shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] flex items-center justify-between px-4 md:px-8 z-10 shrink-0">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-slate-500 hover:text-blue-600"><i class="fa-solid fa-bars text-xl"></i></button>
                <div>
                    <div class="hidden md:flex items-center text-sm text-slate-500 mb-1 font-semibold gap-2">
                        <span class="hover:text-blue-600 cursor-pointer">Laporan</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-slate-800">Laporan Buku</span>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800 tracking-tight leading-none">Laporan & Katalog Buku</h2>
                </div>
            </div>

            <div class="flex items-center gap-4 md:gap-6">
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=0f172a&color=fff&bold=true" class="w-10 h-10 rounded-full ring-2 ring-slate-100 group-hover:ring-blue-200 transition-all object-cover">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="hidden sm:block text-left">
                        <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Budi Santoso</p>
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Kepala Perpus</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6 custom-scrollbar">
            <div class="max-w-[1400px] mx-auto space-y-6">

                <div class="bg-[#4eb4f5] text-white rounded-lg p-5 shadow-sm border border-[#3ba0de] flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-1.5"><i class="fa-solid fa-circle-info text-xl opacity-90"></i><h3 class="font-bold text-xl">Informasi</h3></div>
                    <p class="text-sm text-white/90">Berikut ini adalah rekapitulasi data <strong>KATALOG BUKU PERPUSTAKAAN</strong>. Anda dapat mencetak laporan data koleksi maupun mencetak label punggung buku secara massal.</p>
                </div>

                <!-- Bagian Form Cetak Label -->
                <div class="max-w-3xl mb-8">
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-white">
                            <div class="flex items-center gap-2"><i class="fa-solid fa-tags text-slate-700 text-lg"></i><h3 class="font-bold text-slate-800">Cetak Label Semua Barcode</h3></div>
                            <!-- Tombol PDF Merah di Header, panggil script cetak massal -->
                            <button type="button" onclick="handleCetakMassal(event)" class="w-8 h-8 rounded bg-[#dc3545] hover:bg-[#c82333] text-white flex items-center justify-center text-sm shadow-sm transition-colors cursor-pointer" title="Cetak Semua Label"><i class="fa-solid fa-file-pdf"></i></button>
                        </div>

                        <div class="p-6 flex-1 flex flex-col justify-center space-y-4 bg-slate-50/30">
                            <!-- Form Cetak Massal -->
                            <form onsubmit="handleCetakMassal(event)">
                                <div class="bg-blue-50 text-blue-700 p-3 rounded-lg border border-blue-200 text-sm mb-4 flex items-center gap-2">
                                    <i class="fa-solid fa-circle-info"></i> Sistem akan otomatis mencetak label buku sesuai dengan data yang tampil di tabel pencarian bawah secara berkolom.
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" id="btnCetakMassal" class="bg-[#198754] hover:bg-[#157347] text-white px-5 py-2.5 rounded-lg shadow-sm transition-colors flex items-center gap-2 font-medium text-sm">
                                        <i class="fa-solid fa-print"></i> <span>Cetak</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden mt-6">
                    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center justify-between border-b border-slate-100 bg-white gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-database text-slate-800 text-lg"></i>
                            <h3 class="font-bold text-slate-800 text-lg">Data Katalog & Inventaris Buku</h3>
                        </div>
                        <div class="relative w-full md:w-80">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" placeholder="Ketik Kode/Judul untuk filter cepat..." class="w-full bg-slate-50 border border-slate-300 rounded-lg py-2 pl-9 pr-3 text-sm focus:ring-1 focus:ring-blue-500 outline-none shadow-sm placeholder:text-slate-400">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-100/80 text-slate-500 text-[11px] uppercase tracking-widest border-b border-slate-200">
                                    <th class="px-6 py-4 font-bold text-center w-16">No</th>
                                    <th class="px-6 py-4 font-bold">Kode / QR</th>
                                    <th class="px-6 py-4 font-bold">Judul Buku</th>
                                    <th class="px-6 py-4 font-bold">Klasifikasi & Kategori</th>
                                    <th class="px-6 py-4 font-bold text-center">Stok</th>
                                    <th class="px-6 py-4 font-bold text-center w-32">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-700 text-[13px] divide-y divide-slate-100" id="tableBody">
                                @forelse($data_buku as $index => $buku)
                                <tr class="hover:bg-slate-50 transition-colors group">
                                    <td class="px-6 py-4 text-center font-medium text-slate-500">
                                        {{ ($data_buku->currentPage() - 1) * $data_buku->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-mono text-slate-800 font-bold mb-1 pencarian-data">{{ $buku->kode_buku }}</div>
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data={{ $buku->kode_buku }}" alt="QR Code" class="w-10 h-10 mix-blend-multiply border border-slate-200 p-0.5 rounded bg-white">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800 mb-0.5 line-clamp-2 pencarian-data">{{ $buku->judul }}</div>
                                        <div class="text-[11px] text-slate-500 font-medium">Oleh: {{ $buku->pengarang ?? '-' }} | Thn: {{ $buku->tahun_terbit ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="w-3 h-3 rounded-full shadow-sm border border-slate-200 shrink-0" style="background-color: {{ $buku->ddc->warna_label ?? '#ccc' }};"></span>
                                            <span class="font-bold text-slate-700 text-xs">{{ $buku->ddc->kode_ddc ?? '-' }} - {{ $buku->ddc->kategori ?? '-' }}</span>
                                        </div>
                                        <div class="text-[11px] text-slate-500 font-medium">Kat: {{ $buku->kategori->nama_kategori ?? '-' }} | Sumber: {{ $buku->sumber->nama_sumber ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-blue-50 text-blue-600 font-bold px-3 py-1 rounded">{{ $buku->stok }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button onclick="downloadCustomLabel('{{ $buku->kode_buku }}', '{{ $buku->ddc->warna_label ?? '#94a3b8' }}', '{{ $buku->ddc->kode_ddc ?? 'UMUM' }}')" class="inline-flex items-center justify-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-[11px] font-bold uppercase tracking-wider shadow-sm transition-colors w-full whitespace-nowrap">
                                            <i class="fa-solid fa-download text-sm"></i> Cetak
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fa-solid fa-book-open text-4xl mb-3 opacity-50"></i>
                                        <p>Tidak ada data buku yang sesuai dengan kriteria.</p>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div id="noMatchMessage" class="hidden text-center py-8 text-slate-500 font-medium bg-white">
                            <p>Data buku tidak ditemukan.</p>
                        </div>
                    </div>

                    <div class="px-6 py-4 border-t border-slate-100 bg-white">
                        {{ $data_buku->links('pagination::tailwind') }}
                    </div>
                </div>

                <div class="pt-2 pb-6 text-center md:text-left">
                    <p class="text-[13px] font-semibold text-slate-400">2026 &copy; SMARTPERPUS System. All rights reserved.</p>
                </div>

            </div>
        </main>
    </div>

    <!-- Script Area -->
    <script>
        // Fitur Pencarian Tabel
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll("#tableBody tr");
            const noMatchMessage = document.getElementById("noMatchMessage");

            if(searchInput) {
                searchInput.addEventListener("input", function() {
                    const filterValue = searchInput.value.toLowerCase();
                    let matchFound = false;

                    tableRows.forEach(row => {
                        if(row.children.length === 1) return;
                        const searchableCells = row.querySelectorAll(".pencarian-data");
                        let rowHasMatch = false;
                        searchableCells.forEach(cell => {
                            if (cell.textContent.toLowerCase().includes(filterValue)) rowHasMatch = true;
                        });
                        if (rowHasMatch) { row.style.display = ""; matchFound = true; }
                        else { row.style.display = "none"; }
                    });

                    if (!matchFound && filterValue !== "") noMatchMessage.classList.remove("hidden");
                    else noMatchMessage.classList.add("hidden");
                });
            }
        });

        // Script untuk Download 1 Label (Dari Tabel Aksi)
        function downloadCustomLabel(kodeBuku, ddcColor, ddcKode) {
            const canvas = document.createElement('canvas');
            canvas.width = 200;
            canvas.height = 290;
            const ctx = canvas.getContext('2d');

            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.strokeStyle = '#e2e8f0';
            ctx.lineWidth = 2;
            ctx.strokeRect(1, 1, canvas.width - 2, canvas.height - 2);

            const img = new Image();
            img.crossOrigin = 'Anonymous';

            img.onload = function() {
                ctx.drawImage(img, 25, 20, 150, 150);

                ctx.fillStyle = '#1e293b';
                ctx.font = 'bold 16px monospace';
                ctx.textAlign = 'center';
                ctx.fillText(kodeBuku, canvas.width / 2, 195);

                ctx.fillStyle = '#64748b';
                ctx.font = 'bold 14px sans-serif';
                ctx.fillText('DDC: ' + ddcKode, canvas.width / 2, 220);

                ctx.fillStyle = ddcColor;
                ctx.fillRect(0, 240, canvas.width, 50);

                ctx.fillStyle = '#ffffff';
                ctx.font = 'bold 11px sans-serif';
                ctx.fillText('PERPUS SDN 6', canvas.width / 2, 270);

                const link = document.createElement('a');
                link.download = 'Label_Buku_' + kodeBuku + '.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            };

            img.onerror = function() {
                alert('Gagal memuat QR Code. Pastikan koneksi internet aktif.');
            };

            img.src = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' + encodeURIComponent(kodeBuku);
        }

        // Script Mencetak Semua Label Buku Sesuai Tabel (Berbentuk Kertas/Grid)
        async function handleCetakMassal(e) {
            if (e) e.preventDefault();

            // Ambil tombol untuk efek loading
            const btnText = document.querySelector('#btnCetakMassal span');
            const btnIcon = document.querySelector('#btnCetakMassal i');
            if(btnText) btnText.textContent = "Memproses...";
            if(btnIcon) btnIcon.className = "fa-solid fa-spinner animate-spin";

            try {
                const rows = document.querySelectorAll("#tableBody tr");
                const booksToPrint = [];

                rows.forEach(row => {
                    // Ambil row yang tidak di-hide (sesuai filter tabel) dan bukan row "data kosong"
                    if (row.style.display !== "none" && row.children.length > 1) {
                        const kodeBuku = row.querySelector('td:nth-child(2) .font-mono').textContent.trim();
                        const spanWarna = row.querySelector('td:nth-child(4) span[style]');
                        const ddcColor = spanWarna ? spanWarna.style.backgroundColor : '#94a3b8';
                        const textDdc = row.querySelector('td:nth-child(4) .font-bold.text-slate-700').textContent.trim();
                        const ddcKode = textDdc.split('-')[0].trim();

                        booksToPrint.push({ kodeBuku, ddcColor, ddcKode });
                    }
                });

                if(booksToPrint.length === 0) {
                    alert("Tidak ada data untuk dicetak.");
                    resetBtn();
                    return;
                }

                // Pengaturan Ukuran Kertas Canvas (Grid)
                const canvas = document.createElement('canvas');
                const labelW = 200;
                const labelH = 290;
                const margin = 40;
                const gapX = 20;
                const gapY = 20;
                const cols = 5;
                const rowsCount = Math.ceil(booksToPrint.length / cols);

                canvas.width = margin * 2 + cols * labelW + (cols - 1) * gapX;
                canvas.height = margin * 2 + rowsCount * labelH + (rowsCount - 1) * gapY;

                const ctx = canvas.getContext('2d');
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                // Helper Load Gambar Asinkronus
                const loadImage = (src) => {
                    return new Promise((resolve) => {
                        const img = new Image();
                        img.crossOrigin = 'Anonymous';
                        img.onload = () => resolve(img);
                        img.onerror = () => resolve(null);
                        img.src = src;
                    });
                };

                // Proses Menggambar Baris per Baris (Grid)
                for(let i=0; i<booksToPrint.length; i++) {
                    const book = booksToPrint[i];
                    const col = i % cols;
                    const rowIdx = Math.floor(i / cols);

                    const x = margin + col * (labelW + gapX);
                    const y = margin + rowIdx * (labelH + gapY);

                    // Border Kotak Label
                    ctx.strokeStyle = '#e2e8f0';
                    ctx.lineWidth = 2;
                    ctx.strokeRect(x, y, labelW, labelH);

                    // Download Gambar QR API
                    const qrSrc = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' + encodeURIComponent(book.kodeBuku);
                    const img = await loadImage(qrSrc);

                    if(img) {
                        ctx.drawImage(img, x + 25, y + 20, 150, 150);
                    }

                    ctx.fillStyle = '#1e293b';
                    ctx.font = 'bold 16px monospace';
                    ctx.textAlign = 'center';
                    ctx.fillText(book.kodeBuku, x + labelW / 2, y + 195);

                    ctx.fillStyle = '#64748b';
                    ctx.font = 'bold 14px sans-serif';
                    ctx.fillText('DDC: ' + book.ddcKode, x + labelW / 2, y + 220);

                    ctx.fillStyle = book.ddcColor;
                    ctx.fillRect(x, y + 240, labelW, 50);

                    ctx.fillStyle = '#ffffff';
                    ctx.font = 'bold 11px sans-serif';
                    ctx.fillText('PERPUS SDN 6', x + labelW / 2, y + 270);
                }

                // Memicu Download Secara Otomatis
                const link = document.createElement('a');
                link.download = 'Cetak_Massal_Label_Buku.png';
                link.href = canvas.toDataURL('image/png');
                link.click();

            } catch(err) {
                console.error("Terjadi kesalahan saat memproses gambar:", err);
                alert("Gagal memproses gambar. Pastikan koneksi internet aktif.");
            }

            resetBtn();

            function resetBtn() {
                if(btnText) btnText.textContent = "Cetak";
                if(btnIcon) btnIcon.className = "fa-solid fa-print";
            }
        }
    </script>
</body>
</html>
