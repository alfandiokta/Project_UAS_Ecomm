<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $head; ?></h1>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>




  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?= base_url('barang/tambah_barang') ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Produk</span>
      </a>
    </div>


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;

            foreach ($brg as $b) :
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $b['nama_produk']; ?></td>
                <td>Rp. <?= number_format($b['harga'], 0) ?></td>
                <td><img src="<?= base_url('assets/images/' . $b['gambar']); ?>" width="60px"></td>

                <td>
                  <a href="<?= base_url('barang/edit_barang/' . $b['id_produk']); ?>" class="btn btn-success btn-circle">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="<?= base_url('barang/hapus_barang/' . $b['id_produk']); ?>" class="btn btn-danger btn-circle button-hapus">
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