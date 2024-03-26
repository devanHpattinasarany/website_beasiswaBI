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
    <form method="POST" action="/pendaftar/hal-1">
        <!-- identitas -->
        <div class="row mt-5">
            <div class="col-8">
                <h6 class="fontrobotpendaftaran-700">Identitas</h6>
                <div class=" mt-3 mb-3 ms-2">
                    <label for="nama_lengkap" class="form-label fontroboto300">Nama Lengkap</label>
                    <input type="text" class="form-control bordercustomformp" id="nama_lengkap" name="nama_lengkap" aria-describedby="namaLengkapHelp">
                    <div id="namaLengkapHelp" class="form-text">Masukkan nama lengkap Anda.</div>
                    <div class="invalid-feedback">
                        Nama lengkap wajib diisi.
                    </div>
                </div>
            </div>

            <div class="col-4"></div>
            <div class="col-4">
                <div class="mb-3 ms-2">
                    <label for="tempat_lahir" class="form-label fontroboto300">Tempat Lahir</label>
                    <input type="text" class="form-control bordercustomformp" id="tempat_lahir" name="tempat_lahir" aria-describedby="tempatLahirHelp">
                    <div id="tempatLahirHelp" class="form-text">Masukkan tempat lahir Anda.</div>
                    <div class="invalid-feedback">
                        Tempat lahir wajib diisi.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3 ms-2">
                    <label for="tanggal_lahir" class="form-label fontroboto300">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" aria-describedby="tanggalLahirHelp">
                    <div id="tanggalLahirHelp" class="form-text">Masukkan tanggal lahir Anda.</div>
                    <div class="invalid-feedback">
                        Tanggal lahir wajib diisi.
                    </div>
                </div>
            </div>
        </div>
        <!-- end identitas -->


        <!-- jenis kelamin -->
        <div class="row mt-4">
            <div class="col-4">
                <h6 class="fontrobotpendaftaran-700">Jenis Kelamin</h6>
                <div class="mb-3 form-check" style="margin-left: 15px;margin-top: 25px;">
                    <input type="radio" class="form-check-input" id="laki-laki" name="jenis_kelamin" value="Laki-Laki">
                    <label class="form-check-label" style="margin-left: 7px;margin-top: 2px;font-size: 15px;" for="laki-laki">Laki-Laki</label>
                </div>
            </div>
            <div class="col-4" style=" margin-top: 18px;">
                <div class="mb-3 form-check" style="margin-left: 7px;margin-top: 25px;">
                    <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label" style="margin-left: 15px;margin-top: 2px;font-size: 15px;" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4" style=" margin-top: 30px;">
                <div class=" ms-2">
                    <label for="agama" class="form-label fontroboto300">Agama</label>
                    <select id="agama" class="form-select" name="agama">
                        <option value=""></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <div class="invalid-feedback">
                        Harap pilih agama.
                    </div>
                </div>
            </div>
            <div class="col-4" style=" margin-top: 30px;">
                <div class=" ms-2">
                    <label for="gol_darah" class="form-label fontroboto300">Golongan Darah</label>
                    <select id="gol_darah" class="form-select" name="gol_darah">
                        <option value=""></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <div class="invalid-feedback">
                        Harap pilih golongan darah.
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-8">
                <div class="mt-3 mb-3 ms-2">
                    <label for="suku_bangsa" class="form-label fontroboto300">Suku Bangsa</label>
                    <input type="text" class="form-control bordercustomformp" id="suku_bangsa" name="suku_bangsa" aria-describedby="sukuBangsaHelp">
                    <div id="sukuBangsaHelp" class="form-text">Suku bangsa wajib diisi.</div>
                    <div class="invalid-feedback">
                        Suku bangsa wajib diisi.
                    </div>
                </div>
            </div>

        </div>
        <!-- end jenis kelamin -->


        <!-- Perguruan Tinggi -->
        <div class="row mt-4">
            <div class="col-4">
                <h6 class="fontrobotpendaftaran-700">Perguruan Tinggi</h6>
                <div class=" mt-3 mb-3 ms-2">
                    <label for="fakultas" class="form-label fontroboto300">Fakultas</label>
                    <input type="text" class="form-control bordercustomformp" id="fakultas" name="fakultas" aria-describedby="fakultasHelp">
                    <div id="fakultasHelp" class="form-text">Fakultas wajib diisi.</div>
                    <div class="invalid-feedback">
                        Fakultas wajib diisi.
                    </div>
                </div>
            </div>
            <?php if (in_groups('mahasiswa')) : ?>
                <div class="col-4" style="margin-top: 18px;">
                    <div class="mt-3 mb-3 ms-2">
                        <label for="npm_nim" class="form-label fontroboto300">NPM/NIM</label>
                        <input type="text" class="form-control bordercustomformp" id="npm_nim" aria-describedby="npmNimHelp" value="<?= $mahasiswa['npm_nim'] ?>" disabled>
                        <div id="npmNimHelp" class="form-text"></div>
                        <div class="invalid-feedback">
                            NPM/NIM wajib diisi.
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="mb-3 ms-2">
                    <label for="program_studi" class="form-label fontroboto300">Jurusan/Program Studi</label>
                    <input type="text" class="form-control bordercustomformp" id="program_studi" name="program_studi" aria-describedby="program_studiHelp">
                    <div id="program_studiHelp" class="form-text"></div>
                    <div class="invalid-feedback">
                        Jurusan/Program Studi wajib diisi.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3 ms-2">
                    <label for="ip_semester_terakhir" class="form-label fontroboto300">IP Semester Terakhir</label>
                    <input type="text" class="form-control" id="ip_semester_terakhir" name="ip_semester_terakhir" aria-describedby="ip_semester_akhirHelp">
                    <div id="ip_semester_akhirHelp" class="form-text"></div>
                    <div class="invalid-feedback">
                        IP Semester Terakhir wajib diisi.
                    </div>
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
                    <input type="text" class="form-control bordercustomformp" id="provinsi" name="provinsi" aria-describedby="provinsiHelp">
                    <div id="provinsiHelp" class="form-text"></div>
                    <div class="invalid-feedback">
                        Harap masukkan nama provinsi.
                    </div>
                </div>
            </div>
            <div class="col-4" style=" margin-top: 18px;">
                <div class=" mt-3 mb-3 ms-2">
                    <label for="kabupaten" class="form-label fontroboto300">Kabupaten</label>
                    <input type="text" class="form-control bordercustomformp" id="kabupaten" aria-describedby="kabupatenHelp" name="kabupaten">
                    <div id="kabupatenHelp" class="form-text"></div>
                    <div class="invalid-feedback">
                        Harap masukkan nama kabupaten.
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-8">
                <div class=" mt-3 mb-3 ms-2">
                    <label for="alamat_ktp" class="form-label fontroboto300">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" rows="2"></textarea>
                    <div class="invalid-feedback">
                        Alamat lengkap sesuai KTP wajib diisi.
                    </div>
                </div>
            </div>
        </div>
        <!-- end Alamat Sesuai KTP -->


        <!-- Alamat Domisili -->
        <div class="row mt-4">
            <div class="col-8">
                <h6 class="fontrobotpendaftaran-700">Alamat Domisili saat ini</h6>
                <div class="mt-3 mb-3 ms-2">
                    <label for="alamat_domisili" class="form-label fontroboto300">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat_domisili" name="alamat_domisili" aria-describedby="alamatDomisiliHelp" rows="2"></textarea>
                    <div id="alamatDomisiliHelp" class="form-text">Masukkan alamat lengkap Anda sesuai domisili saat ini.</div>
                </div>
            </div>
        </div>

        <!-- end Alamat Domisili -->

        <!-- kontak personal -->
        <div class="row mt-4">
            <div class="col-4">
                <h6 class="fontrobotpendaftaran-700">Kontak Personal</h6>
                <div class="mt-3 mb-3 ms-2">
                    <label for="email" class="form-label fontroboto300">Alamat E-mail</label>
                    <input type="email" class="form-control bordercustomformp" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Masukkan alamat email Anda.</div>
                </div>
            </div>
            <div class="col-4" style="margin-top: 18px;">
                <div class="mt-3 mb-3 ms-2">
                    <label for="facebook" class="form-label fontroboto300">Facebook</label>
                    <input type="text" class="form-control bordercustomformp" id="facebook" name="facebook" aria-describedby="facebookHelp">
                    <div id="facebookHelp" class="form-text">Masukkan akun Facebook Anda.</div>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="mt-3 mb-3 ms-2">
                    <label for="instagram" class="form-label fontroboto300">Instagram</label>
                    <input type="text" class="form-control bordercustomformp" id="instagram" name="instagram" aria-describedby="instagramHelp">
                    <div id="instagramHelp" class="form-text">Masukkan akun Instagram Anda.</div>
                </div>
            </div>
            <div class="col-4">
                <div class="mt-3 mb-3 ms-2">
                    <label for="no_whatsapp" class="form-label fontroboto300">No Whatsapp</label>
                    <input type="text" class="form-control bordercustomformp" id="no_whatsapp" name="no_whatsapp" aria-describedby="no_whatsappHelp">
                    <div id="no_whatsappHelp" class="form-text">Masukkan nomor WhatsApp Anda.</div>
                </div>
            </div>
        </div>

        <!-- end kontak personal -->

        <!-- data orangtua -->
        <div class="row mt-4">
            <div class="col-4">
                <h6 class="fontrobotpendaftaran-700">Data Orang Tua</h6>
                <div class="mt-3 mb-3 ms-2">
                    <label for="nama_ayah" class="form-label fontroboto300">Nama Ayah</label>
                    <input type="text" class="form-control bordercustomformp" id="nama_ayah" name="nama_ayah" aria-describedby="namaAyahHelp">
                    <div id="namaAyahHelp" class="form-text">Masukkan nama lengkap ayah Anda.</div>
                </div>
            </div>
            <div class="col-4" style="margin-top: 18px;">
                <div class="mt-3 mb-3 ms-2">
                    <label for="nama_ibu" class="form-label fontroboto300">Nama Ibu</label>
                    <input type="text" class="form-control bordercustomformp" id="nama_ibu" name="nama_ibu" aria-describedby="namaIbuHelp">
                    <div id="namaIbuHelp" class="form-text">Masukkan nama lengkap ibu Anda.</div>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="mt-3 mb-3 ms-2">
                    <label for="pekerjaan_ayah" class="form-label fontroboto300">Pekerjaan Ayah</label>
                    <input type="text" class="form-control bordercustomformp" id="pekerjaan_ayah" name="pekerjaan_ayah" aria-describedby="pekerjaanAyahHelp">
                    <div id="pekerjaanAyahHelp" class="form-text">Masukkan pekerjaan ayah Anda.</div>
                </div>
            </div>
            <div class="col-4">
                <div class="mt-3 mb-3 ms-2">
                    <label for="pekerjaan_ibu" class="form-label fontroboto300">Pekerjaan Ibu</label>
                    <input type="text" class="form-control bordercustomformp" id="pekerjaan_ibu" name="pekerjaan_ibu" aria-describedby="pekerjaanIbuHelp">
                    <div id="pekerjaanIbuHelp" class="form-text">Masukkan pekerjaan ibu Anda.</div>
                </div>
            </div>
        </div>

        <div class="col-8">
            <div class="mb-3 text-center mt-4">
                <button type="submit" style="color: #fff;" class="btn btncustompendaftaransimpanlanjut">Simpan & Lanjut</button>
            </div>
        </div>
    </form>
</div>
<!-- end data orangtua -->

</div>
<?= $this->endSection() ?>