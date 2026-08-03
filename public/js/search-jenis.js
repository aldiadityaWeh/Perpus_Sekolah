document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const noMatchMessage = document.getElementById("noMatchMessage");

    if (searchInput) {
        searchInput.addEventListener("input", function() {
            const filterValue = this.value.toLowerCase();
            let matchFound = false;

            // Ambil semua baris data di tabel
            document.querySelectorAll(".table-row-item").forEach(row => {
                // Cari data berdasarkan class 'pencarian-data' (Kode & Nama)
                const searchableCells = row.querySelectorAll(".pencarian-data");
                let rowHasMatch = false;

                searchableCells.forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(filterValue)) {
                        rowHasMatch = true;
                    }
                });

                // Tampilkan atau sembunyikan baris
                if (rowHasMatch) {
                    row.style.display = "";
                    matchFound = true;
                } else {
                    row.style.display = "none";
                }
            });

            // Tampilkan pesan "Data tidak ditemukan" jika tidak ada yang cocok
            if (noMatchMessage) {
                if (!matchFound && filterValue !== "") {
                    noMatchMessage.classList.remove("hidden");
                } else {
                    noMatchMessage.classList.add("hidden");
                }
            }
        });
    }
});
