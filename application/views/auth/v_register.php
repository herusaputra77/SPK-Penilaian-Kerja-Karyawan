<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/template_backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/gambar/logo.jpg" />
    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/template_backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background: url(<?= base_url() ?>assets/gambar/bg1.jpg);background-repeat: no-repeat; background-size:cover;">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                    </div>
                                    <form class="user" action="<?= base_url('auth/insert_register') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="nm_user" id="exampleInputEmail" placeholder="Nama Lengkap">

                                            <?= form_error('nm_user', '<span class="text-small text-danger">', '</span>') ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control " name="username" id="exampleFirstName" placeholder="Username">
                                                <?= form_error('username', '<span class="text-small text-danger">', '</span>') ?>

                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control " name="nip" id="exampleLastName" placeholder="NIP">
                                                <?= form_error('nip', '<span class="text-small text-danger">', '</span>') ?>

                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control " name="tempat_lahir" id="exampleFirstName" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control " name="tgl_lahir" id="exampleLastName" placeholder="Tanggal Lahir">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <select name="jenkel" class="form-control " id="exampleLastName" placeholder="">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                                <?= form_error('jenkel', '<span class="text-small text-danger">', '</span>') ?>

                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control " name="no_hp" id="exampleLastName" placeholder="No Hp">
                                                <?= form_error('no_hp', '<span class="text-small text-danger">', '</span>') ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                                                <?= form_error('password', '<span class="text-small text-danger">', '</span>') ?>

                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" name="password2" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
                                                <?= form_error('password2', '<span class="text-small text-danger">', '</span>') ?>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="alamat" class="form-control" id="" cols="20" rows="3" placeholder="Alamat"></textarea>
                                            <?= form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                        <button type="reset" class="btn btn-warning btn-user btn-block">
                                            Reset
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth') ?>">Saya Sudah Punya Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/template_backend/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/template_backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/template_backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/template_backend/js/sb-admin-2.min.js"></script>

</body>

</html>