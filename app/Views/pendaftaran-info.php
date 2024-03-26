<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Pendaftaran</title>
<?= $this->endSection() ?>




<?= $this->section('content') ?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="mt-2">
                <h2>Pendaftaran Info</h2>
            </div>
        </div>
    </div>
    <?php if ($dataPendaftaran['status'] == 'pending') : ?>
        <!-- status pending -->
        <div class="row mt-5">
            <div class="col-12" style="background-color: #0C1A49; padding: 8px; border-radius: 8px;">
                <span>
                    <img src="<?= base_url() ?>/assets/images/icons/Info.svg" alt="" style="margin-bottom: 3px;">
                </span>
                <span class="fontrobotoinfo" style="font-size: medium; color: white; margin-left: 5px;">Terima kasih telah mendaftar “Beasiswa Bank Indonesia”</span>
            </div>
        </div>
        <!-- end status pending -->
    <?php endif; ?>

    <?php if ($dataPendaftaran['status'] == 'diterima') : ?>
        <!-- status diterima -->
        <div class="row mt-5">
            <div class="col-12" style="background-color: #52CC74; padding: 8px; border-radius: 8px;">
                <span>
                    <img src="<?= base_url() ?>/assets/images/icons/InfoCircle.svg" alt="" style="margin-bottom: 3px;">
                </span>
                <span class="fontrobotoinfo" style="font-size: medium; color: white; margin-left: 5px;">Berkas anda telah diterima</span>
            </div>
        </div>
        <!-- end status diterima -->
    <?php endif; ?>

    <?php if ($dataPendaftaran['status'] == 'ditolak') : ?>
        <!-- status ditolak -->
        <div class="row mt-5">
            <div class="col-12" style="background-color: #F03434; padding: 8px; border-radius: 8px;">
                <span>
                    <img src="<?= base_url() ?>/assets/images/icons/Danger.svg" alt="" style="margin-bottom: 3px;">
                </span>
                <span class="fontrobotoinfo" style="font-size: medium; color: white; margin-left: 5px;">Maaf! Berkas Anda Tidak Diterima</span>
            </div>
        </div>
        <!-- end status ditolak -->
    <?php endif; ?>

</div>
<!-- end data orangtua -->

</div>
<?= $this->endSection() ?>