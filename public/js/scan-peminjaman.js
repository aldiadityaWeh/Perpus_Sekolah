document.addEventListener('DOMContentLoaded', function() {

    // Variabel UI UI
    const btnPlay = document.getElementById('btnPlay');
    const btnStop = document.getElementById('btnStop');
    const cameraOffMessage = document.getElementById('cameraOffMessage');
    const scannerOverlay = document.getElementById('scannerOverlay');
    const cameraStatus = document.getElementById('cameraStatus');
    const hasilScanInput = document.getElementById('hasilScan');
    const beepSound = document.getElementById('beepSound');

    // Panel Anggota & Buku
    const namaAnggotaText = document.getElementById('namaAnggotaText');
    const nisnAnggotaText = document.getElementById('nisnAnggotaText');
    const panelAnggota = document.getElementById('panelAnggota');
    const tableBukuPinjam = document.getElementById('tableBukuPinjam');
    const rowKosongBuku = document.getElementById('rowKosongBuku');

    // State Variabel
    let html5QrCode;
    let isScanning = false;
    let countBuku = 0;
    let scannedBooks = []; // Menyimpan kode buku agar tidak dobel scan

    // 1. FUNGSI MENYALAKAN KAMERA
    if(btnPlay) {
        btnPlay.addEventListener('click', () => {
            cameraOffMessage.classList.add('hidden');
            scannerOverlay.classList.remove('hidden');

            btnPlay.classList.add('hidden');
            btnStop.classList.remove('hidden');

            cameraStatus.innerHTML = `
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
            `;

            html5QrCode = new Html5Qrcode("reader");
            const config = { fps: 10, qrbox: { width: 250, height: 250 } };

            html5QrCode.start(
                { facingMode: "environment" },
                config,
                onScanSuccess,
                onScanFailure
            ).then(() => {
                isScanning = true;
            }).catch((err) => {
                showNotification("Akses kamera ditolak oleh browser!", false);
                stopCameraUI();
            });
        });
    }

    // 2. FUNGSI MEMATIKAN KAMERA
    if(btnStop) {
        btnStop.addEventListener('click', () => {
            if (html5QrCode && isScanning) {
                html5QrCode.stop().then(() => {
                    html5QrCode.clear();
                    isScanning = false;
                    stopCameraUI();
                }).catch(err => {
                    console.log("Gagal mematikan kamera", err);
                });
            }
        });
    }

    function stopCameraUI() {
        cameraOffMessage.classList.remove('hidden');
        scannerOverlay.classList.add('hidden');
        btnPlay.classList.remove('hidden');
        btnStop.classList.add('hidden');
        cameraStatus.innerHTML = `
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-rose-500"></span>
        `;
    }

    // 3. FUNGSI JIKA BARCODE/QR BERHASIL TERBACA
    function onScanSuccess(decodedText, decodedResult) {
        hasilScanInput.value = decodedText;
        playBeep();

        if (html5QrCode && isScanning) html5QrCode.pause();

        // Asumsi: Kode Buku diawali "BK-", jika tidak berarti NISN
        if (decodedText.startsWith("BK-") || decodedText.startsWith("bk-")) {
            prosesScanBuku(decodedText);
        } else {
            prosesScanAnggota(decodedText);
        }

        setTimeout(() => {
            if (html5QrCode && isScanning) {
                html5QrCode.resume();
                hasilScanInput.value = "";
            }
        }, 2000);
    }

    function onScanFailure(error) { /* Abaikan untuk deteksi per-frame */ }

    // --- FUNGSI FETCH DATA DARI DATABASE ---

    function prosesScanAnggota(nisn) {
        namaAnggotaText.textContent = "Mencari data...";

        fetch(`/admin/api/cek-anggota/${nisn}`)
            .then(response => response.json())
            .then(res => {
                if(res.success) {
                    const anggota = res.data;
                    const namaKelas = anggota.kelas ? anggota.kelas.nama_kelas : 'Tanpa Kelas';

                    namaAnggotaText.textContent = `${anggota.nama} (${namaKelas})`;
                    namaAnggotaText.className = "text-sm font-bold text-blue-800 mb-0.5";
                    nisnAnggotaText.textContent = "NISN: " + anggota.nisn;

                    panelAnggota.className = "flex items-center gap-4 p-4 rounded-xl shadow-sm transition-all duration-300 bg-blue-50 border border-blue-300 scale-[1.02]";
                    setTimeout(() => panelAnggota.classList.remove('scale-[1.02]'), 200);
                    showNotification(`Identitas Peminjam: ${anggota.nama}`, true);
                } else {
                    namaAnggotaText.textContent = "Anggota Tidak Ditemukan!";
                    namaAnggotaText.className = "text-sm font-bold text-rose-800 mb-0.5";
                    nisnAnggotaText.textContent = "NISN: " + nisn;
                    panelAnggota.className = "flex items-center gap-4 p-4 rounded-xl shadow-sm transition-all duration-300 bg-rose-50 border border-rose-300";
                    showNotification(res.message, false);
                }
            })
            .catch(err => {
                showNotification("Gagal terhubung ke server!", false);
            });
    }

    function prosesScanBuku(kodeBuku) {
        if(scannedBooks.includes(kodeBuku)) {
            showNotification("Buku ini sudah ada di daftar pinjam!", false);
            return;
        }

        fetch(`/admin/api/cek-buku/${kodeBuku}`)
            .then(response => response.json())
            .then(res => {
                if(res.success) {
                    const buku = res.data;
                    if (rowKosongBuku) rowKosongBuku.style.display = 'none';

                    countBuku++;
                    scannedBooks.push(buku.kode_buku); // Simpan ke array

                    const tr = document.createElement('tr');
                    tr.className = "hover:bg-slate-50 transition-colors border-b border-slate-100 bg-emerald-50/50";
                    tr.setAttribute('data-kode', buku.kode_buku);

                    tr.innerHTML = `
                        <td class="px-5 py-3 text-center text-slate-500 font-medium">${countBuku}</td>
                        <td class="px-5 py-3"><span class="font-mono font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded">${buku.kode_buku}</span>
                            <input type="hidden" name="buku_id[]" value="${buku.id}">
                        </td>
                        <td class="px-5 py-3 font-semibold text-slate-700">${buku.judul}</td>
                        <td class="px-5 py-3 text-center">
                            <button type="button" class="text-rose-500 hover:text-rose-700 transition-colors btn-remove-buku"><i class="fa-solid fa-xmark"></i></button>
                        </td>
                    `;

                    // Logic Hapus Buku dari daftar
                    tr.querySelector('.btn-remove-buku').addEventListener('click', function() {
                        const kode = tr.getAttribute('data-kode');
                        scannedBooks = scannedBooks.filter(k => k !== kode); // Hapus dari array
                        tr.remove();
                        if(scannedBooks.length === 0 && rowKosongBuku) rowKosongBuku.style.display = '';
                    });

                    tableBukuPinjam.appendChild(tr);
                    showNotification(`Buku ditambahkan: ${buku.judul}`, true);

                    setTimeout(() => tr.classList.remove('bg-emerald-50/50'), 1000);
                } else {
                    showNotification(res.message, false);
                }
            })
            .catch(err => {
                showNotification("Gagal mencari data buku!", false);
            });
    }

    // Fitur Notifikasi Pop-up Kustom (Menghindari Alert bawaan Browser)
    function showNotification(message, isSuccess = true) {
        const notif = document.createElement('div');
        notif.className = `fixed top-5 right-5 px-6 py-4 rounded-xl shadow-2xl z-[100] text-white font-bold transition-all duration-300 transform scale-100 flex items-center gap-3 ${isSuccess ? 'bg-emerald-500' : 'bg-rose-500'}`;
        notif.innerHTML = `<i class="fa-solid ${isSuccess ? 'fa-check' : 'fa-triangle-exclamation'} text-xl"></i> <span>${message}</span>`;
        document.body.appendChild(notif);

        setTimeout(() => {
            notif.classList.add('opacity-0', 'translate-y-[-20px]');
            setTimeout(() => notif.remove(), 300);
        }, 3000);
    }

    // Fungsi Beep
    function playBeep() {
        const context = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = context.createOscillator();
        const gainNode = context.createGain();
        oscillator.type = 'sine';
        oscillator.frequency.value = 800;
        gainNode.gain.setValueAtTime(1, context.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.001, context.currentTime + 0.1);
        oscillator.connect(gainNode);
        gainNode.connect(context.destination);
        oscillator.start();
        oscillator.stop(context.currentTime + 0.1);
    }

    // Input Manual & Tombol Enter (Scanner Tembak)
    const formScan = document.getElementById('formScan');
    if(formScan) {
        formScan.addEventListener('submit', function(e) {
            e.preventDefault();
            const val = hasilScanInput.value.trim();
            if(val) {
                if (val.startsWith("BK-") || val.startsWith("bk-")) prosesScanBuku(val);
                else prosesScanAnggota(val);
                hasilScanInput.value = "";
            }
        });
    }
});
