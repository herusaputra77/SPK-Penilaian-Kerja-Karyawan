<!-- Input addon -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Profile</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo base_url('assets/profile/') . $user['gambar'] ?>" style="width: 250px;">
            </div>
            <div class="col-md-5">
                <div>
                    <label>Nama</label>
                    <h4 style="font-family: times new roman;"><?= $user['nm_user'] ?></h4>
                </div>
                <div>
                    <label>Username</label>
                    <h4 style="font-family: times new roman;"><?= $user['username'] ?></h4>
                </div>
                <div>
                    <label>NIP</label>
                    <h4 style="font-family: times new roman;"><?= $user['nip'] ?></h4>
                </div>

            </div>
            <div class="col-md-4">

                <div>
                    <label>Gender</label>
                    <h4 style="font-family: times new roman;"><?= $user['jenkel'] ?></h4>
                </div>
                <div>
                    <label>Alamat</label>
                    <h4 style="font-family: times new roman;"><?= $user['alamat'] ?></h4>
                </div>
                <div>
                    <label>Di buat sejak</label>
                    <h4 style="font-family: times new roman;"><?= date('d F Y', $user['tgl_buat']); ?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">

                <a href="<?= base_url('profile/edit_profile') ?>" class="btn btn-sm btn-primary col-md-12 mt-3">Edit Profile</a>
            </div>
        </div>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->