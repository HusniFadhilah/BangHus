<?= $this->extend('templates/admin/template') ?>

<?= $this->section('contentadmin') ?>
<section class="content">
    <form action="/penulis/save" method="post">
        <?= csrf_field() ?>
        <div class="card shadow">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama" class="col-lg-4 col-form-label">Nama Penulis</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= old('nama') ?>">
                        <span class="invalid-feedback"><?= $validation->getError('nama') ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-lg-4 col-form-label">Email</label>
                    <div class="col-lg-8">
                        <input type="email" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= old('email') ?>">
                        <span class="invalid-feedback"><?= $validation->getError('email') ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_telp" class="col-lg-4 col-form-label">No HP</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control <?= $validation->hasError('no_telp') ? 'is-invalid' : '' ?>" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>">
                        <span class="invalid-feedback"><?= $validation->getError('no_telp') ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kota" class="col-lg-4 col-form-label">Kota</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control <?= $validation->hasError('kota') ? 'is-invalid' : '' ?>" id="kota" name="kota" value="<?= old('kota') ?>">
                        <span class="invalid-feedback"><?= $validation->getError('kota') ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-lg-4 col-form-label">Alamat</label>
                    <div class="col-lg-8">
                        <textarea class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : '' ?>" id="alamat" name="alamat" rows="4"><?= old('alamat') ?></textarea>
                        <span class="invalid-feedback"><?= $validation->getError('alamat') ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-md-5">
                <div class="form-group">
                    <button type="submit" id="add" class="btn btn-success"><i class="fa fa-plus"></i> Tambahkan</button>
                    <a href="" id="back" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                </div>
            </div>
        </div>
    </form>

</section>
<?= $this->endSection() ?>