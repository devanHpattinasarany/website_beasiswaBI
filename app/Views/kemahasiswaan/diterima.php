<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Pendaftaran</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="mt-2">
                <h2>Pendaftar “Beasiswa Bank Indonesia”</h2>
            </div>
        </div>
    </div>

    <div class="row justify-content-end" style="margin-top: 50px; margin-bottom: 20px;">
        <div class="col-1 text-center">
            <label for="" class="form-label fontroboto400" style="margin-top: 6.8px;">Cari :</label>
        </div>
        <div class="col-3" style="margin-left: -30px;">
            <input type="text" class="form-control" id="">
        </div>
    </div>


    <!-- list pendaftar beasiswa -->
    <div class="row">
        <div class="col">
            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0 text-center fontroboto400">
                    <thead style="background-color: #0C1A49; color: #fff;">
                        <tr>
                            <th scope="col" class="fontroboto400">Nama Mahasiswa</th>
                            <th scope="col" class="fontroboto400">Program Studi</th>
                            <th scope="col" class="fontroboto400">IP Semester</th>
                            <th scope="col" class="fontroboto400">Status</th>
                            <th scope="col" class="fontroboto400">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <!-- Lakukan looping untuk setiap baris data yang di ambil dari database-->
                        <?php if (!empty($pendaftarans)) : ?>
                            <?php foreach ($pendaftarans as $pendaftaran) : ?>
                                <tr>
                                    <td>
                                        <!-- Tampilkan nama mahasiswa -->
                                        <p class="mb-0"><?= $pendaftaran->nama_lengkap; ?></p>
                                    </td>
                                    <td>
                                        <!-- Tampilkan program studi -->
                                        <p class="mb-0"><?= $pendaftaran->program_studi; ?></p>
                                    </td>
                                    <td>
                                        <!-- Tampilkan IP semester -->
                                        <p class="mb-0"><?= $pendaftaran->ip_semester_terakhir; ?></p>
                                    </td>
                                    <td>
                                        <!-- Tampilkan status mahasiswa -->
                                        <span class="badge 
                                        <?php
                                        if ($pendaftaran->status == 'Diterima') {
                                            echo 'bg-success';
                                        } elseif ($pendaftaran->status == 'Ditolak') {
                                            echo 'bg-danger';
                                        } else {
                                            echo 'bg-warning';
                                        }
                                        ?>">
                                            <?= $pendaftaran->status; ?>
                                        </span>


                                    </td>
                                    <td>
                                        <a href="">
                                            <button type="submit" style="color: #fff;" class="btn btncustompendaftartablesimpan">Lihat Detail</button>
                                        </a>
                                        <form action="/pendaftar/updateStatus" method="POST" style="display: inline-block;">
                                            <input type="hidden" name="mahasiswa_id" value="<?= $pendaftaran->npm_nim ?>">
                                            <input type="hidden" name="action" value="diterima">
                                            <button type="submit" style="color: #fff;" class="btn btncustompendaftartableterima">Terima</button>
                                        </form>
                                        <form action="/pendaftar/updateStatus" method="POST" style="display: inline-block;">
                                            <input type="hidden" name="mahasiswa_id" value="<?= $pendaftaran->npm_nim; ?>">
                                            <input type="hidden" name="action" value="ditolak">
                                            <button type="submit" style="color: #fff;" class="btn btncustompendaftartabletolak">Tolak</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end list pendaftar beasiswa -->

</div>
<?= $this->endSection() ?>