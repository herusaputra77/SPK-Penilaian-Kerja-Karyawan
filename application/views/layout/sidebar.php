<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">SPK BAPPEDA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <?php if ($user['id_role'] == 1) { ?>

        <li class="nav-item <?= $this->uri->segment(2) == 'beranda' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/beranda') ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Beranda</span></a>
        </li>

        <li class="nav-item <?= $this->uri->segment(2) == 'user' || $this->uri->segment(2) == ' ' ? " active" : '' ?>" href="<?= base_url('admin/beranda') ?>">
            <a class="nav-link" href="<?= base_url('admin/user') ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Data User</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Perhitungan
        </div>
        <li class="nav-item<?= $this->uri->segment(2) == 'kriteria' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/kriteria') ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Data Kriteria</span></a>
        </li>
        <li class="nav-item<?= $this->uri->segment(2) == 'alternatif' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/alternatif') ?>">
                <i class="fas fa-fw fa-sticky-note"></i>
                <span>Data Alternatif</span></a>
        </li>
        <li class="nav-item<?= $this->uri->segment(2) == 'perhitungan' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/perhitungan/hitung') ?>">
                <i class="fas fa-fw fa-calculator"></i>
                <span>Hasil Topsis</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item<?= $this->uri->segment(1) == 'laporan' || $this->uri->segment(1) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('laporan') ?>">
                <i class="fas fa-fw fa-sticky-note"></i>
                <span>Laporan</span></a>
        </li>
        <!-- pimpinan -->
    <?php } elseif ($user['id_role'] == 2) { ?>
        <li class="nav-item <?= $this->uri->segment(2) == 'beranda' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('pimpinan/beranda') ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span></a>
        </li>
        <li class="nav-item <?= $this->uri->segment(3) == 'user' || $this->uri->segment(3) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('pimpinan/beranda/user') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Karyawan</span></a>
        </li>
        <li class="nav-item<?= $this->uri->segment(2) == 'alternatif' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('pimpinan/alternatif') ?>">
                <i class="fas fa-fw fa-sticky-note"></i>
                <span>Data Alternatif</span></a>
        </li>
        <li class="nav-item <?= $this->uri->segment(3) == 'hitung' || $this->uri->segment(3) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('pimpinan/perhitungan/hitung') ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Hasil Topsis</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item<?= $this->uri->segment(1) == 'laporan' || $this->uri->segment(1) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('laporan') ?>">
                <i class="fas fa-fw fa-sticky-note"></i>
                <span>Laporan</span></a>
        </li>
        <!-- karyawan -->
    <?php } elseif ($user['id_role'] == 3) { ?>
        <li class="nav-item <?= $this->uri->segment(2) == 'beranda' || $this->uri->segment(2) == ' ' ? " active" : '' ?>">
            <a class="nav-link" href="<?= base_url('karyawan/beranda') ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item <?= $this->uri->segment(2) == 'kinerja' || $this->uri->segment(2) == ' ' ? " active" : '' ?>" href="<?= base_url('karyawan/beranda') ?>">
            <a class="nav-link" href="<?= base_url('karyawan/kinerja') ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>SPK Kinerja</span></a>
        </li>
    <?php } ?>

    <!-- <li class="nav-item<?= $this->uri->segment(3) == 'perhitungan2' || $this->uri->segment(3) == ' ' ? " active" : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/perhitungan/hitung') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Hasil Topsis 2</span></a>
    </li> -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->