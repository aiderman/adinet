<!-- validasi inputan -->
<script>
    document.getElementById('orderForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dikirim sebelum validasi

        const tanggalInput = document.getElementById('tanggal');
        const jumlahPaxInput = document.getElementById('jumlahPax');

        // Mendapatkan tanggal saat ini + 5 hari
        const today = new Date();
        const minDate = new Date();
        minDate.setDate(today.getDate() + 5);

        // Format tanggal untuk perbandingan
        const formattedMinDate = minDate.toISOString().split('T')[0];

        // Validasi Tanggal
        if (tanggalInput.value < formattedMinDate) {
            alert("Pilih Tanggal minimal H+5 dari hari ini.");
            return;
        }

        // Validasi Jumlah Pax
        if (jumlahPaxInput.value < 50) {
            alert("Jumlah Pax minimal 50.");
            return;
        }

        // Jika semua validasi lolos, kirim form
        alert("Form valid, melanjutkan ke proses selanjutnya.");

        // Di sini, Anda bisa melakukan submit form, misalnya menggunakan AJAX
        // this.submit(); // Uncomment ini jika ingin mengirim form
    });
</script>

<!-- validasi paket -->
<script>
    const itemsPerPage = 10; // Jumlah item per halaman
    let currentPage = 1; // Halaman saat ini
    let selectedPackageId; // Variabel untuk menyimpan ID paket yang dipilih

    // Data paket untuk mengisi tabel
    const packageData = <?= json_encode($allItem); ?>; // Mengambil data dari PHP ke JavaScript

    // Fungsi untuk memilih paket dan memperbarui tabel
    function setPackageAndLoad(packageID) {
        selectedPackageId = packageID;
        currentPage = 1; // Reset ke halaman pertama setiap kali paket berubah
        updateTable(selectedPackageId);
    }

    // Fungsi untuk memperbarui tabel berdasarkan paket yang dipilih
    function updateTable(packageID) {
        const tableBody = document.querySelector('#dataTable tbody');
        tableBody.innerHTML = ''; // Kosongkan tabel sebelumnya

        // Filter data berdasarkan packageID
        const filteredData = packageData.filter(row => row.id_paket === packageID);

        // Hitung jumlah total halaman
        const totalPages = Math.ceil(filteredData.length / itemsPerPage);

        // Ambil data untuk halaman saat ini
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const currentItems = filteredData.slice(startIndex, endIndex);

        currentItems.forEach((row, index) => {
            const tableRow = document.createElement('tr');

            // Isi detail dari baris paket dengan nomor urut
            tableRow.innerHTML = `
                <td>${startIndex + index + 1}</td>
                <td>${row.food_name}</td>
                <td colspan="10">${parseFloat(row.price).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}</td>
            `;
            tableBody.appendChild(tableRow);
        });

        // Pembaruan tombol pagination
        updatePagination(totalPages);
    }

    // Fungsi untuk memperbarui pagination
    function updatePagination(totalPages) {
        const paginationContainer = document.querySelector('#pagination');
        paginationContainer.innerHTML = ''; // Kosongkan sebelumnya

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.innerText = i;
            button.classList.add('pagination-button', 'btn', 'btn-light', 'mx-1'); // Tambahkan kelas untuk style
            button.onclick = () => {
                currentPage = i; // Set halaman saat ini
                updateTable(selectedPackageId); // Perbarui tabel dengan data baru
            };
            paginationContainer.appendChild(button);
        }
    }
</script>