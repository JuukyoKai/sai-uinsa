<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					<h3>Daftar Kelas</h3>
						<a href="<?php echo site_url('admin/sakelas/add_kelas') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr style="background-color:#015c19; color:white">
										<th>Nama Kelas</th>
										<th>Jadwal</th>
										<th>Ruang</th>
										<th>Dosen Mentor</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($sakelas as $kelas): ?>
									<tr>
										<td width="150">
											<?php echo $kelas->nama_kelas ?>
										</td>
										<td>
											<?php echo $kelas->jadwal ?>
										</td>
										<td>
											<?php echo $kelas->ruang ?>
										</td>
										<td>
											<?php echo $kelas->name ?>
										</td>

										<td width="250">
											<a onclick="deleteConfirm('<?php echo site_url('admin/sakelas/delete/'.$kelas->id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
