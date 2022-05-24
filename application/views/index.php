<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url(<?= base_url() ?>assets/gambar/bg1.jpg);background-repeat: no-repeat; background-size:cover;">
            <div class="carousel-container">
                <div class="carousel-content">
                    <!-- <img style="background-repeat: no-repeat; background-size:cover;" src="<?= base_url() ?>assets/gambar/bg1.jpg" alt=""> -->
                    <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Sistem Penunjang Keputusan</span></h2>
                    <h3 class="animate__animated animate__fadeInDown">Penilaian Kerja BAPPEDA Provinsi Sumatera Barat</h3>
                    <p class="animate__animated animate__fadeInUp"></p>
                    <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background: url(<?= base_url() ?>assets/gambar/bg1.jpg);background-repeat: no-repeat; background-size:cover;">
            <div class="carousel-container">
                <div class="carousel-content">
                    <!-- <img style="background-repeat: no-repeat; background-size:cover;" src="<?= base_url() ?>assets/gambar/bg1.jpg" alt=""> -->
                    <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Sistem Penunjang Keputusan</span></h2>
                    <h3 class="animate__animated animate__fadeInDown">Penilaian Kerja BAPPEDA Provinsi Sumatera Barat</h3>
                    <p class="animate__animated animate__fadeInUp"></p>
                    <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <!-- <div class="carousel-item" style="background: url(<?= base_url() ?>assets/template_frontend/img/slide/slide-2.jpg)">
            <div class="carousel-container">
                <div class="carousel-content">
                    <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span></h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>
        </div> -->

        <!-- Slide 3 -->
        <!-- <div class="carousel-item" style="background: url(<?= base_url() ?>assets/template_frontend/img/slide/slide-3.jpg)">
            <div class="carousel-container">
                <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime Lara</span></h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>
        </div> -->

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

</div>
</div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-4 col-sm-8 align-items-sm-stretch">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php $data = $this->M_auth->count_user();
                                                                                echo $data['user']; ?>" data-purecounter-duration="10" class="purecounter"></span>
                        <p>
                        <h3>Data User</h3>
                        </p>
                        <!-- <a href="#">Find out more &raquo;</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php $kritera = $this->M_kriteria->count_kriteria();
                                                                                echo $kritera['kriteria'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>
                        <h3>Kriteria</h3>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-book"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php $alternatif = $this->M_alternatif->count_alternatif();
                                                                                echo $alternatif['alternatif'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>
                        <h3>Alternatif</h3>
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <!-- <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url() ?>assets/template_frontend/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div> -->
            <h3>Rangking Kinerja Karyawan </h3>
            <table class="table table-hover">
                <thead>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Rangking</th>

                </thead>
                <tbody>

                    <?php $no = 1;
                    $ne = 1;
                    $hasil = $this->M_perhitungan->get_hasil();
                    foreach ($hasil as $hs) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $hs['nip'] ?></td>
                            <td><?= $hs['nm_user'] ?></td>
                            <td><?= $hs['alamat'] ?></td>
                            <td><?= $hs['no_hp'] ?></td>
                            <td><?= $ne++ ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </section><!-- End About Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-a3">Karyawan</li>
                        <li data-filter=".filter-a2">Pimpinan</li>
                        <li data-filter=".filter-a1">Admin</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <?php foreach ($user as $s) { ?>
                    <div class="col-sm-3 col-md-4 portfolio-item filter-a<?= $s['id_role'] ?>">
                        <center>

                            <div class="portfolio-wrap">
                                <img src="<?= base_url('assets/profile/' . $s['gambar']) ?>" class="img-fluid" width="50%" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $s['nm_user'] ?></h4>
                                    <p><?php if ($s['id_role'] == 1) {
                                            echo 'Admin';
                                        } elseif ($s['id_role'] == 2) {
                                            echo 'Pimpinan';
                                        } else {
                                            echo 'Karyawan';
                                        } ?></p>
                                    <div class="portfolio-links">
                                        <a href="<?= base_url('assets/profile/' . $s['gambar']) ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $s['nm_user'] ?>"><i class="bx bx-plus"></i></a>
                                        <a href="<?= base_url('dashboard/detail/' . $s['id_user']) ?>" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                <?php } ?>

                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/template_frontend/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
    <!-- End Services Section -->



</main><!-- End #main -->