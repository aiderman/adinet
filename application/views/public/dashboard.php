<?php $this->load->view("public/header"); ?>

<!-- Revolution Slider -->
<section class="no-top no-bottom" aria-label="section-slider">
    <div class="fullwidthbanner-container">
        <div id="revolution-slider-full">
            <ul>
                <li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                    <img src="<?= base_url() ?>assets/images-slider/1.jpg" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center" />
                </li>
                <li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                    <img src="<?= base_url() ?>assets/images-slider/2.jpg" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center" />
                    <div class="tp-caption slide-big-heading sft" data-x="center" data-y="50" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                        <img src="<?= base_url() ?>assets/img/logo.png" alt="Logo" style="max-width: 300px; margin-top: 115px; height: auto;" />
                    </div>
                    <div class="tp-caption slide-sub-heading sft" data-x="center" data-y="350" data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer hide"></div>
        </div>
    </div>
</section>
<!-- Revolution Slider End -->

<!-- Section Home -->
<section aria-label="section" class="s-bot" style="background-color: #FBF4DB;">
    <div class="container-fluid">
        <div class="row p-3-vh">
            <div class="col-md-12 " style="background-color:#EFDCAB; color:#834634; padding-block: 100px; border-radius: 50px; ">
                <form>
                    <div class="form-row align-items-center font-weight-bold">
                        <div class="form-group col-md-3">
                            <label for="tanggal">Pilih Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="jam">Jam Kirim</label>
                            <input type="time" class="form-control" id="jam" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="jumlahPax">Jumlah Pax</label>
                            <input type="number" class="form-control" id="jumlahPax" required>
                        </div>
                        <div class="form-group col-md-3"> <label for=""></label>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color:#834634;">checkout</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <BR></BR>
    <BR></BR>
    <!-- Menu Vertikal -->
    <div class="container">
        <div class="row align-items-left">
            <div class="col-sm">
                <button class="btn btn-secondary btn-lg btn-block" style="background-color:#dfa13c;" onclick="updateTable('1')">Paket 1</button>
                <button class="btn btn-secondary btn-lg btn-block" style="background-color:#dfa13c;" onclick="updateTable('2')">Paket 2</button>
                <button class="btn btn-secondary btn-lg btn-block" style="background-color:#dfa13c;" onclick="updateTable('3')">Paket 3</button>
            </div>
            <div class="col-9">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Harga</th>
                            <th>Nama Makanan</th>
                            <th>Paket Group</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan ditampilkan di sini -->
                    </tbody>
                </table>
                <div id="pagination" class="pagination"></div> <!-- Kontainer untuk pagination -->
            </div>

        </div>
    </div>

</section>
<!-- Section Home End -->

<script>
    // Data paket untuk mengisi tabel
    const packageData = <?= json_encode($allItem); ?>; // Mengambil data dari PHP ke JavaScript

    // Fungsi untuk memperbarui tabel berdasarkan paket yang dipilih
    function updateTable(packageID) {
        const tableBody = document.querySelector('#dataTable tbody');
        tableBody.innerHTML = ''; // Kosongkan tabel sebelumnya

        packageData.forEach(row => {
            if (row.id_paket == packageID) {
                const tableRow = document.createElement('tr');

                // Isi detail dari baris paket
                tableRow.innerHTML = `
                    <td>${row.label}</td>
                    <td>${parseFloat(row.price).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}</td>
                    <td>${row.food_name}</td>
                    <td>${row.paket_group}</td>
                `;
                tableBody.appendChild(tableRow);
            }
        });
    }
</script>

<?php $this->load->view("public/footer"); ?>