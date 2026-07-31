// public/js/search-kategori.js

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.getElementById("tableBody");

    if (searchInput && tableBody) {
        searchInput.addEventListener("keyup", function() {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName("tr");

            for (let i = 0; i < rows.length; i++) {
                // Jangan filter baris yang bertuliskan "Belum ada data"
                if (rows[i].cells.length === 1) continue;

                // Ambil elemen yang memiliki class 'nama-kategori' (kolom ke-2)
                const namaKategoriElement = rows[i].querySelector('.nama-kategori');

                if (namaKategoriElement) {
                    const textValue = namaKategoriElement.textContent || namaKategoriElement.innerText;

                    if (textValue.toLowerCase().indexOf(filter) > -1) {
                        rows[i].style.display = ""; // Tampilkan
                    } else {
                        rows[i].style.display = "none"; // Sembunyikan
                    }
                }
            }
        });
    }
});
