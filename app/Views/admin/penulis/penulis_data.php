<?= $this->extend('templates/admin/template') ?>

<?= $this->section('contentadmin') ?>
<div class="row">
    <div class="col-lg">
        <a href="<?= site_url('penulis/add') ?>" class="btn btn-primary mb-3"><i class="fa fa-plus mr-2"></i>Tambah Penulis</a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="penulis">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($penulis as $p) : ?>
                                <tr>
                                    <td scope="row"><?= $i++ ?></td>
                                    <td><?= $p["nama"] ?></td>
                                    <td><?= $p["email"] ?></td>
                                    <td><?= $p["no_telp"] ?></td>
                                    <td><?= $p["kota"] ?></td>
                                    <td><?= $p["alamat"] ?></td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm mt-1" title="Edit galeri"><i class="fa fa-edit"></i></a>
                                        <a href="/penulis/delete/<?= $p["idpenulis"] ?>" class="btn btn-danger btn-sm mt-1 tombol-hapus" data-text="<?= $title ?>" title="Hapus penulis"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>