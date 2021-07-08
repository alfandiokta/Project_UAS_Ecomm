

<section class="products-grids trending pb-4 mt-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Checkout</h2>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-xl-8 col-lg-5 col-md-4 col-12 mt-2">
        <div class="single-product">
          <div class="product-content">
            <h4 style="font-weight: 500;">Detail Pemesanan</h4>
            <form method="POST" action="<?= base_url('website/proses_order') ?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Your Fullname" name="nama">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" placeholder="name@example.com" class="form-control form-control-alternative" name="email" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor Telepon</label>
                    <input type="text" placeholder="Your Phone Number" class="form-control form-control-alternative" name="telp" />
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" placeholder="Your Address" class="form-control form-control-alternative" name="alamat" />
                  </div>
                </div>

              </div>
              <button type="submit" rel="tooltip" class="btn btn-primary"><i class="fa fa-shopping-bag mr-1 ml-auto"></i>Place Order</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-4 col-12 mt-2">
        <div class="single-product">

          <div class="product-content">
            <h4 style="font-weight: 500;">Pesanan Anda</h4>
            <?php foreach ($this->cart->contents() as $items) : ?>

              <div class="row">
                <div class="col-sm-7">
                  <?php echo $items['name']; ?>
                </div>
                <div class="col-sm-5">
                  Rp.<?php echo number_format($items['subtotal'], 0); ?>
                </div>
              </div>
            <?php endforeach; ?>
            <hr>
            <div class="row">
              <div class="col-sm-7">
                <h5>Total</h5>
              </div>
              <div class="col-sm-5">
                Rp.<?php echo number_format($this->cart->total(), 0); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>