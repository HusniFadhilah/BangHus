<?= $this->extend('templates/public/template') ?>

<?= $this->section('contentpublic') ?>

<section class="">
    <nav aria-label="breadcrumb" class="">
        <ol class="breadcrumb bg-orange breadcrumb-orange mb-0 py-3 pl-5">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </nav>
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
<?= $this->endSection() ?>