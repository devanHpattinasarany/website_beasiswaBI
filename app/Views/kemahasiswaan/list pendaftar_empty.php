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
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <span class=" mb-4" style="color: white; background-color: #F03434; border-radius: 5px; padding: 5px">Belum Ada Yang Mendaftar</span>
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
                        <tr>
                            <td>
                                <!-- Tampilkan nama mahasiswa -->
                                <p class="mb-0">X</p>
                            </td>
                            <td>
                                <!-- Tampilkan program studi -->
                                <p class="mb-0">X</p>
                            </td>
                            <td>
                                <!-- Tampilkan IP semester -->
                                <p class="mb-0">X</p>
                            </td>
                            <td>
                                <!-- Tampilkan status mahasiswa -->
                                <span class="badge bg-secondary rounded-3 fw-semibold">X</span>
                            </td>
                            <td>
                                <button type="submit" style="color: #fff;" class="btn btncustompendaftartablesimpan">Lihat Detail</button>
                                <button type="submit" style="color: #fff;" class="btn btncustompendaftartableterima">Terima</button>
                                <button type="submit" style="color: #fff;" class="btn btncustompendaftartabletolak">Tolak</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end list pendaftar beasiswa -->

</div>
<?= $this->endSection() ?>