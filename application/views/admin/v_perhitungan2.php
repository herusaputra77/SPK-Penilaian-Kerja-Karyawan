<div class="col-12 ">
    <h1>Perhitungan</h1>
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-nilai_matrix-tab" data-toggle="pill" href="#custom-tabs-four-nilai_matrix" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Nilai Matrix</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-matrix_ternormalisasi-tab" data-toggle="pill" href="#custom-tabs-four-matrix_ternormalisasi" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Nilai Matrix Ternormalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-bobot_ternormalisasi-tab" data-toggle="pill" href="#custom-tabs-four-bobot_ternormalisasi" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Nilai Bobot Ternormalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-matrix_ideal-tab" data-toggle="pill" href="#custom-tabs-four-matrix_ideal" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Matrix Ideal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-solusi_ideal-tab" data-toggle="pill" href="#custom-tabs-four-solusi_ideal" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Jarak Solusi Ideal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-nilai_preferensi-tab" data-toggle="pill" href="#custom-tabs-four-nilai_preferensi" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Nilai Preferensi</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-nilai_matrix" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <h3>Nilai Matrix</h3>
                    <?php
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">
                                <center>No</center>
                            </th>
                            <th rowspan="2" style="text-align: center;">Alternatif</th>
                            <th colspan="<?= $s ?>" style="text-align: center;">Kriteria</th>

                        </tr>
                        <tr>
                            <th style="text-align: center;">C1</th>
                            <th style="text-align: center;">C2</th>
                            <th style="text-align: center;">C3</th>
                            <th style="text-align: center;">C4</th>
                            <th style="text-align: center;">C5</th>
                            <th style="text-align: center;">C6</th>
                            <th style="text-align: center;">C7</th>

                        </tr>
                        <tbody>
                            <?php $no = 1;
                            foreach ($alternatif as $alt) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $alt['nm_user'] ?></td>
                                    <?php $id_alternatif = $alt['id_alternatif'];
                                    $alternatif = $this->M_perhitungan->id_alternatif($id_alternatif);
                                    foreach ($alternatif as $alt) {
                                    ?>
                                        <td><?= $alt['nilai'] ?></td>
                                    <?php } ?>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-matrix_ternormalisasi" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <h3>Nilai Matrix</h3>
                    <?php
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">
                                <center>No</center>
                            </th>
                            <th rowspan="2" style="text-align: center;">Alternatif</th>
                            <th colspan="<?= $s ?>" style="text-align: center;">Kriteria</th>

                        </tr>
                        <tr>
                            <th style="text-align: center;">C1</th>
                            <th style="text-align: center;">C2</th>
                            <th style="text-align: center;">C3</th>
                            <th style="text-align: center;">C4</th>
                            <th style="text-align: center;">C5</th>
                            <th style="text-align: center;">C6</th>
                            <th style="text-align: center;">C7</th>

                        </tr>
                        <tbody>
                            <?php $no = 1;
                            $al = $this->M_alternatif->alternatif();
                            foreach ($al as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nm_user'] ?></td>
                                    <?php $id_alternatif = $value['id_alternatif'];
                                    $alternatif = $this->M_perhitungan->id_perhitungan($id_alternatif);
                                    foreach ($alternatif as $alt1) {
                                    ?>
                                        <td><?= $alt1['normalisasi'] ?></td>
                                    <?php } ?>
                                    <td>
                                        <!-- hasil nilai bobot ternormalisasi -->
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-bobot_ternormalisasi" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <h3>Nilai Matrix</h3>
                    <?php
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">
                                <center>No</center>
                            </th>
                            <th rowspan="2" style="text-align: center;">Alternatif</th>
                            <th colspan="<?= $s ?>" style="text-align: center;">Kriteria</th>

                        </tr>
                        <tr>
                            <th style="text-align: center;">C1</th>
                            <th style="text-align: center;">C2</th>
                            <th style="text-align: center;">C3</th>
                            <th style="text-align: center;">C4</th>
                            <th style="text-align: center;">C5</th>
                            <th style="text-align: center;">C6</th>
                            <th style="text-align: center;">C7</th>

                        </tr>
                        <tbody>
                            <?php $no = 1;
                            $al2 = $this->M_alternatif->alternatif();
                            foreach ($al2 as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nm_user'] ?></td>
                                    <?php $ida1 = $value['id_alternatif'];
                                    $alternatif = $this->M_perhitungan->id_perhitungan($ida1);
                                    foreach ($alternatif as $alt2) {
                                    ?>
                                        <td><?= $alt2['terbobot'] ?></td>
                                    <?php } ?>
                                    <td>
                                        <!-- hasil nilai bobot ternormalisasi -->
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-matrix_ideal" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                    <h3>Matrix Ideal Positif/Negatif</h3>
                    <hr>
                    <h4>Matrix Ideal Positif (A<sup>+</sup>)</h4>
                    <?php
                    $krrt = $this->M_kriteria->get_kriteria();
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th colspan="<?= $s ?>" style="text-align: center;">Kriteria</th>
                        </tr>
                        <tr>
                            <?php
                            $kk = $this->M_kriteria->get_kriteria();
                            foreach ($kk as $ktt) { ?>
                                <th style="text-align: center;"><?= $ktt['nm_kriteria'] ?></th>
                            <?php } ?>
                        </tr>
                        <tr style="text-align: center;">
                            <?php
                            for ($z = 1; $z <= $s; $z++) {
                                echo "<th>Y<sub>$z</sub><sup>+</sup></th>";
                            } ?>

                        </tr>
                        <?php
                        $i = 1;
                        $a = $this->M_kriteria->get_kriteria();
                        echo "<tr>";
                        foreach ($a as $da) {

                            $idalt = $da['id_kriteria'];
                            $n = $this->M_perhitungan->id_kriteria($idalt);

                            $c = 0;
                            $ymax = [];
                            foreach ($n as $dn) {
                                $idk = $dn['id_kriteria'];

                                //nilai pembagi
                                $nilai_kuadrat = 0;
                                $k = $this->M_perhitungan->id_kriteria($idk);
                                foreach ($k as $dkuadrat) {
                                    $nilai_kuadrat = $nilai_kuadrat + ($dkuadrat['nilai'] * $dkuadrat['nilai']);
                                }

                                //hitung jml alternatif
                                $jml_alternatif = $this->db->get('tb_alternatif');
                                $jml_a = $jml_alternatif->num_rows();
                                //nilai bobot kriteria (rata")
                                $bobot = 0;
                                $tnilai = 0;

                                $k2 = $this->M_perhitungan->id_kriteria($idk);
                                foreach ($k2 as $dbobot) {
                                    $tnilai = $tnilai + $dbobot['nilai'];
                                }
                                $bobot = $tnilai / $jml_a;

                                //ambil data bobot kriteria
                                $b2 = $this->M_kriteria->id_kriteria($idk);
                                // $nbot = mysqli_fetch_assoc($b2);
                                $bot = $b2['bobot'];
                                // nilai bobot ternormalisasi
                                $v = round(($dn['nilai'] / sqrt($nilai_kuadrat)), 4) * $bot;

                                $ymax[$c] = $v;
                                // var_dump($ymax[$c]);
                                $c++;
                            }

                            if ($b2['sifat'] == 'B') {
                                echo "<td><center>" . max($ymax) . "</center></td>";
                            } else {
                                echo "<td><center>" . min($ymax) . "</center></td>";
                            }
                        }
                        echo "</tr>";
                        ?>
                    </table>
                    <h4>Matriks Ideal Negatif (A<sup>-</sup>)</h4>

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="<?php echo $s; ?>">
                                <center>Kriteria</center>
                            </th>
                        </tr>
                        <tr>
                            <?php
                            $hk = $this->M_kriteria->get_kriteria();
                            foreach ($hk as $dhk) {
                            ?>
                                <th>
                                    <center><?php echo $dhk['nm_kriteria']; ?></center>
                                </th>
                            <?php
                            }
                            ?>
                            </center>
                        </tr>
                        <tr>
                            <center>
                                <?php

                                for ($n = 1; $n <= $s; $n++) {

                                    echo "<th><center>y<sub>$n</sub><sup>+</sup></center></th>";
                                }
                                ?>
                            </center>
                        </tr>

                        <?php
                        $i = 1;
                        $a = $this->M_kriteria->get_kriteria();
                        echo "<tr>";
                        foreach ($a as $da) {

                            $idalt = $da['id_kriteria'];
                            $n = $this->M_perhitungan->id_kriteria($idalt);

                            $c = 0;
                            $ymax = array();
                            foreach ($n as $dn) {
                                $idk = $dn['id_kriteria'];

                                //nilai kuadrat pembagi
                                $nilai_kuadrat = 0;
                                $k = $this->M_perhitungan->id_kriteria($idk);
                                foreach ($k as $dkuadrat) {
                                    $nilai_kuadrat = $nilai_kuadrat + ($dkuadrat['nilai'] * $dkuadrat['nilai']);
                                }

                                //hitung jml alternatif
                                $jml_alternatif = $this->db->get('tb_alternatif');
                                $jml_a = $jml_alternatif->num_rows();
                                //nilai bobot kriteria (rata")
                                $bobot = 0;
                                $tnilai = 0;

                                $k2 = $this->M_perhitungan->id_kriteria($idk);
                                foreach ($k2 as $dbobot) {
                                    $tnilai = $tnilai + $dbobot['nilai'];
                                }
                                // $bobot = $tnilai / $jml_a;

                                //nilai bobot input
                                $b2 = $this->M_kriteria->id_kriteria($idk);
                                // $nbot = mysqli_fetch_assoc($b2);
                                if ($jml_a != 0) {
                                    $bobot = @($tnilai / $jml_a);;
                                } else {
                                    $bobot = $tnilai;
                                }
                                $bot = $b2['bobot'];
                                // nilai bobot ternormalisasi
                                $v = round(($dn['nilai'] / sqrt($nilai_kuadrat)), 4) * $bot;

                                $ymax[$c] = $v;
                                $c++;
                            }
                            // penentuan max/min berdasarkan sifat
                            if ($b2['sifat'] == 'C') {
                                echo "<td><center>" . max($ymax) . "</center></td>";
                            } else {
                                echo "<td><center>" . min($ymax) . "</center></td>";
                            }
                        }
                        echo "</tr>";
                        ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-solusi_ideal" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                    <!-- ------------------------------------------------------------------------------------------------- -->
                    <h4>Jarak Solusi Ideal Positif (D<sup>+</sup>)</h4>
                    <?php
                    $s = $this->db->get('tb_kriteria');
                    $h = $s->num_rows();
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama</th>
                            <th>D<sup>+</sup></th>
                        </tr>
                        <?php
                        //buat array kolom

                        $i2 = 1;
                        $i3 = 0;
                        $maxarray = array();
                        $a2 = $this->M_kriteria->get_kriteria();
                        //  mysqli_query($koneksi, "SELECT * from kriteria");
                        echo "<tr><center>";
                        foreach ($a2 as $da2) {

                            $idalt2 = $da2['id_kriteria'];

                            //ambil nilai
                            $n2 = $this->M_perhitungan->id_kriteria($idalt2);
                            //  mysqli_query($koneksi, "SELECT * FROM nilai_matrik WHERE id_kriteria='$idalt2' ORDER BY id_matrik ASC");
                            $jarakp2 = 0;
                            $c2 = 0;
                            $ymax2 = array();

                            foreach ($n2 as $dn2) {
                                $idk2 = $dn2['id_kriteria'];

                                //nilai kuadrat
                                $nilai_kuadrat2 = 0;
                                $k2 =  $this->M_perhitungan->id_kriteria($idk2);
                                //  mysqli_query($koneksi, "SELECT * FROM nilai_matrik WHERE id_kriteria='$idk2' ORDER BY id_matrik ASC ");
                                foreach ($k2 as $dkuadrat2) {
                                    $nilai_kuadrat2 = $nilai_kuadrat2 + ($dkuadrat2['nilai'] * $dkuadrat2['nilai']);
                                }

                                //hitung jml alternatif
                                $jml_alternatif2 = $this->db->get('tb_alternatif');
                                //  mysqli_query($koneksi, "SELECT * FROM alternatif");

                                $jml_a2 = $jml_alternatif2->num_rows();
                                //nilai bobot kriteria (rata")
                                $bobot2 = 0;
                                $tnilai2 = 0;

                                $k22 =  $this->M_perhitungan->id_kriteria($idk2);
                                // mysqli_query($koneksi, "SELECT * FROM nilai_matrik WHERE id_kriteria='$idk2' ORDER BY id_matrik ASC ");
                                foreach ($k22 as $dbobot2) {
                                    $tnilai2 = $tnilai2 + $dbobot2['nilai'];
                                }
                                $bobot2 = $tnilai2 / $jml_a2;

                                //ambil nilai bobot input
                                $b2 = $this->M_kriteria->id_kriteria($idk2);
                                //  mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id_kriteria='$idk2'");
                                // $nbot2 = mysqli_fetch_assoc($b2);
                                $bot2 = $b2['bobot'];
                                // nilai bobot ternormalisasi
                                $v2 = round(($dn2['nilai'] / sqrt($nilai_kuadrat2)), 4) * $bot2;

                                $ymax2[$c2] = $v2;
                                $c2++;

                                if ($b2['sifat'] == 'B') {
                                    $mak2 = max($ymax2);
                                } else {
                                    $mak2 = min($ymax2);
                                } #cek benefit atau cost

                            }

                            //hitung D+			
                            foreach ($ymax2 as $nymax2) {

                                $jarakp2 = $jarakp2 + pow($nymax2 - $mak2, 2);
                                // var_dump($jarakp2);
                            }

                            //array max
                            $maxarray[$i3] = $mak2;
                            // var_dump($maxarray);
                            //print_r($maxarray);
                            //print_r(max($ymax2));			
                            $i2++;
                            $i3++;
                        }
                        //session array ymax
                        $_SESSION['ymax'] = $maxarray;

                        //array baris//////////////////////////////////////////////////
                        $i = 1;
                        $ii = 0;
                        $dpreferensi = array();

                        $a = $this->M_alternatif->alternatif();
                        //  mysqli_query($koneksi, "SELECT * FROM alternatif");
                        echo "<tr><center>";
                        foreach ($a as $da) {

                            $idalt = $da['id_alternatif'];

                            //ambil nilai			
                            $n = $this->M_perhitungan->id_alternatif($idalt);
                            //  mysqli_query($koneksi, "SELECT * FROM nilai_matrik WHERE id_alternatif='$idalt' ORDER BY id_matrik ASC");
                            $jarakp = 0;
                            $c = 0;
                            $ymax = array();
                            $arraymaks = array();
                            foreach ($n as $dn) {
                                $idk = $dn['id_kriteria'];

                                //nilai kuadrat			
                                $nilai_kuadrat = 0;
                                $k = $this->M_perhitungan->id_kriteria($idk);
                                //  mysqli_query($koneksi, "SELECT * FROM nilai_matrik WHERE id_kriteria='$idk' ORDER BY id_matrik ASC ");
                                foreach ($k as $dkuadrat) {
                                    $nilai_kuadrat = $nilai_kuadrat + ($dkuadrat['nilai'] * $dkuadrat['nilai']);
                                }

                                //hitung jml alternatif
                                $jml_alternatif = $this->db->get('tb_alternatif');
                                //  mysqli_query($koneksi, "SELECT * FROM alternatif");

                                $jml_a = $jml_alternatif->num_rows();
                                //nilai bobot kriteria (rata")
                                $bobot = 0;
                                $tnilai = 0;

                                $k2 = $this->M_perhitungan->id_kriteria($idk);
                                //  mysqli_query($koneksi, "SELECT * FROM nilai_matrik WHERE id_kriteria='$idk' ORDER BY id_matrik ASC ");
                                foreach ($k2 as $dbobot) {
                                    $tnilai = $tnilai + $dbobot['nilai'];
                                }
                                $bobot = $tnilai / $jml_a;

                                //nilai bobot input
                                $b2 = $this->M_kriteria->id_kriteria($idk);
                                //  mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id_kriteria='$idk'");
                                // $nbot = mysqli_fetch_assoc($b2);
                                $bot = $b2['bobot'];

                                $v = round(($dn['nilai'] / sqrt($nilai_kuadrat)), 4) * $bot;

                                $ymax[$c] = $v;
                                $c++;
                                $mak = max($ymax);
                            }

                            //hitung D+ 
                            foreach ($ymax as $nymax => $value) {
                                $maks = $_SESSION['ymax'][$nymax];
                                // echo $maks . " - ";

                                // echo $value . "| ";

                                $final = sqrt($jarakp = $jarakp + pow($value - $maks, 2));
                                // echo $jarakp . " || ";
                            }

                            echo "<tr>
                                    <td><center>$i</center></td>
                                    <td>$da[nm_user]</td>
                                    <td>" . round($final, 4) . "</td>
                                    </tr>";
                            $dpreferensi[$ii] = round($final, 4);
                            $_SESSION['dplus'] = $dpreferensi;
                            // print_r($ymax);

                            $i++;
                        }

                        echo "</tr>";

                        ?>

                    </table>
                    <h4>Jarak Solusi Ideal Negatif (D<sup>-</sup>)</h4>

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama</th>
                            <th>D<sup>-</sup></th>
                        </tr>
                        <?php
                        //buat array kolom

                        $i2 = 1;
                        $i3 = 0;
                        $minarray = array();
                        $a2 = $this->M_kriteria->get_kriteria();
                        echo "<tr><center>";
                        foreach ($a2 as $da2) {

                            $idalt2 = $da2['id_kriteria'];

                            //ambil nilai

                            $n2 = $this->M_perhitungan->id_kriteria($idalt2);
                            $jarakp2 = 0;
                            $c2 = 0;
                            $ymin2 = array();

                            foreach ($n2 as $dn2) {
                                $idk2 = $dn2['id_kriteria'];

                                //nilai kuadrat

                                $nilai_kuadrat2 = 0;
                                $k2 = $this->M_perhitungan->id_kriteria($idk2);
                                foreach ($k2 as $dkuadrat2) {
                                    $nilai_kuadrat2 = $nilai_kuadrat2 + ($dkuadrat2['nilai'] * $dkuadrat2['nilai']);
                                }

                                //hitung jml alternatif
                                $jml_alternatif2 = $this->db->get('tb_alternatif');

                                $jml_a2 = $jml_alternatif2->num_rows;
                                //nilai bobot kriteria (rata")
                                $bobot2 = 0;
                                $tnilai2 = 0;

                                $k22 = $this->M_perhitungan->id_kriteria($idk2);
                                foreach ($k22 as $dbobot2) {
                                    $tnilai2 = $tnilai2 + $dbobot2['nilai'];
                                }
                                if ($jml_a != 0) {
                                    $bobot2 = @($tnilai2 / $jml_a2);
                                } else {
                                    $bobot = $tnilai;
                                }

                                //nilai bobot input
                                $b2 = $this->M_kriteria->id_kriteria($idk2);
                                // $nbot2 = mysqli_fetch_assoc($b2);
                                $bot2 = $b2['bobot'];

                                $v2 = round(($dn2['nilai'] / sqrt($nilai_kuadrat2)), 4) * $bot2;

                                $ymin2[$c2] = $v2;
                                $c2++;

                                #cek benefit atau cost
                                if ($b2['sifat'] == 'C') {
                                    $min2 = max($ymin2);
                                } else {
                                    $min2 = min($ymin2);
                                } #cek benefit atau cost

                                //$min2=min($ymin2);

                            }

                            //hitung D-

                            foreach ($ymin2 as $nymin2) {

                                $jarakp2 = $jarakp2 + pow($nymin2 - $min2, 2);
                                //echo "--".$mak."---";
                            }

                            //array max
                            $minarray[$i3] = $min2;

                            //print_r($maxarray);
                            //print_r(max($ymax2));

                            $i2++;
                            $i3++;
                        }
                        //session array ymax
                        $_SESSION['ymin'] = $minarray;

                        //array baris//////////////////////////////////////////////////
                        $i = 1;
                        $ii = 0;
                        $id_alt = array();
                        $a = $this->M_alternatif->alternatif();
                        echo "<tr>";
                        foreach ($a as $da) {

                            $idalt = $da['id_alternatif'];

                            //ambil nilai

                            $n = $this->M_perhitungan->id_alternatif($idalt);
                            $jarakp = 0;
                            $c = 0;
                            $ymax = array();
                            $arraymin = array();
                            foreach ($n as $dn) {
                                $idk = $dn['id_kriteria'];


                                //nilai kuadrat

                                $nilai_kuadrat = 0;
                                $k = $this->M_perhitungan->id_kriteria($idk);
                                foreach ($k as $dkuadrat) {
                                    $nilai_kuadrat = $nilai_kuadrat + ($dkuadrat['nilai'] * $dkuadrat['nilai']);
                                }

                                //hitung jml alternatif
                                $jml_alternatif = $this->db->get('tb_alternatif');

                                $jml_a = $jml_alternatif->num_rows();
                                //nilai bobot kriteria (rata")
                                $bobot = 0;
                                $tnilai = 0;

                                $k2 = $this->M_perhitungan->id_kriteria($idk);
                                foreach ($k2 as $dbobot) {
                                    $tnilai = $tnilai + $dbobot['nilai'];
                                }
                                $bobot = $tnilai / $jml_a;

                                //nilai bobot input
                                $b2 = $this->M_kriteria->id_kriteria($idk);
                                // $nbot = mysqli_fetch_assoc($b2);
                                $bot = $b2['bobot'];

                                $v = round(($dn['nilai'] / sqrt($nilai_kuadrat)), 4) * $bot;

                                $ymin[$c] = $v;
                                $c++;
                                $min = max($ymin);
                            }
                            //hitung D-
                            foreach ($ymin as $nymin => $value) {
                                $mins = $_SESSION['ymin'][$nymin];
                                //	echo $mins." - ";
                                $final = sqrt($jarakp = $jarakp + pow($value - $mins, 2));
                                //	echo $jarakp." || ";
                            }

                            echo "<tr>
                                    <td><center>$i</center></td>
                                    <td>$da[nm_user]</</td>
                                    <td>" . round($final, 4) . "</td>
                                    </tr>";
                            //session min
                            $dpreferensi[$ii] = round($final, 4);
                            $_SESSION['dmin'] = $dpreferensi;
                            //print_r($ymin);

                            //ambil id alternatif
                            $id_alt[$ii] = $da['id_alternatif'];
                            $_SESSION['id_alt'] = $id_alt;

                            $i++;
                            $ii++;
                        }

                        echo "</tr>";

                        ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-nilai_preferensi" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">

                    <!-- ------------------------------------------------------------------------------------------------- -->
                    <table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Alternatif</th>
                            <th>Nilai Preferensi</th>
                            <th>Rangking</th>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            $ni = 1;
                            foreach ($hasil as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nm_user'] ?></td>
                                    <td>
                                        <?= $value['nilai_preferensi'] ?>
                                    </td>
                                    <td><?= $ni++ ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>