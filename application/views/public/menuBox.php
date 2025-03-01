<?php $this->load->view("public/headerLink"); ?>
<?php $this->load->view('public/header'); ?>

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

<!-- section menu -->
<section aria-label="section" class="s-bot s-top">
    <div class="container-fluid">
        <div class="row p-3-vh">
            <div class="col-12 text-center">
                <div class="main-content">
                    <div class="heading">
                        <div class="title l-1">
                            Menu Box
                        </div>
                    </div>
                    <div class="desc m-auto">
                        Everyone has taste, even if they don't realize it. Even if you're not a great chef,
                        there's nothing to stop you understanding the difference between what taste good and what doesn't.
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <ul id="filter-porto">
                    <li class="filt-projects-w selected" data-project=".paket1">25k
                    </li>
                    <li class="filt-projects-w" data-project=".paket2">30k
                    </li>
                    <li class="filt-projects-w" data-project=".paket3">35k
                    </li>
                    <li class="filt-projects-w" data-project=".paket4">40k
                    </li>
                </ul>
            </div>

            <div class="col-12 px-0 w-gallery-container">
                <?php foreach ($box25 as $row) : ?>
                    <div class="col-md-3 w-gallery paket1">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 400px; width: 400px;">
                            </div>
                            <div class="content-gallery-text">
                                <strong><?= $row->label; ?></strong>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($box30 as $row) : ?>
                    <div class="col-md-3 w-gallery paket2">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 400px; width: 400px;">
                            </div>
                            <div class="content-gallery-text">
                                <strong><?= $row->label; ?></strong>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($box35 as $row) : ?>
                    <div class="col-md-3 w-gallery paket3">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 400px; width: 400px;">
                            </div>
                            <div class="content-gallery-text">
                                <strong><?= $row->label; ?></strong>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($box40 as $row) : ?>
                    <div class="col-md-3 w-gallery paket4">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 400px; width: 400px;">
                            </div>
                            <div class="content-gallery-text">
                                <strong><?= $row->label; ?></strong>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- section menu end -->

<?php $this->load->view("public/script") ?>

<?php $this->load->view("public/footer"); ?>