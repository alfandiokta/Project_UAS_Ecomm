<section class="products-grid pb-4 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-12">
        <div class="sidebar">

          <div class="sidebar-widget">
           

            <div class="widget-content widget-categories">
              <ul>
                <li><a href="<?= base_url('website/daftar_mitra') ?>">Daftar Sebagai Mitra</a></li>
                
              </ul>
            </div>

          </div>

        </div>
      </div>
      <div class="col-lg-9 col-md-8 col-12">
        
        <div class="row">
          <?php foreach ($getmitra as $mitra) : ?>
            <div class="col-lg-4 col-md-6 col-12">
              <?= form_open('belanja/tambah');
              echo form_hidden('id', $mitra['id']);
              echo form_hidden('nama', $mitra['nama']);
              echo form_hidden('kota', $mitra['kota']);
              echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));


              ?>
              <div class="single-product">
                <div class="product-img">
                  <a href="<?= base_url('website/product_detail/' . $mitra['id']);  ?>">
                    <img src="<?= base_url('assets/images/' . $mitra['foto']) ?>" width="250px" height="250px" />
                  </a>
                </div>
                <div class="product-content">
                  <h3><?= $mitra['nama'] ?></h3>
                  <div class="product-price">
                    <b><?= $mitra['kota'] ?></b>,
                    <span><?= $mitra['provinsi'] ?></span>
                  </div>
                </div>
                <div class="product-content">

                  <div class="product-price">
                    <a class="btn btn-warning btn-sm" href="<?= base_url('website/product_detail/' . $mitra['id']);  ?>">Pesan Furniture</a>
                   

                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          <?php endforeach; ?>



        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fa fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>