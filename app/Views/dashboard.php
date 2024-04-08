<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Dashboard</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <h2>Dasboard</h2>
            </div>
            <div class="mt-4">
                <h2 class="fw-bolder hjfsminheight">
                    Hallo,<br><?= user()->username; ?>
                </h2>
                <p class="ukimld"><?= $asalKampus; ?>

                    <?php if ($cek == 0) : ?>
                        | <span class="text-danger fst-italic">( Lengkapi data )
                        </span>
                    <?php endif; ?>

                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card border-radius-forcard-custom shadow">
                <div class="card-body text-center">
                    <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/pendaftarandanseleksi.svg" alt="">
                    <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                </div>
                <div class="card-footer cf text-center">
                    <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-radius-forcard-custom shadow">
                <div class="card-body text-center">
                    <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/phs.svg" alt="">
                    <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                </div>
                <div class="card-footer cf text-center">
                    <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-radius-forcard-custom shadow">
                <div class="card-body text-center">
                    <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/seleksi_wawancara.svg" alt="">
                    <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                </div>
                <div class="card-footer cf text-center">
                    <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-radius-forcard-custom shadow">
                <div class="card-body text-center">
                    <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/pengumuman_hsw.svg" alt="">
                    <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                </div>
                <div class="card-footer cf text-center">
                    <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-4">
            <div class="row">
                <div class="col-2">
                    <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/ketentuan.svg" alt="">
                </div>
                <div class="col-4 nav-linkk active">
                    <p class="fw-bolder tprimary kukcustom">Ketentuan<br>Umum & Khusus</p>
                </div>
                <div class="col-2 margin-15px">
                    <img src="<?= base_url() ?>/assets/images/icons/persyratan.svg" alt="">
                </div>
                <div class="col-4 nav-linkk">
                    <p class="fw-bolder tprimary kukcustom">Persyaratan<br>Dokumen</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col tprimary">
            <p>1. Merupakan mahasiswa aktif program S1 yang dibuktikan dengan Kartu Tanda Mahasiswa atau surat keterangan aktif.</p>
            <p class="margint-10px">
                2. Sekurang-kurangnya telah menyelesaikan 40 (empat puluh) satuan kredit semester (SKS) atau 3 (tiga) semester.
            </p>
            <p class="margint-10px">
                3. Setiap mahasiswa, menerima beasiswa paling lama hanya 4 (empat) semester sepanjang memenuhi kriteria yang telah ditentukan.
            </p>
            <p class="margint-10px">
                4. Maksimal berusia 23 tahun atau belum berusia 24 tahun pada saat ditetapkan sebagai penerima beasiswa.
            </p>
            <p class="margint-10px">
                5. TIdak sedang menerima beasiswa dari lembaga lain dan/atau berada dalam status ikatan dinas dari lembaga/instansi lain.
            </p>
            <p class="margint-10px">
                6. Mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi masyarakat.
            </p>
            <p class="margint-10px">
                7. Bersedia untuk berperan aktif, mengelola dan mengembangkan Generasi Baru Indonesia (GenBI) serta berpartisipasi dalam kegiatan yang diselenggarakan oleh Bank Indonesia.
            </p>
            <p class="margint-10px">
                8. Bagi mahasiswa yang berasal dari latar belakang ekonomi keluarga kurang mampu (pra sejahtera) yang dibuktikan dengan adanya Surat Keterangan Tidak Mampu (SKTM) dari kelurahan/desa domisili orang tua mahasiswa.
            </p>
            <p class="margint-10px">
                9. Membuat resume pribadi dan motivation letter dalam bahasa Indonesia.
            </p>
            <p class="margint-10px">
                10. Menyertakan surat rekomendasi dari 1 tokoh (akademik dan non-akademik).
            </p>
        </div>
    </div>



</div>
<?= $this->endSection() ?>