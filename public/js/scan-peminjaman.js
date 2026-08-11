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

    // Objek Scanner HTML5
    let html5QrCode;
    let isScanning = false;
    let countBuku = 0;

    // 1. FUNGSI MENYALAKAN KAMERA
    if(btnPlay) {
        btnPlay.addEventListener('click', () => {
            cameraOffMessage.classList.add('hidden');
            scannerOverlay.classList.remove('hidden');

            btnPlay.classList.add('hidden');
            btnStop.classList.remove('hidden');

            // Ubah indikator jadi hijau
            cameraStatus.innerHTML = `
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
            `;

            // Inisialisasi Scanner
            html5QrCode = new Html5Qrcode("reader");

            // Config Scanner
            const config = { fps: 10, qrbox: { width: 250, height: 250 } };

            html5QrCode.start(
                { facingMode: "environment" },
                config,
                onScanSuccess,
                onScanFailure
            ).then(() => {
                isScanning = true;
            }).catch((err) => {
                alert("Kamera gagal diakses! Pastikan Anda memberikan izin akses kamera pada Browser.");
                console.log(err);
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
        // A. Tulis ke kolom input
        hasilScanInput.value = decodedText;

        // B. Bunyikan beep
        playBeep();

        // C. Jeda sebentar kamera agar tidak scan berkali-kali cepat
        if (html5QrCode && isScanning) {
            html5QrCode.pause();
        }

        // D. Logika Membedakan Buku vs Anggota
        // Jika teks mengandung "BK-", anggap ini buku. Jika tidak, anggap NISN.
        if (decodedText.startsWith("BK-")) {
            prosesScanBuku(decodedText);
        } else {
            prosesScanAnggota(decodedText);
        }

        // E. Nyalakan lagi scanner setelah 2 detik
        setTimeout(() => {
            if (html5QrCode && isScanning) {
                html5QrCode.resume();
                hasilScanInput.value = "";
            }
        }, 2000);
    }

    function onScanFailure(error) {
        // Diabaikan, scanner membaca frame secara real-time
    }

    // --- FUNGSI MENGISI DATA KE LAYAR (UI SIMULASI) ---

    function prosesScanAnggota(nisn) {
        panelAnggota.classList.remove('bg-white', 'border-slate-200');
        panelAnggota.classList.add('bg-blue-50', 'border-blue-300');

        // Animasi pop
        panelAnggota.classList.add('scale-[1.02]');
        setTimeout(() => panelAnggota.classList.remove('scale-[1.02]'), 200);

        namaAnggotaText.textContent = "Ahmad Budi (Siswa Kelas 6A)";
        namaAnggotaText.classList.remove('text-slate-800');
        namaAnggotaText.classList.add('text-blue-800');
        nisnAnggotaText.textContent = "NISN: " + nisn;
    }

    function prosesScanBuku(kodeBuku) {
        if (rowKosongBuku) {
            rowKosongBuku.style.display = 'none';
        }

        countBuku++;
        const tr = document.createElement('tr');
        tr.className = "hover:bg-slate-50 transition-colors border-b border-slate-100 bg-emerald-50/20";

        const judul = countBuku % 2 === 0 ? "Buku Pelajaran Matematika" : "Ensiklopedia Sains Alam";

        tr.innerHTML = `
            <td class="px-5 py-3 text-center text-slate-500 font-medium">${countBuku}</td>
            <td class="px-5 py-3"><span class="font-mono font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded">${kodeBuku}</span></td>
            <td class="px-5 py-3 font-semibold text-slate-700">${judul}</td>
            <td class="px-5 py-3 text-center">
                <button type="button" class="text-rose-500 hover:text-rose-700 transition-colors" onclick="this.closest('tr').remove()"><i class="fa-solid fa-xmark"></i></button>
            </td>
        `;

        tableBukuPinjam.appendChild(tr);

        setTimeout(() => tr.classList.remove('bg-emerald-50/20'), 1000);
    }

    // Fungsi Beep Generator Native JS
    function playBeep() {
        const context = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = context.createOscillator();
        const gainNode = context.createGain();

        oscillator.type = 'sine';
        oscillator.frequency.value = 800; // Frekuensi Beep
        gainNode.gain.setValueAtTime(1, context.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.001, context.currentTime + 0.1);

        oscillator.connect(gainNode);
        gainNode.connect(context.destination);
        oscillator.start();
        oscillator.stop(context.currentTime + 0.1);
    }

    // Menerima input ketikan manual dan tombol Enter (Scanner Tembak)
    const formScan = document.getElementById('formScan');
    if(formScan) {
        formScan.addEventListener('submit', function(e) {
            e.preventDefault();
            const val = hasilScanInput.value.trim();
            if(val) {
                if (val.startsWith("BK-")) prosesScanBuku(val);
                else prosesScanAnggota(val);
                hasilScanInput.value = "";
            }
        });
    }
});
