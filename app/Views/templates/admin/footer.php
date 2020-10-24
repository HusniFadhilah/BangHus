</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy;<script>
          document.write(new Date().getFullYear());
        </script> | Husni Fadhilah Dhiya Ul Haq</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-success" href="/auth/logout">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/assets/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

<!-- Page level plugins -->

<script src="/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- PACE -->
<script src="/assets/plugin/pace/pace.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

<!-- SweetAlert -->
<script src="/assets/js/sweetalert2.all.min.js"></script>

<!-- panggil adapter jquery ckeditor -->
<script src="/assets/vendor/ckeditor4/ckeditor.js" type="text/javascript"></script>
<script src="/assets/vendor/ckeditor4/adapters/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ajaxStart(function() {
    Pace.restart();
  });
  $(document).ready(function() {
    $('#post').DataTable({});
    $('#penulis').DataTable({});
    $('#texteditor').ckeditor();
  })
</script>
<script type="text/javascript">
  const textflashData = $('.flash-data').data('text');
  const titleflashData = $('.flash-data').data('title');
  const iconflashData = $('.flash-data').data('icon');

  if (textflashData && titleflashData && iconflashData) {
    Swal.fire({
      title: titleflashData,
      text: textflashData,
      icon: iconflashData
    });
  }

  $('.tombol-hapus').on('click', function(e) {
    e.preventDefault();
    const textflashData = $(this).data('text');
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: 'Data ' + textflashData + ' ini akan dihapus',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus data!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    });
  });
</script>

</body>

</html>