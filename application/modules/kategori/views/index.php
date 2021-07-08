<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $head; ?></h1>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>




  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?= base_url('kategori/tambah_kategori') ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Kategori</span>
      </a>
    </div>


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;

            foreach ($kat as $k) :
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $k['nama_kategori']; ?></td>
                <td>
                  <a href="<?= base_url('kategori/edit_kategori/' . $k['id']); ?>" class="btn btn-success btn-circle">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="<?= base_url('kategori/hapus_kategori/' . $k['id']); ?>" class="btn btn-danger btn-circle button-hapus">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->