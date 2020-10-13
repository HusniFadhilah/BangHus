<?= $this->include('templates/admin/header') ?>

<?= $this->include('templates/admin/sidebar') ?>

<?= $this->include('templates/admin/topbar') ?>

<?= $this->include('templates/admin/titlepage') ?>

<!-- Isi Konten -->
<?= $this->renderSection('contentadmin') ?>
<!-- Akhir dari Isi Konten -->


<?= $this->include('templates/admin/footer') ?>