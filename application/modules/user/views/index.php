<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?= $head; ?></h1>

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>




	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url('user/tambah_user') ?>" class="btn btn-primary btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah user</span>
			</a>
		</div>


		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Level</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;

						foreach ($getuser as $u) :
						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $u['nama']; ?></td>
								<td><?= $u['email']; ?></td>
								<td>

									<?php
									if ($u['role_id'] == 1) { ?>
										<span class="badge badge-primary">Admin</span>
									<?php

									} else if ($u['role_id'] == 2) { ?>
										<span class="badge badge-success">User</span>
									<?php
									}else { ?>
										<span class="badge badge-warning">Mitra</span>
									<?php
									}
									?>

								</td>
								<td>
									<a href="<?= base_url('user/edit_user' . $u['id']); ?>" class="btn btn-success btn-circle">
										<i class="fas fa-edit"></i>
									</a>
									<a href="<?= base_url('user/hapus_user/' . $u['id']); ?>" class="btn btn-danger btn-circle button-hapus">
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