<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <form method="POST" action="<?= base_url('user/tambah_user') ?>" enctype="multipart/form-data">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <div class="d-sm-flex">
        <a href="<?= base_url() ?>user" class="btn btn-md btn-circle btn-secondary">
          <i class="fas fa-arrow-left"></i>
        </a>
        &nbsp;
        <h1 class="h2 mb-0 text-gray-800">Tambah Pengguna</h1>
      </div>
      <button class="btn btn-primary" name="tambah_user" type="submit">
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
            Form Tambah Pengguna
          </div>
          <div class="card-body border-bottom-primary">

            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pengguna" name="nama">
              <?= form_error('nama', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="">Level</label>
              <select class="form-control" id="selectkat" name="role_id">
                <option value="">--Pilih Level--</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Mitra</option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email Pengguna" name="email">
              <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password Pengguna" name="password">
              <?= form_error('password', ' <small class="text-danger">', '</small>'); ?>
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
              <input type="file" class="form-control" name="img" id="imgInp">
              <?= form_error('img', ' <small class="text-danger">', '</small>'); ?>
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