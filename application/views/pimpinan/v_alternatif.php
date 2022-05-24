                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Alternatif</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Alternatif</h6>
                    </div>
                    <div class="card-body">
                        <!-- <a href="<?= base_url('admin/alternatif/tambah_alter') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"> Tambah Alternatif</i></a> -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> -->
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($alternatif as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nm_user'] ?></td>
                                            <td><?= $value['keterangan'] ?></td>
                                            <td>
                                                <!-- <a href="#hapus<?= $value['id_alternatif'] ?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> -->
                                                <a href="<?= base_url('pimpinan/alternatif/matrix/' . $value['id_alternatif']) ?>" class="btn btn-sm btn-primary"><i class="fas fa-dot-circle"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <?php foreach ($alternatif as $alt) { ?>
                    <div class="modal fade" id="hapus<?= $alt['id_alternatif'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Apakah anda yakin untuk menghapus alternatif <b><?= $alt['alternatif'] ?></b>?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <a class="btn btn-primary" href="<?= base_url('admin/alternatif/hapus/' . $alt['id_alternatif']) ?>">Hapus</a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>