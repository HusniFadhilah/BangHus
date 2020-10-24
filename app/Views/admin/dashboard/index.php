<?= $this->extend('templates/admin/template') ?>

<?= $this->section('contentadmin') ?>
<!-- Page Heading -->
<div class="halo">
    <hr />
    <h4>Halo <strong><?= session()->get('email') ?></strong></h4>
    Selamat Datang di <b>Dashboard Penulis Web MyBlog</b><br>
    Kamu adalah <b>Penulis</b>
    <hr />
</div>
<!-- Content Row -->
<div class="row">

    <!-- Artikel -->
    <a class="col-xl-3 col-md-6 mb-4 btn-nero" href="<?= site_url('penulis') ?>" style="text-decoration: none;">
        <div class="card bg-info shadow h-100 py-2 home">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h6 font-weight-bold text-light text-uppercase mb-1">Artikel</div>
                        <div class="h3 mb-0 font-weight-bold text-light">5</div>
                    </div>
                    <div class="col-auto homes">
                        <i class="far fa-newspaper fa-4x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Kategori Artikel -->
    <a class="col-xl-3 col-md-6 mb-4 btn-nero" href="" style="text-decoration: none;">
        <div class="card bg-success shadow h-100 py-2 home">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h6 font-weight-bold text-light text-uppercase mb-1">Kategori Artikel</div>
                        <div class="h3 mb-0 font-weight-bold text-light">5</div>
                    </div>
                    <div class="col-auto homes">
                        <i class="fa fa-list fa-4x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Penulis -->
    <a class="col-xl-3 col-md-6 mb-4 btn-nero" href="<?= site_url('penulis') ?>" style="text-decoration: none;">
        <div class="card bg-warning shadow h-100 py-2 home">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h6 font-weight-bold text-light text-uppercase mb-1">Penulis</div>
                        <div class="h3 mb-0 font-weight-bold text-light">5</div>
                    </div>
                    <div class="col-auto homes">
                        <i class="fa fa-user fa-4x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

</div>
<!-- End of Row -->
<?= $this->endSection() ?>