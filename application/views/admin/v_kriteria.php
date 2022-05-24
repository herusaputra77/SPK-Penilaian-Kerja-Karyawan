                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Kriteria</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
                    </div>
                    <div class="card-body">
                        <!-- <a href="<?= base_url('admin/kriteria/tambah') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"> Tambah Kriteria</i></a> -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kriteria as $value) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nm_kriteria'] ?></td>
                                            <td><?= $value['bobot'] ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/kriteria/edit/' . $value['id_kriteria']) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="#detail<?= $value['id_kriteria'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php foreach ($kriteria as $krt) { ?>
                    <div class="modal fade" id="hapus<?= $krt['id_kriteria'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Apakah anda yakin untuk menghapus kriteria <b><?= $krt['nm_kriteria'] ?></b>?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <a class="btn btn-primary" href="<?= base_url('admin/kriteria/hapus/' . $krt['id_kriteria']) ?>">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php foreach ($kriteria as $krt) { ?>
                    <div class="modal fade" id="detail<?= $krt['id_kriteria'] ?>">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Detail</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Detail Kriteria</h6>
                                        </div>
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>Nama Kriteria</td>
                                                    <td width="10%">:</td>

                                                    <td><?= $krt['nm_kriteria'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bobot</td>
                                                    <td>:</td>
                                                    <td><?= $krt['bobot'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sifat</td>
                                                    <td>:</td>
                                                    <td><?= $krt['sifat'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Detail Subkriteria</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">Subkriteria 1 : <?= $krt['subkriteria1'] ?></div>
                                                <div class="col-md-6">Bobot : <?= $krt['bobot_krt1'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">Subkriteria 2 : <?= $krt['subkriteria2'] ?></div>
                                                <div class="col-md-6">Bobot : <?= $krt['bobot_krt2'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">Subkriteria 3 : <?= $krt['subkriteria3'] ?></div>
                                                <div class="col-md-6">Bobot : <?= $krt['bobot_krt3'] ?></div>
                                            </div>

                                        </div>
                                    </div> -->
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <?php } ?>