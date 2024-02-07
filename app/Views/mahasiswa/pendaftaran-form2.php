<!-- belum ganti name pada form -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>BeasiswaBI &mdash; Dashboard</title>
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
        <!-- left col -->
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <h6 class="fontrobotpendaftaran-700">Upload Berkas</h6>
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">KTP</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">KTM (Kartu Tanda Mahasiswa)</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">KHS (Kartu Hasil Studi)</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Surat Rekomendasi Tokoh</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">CV</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Motivation Letter</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12 mt-3" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Surat Keterangan Sedang Tidak Menerima Beasiswa</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Surat Keterangan Tidak Mampu (SKTM)</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <!-- Upload Berkas Prestasi -->
                <div class="col-12 mt-3">
                    <h6 class="fontrobotpendaftaran-700">Upload Berkas Prestasi</h6>
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Surat Keterangan Tidak Mampu (SKTM)</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Sertifikat Magang</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="namalengkap" class="form-label fontroboto300">Sertifikat Nasional/Internasional</label>
                        <input type="file" class="form-control bordercustomformp" id="namalengkap" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                </div>
                <!-- End Upload Berkas Prestasi -->
            </div>
        </div>
        <!-- end left col -->
        <!-- right col -->
        <div class="col-6" style="margin-left: 100px;">
            <div class="row">
                <!-- Minat, Bakat dan Keterampilan -->
                <div class="col-12">
                    <h6 class="fontrobotpendaftaran-700">Minat, Bakat dan Keterampilan</h6>
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="alamat_lengkap_sktp" class="form-label fontroboto300">Minat</label>
                        <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -5px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="alamat_lengkap_sktp" class="form-label fontroboto300">Bakat</label>
                        <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -5px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="alamat_lengkap_sktp" class="form-label fontroboto300">ketrampilan Hidup</label>
                        <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-12" style="margin-top: -5px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="alamat_lengkap_sktp" class="form-label fontroboto300">Potensi Dalam Diri</label>
                        <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="2"></textarea>
                    </div>
                </div>
                <!-- end Minat, Bakat dan Keterampilan -->
                <!-- Pengalaman Organisasi -->
                <div class="col-12" style="margin-top: 25px;">
                    <h6 class="fontrobotpendaftaran-700 mb-2">Pengalaman Organisasi</h6>
                    <div class=" mt-3 mb-3 ms-2">
                        <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="4"></textarea>
                    </div>
                </div>
                <!-- end Pengalaman Organisasi -->
                <!-- Motivasi -->
                <div class="col-12" style="margin-top: 30px;">
                    <h6 class="fontrobotpendaftaran-700 mb-2">Motivasi</h6>
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="alamat_lengkap_sktp" class="form-label fontroboto300" style="font-weight: 600;">APAKAH ANDA SIAP DAN BERPERAN AKTIF DALAM KEPENGURUSAN DAN KEGIATAN KOMUNITAS PENERIMA BEASISWA BANK INDONESIA </label>
                    </div>
                </div>
                <div class="col-5 ms-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" style="margin-left: 7px;margin-top: 2px;font-size: 15px;" for="exampleCheck1">Ya</label>
                </div>
                <div class="col-5">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" style="margin-left: 7px;margin-top: 2px;font-size: 15px;" for="exampleCheck1">Tidak</label>
                </div>
                <!-- end Motivasi -->
                <!-- Potensi dalam diri -->
                <div class="col-12" style="margin-top: 20px;">
                    <div class=" mt-3 mb-3 ms-2">
                        <label for="alamat_lengkap_sktp" class="form-label fontroboto300">Potensi Dalam Diri</label>
                        <textarea class="form-control" id="alamat_lengkap_sktp" name="alamat_lengkap_sktp" rows="2"></textarea>
                    </div>
                </div>
                <!-- end potensi dalam diri -->
            </div>
        </div>
        <!-- end right col -->
        <div class="mb-3 text-center mt-4">
            <button type="submit" style="color: #fff;" class="btn btncustompendaftaran2">Simpan</button>
        </div>
    </div>
    <!-- end identitas -->

</div>
<?= $this->endSection() ?>