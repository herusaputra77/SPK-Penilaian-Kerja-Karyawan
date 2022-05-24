                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">User</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Akses</th>
                                        <th>Username</th>
                                        <th>Jenkel</th>
                                        <th>Alamat</th>
                                        <th>NIP</th>
                                        <th>No Hp</th>
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
                                    foreach ($karyawan as $u) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $u['nm_user'] ?></td>
                                            <td><?php if ($u['id_role'] == 1) {
                                                    echo 'Admin';
                                                } elseif ($u['id_role'] == 2) {
                                                    echo 'Pimpinan';
                                                } else {
                                                    echo 'Karyawan';
                                                } ?></td>

                                            <td><?= $u['username'] ?></td>
                                            <td><?= $u['jenkel'] ?></td>
                                            <td><?= $u['alamat'] ?></td>
                                            <td><?= $u['nip'] ?></td>
                                            <td><?= $u['no_hp'] ?></td>
                                            <?php if (
                                                $u['id_user'] ==
                                                $this->session->userdata('id_user')
                                            ) { ?>
                                                <td><button class="btn btn-sm btn-danger"><i class="fas fa-ban"></i> No Action</button></td>
                                            <?php } else { ?>
                                                <td>
                                                    <a href="#detail<?= $u['id_user'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i></a>
                                                    <!-- <a href="#hapus<?= $u['id_user'] ?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> -->
                                                    <!-- <a href="#akses<?= $u['id_user'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-user-circle"></i></a> -->
                                                </td>

                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php foreach ($karyawan as $s) { ?>
                    <div class="modal fade" id="hapus<?= $s['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Apakah anda yakin untuk menghapus <b><?= $s['nm_user'] ?></b>?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <a class="btn btn-primary" href="<?= base_url('admin/user/hapus/' . $s['id_user']) ?>">Hapus</a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($karyawan as $s) { ?>
                    <div class="modal fade" id="akses<?= $s['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Ganti Akses</h5>
                                    <form action="<?= base_url('admin/user/ganti_akses') ?>" method="post">
                                        <div class="form-group">
                                            <!-- <label for="">Akses</label> -->
                                            <input type="hidden" name="id_user" value="<?= $s['id_user'] ?>">
                                            <select name="akses" class="form-control" id="">
                                                <option value="<?= $s['id_role'] ?>"><?php if ($s['id_role'] == 1) {
                                                                                            echo 'Admin';
                                                                                        } elseif ($s['id_role'] == 2) {
                                                                                            echo 'Pimpinan';
                                                                                        } else {
                                                                                            echo 'Karyawan';
                                                                                        } ?></option>
                                                <option value="1">Admin</option>
                                                <option value="2">Pimpinan</option>
                                                <option value="3">Karyawan</option>
                                            </select>

                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary" type="submit">Ganti</button>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php foreach ($karyawan as $s) { ?>
                    <div class="modal fade" id="detail<?= $s['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Input addon -->
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Detail User</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="<?php echo base_url('assets/profile/') . $s['gambar'] ?>" style="width: 100%;">
                                                </div>
                                                <div class="col-md-5">
                                                    <div>
                                                        <label>Nama</label>
                                                        <h4 style="font-family: times new roman;"><?= $s['nm_user'] ?></h4>
                                                    </div>
                                                    <div>
                                                        <label>Username</label>
                                                        <h4 style="font-family: times new roman;"><?= $s['username'] ?></h4>
                                                    </div>
                                                    <div>
                                                        <label>Email</label>
                                                        <h4 style="font-family: times new roman;"><?= $s['nip'] ?></h4>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">

                                                    <div>
                                                        <label>Gender</label>
                                                        <h4 style="font-family: times new roman;"><?= $s['jenkel'] ?></h4>
                                                    </div>
                                                    <div>
                                                        <label>Alamat</label>
                                                        <h4 style="font-family: times new roman;"><?= $s['alamat'] ?></h4>
                                                    </div>
                                                    <div>
                                                        <label>Di buat sejak</label>
                                                        <h4 style="font-family: times new roman;"><?= date('d F Y', $s['tgl_buat']); ?></h4>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Tutup</button>
                                    <!-- <a class="btn btn-primary" href="<?= base_url('admin/kriteria/hapus/' . $s['id_kriteria']) ?>">Hapus</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>