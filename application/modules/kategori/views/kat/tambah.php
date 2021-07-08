<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <h1 class="h3 mb-2 text-gray-800">
    <a href="<?= base_url('kategori') ?>" class="btn btn-secondary btn-circle">
      <i class="fas fa-chevron-left"></i>
    </a>&nbsp; <?= $head; ?>



  </h1>



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body border-bottom-primary">
      <form method="POST" action="<?= base_url('kategori/tambah_kategori') ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama Kategori</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Kategori" name="nama_kategori">
          <?= form_error('nama_kategori', ' <small class="text-danger">', '</small>'); ?>
        </div>
        <button class="btn btn-primary" name="tambah_kategori" type="submit">
          <span class="icon text-secondary-50">
            <i class="fas fa-save"></i>
          </span>&nbsp;Simpan
        </button>

      </form>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->