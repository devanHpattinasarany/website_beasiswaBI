<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Dashboard</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="mt-2">
                <h2>Profile</h2>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-4">
            <img src="<?= base_url() ?>/assets/images/profile/bg_img.png" alt="">
        </div>
        <div class="col-4 mlnegative-85">
            <form>
                <div class="mb-3">
                    <label for="namalengkap" class="form-label fontroboto300">Nama Lengkap</label>
                    <input type="text" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="ttl" class="form-label fontroboto300">TTL</label>
                    <input type="date" class="form-control" id="ttl" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label fontroboto300">Jenis Kelamin</label>
                    <select id="jenis_kelamin" class="form-select">
                        <option></option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label fontroboto300">Agama</label>
                    <select id="agama" class="form-select">
                        <option></option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label fontroboto300">Alamat</label>
                    <input type="text" class="form-control bordercustomformp" id="alamat" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>


                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div>
        <div class="col-4 mleftprofile-40">
            <form action="">
                <div class="mb-3">
                    <label for="username" class="form-label fontroboto300">Username</label>
                    <input type="text" class="form-control bordercustomformp" id="username" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fontroboto300">Email</label>
                    <input type="email" class="form-control bordercustomformp" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fontroboto300">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" style="color: #fff;" class="btn btncustomprofile">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 mlnegative-85">
            <div class="mb-3">
                <label for="asal_universitas" class="form-label fontroboto300">Asal Universitas</label>
                <select id="asal_universitas" class="form-select">
                    <option></option>
                </select>
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label fontroboto300">Program Studi</label>
                <input type="text" class="form-control bordercustomformp" id="program_studi" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="nim_npm" class="form-label fontroboto300">NIM/NPM</label>
                <input type="text" class="form-control bordercustomformp" id="nim_npm" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>