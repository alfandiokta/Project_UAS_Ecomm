<section class="products-grid pb-4 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-12">
        <div class="sidebar">

          <div class="sidebar-widget">
            <div class="widget-title">
              <h3>Kategori</h3>
            </div>

            <div class="widget-content widget-categories">
              <ul>
                <li><a href="<?= base_url('website/product') ?>">Semua</a></li>
                <?php
                foreach ($getkat as $kat) :
                ?>
                  <li><a href="<?= base_url('website/perkat/' . $kat['id']) ?>"><?= $kat['nama_kategori']; ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>

          </div>

        </div>
      </div>
      <div class="col-lg-9 col-md-8 col-12">
        <div class="row">
          <div class="col-12">
            <div class="products-top">
              <div class="products-top-inner">
                <div class="products-found">
                  <p><span>25</span> products found of <span>1.342</span></p>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($getprodall as $prodall) : ?>
            <div class="col-lg-4 col-md-6 col-12">
              <?= form_open('belanja/tambah');
              echo form_hidden('id', $prodall['id_produk']);
              echo form_hidden('qty', 1);
              echo form_hidden('price', $prodall['harga']);
              echo form_hidden('name', $prodall['nama_produk']);
              echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));


              ?>
              <div class="single-product">
                <div class="product-img">
                  <a href="<?= base_url('website/product_detail/' . $prodall['id_produk']);  ?>">
                    <img src="<?= base_url('assets/images/' . $prodall['gambar']) ?>" width="250px" height="250px" />
                  </a>
                </div>
                <div class="product-content">
                  <h3><?= $prodall['nama_produk'] ?></h3>
                  <div class="product-price">
                    <span>Rp.<?= number_format($prodall['harga'], 0); ?></span>
                  </div>
                </div>
                <div class="product-content">

                  <div class="product-price">
                    <a class="btn btn-secondary btn-sm" href="<?= base_url('website/product_detail/' . $prodall['id_produk']);  ?>">Detail</a>
                    <button class="btn btn-warning btn-sm mr-4" type="submit"><i class="fa fa-shopping-cart mr-1"></i>Add
                      to
                      chart</button>

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