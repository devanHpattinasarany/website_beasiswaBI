<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Diterima</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="mt-2">
                <h2>Pendaftar lolos tahap I “Beasiswa Bank Indonesia”</h2>
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

    <div class="row">
        <div class="col">
            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0 text-center fontroboto400">
                    <thead style="background-color: #0C1A49; color: #fff;">
                        <tr>
                            <th scope="col" class="fontroboto400 ">Nama Mahasiswa</th>
                            <th scope="col" class="fontroboto400 ">Program Studi</th>
                            <th scope="col" class="fontroboto400 ">IP Semester</th>
                            <th scope="col" class="fontroboto400 ">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>

                            <td>
                                <p class="mb-0">Citra Mahdi</p>
                            </td>
                            <td>
                                <p class="mb-0">Informatika</p>
                            </td>
                            <td>
                                <p class="mb-0">4.00</p>
                            </td>
                            <td>
                                <a href="">
                                    <button type="submit" style="color: #fff;" class="btn btncustompendaftartablelihatdata">Lihat Data</button>
                                </a>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <p>Ridwan Joan</p>
                            </td>
                            <td>
                                <p class="mb-0">Informatika</p>
                            </td>
                            <td>
                                <p class="mb-0">4.00</p>
                            </td>
                            <td>
                                <a href="">
                                    <button type="submit" style="color: #fff;" class="btn btncustompendaftartablelihatdata">Lihat Data</button>
                                </a>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <p>Joan Ridwan</p>
                            </td>
                            <td>
                                <p class="mb-0">Informatika</p>
                            </td>
                            <td>
                                <p class="mb-0">4.00</p>
                            </td>
                            <td>
                                <a href="">
                                    <button type="submit" style="color: #fff;" class="btn btncustompendaftartablelihatdata">Lihat Data</button>
                                </a>
                            </td>
                        </tr>




                    </tbody>
                </table>
                <!-- <div class="d-flex align-items-center justify-content-end py-1">
                    <p class="mb-0 fs-2">Rows per page:</p>
                    <select class="form-select w-auto ms-0 ms-sm-2 me-8 me-sm-4 py-1 pe-7 ps-2 border-0" aria-label="Default select example">
                        <option selected="">5</option>
                        <option value="1">10</option>
                        <option value="2">25</option>
                    </select>
                    <p class="mb-0 fs-2">1–5 of 12</p>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center mb-0 ms-8 ms-sm-9">
                            <li class="page-item p-1">
                                <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-left"></i></a>
                            </li>
                            <li class="page-item p-1">
                                <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>