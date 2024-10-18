<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Document Header -->
                            <div class="text-center mb-4">
                                <h4><b>BERITA ACARA SERAH TERIMA HASIL PEKERJAAN</b></h4>
                                <p><b>PETUGAS PENGUMPULAN/PEMERIKSAAN/PENGOLAHAN DATA SURVEI BULAN SEPTEMBER 2024</b></p>
                                <p>PADA BADAN PUSAT STATISTIK KABUPATEN TANAH LAUT</p>
                                <p><b>Nomor: 027/63010/BAST/2024</b></p>
                            </div>

                            <!-- Content Body -->
                            <p>
                                Pada hari ini Senin, tanggal tiga puluh, bulan September tahun dua ribu dua puluh empat, bertempat di Pelaihari, kami yang bertanda tangan di bawah ini:
                            </p>
                            <table class="table-borderless mb-4">
                                <tr>
                                    <td style="width: 150px;">Nama</td>
                                    <td>: Rizkia Shafna</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>: Jl. Beramban Raya Gg. Said, RT 21 RW 07, Pelaihari Kab. Tanah Laut, 70815</td>
                                </tr>
                            </table>

                            <p>bertindak untuk dan atas namanya sendiri, selanjutnya disebut PIHAK PERTAMA.</p>

                            <table class="table-borderless mb-4">
                                <tr>
                                    <td style="width: 150px;">Nama</td>
                                    <td>: Najamuddin S.M</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>: 19840802 200312 1 004</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>: Pejabat Pembuat Komitmen BPS Kabupaten Tanah Laut</td>
                                </tr>
                                <tr>
                                    <td>Unit Kerja</td>
                                    <td>: BPS Kabupaten Tanah Laut</td>
                                </tr>
                                <tr>
                                    <td>Alamat Unit Kerja</td>
                                    <td>: Jl. A. Syairani, Komplek Perkantoran Gagas Pelaihari No. 9</td>
                                </tr>
                            </table>

                            <p>bertindak untuk dan atas nama BPS Kabupaten Tanah Laut, selanjutnya disebut PIHAK KEDUA.</p>

                            <p>Dengan ini menyatakan:</p>
                            <ol>
                                <li>PIHAK PERTAMA telah melaksanakan pekerjaan bulan September tahun 2024 berdasarkan Perjanjian Kerja Nomor 011/6301/SPK/09/2024, tanggal dua bulan September tahun 2024;</li>
                                <li>Berdasarkan angka 1 tersebut di atas, PIHAK PERTAMA menyerahkan hasil pekerjaan kepada PIHAK KEDUA, dan PIHAK KEDUA menerima hasil pekerjaan tersebut yang telah sesuai dengan seharusnya;</li>
                                <li>Hasil pekerjaan sebagaimana dimaksud dalam angka 2 di atas, sebagai berikut:</li>
                            </ol>

                            <!-- Table Section -->
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Mata Anggaran (Program/Kegiatan/KRO/RO/Komponen/Akun)</th>
                                        <th>Uraian Pekerjaan</th>
                                        <th>Volume</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;foreach ($data as $row): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $row['anggaran'] ?></td>
                                            <td><?= $row['uraian'] ?></td>
                                            <td><?= $row['vol'] ?></td>
                                            <td><?= $row['satuan'] ?></td>
                                        </tr>
                                    <?php $i++;endforeach; ?>
                                </tbody>
                            </table>

                            <ol start="4">
                                <li>Pelaksanaan penyerahan hasil pekerjaan tersebut di atas dilaksanakan secara langsung di BPS Kabupaten Tanah Laut, Jl. A. Syairani, Komplek Perkantoran Gagas Pelaihari No. 9 Pelaihari, Kabupaten Tanah Laut.</li>
                            </ol>

                            <p>
                                Demikian Berita Acara ini dibuat dengan sebenarnya dalam rangkap 2 (dua) dan menjadi sah berlaku setelah ditandatangani oleh KEDUA BELAH PIHAK.
                            </p>

                            <!-- Signature Section -->
                            <div class="row text-center mt-4">
                                <div class="col-6">
                                    <p><b>PIHAK KEDUA,</b></p>
                                    <br><br><br>
                                    <p>(<b>Najamuddin S.M</b>)</p>
                                </div>
                                <div class="col-6">
                                    <p><b>PIHAK PERTAMA,</b></p>
                                    <br><br><br>
                                    <p>(<b>Rizkia Shafna</b>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
