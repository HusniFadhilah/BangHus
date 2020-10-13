<?= $this->extend('templates/public/template') ?>
<?= $this->section('contentpublic') ?>

<section class="mysection">
    <div class="container">
        <div class="section-title">
            <h2>Recent Articles</h2>
            <p>Article post by me</p>
        </div>

        <div class="row article">
            <?php foreach ($post as $p) : ?>
                <div class="col-lg-3">
                    <article class="item">
                        <div class="card">
                            <img class="card-img-top" src="/assets/img/article/blog-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= site_url() ?>"><?= $p["judul"] ?></a></h5>
                                <p class="card-text"><?= $p["isi_post"] ?></p>
                                <a href="<?= site_url() ?>" class="btn btn-primary btn-sm">More<i class="fa fa-arrow-right pl-1"></i></a>
                                <span class="float-right"><small><i class="far fa-calendar mr-1"></i>Two days
                                        ago</small></span>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>