<center>
    <h1>Selamat Datang <?= $user['nm_user'] ?></h1>
</center>
<div class="row">
    <div class="col-md-6">

        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header">
                Hasil Penilaian SPK Karyawan BAPPEDA
            </div>
            <div class="card-body">
                <!-- <?php
                        $penilaian = $this->M_alternatif->alternatif();
                        foreach ($penilaian as $pn) {
                        } ?> -->

                <p>
                <h5><?php $kriteria = $this->M_kriteria->count_kriteria();
                    echo $kriteria['kriteria'] ?> Kriteria </h5>
                </p>
                <hr>
                <p>
                <h5><?php $alternatif = $this->M_alternatif->count_alternatif();
                    echo $alternatif['alternatif'] ?> Alternatif yang telah dihitung. </h5>
                </p>
                <hr>
                <p>
                <h5>Anda Rangking ke <?php $hasil = $this->M_perhitungan->hasil_karyawan();
                                        foreach ($hasil as $hs) {
                                            // if ($hs['rank'] == null) {
                                            //     echo 'Anda Belum Melakukan Perhitungan.';
                                            // } else {

                                            //     echo $hs['rank'];
                                            // }
                                            echo $hs['rank'];
                                        } ?>
                    dari <?php $alternatif = $this->M_alternatif->count_alternatif();
                            echo $alternatif['alternatif'] ?></h5>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header">
                Nilai Kinerja
            </div>
            <div class="card-body">
                <div class="table-container">

                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Kriteria</th>
                            <th>Nilai Kinerja</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $hasil = $this->M_perhitungan->hasil_kriteria();
                            foreach ($hasil as $hs) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $hs['bobot'] ?></td>
                                    <td><?= $hs['nilai'] ?></td>

                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>