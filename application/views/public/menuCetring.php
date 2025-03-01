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
                            Menu Catering
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
                    <li class="filt-projects-w selected" data-project=".paket1">PAKET 1
                    </li>
                    <li class="filt-projects-w" data-project=".paket2">PAKET 2
                    </li>
                    <li class="filt-projects-w" data-project=".paket3">PAKET 3
                    </li>
                </ul>
            </div>

            <div class="col-12 px-0 w-gallery-container">
                <?php foreach ($paket1 as $row) : ?>
                    <div class="col-md-3 w-gallery paket1">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 320px; width: 320px;">
                                <div class="date" style="background-color: #dfa13c; border-radius: 6px;">
                                    <?= $row->food_name; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($paket2 as $row) : ?>
                    <div class="col-md-3 w-gallery paket2">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 320px; width: 320px;">
                                <div class="date" style="background-color: #dfa13c; border-radius: 6px;"> <?= $row->food_name; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($paket3 as $row) : ?>
                    <div class="col-md-3 w-gallery paket3">
                        <div class="content-col">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/menu/<?= $row->img; ?>" alt="menu" style="height: 320px; width: 320px;">
                                <div class="date" style="background-color: #dfa13c; border-radius: 6px;"> <?= $row->food_name; ?>
                                </div>
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