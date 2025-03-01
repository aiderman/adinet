<?php $this->load->view("public/headerLink"); ?>
<?php $this->load->view("public/header"); ?>

<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('<?= base_url(); ?>assets/images-slider/7.jpg');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="main">

                    <img class="img-fluid" style="height: 30%; margin-top: 245px;" src="<?= base_url(); ?>assets/img/logo.png">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcumb end -->

<!-- Section Home -->
<section aria-label="section" class="s-bot" style="background-color: #FBF4DB;">
    <div class="container-fluid">
        <div class="row p-3-vh">
            <div class="col-12 text-center">
                <div class="main-content">
                    <div class="heading">
                        <div class="title l-1">
                            Reservation
                        </div>
                    </div>
                    <div class="desc m-auto">
                        Everyone has taste, even if they don't realize it. Even if you're not a great chef,
                        there's nothing to stop you understanding the difference between what taste good and what doesn't.
                    </div>
                </div>
            </div>
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
                <button class="btn btn-secondary btn-lg btn-block " style="background-color:#dfa13c; " onclick="updateTable('1')">Paket 1</button>
                <button class="btn btn-secondary btn-lg btn-block " style="background-color:#dfa13c;" onclick="updateTable('2')">Paket 2</button>
                <button class="btn btn-secondary btn-lg btn-block " style="background-color:#dfa13c; " onclick="updateTable('3')">Paket 3</button>
            </div>
            <div class="col-9">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Makanan</th>
                            <th>Harga</th>
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
    <!-- Gambar untuk order via WhatsApp -->
</section>
<!-- Section Home End -->

<?php $this->load->view("public/script") ?>

<?php $this->load->view("public/footer"); ?>