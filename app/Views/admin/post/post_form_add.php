<?= $this->extend('templates/admin/template') ?>

<?= $this->section('contentadmin') ?>
<section class="content">
    <form action="/post/save" method="post">
        <?= csrf_field() ?>
        <div class="card shadow">
            <div class="card-body">
                <div class="form-group row">
                    <label for="isipost" class="col-lg-4 col-form-label">Isi Post</label>
                    <div class="col-lg-8">
                        <textarea class="form-control" id="texteditor" name="isipost" rows="4"></textarea>
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