document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.getElementById("tableBody");

    if (searchInput && tableBody) {
        const rows = tableBody.getElementsByTagName("tr");

        searchInput.addEventListener("keyup", function() {
            const filter = searchInput.value.toLowerCase();
            let matchFound = false;

            for (let i = 0; i < rows.length; i++) {
                // Lewati baris "Belum ada data" jika tabel kosong
                if (rows[i].cells.length === 1) continue;

                let rowHasMatch = false;

                // Cari kecocokan di elemen dengan class 'pencarian-data' (yakni kolom NISN dan Nama)
                const cellsToSearch = rows[i].querySelectorAll('.pencarian-data');

                cellsToSearch.forEach(function(cell) {
                    const textValue = cell.textContent || cell.innerText;
                    if (textValue.toLowerCase().indexOf(filter) > -1) {
                        rowHasMatch = true;
                    }
                });

                if (rowHasMatch) {
                    rows[i].style.display = "";
                    matchFound = true;
                } else {
                    rows[i].style.display = "none";
                }
            }

            // Jika Anda menambahkan elemen pesan "Data tidak ditemukan" di index.blade.php,
            // Anda bisa menangkap elemen tersebut dengan document.getElementById('noMatchMessage')
            // lalu atur class 'hidden'-nya di sini.
        });
    }
});
