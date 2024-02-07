<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Pendaftaran</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="mt-2">
                <h2>Pendaftaran</h2>
            </div>
        </div>
    </div>

    <!-- identitas -->
    <div class="row mt-5">
        <div class="col-8">
            <h6 class="fontrobotpendaftaran-700">Identitas</h6>
            <div class=" mt-3 mb-3 ms-2">
                <label for="namalengkap" class="form-label fontroboto300">Nama Lengkap</label>
                <input type="text" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="mb-3 ms-2">
                <label for="tempat_lahir" class="form-label fontroboto300">Tempat Lahir</label>
                <input type="text" class="form-control bordercustomformp" id="tempat_lahir" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3 ms-2">
                <label for="tanggal_lahir" class="form-label fontroboto300">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
    </div>
    <!-- end identitas -->

    <!-- jenis kelamin -->
    <div class="row mt-4">
        <div class="col-4">
            <h6 class="fontrobotpendaftaran-700">Jenis Kelamin</h6>
            <div class="mb-3 form-check" style="margin-left: 15px;margin-top: 25px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" style="margin-left: 7px;margin-top: 2px;font-size: 15px;" for="exampleCheck1">Laki-Laki</label>
            </div>
        </div>
        <div class="col-4" style=" margin-top: 18px;">
            <div class="mb-3 form-check" style="margin-left: 7px;margin-top: 25px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" style="margin-left: 15px;margin-top: 2px;font-size: 15px;" for="exampleCheck1">Perempuan</label>
            </div>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4" style=" margin-top: 30px;">
            <div class=" ms-2">
                <label for="agama" class="form-label fontroboto300">Agama</label>
                <select id="agama" class="form-select">
                    <option></option>
                </select>
            </div>
        </div>
        <div class="col-4" style=" margin-top: 30px;">
            <div class=" ms-2">
                <label for="golongan_darah" class="form-label fontroboto300">Golongan Darah</label>
                <select id="golongan_darah" class="form-select">
                    <option></option>
                </select>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-8">
            <div class=" mt-3 mb-3 ms-2">
                <label for="suku_bangsa" class="form-label fontroboto300">Suku Bangsa</label>
                <input type="text" class="form-control bordercustomformp" id="suku_bangsa" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
    </div>
    <!-- end jenis kelamin -->

    <!-- Perguruan Tinggi -->
    <div class="row mt-4">
        <div class="col-4">
            <h6 class="fontrobotpendaftaran-700">Perguruan Tinggi</h6>
            <div class=" mt-3 mb-3 ms-2">
                <label for="namalengkap" class="form-label fontroboto300">Fakultas</label>
                <input type="text" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4" style=" margin-top: 18px;">
            <div class=" mt-3 mb-3 ms-2">
                <label for="namalengkap" class="form-label fontroboto300">NPM/NIM</label>
                <input type="text" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="mb-3 ms-2">
                <label for="jurusan_program_studi" class="form-label fontroboto300">Jurusan/Program Studi</label>
                <input type="text" class="form-control bordercustomformp" id="jurusan_program_studi" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3 ms-2">
                <label for="ip_semester_terakhir" class="form-label fontroboto300">IP Semester Terakhir</label>
                <input type="text" class="form-control" id="ip_semester_terakhir" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
    </div>
    <!-- end Perguruan Tinggi -->

    <!-- Alamat Sesuai KTP -->
    <div class="row mt-4">
        <div class="col-4">
            <h6 class="fontrobotpendaftaran-700">Alamat Sesuai KTP</h6>
            <div class=" mt-3 mb-3 ms-2">
                <label for="provinsi" class="form-label fontroboto300">Provinsi</label>
                <select id="provinsi" class="form-select">
                    <option></option>
                </select>
            </div>
        </div>
        <div class="col-4" style=" margin-top: 18px;">
            <div class=" mt-3 mb-3 ms-2">
                <label for="kabupaten" class="form-label fontroboto300">Kabupaten</label>
                <select id="kabupaten" class="form-select">
                    <option></option>
                </select>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-8">
            <div class=" mt-3 mb-3 ms-2">
                <label for="alamat_lengkap_sktp" class="form-label fontroboto300">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="2"></textarea>
            </div>
        </div>
    </div>
    <!-- end Alamat Sesuai KTP -->

    <!-- Alamat Domisili -->
    <div class="row mt-4">
        <div class="col-8">
            <h6 class="fontrobotpendaftaran-700">Alamat Domisili saat ini</h6>
            <div class=" mt-3 mb-3 ms-2">
                <label for="alamat_lengkap_domisili" class="form-label fontroboto300">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat_lengkap_domisili" name="alamat_lengkap_domisili" rows="2"></textarea>
            </div>
        </div>
    </div>
    <!-- end Alamat Domisili -->

    <!-- kontak personal -->
    <div class="row mt-4">
        <div class="col-4">
            <h6 class="fontrobotpendaftaran-700">Kontak Personal</h6>
            <div class=" mt-3 mb-3 ms-2">
                <label for="exampleInputEmail1" class="form-label fontroboto300">Alamat E-mail</label>
                <input type="email" class="form-control bordercustomformp" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4 " style=" margin-top: 18px;">
            <div class=" mt-3 mb-3 ms-2">
                <label for="facebook" class="form-label fontroboto300">Facebook</label>
                <input type="email" class="form-control bordercustomformp" id="facebook" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class=" mt-3 mb-3 ms-2">
                <label for="instagram" class="form-label fontroboto300">Instagram</label>
                <input type="email" class="form-control bordercustomformp" id="instagram" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4">
            <div class=" mt-3 mb-3 ms-2">
                <label for="no_whatsapp" class="form-label fontroboto300">No Whatsapp</label>
                <input type="email" class="form-control bordercustomformp" id="no_whatsapp" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
    </div>
    <!-- end kontak personal -->

    <!-- data orangtua -->
    <div class="row mt-4">
        <div class="col-4">
            <h6 class="fontrobotpendaftaran-700">Data Orang Tua</h6>
            <div class=" mt-3 mb-3 ms-2">
                <label for="nama_ayah" class="form-label fontroboto300">Nama Ayah</label>
                <input type="text" class="form-control bordercustomformp" id="nama_ayah" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4" style=" margin-top: 18px;">
            <div class=" mt-3 mb-3 ms-2">
                <label for="nama_ibu" class="form-label fontroboto300">Nama Ibu</label>
                <input type="text" class="form-control bordercustomformp" id="nama_ibu" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class=" mt-3 mb-3 ms-2">
                <label for="pekerjaan_ayah" class="form-label fontroboto300">Pekerjaan Ayah</label>
                <input type="text" class="form-control bordercustomformp" id="pekerjaan_ayah" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-4">
            <div class=" mt-3 mb-3 ms-2">
                <label for="pekerjaan_ibu" class="form-label fontroboto300">Pekerjaan Ibu</label>
                <input type="text" class="form-control bordercustomformp" id="pekerjaan_ibu" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-8">
            <div class="mb-3 text-center mt-4">
                <button type="submit" style="color: #fff;" class="btn btncustompendaftaran1">Simpan</button>
            </div>
        </div>
    </div>
    <!-- end data orangtua -->

</div>
<?= $this->endSection() ?>