<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <form method="POST" action="<?= base_url('barang/tambah_barang') ?>" enctype="multipart/form-data">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <div class="d-sm-flex">
        <a href="<?= base_url() ?>barang" class="btn btn-md btn-circle btn-secondary">
          <i class="fas fa-arrow-left"></i>
        </a>
        &nbsp;
        <h1 class="h2 mb-0 text-gray-800">Tambah Barang</h1>
      </div>
      <button class="btn btn-primary" name="tambah_barang" type="submit">
        <span class="icon text-secondary-50">
          <i class="fas fa-save"></i>
        </span>&nbsp;Simpan
      </button>

    </div>




    <!-- <div class="row">
    <div class="col-lg"> -->

    <div class="row">
      <div class="col-7">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3 bg-primary text-white">
            Form Tambah Barang
          </div>
          <div class="card-body border-bottom-primary">

            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Produk</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Barang" name="nama_produk">
              <?= form_error('nama_produk', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="">Kategori</label>
              <select class="form-control" id="selectkat" name="id">
                <option value="">--Pilih Kategori--</option>
                <?php foreach ($getkat as $k) : ?>
                  <option value="<?= $k['id']; ?>"><?= $k['nama_kategori']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Harga</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga Barang" name="harga">
              <?= form_error('harga', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea type="text" id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>




          </div>
        </div>

      </div>
      <div class="col-5">
        <div class="card shadow mb-4">
          <div class="card-header py-3  bg-primary text-white">
            Upload Gambar
          </div>

          <div class="card-body border-bottom-primary">

            <div class="form-group">

              <img src="<?= base_url('assets/images/checklist.png') ?>" alt="" width="200" id="blah">
              <input type="file" class="form-control" name="gambar" id="imgInp">
              <?= form_error('gambar', ' <small class="text-danger">', '</small>'); ?>
            </div>

            <!-- <button class="btn btn-primary" name="tambah_barang" type="submit">
              <span class="icon text-secondary-50">
                <i class="fas fa-save"></i>
              </span>&nbsp;Simpan
            </button> -->



          </div>
        </div>

      </div>
    </div>

    <!-- </div>
  </div> -->

  </form>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
  CKEDITOR.replace('deskripsi');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });
</script>