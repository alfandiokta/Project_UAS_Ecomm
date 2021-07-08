<section class="breadcrumb-section pb-3 pt-3">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Carts</li>
    </ol>
  </div>
</section>

<section class="products-grids trending pb-4 mt-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Charts</h2>
        </div>
      </div>
    </div>
    <?php echo form_open('belanja/update'); ?>
    <div class="row mt-4">

      <div class="col-xl-8 col-lg-5 col-md-4 col-12 mt-2">
        <div class="single-product">
          <div class="product-content">
            <h4 style="font-weight: 500;">Shopping Cart</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <!-- <th>QTY</th>
                  <th>Product</th>
                  <th style="text-align:right">Harga</th>
                  <th style="text-align:right">Sub-Total</th> -->
                    <th scope="col" colspan="2">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $i = 1; ?>

                  <?php foreach ($this->cart->contents() as $items) :
                    $p = $this->Web_model->detail_prod($items['id']); ?>



                    <tr>
                      <td colspan="2"> <img src="<?= base_url('assets/images/' . $p['gambar']); ?>" width="40px" height="40px"> <span class="ml-2"> <?php echo $items['name']; ?></span>
                      <td>
                        <div class="quantity ml-2">
                          <?php
                          echo form_input(array(
                            'name' => $i . '[qty]', 'value' => $items['qty'],
                            'min' => '1',
                            'maxlength' => '3',
                            'size' => '5',
                            'type' => 'number',
                            'class' => 'form-control'
                          )); ?>
                        </div>
                      </td>



                      </td>
                      <td>Rp.<?php echo number_format($items['price'], 0); ?></td>
                      <td>Rp.<?php echo number_format($items['subtotal'], 0); ?></td>
                      <td>
                        <a href="<?= base_url('belanja/hapus_belanja/' . $items['rowid']); ?>" rel="tooltip" class="btn btn-danger btn-icon btn-sm btn-simple" data-original-title="" title="">
                          <i class="fa fa-trash pt-1"></i>
                      </td>
                    </tr>

                    <?php $i++; ?>

                  <?php endforeach; ?>

                  <!-- <tr>
                  <td colspan="2"> </td>
                  <td class="right"><strong>Total</strong></td>
                </tr> -->
                </tbody>
              </table>
              <div class="justify-content-end mt-2" style="float: left;">
                <button type="submit" rel="tooltip" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit mr-1 ml-auto"></i>Update Chart</button>
              </div>
              <div class="justify-content-end mt-2 ml-2" style="float: left;">
                <a href="<?= base_url('belanja/clear') ?>" rel="tooltip" class="btn btn-outline-success btn-sm"><i class="fa fa-refresh mr-1 ml-auto"></i>Clear Chart</a>
              </div>



            </div>

          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-4 col-12 mt-2">
        <div class="single-product">

          <div class="product-content">
            <h4 style="font-weight: 500;">Cart Total</h4>
            <div class="row">
              <div class="col-sm-7">
                Order Sub total
              </div>
              <div class="col-sm-5">
                Rp.<?php echo number_format($this->cart->total(), 0); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                Delivery
              </div>
              <div class="col-sm-5">
                0
              </div>
            </div>
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
          <!-- <div class="justify-content-end mt-2" style="float: left;">
            <button type="button" rel="tooltip" class="btn btn-outline-primary btn-sm"><i class="fa fa-chevron-left mr-1 ml-auto"></i>Continue
              to shopping</button>
          </div> -->
          <div class="justify-content-end mt-4" style="float: right;">
            <a href="<?= base_url('website/checkout') ?>" rel="tooltip" class="btn btn-default ">Process Checkout<i class="fa fa-chevron-right ml-1 "></i></a>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>


  </div>
</section>