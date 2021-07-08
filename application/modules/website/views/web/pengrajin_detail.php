
<section class="products-grids trending pb-4 mt-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Detail Produk</h2>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-xl-4 col-lg-4 col-md-4 col-12">
        <div class="single-product">
          <div class="product-img">
            <a href="product-detail.html">
              <img src="<?= base_url('assets/images/' . $getmitra['foto']); ?>" class="img-fluid" />
            </a>
          </div>

        </div>
      </div>
      <div class="col-xl-8 col-lg-5 col-md-4 col-12">
        <div class="single-product">
          <div class="product-content ml-2">
            <h2 style="font-weight: 500;"><?= $getprodid['nama_produk']; ?></h2>
            <div class="product-price">
              <span>Harga</span>
              <h3>Rp <?= number_format($getprodid['harga'], 0); ?></h3>
            </div>
          </div>
          <div class="product-content">
            <?= form_open('belanja/tambah');
            echo form_hidden('id', $getprodid['id_produk']);
            echo form_hidden('price', $getprodid['harga']);
            echo form_hidden('name', $getprodid['nama_produk']);
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
            ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="ml-2">Jumlah Pesan</span>
                  <div class="quantity ml-2">
                    <input type="number" name="qty" class="form-control form-control-alternative" id="exampleFormControlInput1" min="1" max="9" step="1" value="1">
                  </div>

                </div>
              </div>
            </div>
            <div class="product-content">
              <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-shopping-cart"></i>Add to
                chart</button>
              <!-- <button class="btn btn-success btn-lg mr-3">Buy</button> -->
            </div>
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="deskripsi">
  <div class="container">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Deskripsi</h6>
      </div>
      <div class="card-body">
        <?= $getprodid['deskripsi']; ?>
      </div>
    </div>
  </div>
</section>