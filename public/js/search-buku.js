document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.getElementById("tableBody");

    if(searchInput && tableBody) {
        const tableRows = tableBody.getElementsByTagName("tr");
        const noMatchMessage = document.getElementById("noMatchMessage");

        searchInput.addEventListener("input", function() {
            const filterValue = searchInput.value.toLowerCase();
            let matchFound = false;

            for (let i = 0; i < tableRows.length; i++) {
                let row = tableRows[i];

                // Mengabaikan baris "Belum ada data" jika data kosong (hanya 1 <td>)
                if(row.getElementsByTagName("td").length === 1) continue;

                let cells = row.getElementsByTagName("td");
                let rowHasMatch = false;

                // Cari berdasarkan Judul (index 2), Pengarang (index 3), dan Penerbit (index 4)
                for (let j = 2; j <= 4; j++) {
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
