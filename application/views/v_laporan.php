<div class="row" width="100%">
    <div class="col-md-3">
        <img width="50%" src="<?= base_url() ?>assets/gambar/logo.jpg" alt="">
    </div>
    <div class="col-md-6">
        <center> <b>
                <h5>LAPORAN HASIL KEPUTUSAN</h5>
                <h5>BAPPEDA SUMBAR</h5>
                <p>
                    Jalan Khatib Sulaiman No. 1, Flamboyan Baru, Kec. Padang Barat, Kota Padang, Sumatera Barat</p>
            </b>
        </center>
    </div>
    <div class="col-md-3">
        <img align="right" width="50%" src="<?= base_url() ?>assets/gambar/logo.jpg" alt="">
    </div>

</div>
<hr>
<table width="100%" border="1">
    <thead>
        <th>No</th>
        <th>NIP</th>
        <th>Nama Karyawan</th>
        <th>Nilai</th>
        <th>Rangking</th>
        <th>Jabatan</th>
        <th>Keterangan</th>
        <th>Keputusan</th>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($laporan as $lp) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $lp['nip'] ?></td>
                <td><?= $lp['nm_user'] ?></td>
                <td><?= $lp['nilai_preferensi'] ?></td>
                <td><?= $lp['rank'] ?></td>
                <td><?php if ($lp['id_role'] == 3) {
                        echo 'Karyawan';
                    } ?> </td>
                <td><?= $lp['keterangan'] ?></td>
                <td><?php if ($lp['rank'] <= 2) {
                        echo 'Kesempatan Naik Jabatan';
                    } elseif ($lp['rank'] >= 3 && $lp['rank'] <= 4) {
                        echo 'Liburan 3 hari';
                    } else {
                        echo 'Surat Peringatan';
                    } ?> </td>

            </tr>
        <?php } ?>

    </tbody>

</table>
<div>

    <div style="width:300px;float:right">

        Padang, <?= date('d m Y') ?>

        <br />Kepala Sub Bagian Program<br>
        <p></p><br>
        <p>(------------------------)</p>

    </div>

    <div style="clear:both"></div>

</div>