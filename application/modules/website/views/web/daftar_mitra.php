

<section class="products-grids trending pb-4 mt-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Daftar Mitra Pengrajin</h2>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-xl-8 col-lg-5 col-md-4 col-12 mt-2">
        <div class="single-product">
          <div class="product-content">
            <h4 style="font-weight: 500;">Isi Data Diri</h4>
            <form method="POST" action="<?= base_url('website/daftar_mitra') ?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Nama Lengkap"  name="nama" value="<?= $user['nama']; ?>"/>
                    <?= form_error('nama', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" placeholder="nama@contoh.com" class="form-control form-control-alternative" name="email" value="<?= $user['email']; ?>"/>
                    <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor Telepon</label>
                    <input type="text" placeholder="+62 8xx xxxx xxxx" class="form-control form-control-alternative" name="telp" />
                    <?= form_error('telp', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Provinsi</label>
                    <input type="text" placeholder="Provinsi" class="form-control form-control-alternative" name="provinsi" />
                    <?= form_error('provinsi', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Kota</label>
                    <input type="text" placeholder="Kota" class="form-control form-control-alternative" name="kota" />
                    <?= form_error('kota', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" placeholder="Alamat Lengkap" class="form-control form-control-alternative" name="alamat" />
                    <?= form_error('alamat', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" placeholder="Password" class="form-control form-control-alternative" name="password" value="<?= $user['email']; ?>"/>
                  </div>
                </div>

              </div>
              <button type="submit" rel="tooltip" class="btn btn-warning"></i>Daftar</button>
           
          </div>
        </div>
      </div>
            <div class="col-xl-4 col-lg-6 col-md-4 col-12 mt-2">
              <div class="single-product">

                <div class="product-content">
                  <h4 style="font-weight: 500;">Foto Profil</h4>
                  <div class="form-group">
                  <input type="file" class="form-control" name="foto" id="imgInp">
                  <?= form_error('foto', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="product-content">
                  <h4 style="font-weight: 500;">Foto Identitas</h4>
                  <div class="form-group">
                  <input type="file" class="form-control" name="foto_idn" id="imgInp">
                  <?= form_error('foto_idn', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
            </div>
      </form>
    </div>
  </div>
</section>