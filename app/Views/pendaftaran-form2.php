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

    <form action="/pendaftar/hal-2" method="post" enctype="multipart/form-data">
        <!-- identitas -->
        <div class="row mt-5">
            <!-- left col -->
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <h6 class="fontrobotpendaftaran-700">Upload Berkas KTP</h6>
                        <div class="mt-3 mb-3 ms-2">
                            <label for="file_ktp" class="form-label fontroboto300">KTP</label>
                            <input type="file" class="form-control bordercustomformp" id="file_ktp" name="file_ktp" aria-describedby="file_ktpHelp">
                            <div id="file_ktpHelp" class="form-text"></div>
                        </div>
                    </div>

                    <div class="col-12" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_ktm" class="form-label fontroboto300">KTM (Kartu Tanda Mahasiswa)</label>
                            <input type="file" class="form-control bordercustomformp" id="file_ktm" name="file_ktm" aria-describedby="file_ktmHelp">
                            <div id="file_ktmHelp" class="form-text"></div>
                        </div>
                    </div>

                    <div class="col-12" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_khs" class="form-label fontroboto300">KHS (Kartu Hasil Studi)</label>
                            <input type="file" class="form-control bordercustomformp" id="file_khs" name="file_khs" aria-describedby="file_khsHelp">
                            <div id="file_khsHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_surat_rekomendasi" class="form-label fontroboto300">Surat Rekomendasi Tokoh</label>
                            <input type="file" class="form-control bordercustomformp" id="file_surat_rekomendasi" name="file_surat_rekomendasi" aria-describedby="file_surat_rekomendasiHelp">
                            <div id="file_surat_rekomendasiHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_cv" class="form-label fontroboto300">CV</label>
                            <input type="file" class="form-control bordercustomformp" id="file_cv" name="file_cv" aria-describedby="file_cvHelp">
                            <div id="file_cvHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_motivation_letter" class="form-label fontroboto300">Motivation Letter</label>
                            <input type="file" class="form-control bordercustomformp" id="file_motivation_letter" name="file_motivation_letter" aria-describedby="file_motivation_letterHelp">
                            <div id="file_motivation_letterHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="col-12 mt-3" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_surat_keterangan_beasiswa" class="form-label fontroboto300">Surat Keterangan Sedang Tidak Menerima Beasiswa</label>
                            <input type="file" class="form-control bordercustomformp" id="file_surat_keterangan_beasiswa" name="file_surat_keterangan_beasiswa" aria-describedby="file_surat_keterangan_beasiswaHelp">
                            <div id="file_surat_keterangan_beasiswaHelp" class="form-text"></div>
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
                            <label for="file_sertifikat_penghargaan" class="form-label fontroboto300">Sertifikat Penghargaan</label>
                            <input type="file" class="form-control bordercustomformp" id="file_sertifikat_penghargaan" name="file_sertifikat_penghargaan" aria-describedby="file_sertifikat_penghargaanHelp">
                            <div id="file_sertifikat_penghargaanHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_sertifikat_magang" class="form-label fontroboto300">Sertifikat Magang</label>
                            <input type="file" class="form-control bordercustomformp" id="file_sertifikat_magang" name="file_sertifikat_magang" aria-describedby="file_sertifikat_magangHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: -20px;">
                        <div class=" mt-3 mb-3 ms-2">
                            <label for="file_sertifikat_nasional_internasional" class="form-label fontroboto300">Sertifikat Nasional/Internasional</label>
                            <input type="file" class="form-control bordercustomformp" id="file_sertifikat_nasional_internasional" name="file_sertifikat_nasional_internasional" aria-describedby="file_sertifikat_nasional_internasionalHelp">
                            <div id="file_sertifikat_nasional_internasionalHelp" class="form-text"></div>
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
            <div class="col-8">
                <div class="mb-3 text-center mt-4">
                    <button type="submit" style="color: #fff;" class="btn btncustompendaftaran2">Simpan</button>
                </div>
            </div>
        </div>
        <!-- end identitas -->
    </form>

</div>
<?= $this->endSection() ?>