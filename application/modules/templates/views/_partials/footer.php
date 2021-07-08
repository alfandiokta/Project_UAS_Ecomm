<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2020</span>
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
        <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih Logout untuk melajutkan</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/sbadmin/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/sbadmin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/sbadmin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/sbadmin/') ?>js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/sbadmin/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/sbadmin/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/sbadmin/') ?>js/demo/datatables-demo.js"></script>
<script src="<?= base_url('assets/sweetalert2/') ?>sweetalert2.min.js"></script>
<script>
  var $flashData = $('.flash-data').data('flashdata');
  if ($flashData) {
    Swal.fire({
      icon: 'success',
      title: 'Sukses',
      text: 'Berhasil ' + $flashData,
    })
  }

  // confirm hapus
  $('.button-hapus').on('click', function(e) {
    var link = $(this).attr('href');
    e.preventDefault();
    Swal.fire({
      title: 'Apakah Yakin ingin dihapus?',
      text: "Data akan dihapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, hapus!'
    }).then((result) => {
      if (result.value) {
        // Swal.fire(
        //   'Deleted!',
        //   'Your file has been deleted.',
        //   'success'
        // )
        document.location.href = link;
      }
    })

  })
</script>


</body>

</html>