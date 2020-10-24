<!-- Bootstrap core JavaScript-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- SweetAlert -->
<script src="/assets/js/sweetalert2.all.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

<script type="text/javascript">
  document.write("</bo" + "dy>" + "</ht" + "ml>");
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
</script>
<!-- </body></html> -->
</Body>

</html>