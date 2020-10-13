<?= $this->extend('templates/public/template') ?>
<?= $this->section('contentpublic') ?>

<section class="mysection bg-light">
    <div class="container-fluid pr-lg-5 pl-lg-5">
        <div class="row article">
            <div class="col-md-8 mb-5">
                <div class="card shadow p-0 mb-3">
                    <div class="card-body p-0">
                        <div class="container-fluid p-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="article-title"><?= $post["judul"] ?>
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 col-lg-1">
                                    <img class="img-circle" src="assets/img/article/author-1.jpg" style="max-height: 50px;">
                                </div>
                                <div class="col-6 col-lg-7 d-flex">
                                    <div class="text-left">
                                        <span class=""><?= $post["idpenulis"] ?></span>
                                        <span class="text-dark d-block"><small><i class="far fa-calendar mr-2"></i><?= $post["tgl_insert"] ?></small></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <span class="badge badge-info"><i class="fa fa-tags mr-1"></i><?= $post["id_kategori"] ?></span><br>
                                        <span class="text-right"><small><i class="fa fa-eye mr-1"></i>20</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-0 mb-3">
                    <div class="card-body p-0">
                        <div class="row text-center">
                            <div class="col-12">
                                <img class="img-fluid" src="assets/img/article/single-article-1.jpg" alt="XAMPP">
                                <span class="img-caption"><small>Sumber: linuxadictos.com</small></span>
                            </div>
                        </div>
                        <div class="container p-4 mt-2 mb-2 article-content position-relative">
                            <?= $post["isi_post"] ?>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-0 mb-3">
                    <div class="card-body p-0">
                        <div class="container p-4">
                            <div class="else-title mb-4">
                                <h5>Artikel Lainnya</h5>
                            </div>
                            <div class="else-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="single-article.html">
                                            <h6><i class="fa fa-arrow-left mr-2"></i>Prev</h6>
                                        </a>
                                        <article class="item">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img class="card-img-top prev-next" src="assets/img/article/blog-1.jpg" alt="Card image cap"">
                                                            </div>
                                                            <div class=" col-8 py-2 pr-4">
                                                            <a href="single-article.html">
                                                                <h5 class="card-title pr-2">Cara Mengatasi MYSQL
                                                                    shutdown unexpectedly
                                                                    pada XAMPP</h5>
                                                            </a>
                                                            <small class="pr-2"><i class="far fa-calendar mr-1"></i>Two days
                                                                ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="single-article.html">
                                            <h6 class="text-right">Next<i class="fa fa-arrow-right ml-2"></i></h6>
                                        </a>
                                        <article class="item">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="row">
                                                        <div class="col-8 py-2 pl-4">
                                                            <a href="single-article.html">
                                                                <h5 class="card-title pl-2">Cara Mengatasi MYSQL
                                                                    shutdown unexpectedly
                                                                    pada XAMPP</h5>
                                                            </a>
                                                            <small class="pl-2"><i class="far fa-calendar mr-1"></i>Two days
                                                                ago</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <img class="card-img-top prev-next" src="assets/img/article/blog-2.jpg" alt="Card image cap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-0 mb-3">
                    <div class="card-body p-0">
                        <div class="container p-4">
                            <div class="share-title mb-4">
                                <h5>Bagikan</h5>
                            </div>
                            <div class="share-content">
                                <a class="btn btn-outline-dark mb-1"><i class="fab fa-facebook mr-2"></i>Facebook</a>
                                <a class="btn btn-outline-dark mb-1"><i class="fab fa-twitter mr-2"></i>Twitter</a>
                                <a class="btn btn-outline-dark mb-1"><i class="fab fa-instagram mr-2"></i>Instagram</a>
                                <a class="btn btn-outline-dark mb-1"><i class="fab fa-whatsapp mr-2"></i>Whatsapp</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-0 mb-3">
                    <div class="card-body p-0">
                        <div class="container p-4">
                            <div class="comment-title mb-4">
                                <h5>3 Komentar</h5>
                            </div>
                            <div class="comment-content">
                                <div id="comment-1" class="comment clearfix">
                                    <img src="assets/img/article/comment-1.jpg" class="comment-img  float-left" alt="">
                                    <h5><a href="">Husni Fadhilah</a> <a href="#" class="reply"><i class="fa fa-reply"></i> Balas</a></h5>
                                    <time datetime="2020-09-15">15 September 2020</time>
                                    <p>
                                        Artikelnya sangat bermanfaat. Terimakasih, semoga sukses selalu
                                    </p>
                                    <div id="comment-reply-1" class="comment comment-reply clearfix">
                                        <img src="assets/img/article/comment-1.jpg" class="comment-img  float-left" alt="">
                                        <h5><a href="">Dhiya Ul Haq</a> <a href="#" class="reply"><i class="fa fa-reply"></i> Balas</a></h5>
                                        <time datetime="2020-09-15">15 September 2020</time>
                                        <p>
                                            Saya izin menjadikan ini sebagai referensi tugas saya ya kak.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-2" class="comment clearfix">
                                    <img src="assets/img/article/comment-1.jpg" class="comment-img  float-left" alt="">
                                    <h5><a href="">Fadhil</a> <a href="#" class="reply"><i class="fa fa-reply"></i>
                                            Balas</a></h5>
                                    <time datetime="2020-09-15">15 September 2020</time>
                                    <p>
                                        Kok masih error ya kak
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-0 mb-3">
                    <div class="card-body p-0">
                        <div class="container p-4">
                            <div class="comment-title">
                                <h5>Tinggalkan Balasan</h5>
                            </div>
                            <div class="comment-content">
                                <p>Email kamu tidak akan kami publikasikan. Tanda bintang (*) wajib diisi.</p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <input name="website" type="text" class="form-control" placeholder="Your Website">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Send Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-body pb-0">
                        <div class="container p-0">
                            <div class="row">
                                <div class="widget-item col-12">
                                    <div class="widget-title">
                                        <h5>Cari Artikel</h5>
                                        <hr>
                                    </div>
                                    <form>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Type keyword and hit enter">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-search"></i></div>
                                            </div>
                                        </div>
                                    </form>
                                    <p>Temukan berbagai artikel terbaik, sebagai sumber informasi yang
                                        berkualitas untuk Anda. Dengan berbagai kategori yang ada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body pb-0">
                        <div class="container p-0">
                            <div class="row">
                                <div class="widget-item col-12">
                                    <div class="widget-title">
                                        <h5>Kategori Artikel</h5>
                                        <hr>
                                    </div>
                                    <div class="widget-content list-category">
                                        <ul class="list-unstyled">
                                            <li><a href=""><span class="fa fa-arrow-right"></span>HTML<span class="float-right">(5)</span></a></li>
                                            <li><a href=""><span class="fa fa-arrow-right"></span>CSS<span class="float-right">(4)</span></a></li>
                                            <li><a href=""><span class="fa fa-arrow-right"></span>Javascript<span class="float-right">(6)</span></a></li>
                                            <li><a href=""><span class="fa fa-arrow-right"></span>PHP<span class="float-right">(2)</span></a></li>
                                            <li><a href=""><span class="fa fa-arrow-right"></span>Framework PHP<span class="float-right">(1)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-item col-12">
                                    <div class="widget-title">
                                        <h5>Artikel Terbaru</h5>
                                        <hr>
                                    </div>
                                    <article class="item">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="card-img-top" src="assets/img/article/blog-1.jpg" alt="Card image cap" style="object-fit: cover;height: 100%;">
                                                    </div>
                                                    <div class="col-8 py-2">
                                                        <a href="single-article.html">
                                                            <h5 class="card-title">Cara Mengatasi MYSQL
                                                                shutdown unexpectedly
                                                                pada XAMPP</h5>
                                                        </a>
                                                        <small><i class="far fa-calendar mr-1"></i>Two days
                                                            ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="item">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="card-img-top" src="assets/img/article/blog-2.jpg" alt="Card image cap" style="object-fit: cover;height: 100%;">
                                                    </div>
                                                    <div class="col-8 py-2">
                                                        <a href="single-article.html">
                                                            <h5 class="card-title">Cara Mengatasi MYSQL
                                                                shutdown unexpectedly
                                                                pada XAMPP</h5>
                                                        </a>
                                                        <small><i class="far fa-calendar mr-1"></i>Two days
                                                            ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="item">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="card-img-top" src="assets/img/article/blog-3.jpg" alt="Card image cap" style="object-fit: cover;height: 100%;">
                                                    </div>
                                                    <div class="col-8 py-2">
                                                        <a href="single-article.html">
                                                            <h5 class="card-title">Cara Mengatasi MYSQL
                                                                shutdown unexpectedly
                                                                pada XAMPP</h5>
                                                        </a>
                                                        <small><i class="far fa-calendar mr-1"></i>Two days
                                                            ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="item">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="card-img-top" src="assets/img/article/blog-4.jpg" alt="Card image cap" style="object-fit: cover;height: 100%;">
                                                    </div>
                                                    <div class="col-8 py-2">
                                                        <a href="single-article.html">
                                                            <h5 class="card-title">Cara Mengatasi MYSQL
                                                                shutdown unexpectedly
                                                                pada XAMPP</h5>
                                                        </a>
                                                        <small><i class="far fa-calendar mr-1"></i>Two days
                                                            ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="item">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="card-img-top" src="assets/img/article/blog-1.jpg" alt="Card image cap" style="object-fit: cover;height: 100%;">
                                                    </div>
                                                    <div class="col-8 py-2">
                                                        <a href="single-article.html">
                                                            <h5 class="card-title">Cara Mengatasi MYSQL
                                                                shutdown unexpectedly
                                                                pada XAMPP</h5>
                                                        </a>
                                                        <small><i class="far fa-calendar mr-1"></i>Two days
                                                            ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body pb-0">
                        <div class="container p-0">
                            <div class="row">
                                <div class="widget-item col-12">
                                    <div class="widget-title">
                                        <h5>Tag Artikel</h5>
                                        <hr>
                                    </div>
                                    <div class="widget-content mb-3">
                                        <button type="button" class="btn btn-success btn-sm">
                                            Pemrograman <span class="badge badge-light">9</span>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Komputer <span class="badge badge-light">5</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            PHP <span class="badge badge-light">4</span>
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm">
                                            HTML <span class="badge badge-light">3</span>
                                        </button>
                                        <button type="button" class="btn btn-rose btn-sm">
                                            Javascript <span class="badge badge-dark">6</span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm">
                                            CSS <span class="badge badge-light">2</span>
                                        </button>
                                        <button type="button" class="btn btn-dark btn-sm">
                                            Jaringan <span class="badge badge-light">4</span>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm">
                                            CodeIgniter <span class="badge badge-light">7</span>
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm">
                                            Web <span class="badge badge-dark">5</span>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Laravel <span class="badge badge-light">2</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>