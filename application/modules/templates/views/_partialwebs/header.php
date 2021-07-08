<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bangkuku</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="<?= base_url('assets/web/') ?>css/nucleo-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/web/') ?>css/font-awesome.css" rel="stylesheet">

  <!-- Jquery UI -->
  <link type="text/css" href="<?= base_url('assets/web/') ?>css/jquery-ui.css" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="<?= base_url('assets/web/') ?>css/argon-design-system.min.css" rel="stylesheet">

  <!-- Main CSS-->
  <link type="text/css" href="<?= base_url('assets/web/') ?>css/style.css" rel="stylesheet">

  <!-- Optional Plugins-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- Custom fonts for this template-->
  <!-- <link href="assets/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
  <header class="header clearfix">
    <div class="top-bar d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-6 text-left">
            <ul class="top-links contact-info">
              <li><i class="fa fa-envelope-o"></i> <a>officialbangkuku@gmail.com</a></li>
              <li><i class="fa fa-whatsapp"></i>+62 812-2801-2165</li>
            </ul>
          </div>
          <?php if (!$this->session->userdata('email')) { ?>
            <div class="col-6 text-right">
              <ul class="top-links account-links">
                <li><i class="fa fa-user"></i> <a href="<?= base_url('auth/reg') ?>">Register</a></li>
                <li> <a href="<?= base_url('auth') ?>">Login</a></li>
              </ul>
            </div>
          <?php } else { ?>
            <div class="col-6 text-right">
              <ul class="top-links account-links">
                <li><i class="fa fa-user-circle-o"></i> <a href="#"><?= $user['nama']; ?></a></li>
                <li> <a href="<?= base_url('auth/logout') ?>">Logout</a></li>
              </ul>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="header-main border-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-6">
            <a class="navbar-brand mr-lg-5" href="./index.html">
              <!-- <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">IndoMarket</span> -->
              <img src="<?= base_url('assets/images/logo.png') ?>" class="logo" style="width:250px;height:auto">
            </a>
          </div>
          <div class="col-lg-8 col-12 col-sm-12">
            <form action="#" class="search">
              <div class="input-group w-100">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-warning" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg col-sm-6 col-12">
            <div class="right-icons pull-right d-none d-sm-block">
              <!-- <div class="single-icon wishlist">
                <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                <span class="badge badge-default">5</span>
              </div> -->
              <div class="single-icon shopping-cart">
                <?php $keranjang = $this->cart->contents();
                $jml_item = 0;
                foreach ($keranjang as  $row) {
                  $jml_item = $jml_item + $row['qty'];
                }
                ?>
                <div class="dropup">

                  <div href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a href="#"><i class="fa fa-shopping-cart fa-2x"></i></a>
                    <span class="badge badge-default"><?= $jml_item ?></span>
                  </div>

                  <div class="dropdown-menu">
                    <?php if (empty($keranjang)) { ?>
                      <a href="javascript:;" class="dropdown-item d-flex align-items-center">

                        <div class="row justify-content-center">
                          <div class="col text-center">
                            <img src="<?= base_url('assets/images/box.png') ?>" width="20%">
                            <p>Belum ada Product</p>
                          </div>
                        </div>


                      </a>
                      <?php } else {

                      foreach ($keranjang as $row) {
                        $p = $this->Web_model->detail_prod($row['id']);
                      ?>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center">
                          <div class="dropdown-list-image mr-3">
                            <img src="<?= base_url('assets/images/' . $p['gambar']) ?>" width="40px">
                          </div>

                          <div class="font-weight-bold">
                            <div class="text-truncate" style="font-size: small;"><?= $row['name']; ?></div>
                            <div class="small text-gray-500"><?= $row['qty']; ?> x Rp. <?= number_format($row['price'], 0); ?></div>
                            <div class="small text-gray-500">Rp. <?php echo $this->cart->format_number($row['subtotal']); ?></div>
                          </div>
                        </a>


                      <?php } ?>
                      <div class="dropdown-divider"></div>
                      <a href="javascript:;" class="dropdown-item align-items-center">
                        <i class="fa fa-plus-square"></i>
                        <span>Total :Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></span>
                      </a>
                      <?php if (!$this->session->userdata('email')) { ?>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth') ?>" class="dropdown-item align-items-center">
                          <i class="ni ni-basket"></i>
                          <span>View Chart</span>
                        </a>
                      <?php } else { ?>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('website/belanja') ?>" class="dropdown-item align-items-center">
                          <i class="ni ni-basket"></i>
                          <span>View Chart</span>
                        </a>
                      <?php } ?>

                    <?php  } ?>

                  </div>


                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?= base_url('website') ?>">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('website/pengrajin') ?>">PENGRAJIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('website/product') ?>">PRODUK</a>
            </li>
          </ul>
        </div> <!-- collapse .// -->
      </div> <!-- container .// -->
    </nav>
  </header>