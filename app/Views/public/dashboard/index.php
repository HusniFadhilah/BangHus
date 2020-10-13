<?= $this->extend('templates/public/template-home') ?>
<?= $this->section('contentpublichome') ?>
<section>
    <div id="sliderhome" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#sliderhome" data-slide-to="0" class="active"></li>
            <li data-target="#sliderhome" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <style>

            </style>
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/slider/slider-3.jpg" alt="Gambar1">
                <div class="carousel-caption">
                    <div class="jd-1">Hello Fellas</div>
                    <div class="jd-2">WELCOME TO <span style='color:#0cf;'>MY BLOG</span></div>
                    <div class="garis-tebal"></div>
                    <div class="sub-judul">
                        I Love Software Development, Programming, and Information Technology
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slider-2.jpg" alt="Gambar2">
                <div class="carousel-caption">
                    <div class="jd-1">Hello Fellas</div>
                    <div class="jd-2">WELCOME TO <span style='color:#0cf;'>MY BLOG</span></div>
                    <div class="garis-tebal"></div>
                    <div class="sub-judul">
                        I Love Software Development, Programming, and Information Technology
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#sliderhome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sliderhome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="">
    <div class="jumbotron bg-black text-light caption">
        <div class="row">
            <div class="col-12 text-center">
                <h1>CONTINUOUS ATTENTION TO DESIGN EXCELLENCE</h1>
                <p>We focus your idea into a unique vision and identity.</p>
            </div>
        </div>
    </div>
</section>
<section class="mysection">
    <div class="container">
        <div class="section-title">
            <h2>Recent Articles</h2>
            <p>Article post by me</p>
        </div>

        <div class="row article">
            <div class="col-lg-3">
                <article class="item">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/article/blog-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="single-article.html">Cara Mengatasi MYSQL
                                    shutdown unexpectedly
                                    pada XAMPP</a></h5>
                            <p class="card-text">Anda seorang web developer? atau seorang yang pernah menjajal
                                konfigurasi server? yap!! anda pasti sudah tau tentang aplikasi ini.</p>
                            <a href="single-article.html" class="btn btn-primary btn-sm">More<i class="fa fa-arrow-right pl-1"></i></a>
                            <span class="float-right"><small><i class="far fa-calendar mr-1"></i>Two days
                                    ago</small></span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-3">
                <article class="item">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/article/blog-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="single-article.html">Cara Mengatasi MYSQL
                                    shutdown unexpectedly
                                    pada XAMPP</a></h5>
                            <p class="card-text">Anda seorang web developer? atau seorang yang pernah menjajal
                                konfigurasi server? yap!! anda pasti sudah tau tentang aplikasi ini.</p>
                            <a href="single-article.html" class="btn btn-primary btn-sm">More<i class="fa fa-arrow-right pl-1"></i></a>
                            <span class="float-right"><small><i class="far fa-calendar mr-1"></i>Two days
                                    ago</small></span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-3">
                <article class="item">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/article/blog-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="single-article.html">Cara Mengatasi MYSQL
                                    shutdown unexpectedly
                                    pada XAMPP</a></h5>
                            <p class="card-text">Anda seorang web developer? atau seorang yang pernah menjajal
                                konfigurasi server? yap!! anda pasti sudah tau tentang aplikasi ini.</p>
                            <a href="single-article.html" class="btn btn-primary btn-sm">More<i class="fa fa-arrow-right pl-1"></i></a>
                            <span class="float-right"><small><i class="far fa-calendar mr-1"></i>Two days
                                    ago</small></span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-3">
                <article class="item">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/article/blog-4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="single-article.html">Cara Mengatasi MYSQL
                                    shutdown unexpectedly
                                    pada XAMPP</a></h5>
                            <p class="card-text">Anda seorang web developer? atau seorang yang pernah menjajal
                                konfigurasi server? yap!! anda pasti sudah tau tentang aplikasi ini.</p>
                            <a href="single-article.html" class="btn btn-primary btn-sm">More<i class="fa fa-arrow-right pl-1"></i></a>
                            <span class="float-right"><small><i class="far fa-calendar mr-1"></i>Two days
                                    ago</small></span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="mysection bg-light">
    <div class="container">
        <div class="section-title">
            <h2>My Gallery</h2>
            <p>Some photos created by me</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img/gallery/galeri-1.jpg" alt="Gambar 1">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img/gallery/galeri-2.jpg" alt="Gambar 2">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img/gallery/galeri-3.jpg" alt="Gambar 3">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img/gallery/galeri-4.jpg" alt="Gambar 4">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img/gallery/galeri-5.jpg" alt="Gambar 5">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img/gallery/galeri-6.jpg" alt="Gambar 6">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="mysection bg-white">
    <div class="container">
        <div class="section-title">
            <h2>My Profile</h2>
        </div>

        <div class="row">
            <div class="col-12">
                <h5 class="mb-3">Riwayat Pendidikan</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2006 - 2012</td>
                            <td>SDN Gedawang 01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2012 - 2015</td>
                            <td>SMPN 12 Semarang</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2015 - 2018</td>
                            <td>SMAN 4 Semarang</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2018 - Sekarang</td>
                            <td>Universitas Diponegoro</td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="mb-3 mt-5">Riwayat Organisasi</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Organisasi</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2017 - 2018</td>
                            <td>Rohani Islam (ROHIS)</td>
                            <td>Rohani Islam SMAN 4 Semarang dengan jabatan sebagai ketua</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2020 - Sekarang</td>
                            <td>Informatics Research Innovation & Technology (I-RICH) UNDIP</td>
                            <td>Informatics Research Innovation & Technology (I-RICH)
                                merupakan lembaga riset tingkat jurusan Informatika UNDIP
                                dengan bidang software development.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2020 - Sekarang</td>
                            <td>Himpunan Mahasiswa Informatika (HMIF) UNDIP</td>
                            <td>Staff Ahli Komunikasi dan Informasi Himpunan Mahasiswa
                                Informatika UNDIP yang bertanggung jawab pada bidang web</td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="mb-3 mt-5">Riwayat Kepanitiaan</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Nama Kepanitiaan</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2019</td>
                            <td>Pelatihan Dasar Komputer (PELATDAS)</td>
                            <td>Panitia Pelatihan Dasar Komputer di Informatika UNDIP. Sebagai anggota Sie.
                                Dokumentasi dan Dekorasi</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2019</td>
                            <td>Pelatihan PKM</td>
                            <td>Panitia Pelatihan PKM di Informatika UNDIP. Sebagai anggota Sie.
                                Dokumentasi dan Dekorasi</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2019</td>
                            <td>Komisi Pemilihan Informatika (KPI) UNDIP</td>
                            <td>Sebagai Koordinator Sie. Publikasi, Dokumentasi, dan Dekorasi pada
                                kepanitiaan Komisi Pemilihan Informatika (KPI) UNDIP</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2020</td>
                            <td>Outbound Informatika</td>
                            <td>Sebagai Koordinator Sie. Publikasi, Dokumentasi, dan Dekorasi pada
                                kepanitiaan Outbound Informatika UNDIP 2020</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2020</td>
                            <td>ANFORCOM</td>
                            <td>Panitia Annual Informatics Competition (ANFORCOM) oleh
                                Informatika UNDIP di tingkat nasional. Sebagai anggota Sie.
                                Web</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2020</td>
                            <td>POINTS</td>
                            <td>Panitia Path Of Informatics Research (POINTS) di tingkat jurusan
                                Informatika UNDIP. Sebagai anggota Sie. Dokumentasi dan Dekorasi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>