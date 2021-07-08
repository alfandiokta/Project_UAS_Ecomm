<section class="mobile-apps pt-5 pb-3 border-top">
  <div class="container">
    <div class="row">
      
    </div> <!-- row/ -->
  </div><!-- container // -->
</section>
<footer class="footer bg-dark">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer about">
            <div class="logo-footer">
             <img src="<?= base_url('assets/images/logo.png') ?>" class="logo" style="width:250px;height:auto">
            </div>
            <p class="text"> Pemesanan furniture custom atau sesuai keinginan sendiri dengan
            pengrajin sebagai mitra, Pemesan dapat melakukan pemesanan kepada pihak
            pengrajin dimanapun dan kapapun</p>
            <p class="call">Ada pertanyaan? Telpon Sekarang 24/7<span><a href="tel:123456789">+62 812-2801-2165</a></span></p>
          </div>
          <!-- End Single Widget -->
        </div>
        <div class="col-lg-2 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer links">
            <h4>PRODUK</h4>
            <ul>
                 <?php
                foreach ($getkat as $kat) :
                ?>
                  <li><a href="<?= base_url('website/perkat/' . $kat['id']) ?>"><?= $kat['nama_kategori']; ?></a></li>
                <?php endforeach; ?>
            </ul>
          </div>
          <!-- End Single Widget -->
        </div>
        <div class="col-lg-2 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer links">
            <h4>LAYANAN</h4>
            <ul>
              <li><a href="<?= base_url('website/pengrajin') ?>">Pengrajin</a></li>
              
            </ul>
          </div>
          <!-- End Single Widget -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer social">
            <h4>TEMUKAN KAMI</h4>
            <!-- Single Widget -->
            <div class="contact">
              <ul>
                <li>Alamat : Jl.Pucang Pucing 69/B</li>
                <li>Email: bangkuku@gmail.com</li>
              </ul>
            </div>
            <!-- End Single Widget -->
            <ul>
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter"></i></a></li>
              <li><a href="#"><i class="ti-flickr"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
          <!-- End Single Widget -->
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="copyright-inner border-top">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="left">
              <p>Copyright © 2021 <a href="http://indokoding.net" target="_blank">Bangkuku</a> -
                All Rights Reserved.</p>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Core -->
<script src="<?= base_url('assets/web/') ?>js/core/jquery.min.js"></script>
<script src="<?= base_url('assets/web/') ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/web/') ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/web/') ?>js/core/jquery-ui.min.js"></script>

<!-- Optional plugins -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Argon JS -->
<script src="<?= base_url('assets/web/') ?>js/argon-design-system.js"></script>

<!-- Main JS-->
<script src="<?= base_url('assets/web/') ?>js/main.js"></script>

<!-- Custom scripts for all pages-->
<!-- <script src="assets/sb-admin/js/sb-admin-2.min.js"></script> -->

<!-- Page level plugins -->
<!-- <script src="assets/sb-admin/vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="assets/sb-admin/js/demo/chart-area-demo.js"></script>
    <script src="assts/sb-admin/js/demo/chart-pie-demo.js"></script> -->
</body>
<script>
  jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
  jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.quantity-up'),
      btnDown = spinner.find('.quantity-down'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });
</script>
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

</html>