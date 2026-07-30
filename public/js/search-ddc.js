document.addEventListener("DOMContentLoaded", function() {

    // Mengambil elemen input pencarian (berdasarkan placeholder)
    const searchInput = document.querySelector('input[placeholder="Cari kode DDC / kategori..."]');

    // Tambahkan ID ke input agar mudah ditargetkan jika sewaktu-waktu HTML berubah
    if(searchInput && !searchInput.id) {
        searchInput.id = "searchInput";
    }

    const tableBody = document.getElementById("tableBody");

    if(searchInput && tableBody) {
        const tableRows = tableBody.getElementsByTagName("tr");
        const noMatchMessage = document.getElementById("noMatchMessage");

        searchInput.addEventListener("input", function() {
            const filterValue = searchInput.value.toLowerCase();
            let matchFound = false;

            for (let i = 0; i < tableRows.length; i++) {
                let row = tableRows[i];

                // Abaikan baris "Belum ada data" jika ada
                if(row.getElementsByTagName("td").length === 1) continue;

                let cells = row.getElementsByTagName("td");
                let rowHasMatch = false;

                // Cek indeks ke-1 (Kode DDC) dan indeks ke-2 (Kategori)
                for (let j = 1; j <= 2; j++) {
                    if (cells[j]) {
                        let cellText = cells[j].textContent || cells[j].innerText;
                        if (cellText.toLowerCase().indexOf(filterValue) > -1) {
                            rowHasMatch = true;
                            break;
                        }
                    }
                }

                if (rowHasMatch) {
                    row.style.display = "";
                    matchFound = true;
                } else {
                    row.style.display = "none";
                }
            }

            if (!matchFound && filterValue !== "" && tableRows.length > 0 && tableRows[0].getElementsByTagName("td").length > 1) {
                noMatchMessage.classList.remove("hidden");
            } else {
                noMatchMessage.classList.add("hidden");
            }
        });
    }
});
